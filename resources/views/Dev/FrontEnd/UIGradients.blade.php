<x-tools-com :toolsTitle="'UIGradients - Lap Tools Web'" toolsTitle="UIGradients" pageTitle="UIGradients" imageUrl="{{ asset('images/Dev/FrontEnd/UIGradientsLogo.png') }}"
    toolsSubtitle="UIGradients is a website that provides a large collection of ready-made color gradients for designers and developers.

It allows you to browse beautiful two-color gradients, preview them instantly in full screen, and copy the CSS code or HEX colors to use directly in websites, apps, or UI projects.

Developers use it to quickly get modern background colors for buttons, cards, landing pages, and UI designs without having to create gradients manually.

" videoUrl="{{ url('https://www.youtube.com/embed/b67K3RL-NOw?si=i4pZjDLgI79-xn5c') }}" websiteUrl="{{ url('https://uigradients.com') }}" androidUrl="" iosUrl="">

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
