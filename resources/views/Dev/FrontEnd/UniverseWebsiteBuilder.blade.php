<x-tools-com :toolsTitle="'UniverseWebsiteBuilder - Lap Tools Web'" toolsTitle="UniverseWebsiteBuilder" pageTitle="UniverseWebsiteBuilder" imageUrl="{{ asset('images/Dev/FrontEnd/UniverseWebsiteBuilderLogo.jpg') }}"
    toolsSubtitle="UniverseWebsiteBuilder is an online tool that lets developers create, customize, and experiment with CSS animations easily. It provides a library of ready-made animations like fades, bounces, slides, rotations, and zoom effects, which you can tweak by changing settings such as duration, delay, easing, and direction.

After customizing an animation, you can instantly generate and copy the CSS code to use in your own website or project. It is widely used by frontend developers to save time and quickly add smooth animations without writing everything from scratch.

" videoUrl="{{ url('https://www.youtube.com/embed/U_Gq9ZM2drM?si=VPqT12WZeOjE1Zdh') }}" websiteUrl="{{ url('https://universeapp.com') }}" androidUrl="" iosUrl="{{ url('https://apps.apple.com/us/app/universe-website-builder/id1211437633') }}">

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
