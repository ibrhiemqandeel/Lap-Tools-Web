<x-tools-com :toolsTitle="'caniuse - Lap Tools Web'" toolsTitle="Can I Use" pageTitle="Can I Use" imageUrl="{{ asset('images/Dev/FrontEnd/caniuseLogo.jpg') }}"
    toolsSubtitle="Can I Use is a popular web tool used by developers to check browser support for modern web technologies such as CSS, JavaScript, and HTML features. It allows users to search for specific features and see compatibility information across browsers like Chrome, Firefox, Safari, and Edge, including supported versions and usage statistics. Developers use it to ensure their websites work properly across different browsers and devices.

" videoUrl="{{ url('https://www.youtube.com/embed/WM_cKHH7bZ0?si=UOdVwBbF3cO0m_5f') }}" websiteUrl="{{ url('https://caniuse.com') }}" androidUrl="" iosUrl="">

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
