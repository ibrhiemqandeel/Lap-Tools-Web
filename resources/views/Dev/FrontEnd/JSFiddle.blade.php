<x-tools-com :toolsTitle="'JSFiddle - Lap Tools Web'" toolsTitle="JSFiddle" pageTitle="JSFiddle" imageUrl="{{ asset('images/Dev/FrontEnd/JSFiddleLogo.png') }}"
    toolsSubtitle="JSFiddle is an online community for testing and sharing HTML, CSS, and JavaScript code snippets. It allows developers to create, edit, and run code in real-time, making it easy to experiment with different approaches and collaborate with others.

" videoUrl="{{ url('https://www.youtube.com/embed/8wcBnd_nhRI?si=oY5twM4vqzXqlsTf') }}" websiteUrl="{{ url('https://jsfiddle.net') }}" androidUrl="" iosUrl="">

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
