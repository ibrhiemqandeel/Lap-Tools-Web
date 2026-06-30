FROM php:8.2-fpm

# تثبيت الاعتماديات والنظام
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx

# تنظيف الكاش
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# تثبيت إضافات PHP اللّازمة لارافيل
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تحديد مجلد العمل
WORKDIR /var/www

# نسخ ملفات المشروع
COPY . /var/www

# تثبيت اعتمادات لارافيل بدون بيئة التطوير
RUN composer install --no-dev --optimize-autoloader

# إنشاء ملف قاعدة بيانات SQLite وتحديد الصلاحيات
RUN mkdir -p /var/www/database && \
    touch /var/www/database/database.sqlite && \
    chown -R www-data:www-data /var/www && \
    chmod -R 775 /var/www/storage /var/www/bootstrap/cache /var/www/database

# نسخ إعدادات Nginx (سنقوم بإنشائها في الخطوة التالية)
COPY nginx.conf /etc/nginx/sites-available/default

# البورت الافتراضي لـ Render
EXPOSE 80

# أمر التشغيل الذي يربط PHP بـ Nginx مباشرة لإنهاء الطلبات ومنع الـ Timeout
CMD php artisan migrate --force && service nginx start && php-fpm
