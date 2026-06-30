<x-tools-com :toolsTitle="'One Page Love - Lap Tools Web'" toolsTitle="OnePageLove" pageTitle="OnePageLove" imageUrl="{{ asset('images/Dev/FrontEnd/OnePageLoveLogo.png') }}"
    toolsSubtitle="OnePageLove is a platform that provides beautiful one-page website templates for developers and designers. It offers a wide range of professionally designed templates that can be easily customized to fit your needs.

The platform allows users to create stunning single-page websites without any coding knowledge. It includes features like drag-and-drop functionality, responsive design, and seamless integration with various third-party services.

" videoUrl="{{ url('https://www.youtube.com/embed/ScFkQXwocak?si=bjEki8dfvqQ69no1') }}" websiteUrl="{{ url('https://onepagelove.com') }}" androidUrl="" iosUrl="">

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

