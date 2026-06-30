<x-tools-com :toolsTitle="'FontAwesome-Lap-Tools-Web'" toolsTitle="Font Awesome"  imageUrl="{{ asset('images/Dev/FrontEnd/FontAwesomeLogo.png') }}"
    toolsSubtitle="Font Awesome is a popular icon font and CSS toolkit. It provides a wide range of scalable vector icons that can be customized with CSS, making it easy to integrate into web projects.

FontAwesome includes over 1,000 icons across various categories, from social media logos to UI elements and application icons. Developers can easily customize the size, color, and other properties of the icons using CSS.

" videoUrl="{{ url('https://www.youtube.com/embed/mtA__aN2UJA?si=mE4C8cAQ0eVTw8jM') }}" websiteUrl="{{ url('https://fontawesome.com') }}" androidUrl="" iosUrl="">

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
