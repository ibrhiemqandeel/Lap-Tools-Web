<x-tools-com :toolsTitle="'GitHub - Lap Tools Web'" toolsTitle="GitHub" pageTitle="GitHub" imageUrl="{{ asset('images/Dev/FrontEnd/GitHubLogo.jpg') }}"
    toolsSubtitle="GitHub is the world’s largest platform for developers to host, manage, and collaborate on software projects using Git version control. It allows programmers to store code online, track changes, work with teams, contribute to open-source projects, and share applications with the developer community. GitHub also provides tools for issue tracking, pull requests, project management, and continuous integration.

" videoUrl="{{ url('https://www.youtube.com/embed/a9u2yZvsqHA?si=Vr4dyUO5DZlw0z2E') }}" websiteUrl="{{ url('https://github.com') }}" androidUrl="{{ url('https://play.google.com/store/apps/details?id=com.github.android&utm_source=github') }}" iosUrl="{{ url('https://apps.apple.com/app/github/id1477376905') }}">

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
