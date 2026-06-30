<x-tools-com :toolsTitle="'CollectUI - Lap Tools Web'" toolsTitle="CollectUI" pageTitle="CollectUI" imageUrl="{{ asset('images/Dev/FrontEnd/CollectUILogo.jpg') }}"
    toolsSubtitle="CollectUI Collect UI is a UI/UX inspiration platform that showcases a huge collection of modern web and mobile interface designs. It features hand-picked UI examples such as landing pages, dashboards, login screens, mobile app layouts, forms, icons, and animations collected from designers around the world. Developers and designers use the platform to explore design ideas, improve user interface creativity, and find inspiration for frontend and product design projects.

" videoUrl="{{ url('https://www.youtube.com/embed/33CbUHcjzE0?si=VXPU19ktYw8mGOJi') }}" websiteUrl="{{ url('https://collectui.com') }}" androidUrl="" iosUrl="">

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
