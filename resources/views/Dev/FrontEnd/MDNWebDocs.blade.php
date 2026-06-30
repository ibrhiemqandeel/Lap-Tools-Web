<x-tools-com :toolsTitle="'MDN Web Docs - Lap Tools Web'" toolsTitle="MDN Web Docs" pageTitle="MDN Web Docs" imageUrl="{{ asset('images/Dev/FrontEnd/MDNWebDocsLogo.webp') }}"
    toolsSubtitle="MDN Web Docs is one of the most trusted learning platforms for web developers. Created and maintained by Mozilla and the developer community, it provides detailed documentation, tutorials, and references for web technologies like HTML, CSS, JavaScript, APIs, and more. Developers use it to learn modern web development, understand browser compatibility, explore coding examples, and improve their frontend and backend skills.

" videoUrl="{{ url('https://www.youtube.com/embed/y1BM17SsCz0?si=GkawWAtDXd3toDIc') }}" websiteUrl="{{ url('https://developer.mozilla.org') }}" androidUrl="" iosUrl="">

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
