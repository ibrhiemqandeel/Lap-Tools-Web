<x-tools-com :toolsTitle="'dbdiagram.io - Lap Tools Web'" toolsTitle="dbdiagram.io" pageTitle="dbdiagram.io" imageUrl="{{ asset('images/Dev/BackEnd/dbdiagramIoLogo.png') }}"
    toolsSubtitle="dbdiagram.io is a free online database design tool that allows users to create Entity-Relationship (ER) diagrams. It provides a simple and intuitive interface for designing professional-looking database schemas without any programming knowledge.

" videoUrl="{{ url('https://www.youtube.com/embed/chrwT-qe_M8?si=VsBiLI41N50W03Gv') }}" websiteUrl="{{ url('https://dbdiagram.io') }}" androidUrl="" iosUrl="">

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
