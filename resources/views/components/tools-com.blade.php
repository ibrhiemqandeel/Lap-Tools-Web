<x-muster>
    <x-slot:PageTitle>
        {{ $pageTitle }} - Lap Tools Web
        </x-slot>

        <main class="flex-grow-1 d-flex flex-column">
            <div class="toolsTitel" id="toolsTitelId">
                <h1 class="toolsTitelH1" id="toolsTitelH1Id">{{ $toolsTitle }}</h1>
            </div>
            <div class="tools-wrapper">
                <img id="mainImage" src="{{ $imageUrl ?? 'default.jpg' }}" class="main-image">
                <h3 class="toolsSubtitle">{{ $toolsSubtitle }}</h3>
            </div>
            <div class="tools-content">
                <div class="toolsTitel" id="toolsTitelId">
                    <h1 class="MoreDetails" id="MoreDetailsId"><span>More</span> Details</h1>
                </div>
                <div class="tools-content">
                    <iframe
                        src={{ $videoUrl ?? 'https://www.youtube.com/embed/default' }}
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>
                <div>
                    <a href="{{ $websiteUrl ?? '#' }}" class="btn btn-outline-primary btn-lg px-4 py-2 WebsideLink" target="_blank">
                        <i class="fa-solid fa-arrow-up-right-from-square me-2"></i>
                        Visit Website
                    </a>
                </div>

                <div class=appdownload>
                    <!-- Android -->
                    <a
                        href="{{ $androidUrl }}"
                        class="btn btn-outline-primary btn-lg px-4 py-2 androidLink {{ ($androidUrl == '#' || $androidUrl == null) ? 'disabled' : '' }}"
                        target="_blank"
                        id="androidurlId"

                        @if ( $androidUrl==null)

                        @endif>
                        <i class="fa-brands fa-android"></i> Download App
                    </a>
                    <!-- iOS -->
                    <a
                        href="{{ $iosUrl ?? '#' }}"
                        class="btn btn-outline-primary btn-lg px-4 py-2 iosLink {{ ($iosUrl == '#' || $iosUrl == null) ? 'disabled' : '' }}"
                        target="_blank"

                        @if ($iosUrl==null)

                        @endif>
                        <i class="fa-brands fa-apple"></i> Download App
                    </a>

                </div>
            </div>
            {{ $slot }}

        </main>

        <style>
            body {
                height: auto;
            }

            div h1.toolsTitelH1 {
                display: flex;
                justify-content: center;
                width: 40%;
                align-items: center;
                margin: 25px auto 10px;
                color: #f00;
                font-size: 3.5rem;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                position: relative;
                top: 50px;
            }

            div h1.MoreDetails {
                display: flex;
                justify-content: center;
                width: 40%;
                align-items: center;
                margin: 25px auto 10px;
                color: #f00;
                font-size: 3.5rem;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

            }

            div h1.MoreDetails span {
                color: rgb(0, 0, 0);
                font-size: 3.5rem;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;


            }

            .tools-wrapper {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 30px;
                padding: 40px 5%;
                flex-wrap: wrap;
                /* مهم */
            }

            /* الصورة */
            #mainImage {
                width: 48%;
                height: auto;
                border-radius: 20px;
                background-color: #ffffff;
            }

            /* النص */
            .toolsSubtitle {
                width: 48%;
                background-color: #f00;
                border-radius: 20px;
                padding: 25px;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                font-size: 2rem;
            }

            iframe {
                width: 80%;
                height: 500px;
                border: none;
                border-radius: 20px;
                margin: 10px 10%;
            }

            .WebsideLink {
                width: 50%;
                height: auto;
                margin-top: 20PX;
                margin-left: 25%;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 12px 25px;
                background-color: #0d6efd;
                /* Bootstrap primary */
                color: #fff;
                text-decoration: none;
                border-radius: 12px;
                font-size: 2rem;
                font-weight: 500;
                transition: all 0.3s ease;
            }

            /* Hover */
            .WebsideLink:hover {
                background-color: #084298;
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            }

            div .appdownload {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 20px;
                margin-top: 30px;
            }

            div a #androidurlId {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
            }

            .androidLink {
                width: 30%;
                background-color: #3ddc84;
                color: #fff;
                font-size: 2rem;
                flex-wrap: wrap;
            }

            .androidLink:hover {
                background-color: #2a9d5b;
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            }

            .iosLink {
                width: 30%;
                background-color: #000;
                color: #fff;
                font-size: 2rem;
                flex-wrap: wrap;
            }

            /* 📱 للموبايل */
            @media (max-width: 768px) {
                .tools-wrapper {
                    flex-direction: column;
                    text-align: center;
                }

                #mainImage,
                .toolsSubtitle {
                    width: 100%;
                }

                .WebsideLink {
                    font-size: 1.6rem;
                    width: 60%;
                    margin-left: 20%;
                }

                .androidLink,
                .iosLink {
                    width: 40%;
                    font-size: 1.6rem;
                }
            }
        </style>

        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</x-muster>
