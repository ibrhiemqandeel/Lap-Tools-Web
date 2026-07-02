<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $PageTitle ?? 'Lap Tools Web' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('images/lap-tools-web-fivelcon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- حاوية الشاشة الكاملة -->
    <div id="spinner" style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 99999;
">
        <lottie-player
            src="https://assets5.lottiefiles.com/packages/lf20_usmfx6bp.json"
            background="transparent"
            speed="1"
            style="width: 150px; height: 150px; filter: hue-rotate(30000deg) saturate(5);"
            loop
            autoplay>
        </lottie-player>
    </div>

    <button id="scrollTopBtn">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <header class="navBarPagOne">
        <div class="logoweb">
            <a href="{{ route('index') }}" class="logoLapToolsWeb">
                <img src="{{ asset('images/lap-tools-web-logo.png') }}" alt="Logo Lap Tools Web" class="logoLapToolsWebImg">
            </a>
        </div>

        <nav class="navBarPagOneLinks" id="navLinks">
            <a href="{{ route('index') }}">Home</a>
            <a href="{{ route('AboutUs') }}">About Us</a>
            <a href="{{ route('office') }}">office</a>
            <a href="{{ route('Developers') }}">Developers</a>
            <a href="{{ route('AnimationAnd3D') }}">Animation And 3D</a>
            <a href="{{ route('Editing') }}">Editing</a>
            <a href="{{ route('Design') }}">Design</a>
            <a href="{{ route('AIROOM') }}">AI ROOM</a>
            <a href="{{ route('contactUs') }}">Contact Us</a>
        </nav>

        <div class="searchContainer" style="position: relative;">
            <button class="SerchBtn" id="SerchBtnId">
                <i class="fa-solid fa-magnifying-glass" id="SerchIconId" onclick="search()"></i>
            </button>
            <input type="text" name="Search" class="SerchInput" placeholder="Search Here" id="searchInput" autocomplete="off">

            <!-- صندوق النتائج المنسدل -->
            <ul id="searchResults" class="searchResults"></ul>
        </div>
    </header>

    <main class="flex-grow-1 d-flex flex-column">
        {{ $slot }}

        <a href="#"
            id="backToTop"
            class="btn btn-secondary rounded-circle align-items-center justify-content-center position-fixed"
            style="
            width: 55px;
            height: 55px;
            bottom: 25px;
            right: 25px;
            z-index: 999;
            display: none;
        ">
            <i class="fa fa-arrow-up"></i>
        </a>
    </main>

    @if (request()->routeIs('contactUs'))

    @else
    <footer class="footerPart" id="footerPartId">
        <div class="ThnksPart" id="ThnksPartId">
            <h3 class="ThnksH3" id="ThnksH3Id">Thnks For Chose Us</h3>
        </div>
        <div class="contact">
            <h3 class="contactUsH3" id="contactUsH302Id" onclick="contactUs()" style="cursor: pointer;">CONTACt US</h3>
            <div class="ContactIcons">
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="https://t.me/lapToolsWeb" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <p>All Rights Reserved By <a href="{{ url('https://ibrhime-qndeel.is-pro.dev') }}" target="_blank" onclick="soon()">@Ibehim Qadeel </a> {{ date("Y") }}</p>
        </div>
    </footer>
    @endif

    <!-- ملف JS واحد فقط، تم حذف كل النسخ المكررة الـ inline -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- ============================================================= -->
    <!-- =======================  SEARCH BOX CSS  ===================== -->
    <!-- ============================================================= -->
    <style>
        .searchResults {
            position: absolute;
            top: 110%;
            left: 0;
            width: 100%;
            min-width: 220px;
            list-style: none;
            margin: 0;
            padding: 0;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            z-index: 200;
        }

        .searchResults li {
            padding: 10px 16px;
            color: #111;
            font-size: 0.95rem;
            cursor: pointer;
            transition: 0.2s ease;
            border-bottom: 1px solid #f1f1f1;
        }

        .searchResults li:last-child {
            border-bottom: none;
        }

        .searchResults li:hover {
            background-color: #e60000;
            color: #fff;
        }

        .searchResults li.no-result {
            cursor: default;
            color: #888;
        }

        .searchResults li.no-result:hover {
            background-color: #fff;
            color: #888;
        }

        /* العنصر المحدد عبر أسهم الكيبورد (مثل جوجل) */
        .searchResults li.active-item {
            background-color: #e60000;
            color: #fff;
        }
    </style>
    <script>
        // زر backToTop الإضافي (مرتبط بـ Bootstrap btn-secondary)
        const backToTop = document.getElementById("backToTop");
        if (backToTop) {
            window.addEventListener("scroll", function() {
                backToTop.style.display = window.scrollY > 0 ? "flex" : "none";
            });
        }

        // شاشة التحميل (spinner)
        window.onload = function() {
            const loader = document.getElementById("spinner");
            if (loader) {
                loader.style.transition = "opacity 0.5s ease";
                loader.style.opacity = "0";
                setTimeout(() => {
                    loader.style.display = "none";
                }, 500);
            }
        };

        /* -----------------------------------------------------------
        Mobile Hamburger Menu
            يتحكم بفتح وإغلاق نافبار الموبايل
        ------------------------------------------------------------ */
        const hamburger = document.getElementById("hamburger");
        const navLinks = document.getElementById("navLinks");

        if (hamburger && navLinks) {

            hamburger.addEventListener("click", function(e) {
                e.stopPropagation();
                navLinks.classList.toggle("show");
                hamburger.classList.toggle("active");
            });

            // إغلاق القائمة عند الضغط على أي رابط داخلها
            navLinks.querySelectorAll("a").forEach(function(link) {
                link.addEventListener("click", function() {
                    navLinks.classList.remove("show");
                    hamburger.classList.remove("active");
                });
            });

            // إغلاق القائمة عند الضغط في أي مكان خارجها
            document.addEventListener("click", function(e) {
                const clickedInsideNav = navLinks.contains(e.target);
                const clickedHamburger = hamburger.contains(e.target);

                if (!clickedInsideNav && !clickedHamburger && navLinks.classList.contains("show")) {
                    navLinks.classList.remove("show");
                    hamburger.classList.remove("active");
                }
            });

            // إغلاق القائمة تلقائيًا عند تكبير الشاشة
            window.addEventListener("resize", function() {
                if (window.innerWidth > 600) {
                    navLinks.classList.remove("show");
                    hamburger.classList.remove("active");
                }
            });
        }
    </script>


    <script src="{{ asset('jS/mian.js') }}"></script>
</body>

</html>
