<x-tools-com :toolsTitle="'W3Schools - Lap Tools Web'" toolsTitle="W3Schools" pageTitle="W3Schools" imageUrl="{{ asset('images/Dev/FrontEnd/W3SchoolsLogo.png') }}"
    toolsSubtitle="W3Schools is one of the most popular online learning platforms for web development and programming. It offers beginner-friendly tutorials, interactive examples, coding exercises, and references for technologies like HTML, CSS, JavaScript, Python, SQL, PHP, Bootstrap, and more. Developers and students use it to learn programming step by step, practice code directly in the browser, and improve their web development skills through simple and easy-to-understand lessons.

" videoUrl="{{ url('https://www.youtube.com/embed/tDcXo2LpXD0?si=l5LJKzHrEftpGv5U') }}" websiteUrl="{{ url('https://www.w3schools.com') }}" androidUrl="" iosUrl="">

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
