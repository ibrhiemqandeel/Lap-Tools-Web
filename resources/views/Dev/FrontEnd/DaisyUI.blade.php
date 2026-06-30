<x-tools-com :toolsTitle="'DaisyUI - Lap Tools Web'" toolsTitle="DaisyUI" pageTitle="DaisyUI" imageUrl="{{ asset('images/Dev/FrontEnd/DaisyUILogo.png') }}"
    toolsSubtitle="DaisyUI is a free and open-source UI component library for Tailwind CSS. It provides a collection of pre-designed components like buttons, cards, modals, and forms that can be easily customized and integrated into your projects.

After customizing an animation, you can instantly generate and copy the CSS code to use in your own website or project. It is widely used by frontend developers to save time and quickly add smooth animations without writing everything from scratch.

" videoUrl="{{ url('https://www.youtube.com/embed/PctfrkRo8Fg?si=hcmpejtVrqOdLM6q') }}" websiteUrl="{{ url('https://daisyui.com') }}" androidUrl="" iosUrl="">

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
