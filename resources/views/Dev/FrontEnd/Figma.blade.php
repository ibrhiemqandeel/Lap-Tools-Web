<x-tools-com :toolsTitle="'Figma - Lap Tools Web'" toolsTitle="Figma" pageTitle="Figma" imageUrl="{{ asset('images/Dev/FrontEnd/FigmaLogo.jpg') }}"
    toolsSubtitle="Figma is a collaborative interface design tool that allows teams to create, prototype, and collaborate on user interface designs in real-time. It provides a comprehensive set of features for designing websites, mobile apps, and other digital products.

After customizing an animation, you can instantly generate and copy the CSS code to use in your own website or project. It is widely used by frontend developers to save time and quickly add smooth animations without writing everything from scratch.

" videoUrl="{{ url('https://www.youtube.com/embed/jQ1sfKIl50E?si=dkBbmS4CrKQQZQLr') }}" websiteUrl="{{ url('https://www.figma.com') }}" androidUrl="{{ url('https://play.google.com/store/apps/details?id=com.figma.mirror') }}" iosUrl="{{ url('https://apps.apple.com/us/app/figma/id1152747299') }}">

    <!-- القالب الثابت -->
    <div id="content-page">
        <h1 id="title"></h1>
        <!-- <a id="main-link" href="#">رابط المتغير</a>
    </div> -->
        <style>
            .main-image {
                display: block;
                margin: 20px auto;
            }
        </style>
        <script>
            // function changeContent(data) {
            //     document.getElementById('title').innerText = data.title;
            //     document.getElementById('main-image').src = data.imageUrl;
            //     document.getElementById('main-link').href = data.linkUrl;

            //     // لتغيير الفيديو، نحتاج لتحديث المصدر ثم إعادة تحميله
            //     let video = document.getElementById('main-video');
            //     document.getElementById('video-src').src = data.videoUrl;
            //     video.load();
            // }

            // مثال على بيانات متغيرة قد تأتي من قاعدة بيانات
            // const movieContent = {
            //     title: "مرحباً بك في عالم البرمجة",
            //     imageUrl: "coding.png",
            //     videoUrl: "tutorial.mp4",
            //     linkUrl: "https://laptools.com"
            // };

            // تشغيل الوظيفة لتغيير القيم
            // changeContent(movieContent);
        </script>
</x-tools-com>
