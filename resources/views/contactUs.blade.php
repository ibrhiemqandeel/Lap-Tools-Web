<x-muster>
    <mina>

        {{-- ============================================================= --}}
        {{-- ==================== CONTACT SECTION ========================= --}}
        {{-- ============================================================= --}}
        <div class="container-fluid contact py-5">
            <div class="container py-5">

                {{-- ===== Section Header ===== --}}
                <div class="text-center mx-auto pb-5 wow fadeInUp"
                    data-wow-delay="0.1s"
                    style="max-width: 800px;">

                    <h1 class="display-5 text-white mb-3"
                        style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                        Contact Us
                    </h1>

                    <p class="mb-0 text-white fw-bold">
                        You can easily contact us for any inquiries or issues you may face on the website.
                        Our team is ready to respond as quickly as possible.
                        We are here to help you and provide the best possible user experience,
                        so feel free to reach out to us at any time.
                    </p>

                </div>

                {{-- ===== Contact Info Cards ===== --}}
                <div class="row g-4">

                    {{-- Telegram --}}
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-add-item p-4 h-100 wow fadeInUp" data-wow-delay="0.1s">

                            <div class="contact-icon mb-4">
                                <i class="fa-brands fa-telegram fa-2x"></i>
                            </div>

                            <h4>Telephone &amp; Telegram</h4>
                            <p class="text-muted mb-3">Chat with us directly on Telegram</p>

                            <a href="{{ url('https://t.me/lapToolsWeb/7') }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="btn btn-primary d-flex align-items-center justify-content-center gap-2 px-3 py-2"
                                aria-label="Contact us on Telegram">
                                <i class="fa-brands fa-telegram"></i>
                                <span>+970 593 456 405</span>
                            </a>

                        </div>
                    </div>

                    {{-- Mail --}}
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-add-item p-4 h-100 wow fadeInUp" data-wow-delay="0.2s">

                            <div class="contact-icon mb-4">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>

                            <h4>Mail Us &amp; Send a Message</h4>
                            <p class="text-muted mb-3">Send us an email anytime</p>

                            <a href="{{ url('https://mail.google.com/mail/?view=cm&fs=1&to=ibrahimgandeel@gmail.com') }}"
                                class="btn btn-primary d-flex align-items-center justify-content-center gap-2 px-3 py-2"
                                aria-label="Send an email to Ibrahim Gandeel" target="_blank">
                                <i class="fa-solid fa-envelope"></i>
                                <span>Send a Message</span>
                            </a>

                        </div>
                    </div>

                    {{-- WhatsApp --}}
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-add-item p-4 h-100 wow fadeInUp" data-wow-delay="0.3s">

                            <div class="contact-icon mb-4">
                                <i class="fa-brands fa-whatsapp fa-2x"></i>
                            </div>

                            <h4>WhatsApp &amp; Telephone</h4>
                            <p class="text-muted mb-3">Message us instantly on WhatsApp</p>

                            <a href="https://wa.me/972593456405"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="btn btn-success d-flex align-items-center justify-content-center gap-2 px-3 py-2"
                                aria-label="Chat with us on WhatsApp">
                                <i class="fa-brands fa-whatsapp"></i>
                                <span>+972 593 456 405</span>
                            </a>

                        </div>
                    </div>

                    {{-- Manager Website --}}
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-add-item p-4 h-100 wow fadeInUp" data-wow-delay="0.4s">

                            <div class="contact-icon mb-4">
                                <i class="fa-solid fa-globe fa-2x"></i>
                            </div>

                            <h4>Manager Website</h4>
                            <p class="text-muted mb-3">Visit the official portfolio</p>

                            <a href="https://ibrahimgandeel.github.io/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="btn btn-primary d-flex align-items-center justify-content-center gap-2 px-3 py-2"
                                aria-label="Visit manager website">
                                <i class="fa-solid fa-globe"></i>
                                <span>Visit Website</span>
                            </a>

                        </div>
                    </div>

                </div>

                {{-- ===== Social Media (full width, centered, responsive) ===== --}}
                <div class="row justify-content-center mt-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-12">
                        <div class="p-4 bg-light rounded">

                            {{-- 1 column on mobile, 2 on tablet, 5 across on large screens --}}
                            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 g-3">

                                {{-- LinkedIn --}}
                                <div class="col">
                                    <div class="bg-white rounded p-3 h-100 text-center">
                                        <h5 class="text-primary">Our LinkedIn</h5>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <i class="fab fa-linkedin-in text-primary"></i>
                                            <a href="#" target="_blank" rel="noopener noreferrer"
                                                class="text-dark text-decoration-none">
                                                Visit LinkedIn Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Facebook --}}
                                <div class="col">
                                    <div class="bg-white rounded p-3 h-100 text-center">
                                        <h5 class="text-primary">Our Facebook</h5>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <i class="fab fa-facebook-f text-primary"></i>
                                            <a href="#" target="_blank" rel="noopener noreferrer"
                                                class="text-dark text-decoration-none">
                                                Visit Facebook Page
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- X (Twitter) --}}
                                <div class="col">
                                    <div class="bg-white rounded p-3 h-100 text-center">
                                        <h5 class="text-primary">Our X (Twitter)</h5>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <i class="fa-brands fa-x-twitter text-primary"></i>
                                            <a href="#" target="_blank" rel="noopener noreferrer"
                                                class="text-dark text-decoration-none">
                                                Visit X Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Instagram --}}
                                <div class="col">
                                    <div class="bg-white rounded p-3 h-100 text-center">
                                        <h5 class="text-primary">Our Instagram</h5>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <i class="fab fa-instagram text-primary"></i>
                                            <a href="#" target="_blank" rel="noopener noreferrer"
                                                class="text-dark text-decoration-none">
                                                Visit Instagram
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Telegram --}}
                                <div class="col">
                                    <div class="bg-white rounded p-3 h-100 text-center">
                                        <h5 class="text-primary">Our Telegram Channel</h5>
                                        <div class="d-flex align-items-center justify-content-center gap-2">
                                            <i class="fab fa-telegram-plane text-primary"></i>
                                            <a href="https://t.me/laptoolsweb" target="_blank" rel="noopener noreferrer"
                                                class="text-dark text-decoration-none">
                                                Join Channel
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                {{-- ===== Floating Social Icons (larger) ===== --}}
                <div class="row mt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12">
                        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 w-100">

                            <a href="#" target="_blank" rel="noopener noreferrer"
                                class="social-icon btn btn-light rounded-circle shadow-sm d-flex align-items-center justify-content-center"
                                style="width:70px; height:70px; font-size:1.6rem;"
                                aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a href="#" target="_blank" rel="noopener noreferrer"
                                class="social-icon btn btn-light rounded-circle shadow-sm d-flex align-items-center justify-content-center"
                                style="width:70px; height:70px; font-size:1.6rem;"
                                aria-label="X (Twitter)">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>

                            <a href="#" target="_blank" rel="noopener noreferrer"
                                class="social-icon btn btn-light rounded-circle shadow-sm d-flex align-items-center justify-content-center"
                                style="width:70px; height:70px; font-size:1.6rem;"
                                aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <a href="#" target="_blank" rel="noopener noreferrer"
                                class="social-icon btn btn-light rounded-circle shadow-sm d-flex align-items-center justify-content-center"
                                style="width:70px; height:70px; font-size:1.6rem;"
                                aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a href="https://t.me/laptoolsweb" target="_blank" rel="noopener noreferrer"
                                class="social-icon btn btn-light rounded-circle shadow-sm d-flex align-items-center justify-content-center"
                                style="width:70px; height:70px; font-size:1.6rem;"
                                aria-label="Telegram">
                                <i class="fab fa-telegram-plane"></i>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="footerPart" id="footerPartId" style="margin-top: 40%;">
            <div class="ThnksPart" id="ThnksPartId">
                <h3 class="ThnksH3" id="ThnksH3Id">Thnks For Chose Us</h3>
            </div>
            <div class="contact">
                <h3 class="contactUsH3" id="contactUsH302Id" onclick="contactUs()" style="cursor: pointer;;">CONTACt US</h3>
                <div class="ContactIcons"><a href="#"><i class="fa-brands fa-linkedin"></i></a><a href="#"><i class="fa-brands fa-x-twitter"></i></a><a href="#"><i class="fa-brands fa-square-instagram"></i></a><a href="https://t.me/lapToolsWeb" target="_blank"><i class="fa-brands fa-telegram"></i></a><a href="#"><i class="fa-brands fa-whatsapp"></i></a></div>

                <p>All Rights Reserved By <a href="#" onclick="soon()">@Ibehim Qadeel </a> {{ date("Y") }}

                </p>
            </div>
        </footer>

    </mina>
</x-muster>
