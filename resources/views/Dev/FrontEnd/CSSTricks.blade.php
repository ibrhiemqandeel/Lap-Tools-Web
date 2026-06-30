<x-tools-com :toolsTitle="'CSSTricks - Lap Tools Web'" toolsTitle="CSSTricks" pageTitle="CSSTricks" imageUrl="{{ asset('images/Dev/FrontEnd/CSSTricksLogo.png') }}"
    toolsSubtitle="CSSTricks is a popular web development website that provides tutorials, guides, tips, and articles about CSS, HTML, JavaScript, and frontend development. It is widely used by web designers and developers to learn modern web design techniques, improve coding skills, explore UI/UX ideas, and stay updated with the latest trends in web technologies. The platform also includes code snippets, an extensive CSS Almanac, and practical examples for building responsive and interactive websites.

" videoUrl="{{ url('https://www.youtube.com/embed/lbqOCS9bMpk?si=Yl-qKgR90vzaeq6u') }}" websiteUrl="{{ url('https://css-tricks.com/') }}" androidUrl="" iosUrl="">

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
