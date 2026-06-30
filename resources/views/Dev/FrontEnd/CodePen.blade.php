<x-tools-com :toolsTitle="'CodePen - Lap Tools Web'" toolsTitle="CodePen" pageTitle="CodePen" imageUrl="{{ asset('images/Dev/FrontEnd/CodePenLogo.png') }}"
    toolsSubtitle="CodePen is an online community for testing and sharing HTML, CSS, and JavaScript code snippets. It allows developers to create, collaborate, and experiment with front-end code in a real-time environment.

Developers can use CodePen to build prototypes, test new features, and showcase their work. It also provides a vast library of user-generated pens that can be forked and modified to suit specific needs.

" videoUrl="{{ url('https://www.youtube.com/embed/vb9uYBtqmeM?si=6MkXplYlzrCzWiTf') }}" websiteUrl="{{ url('https://codepen.io') }}" androidUrl="" iosUrl="">

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
