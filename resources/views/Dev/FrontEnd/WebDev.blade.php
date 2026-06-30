<x-tools-com :toolsTitle="'WebDev- Lap Tools Web'" toolsTitle="WebDev" pageTitle="WebDev" imageUrl="{{ asset('images/Dev/FrontEnd/WebDevLogo.jpg') }}"
    toolsSubtitle="WebDev is a short term for Web Development, which is the process of building and maintaining websites and web applications. It includes frontend development (designing user interfaces with HTML, CSS, and JavaScript) and backend development (servers, databases, and application logic). Web development is used to create everything from simple websites to complex platforms like social media apps, online stores, and web services.

" videoUrl="{{ url('https://www.youtube.com/embed/GxmfcnU3feo?si=Qy4lL0S4jVDyHRlh') }}" websiteUrl="{{ url('https://web.dev') }}" androidUrl="" iosUrl="">

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
