FROM php:8.2-fpm

# تثبيت Nginx وباقي الإضافات اللازمة لـ Laravel و SQLite
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

# نسخ الـ Composer من الحاوية الرسمية
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تحديد مجلد العمل القياسي لسيرفر الويب
WORKDIR /var/www

# نسخ ملفات المشروع
COPY . /var/www

# إعداد متغيرات البيئة الأساسية - إجبار الـ Assets على الـ HTTPS والـ Debug مفعل
ENV APP_ENV=production
ENV APP_DEBUG=true
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/var/www/database/database.sqlite
ENV ASSET_URL=https://lap-tools-web.onrender.com

# تثبيت مكتبات Composer للـ Production
RUN composer install --no-dev --optimize-autoloader

# تهيئة مجلد قاعدة البيانات ومنح الصلاحيات الصحيحة لمستخدم السيرفر (www-data)
RUN mkdir -p /var/www/database && \
    touch /var/www/database/database.sqlite && \
    chown -R www-data:www-data /var/www && \
    chmod -R 777 /var/www/storage /var/www/bootstrap/cache /var/www/database

# نسخ إعدادات Nginx الافتراضية للتشغيل إلى المسارين لضمان التفعيل الفوري
COPY nginx.conf /etc/nginx/sites-available/default
COPY nginx.conf /etc/nginx/sites-enabled/default

EXPOSE 80

# أمر الإقلاع لتنظيف الكاش، عمل الـ Migrations، وتشغيل السيرفر
CMD php artisan migrate --force && php artisan config:clear && php artisan cache:clear && service nginx start && php-fpm
