<x-tools-com :toolsTitle="'Vercel - Lap Tools Web'" toolsTitle="Vercel" pageTitle="Vercel" imageUrl="{{ asset('images/Dev/FrontEnd/VercelLogo.jpg') }}"
    toolsSubtitle="Vercel is a cloud platform for static sites and serverless functions. It provides a seamless deployment experience with features like automatic HTTPS, global CDN, and serverless functions.

After customizing an animation, you can instantly generate and copy the CSS code to use in your own website or project. It is widely used by frontend developers to save time and quickly add smooth animations without writing everything from scratch.

" videoUrl="{{ url('https://www.youtube.com/embed/sPmat30SE4k?si=zUMsAhOa72_NP1K-') }}" websiteUrl="{{ url('https://vercel.com/') }}" androidUrl="" iosUrl="">

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
