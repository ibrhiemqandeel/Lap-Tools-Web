<x-tools-com :toolsTitle="'freeCodeCamp - Lap Tools Web'" toolsTitle="freeCodeCamp" pageTitle="freeCodeCamp" imageUrl="{{ asset('images/Dev/FrontEnd/freeCodeCampLogo.jpg') }}"
    toolsSubtitle="is a free online learning platform for programming and web development. It offers interactive coding lessons, hands-on exercises, and real-world projects to help learners build skills in Front-End Development, Back-End Development, JavaScript, Python, and more. It also provides certifications that you can earn by completing structured learning paths and building projects.
    " videoUrl="{{ url('https://www.youtube.com/embed/YX17u97k1TU?si=oCaf8r4l9n3eGd5R') }}" websiteUrl="{{ url('https://animista.net') }}" androidUrl="{{ url('https://play.google.com/store/apps/details?id=org.freecodecamp&utm') }}" iosUrl="{{ url('https://apps.apple.com/app/freecodecamp/id6446908151') }}">

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
