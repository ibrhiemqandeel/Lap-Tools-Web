<x-muster :pageTitle="'About Us - Lap Tools Web'">
    <x-slot:PageTitle>
        About Us - Lap Tools Web
        </x-slot>
        <style>
            :root {
                --cream: #f5f0e8;
                --ink: #1a1612;
                --rust: #c4622d;
                --warm-gray: #8a7f74;
                --light-line: #e0d9ce;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            html {
                scroll-behavior: smooth;
            }

            body {
                background-color: var(--cream);
                color: var(--ink);
                font-family: 'DM Sans', sans-serif;
                font-weight: 300;
                overflow-x: hidden;
            }

            a {
                text-decoration: none;
            }

            /* ── HERO ── */
            .hero {
                min-height: 100vh;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 0;
            }

            .hero-left {
                padding: 10rem 4rem 4rem 5rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
                animation: fadeSlideLeft 1s ease both;
            }

            .eyebrow {
                font-size: 0.75rem;
                letter-spacing: 0.25em;
                text-transform: uppercase;
                color: var(--rust);
                margin-bottom: 1.5rem;
            }

            h1 {
                font-family: 'Playfair Display', serif;
                font-size: clamp(3rem, 5vw, 5rem);
                line-height: 1.1;
                margin-bottom: 2rem;
                color: var(--ink);
            }

            h1 em {
                font-style: italic;
                color: var(--rust);
            }

            .hero-desc {
                font-size: 1.05rem;
                line-height: 1.8;
                color: var(--warm-gray);
                max-width: 440px;
                margin-bottom: 3rem;
            }

            .cta-row {
                display: flex;
                gap: 1rem;
                align-items: center;
            }

            .btn-primary {
                background: var(--ink);
                color: var(--cream);
                padding: 0.9rem 2rem;
                text-decoration: none;
                font-size: 0.85rem;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                transition: background 0.25s, transform 0.2s;
            }

            .btn-primary:hover {
                background: var(--rust);
                transform: translateY(-2px);
            }

            .btn-ghost {
                color: var(--ink);
                text-decoration: none;
                font-size: 0.85rem;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                border-bottom: 1px solid currentColor;
                padding-bottom: 2px;
                transition: color 0.2s;
            }

            .btn-ghost:hover {
                color: var(--rust);
            }

            /* ── HERO IMAGE SIDE ── */
            .hero-right {
                position: relative;
                overflow: hidden;
                animation: fadeIn 1.2s ease both 0.3s;
            }

            .hero-right::before {
                content: '';
                position: absolute;
                inset: 0;
                background: linear-gradient(135deg, #d4a882 0%, #8b6247 50%, #3d2b1e 100%);
                z-index: 0;
            }

            /* Abstract portrait shape */
            .portrait-block {
                position: absolute;
                inset: 0;
                z-index: 1;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .portrait-circle {
                width: 340px;
                height: 420px;
                border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
                background: rgba(245, 240, 232, 0.15);
                border: 1px solid rgba(245, 240, 232, 0.3);
                position: relative;
                overflow: hidden;
            }

            .portrait-inner {
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 200px;
                height: 320px;
                background: rgba(245, 240, 232, 0.2);
                border-radius: 50% 50% 0 0;
            }

            .decoration-line {
                position: absolute;
                right: 3rem;
                top: 50%;
                transform: translateY(-50%);
                width: 1px;
                height: 200px;
                background: rgba(245, 240, 232, 0.3);
                z-index: 2;
            }

            .decoration-line::before {
                content: '';
                position: absolute;
                top: -20px;
                left: -4px;
                width: 9px;
                height: 9px;
                border-radius: 50%;
                background: rgba(245, 240, 232, 0.5);
            }

            .hero-caption {
                position: absolute;
                bottom: 3rem;
                right: 3rem;
                z-index: 2;
                color: rgba(245, 240, 232, 0.7);
                font-size: 0.75rem;
                letter-spacing: 0.15em;
                text-transform: uppercase;
                writing-mode: vertical-rl;
            }

            /* ── STATS BAND ── */
            .stats-band {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                border-top: 1px solid var(--light-line);
                border-bottom: 1px solid var(--light-line);
            }

            .stat-item {
                padding: 3rem 4rem;
                border-right: 1px solid var(--light-line);
                animation: fadeUp 0.8s ease both;
            }

            .stat-item:last-child {
                border-right: none;
            }

            .stat-number {
                font-family: 'Playfair Display', serif;
                font-size: 3rem;
                color: var(--ink);
                line-height: 1;
                margin-bottom: 0.5rem;
            }

            .stat-number span {
                color: var(--rust);
            }

            .stat-label {
                font-size: 0.8rem;
                letter-spacing: 0.15em;
                text-transform: uppercase;
                color: var(--warm-gray);
            }

            /* ── STORY SECTION ── */
            .story {
                display: grid;
                grid-template-columns: 1fr 2fr;
                gap: 0;
                padding: 8rem 5rem;
                border-bottom: 1px solid var(--light-line);
            }

            .story-label {
                font-size: 0.75rem;
                letter-spacing: 0.25em;
                text-transform: uppercase;
                color: var(--rust);
                padding-top: 0.5rem;
            }

            .story-content h2 {
                font-family: 'Playfair Display', serif;
                font-size: clamp(2rem, 3vw, 2.8rem);
                line-height: 1.25;
                margin-bottom: 2rem;
                max-width: 600px;
            }

            .story-content p {
                font-size: 1rem;
                line-height: 1.9;
                color: var(--warm-gray);
                max-width: 580px;
                margin-bottom: 1.5rem;
            }

            .story-content p:last-child {
                margin-bottom: 0;
            }

            /* ── SKILLS SECTION ── */
            .skills-section {
                padding: 8rem 5rem;
                background: var(--ink);
                color: var(--cream);
            }

            .skills-header {
                display: flex;
                justify-content: space-between;
                align-items: flex-end;
                margin-bottom: 5rem;
            }

            .skills-header h2 {
                font-family: 'Playfair Display', serif;
                font-size: clamp(2rem, 3vw, 2.8rem);
                line-height: 1.2;
            }

            .skills-header p {
                font-size: 0.9rem;
                color: rgba(245, 240, 232, 0.5);
                max-width: 260px;
                text-align: right;
                line-height: 1.7;
            }

            .skills-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 0;
            }

            .skill-card {
                padding: 3rem;
                border: 1px solid rgba(245, 240, 232, 0.1);
                margin: -1px 0 0 -1px;
                transition: background 0.3s;
                cursor: default;
            }

            .skill-card:hover {
                background: rgba(196, 98, 45, 0.15);
            }

            .skill-icon {
                font-size: 1.8rem;
                margin-bottom: 1.5rem;
            }

            .skill-card h3 {
                font-family: 'Playfair Display', serif;
                font-size: 1.3rem;
                margin-bottom: 0.8rem;
            }

            .skill-card p {
                font-size: 0.88rem;
                color: rgba(245, 240, 232, 0.55);
                line-height: 1.7;
            }

            .skill-bar-wrap {
                margin-top: 1.5rem;
                height: 2px;
                background: rgba(245, 240, 232, 0.1);
            }

            .skill-bar {
                height: 100%;
                background: var(--rust);
                transform-origin: left;
                animation: growBar 1.5s ease both 0.5s;
            }

            @keyframes growBar {
                from {
                    transform: scaleX(0);
                }

                to {
                    transform: scaleX(1);
                }
            }

            /* ── TIMELINE ── */
            .timeline-section {
                padding: 8rem 5rem;
                border-bottom: 1px solid var(--light-line);
            }

            .timeline-section h2 {
                font-family: 'Playfair Display', serif;
                font-size: clamp(2rem, 3vw, 2.8rem);
                margin-bottom: 5rem;
            }

            .timeline {
                position: relative;
            }

            .timeline::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                bottom: 0;
                width: 1px;
                background: var(--light-line);
            }

            .timeline-item {
                display: grid;
                grid-template-columns: 180px 1fr;
                gap: 3rem;
                padding: 0 0 4rem 0;
                position: relative;
            }

            .timeline-item::before {
                content: '';
                position: absolute;
                left: -4px;
                top: 6px;
                width: 9px;
                height: 9px;
                border-radius: 50%;
                background: var(--rust);
            }

            .timeline-year {
                font-family: 'Playfair Display', serif;
                font-size: 1.8rem;
                color: var(--warm-gray);
                padding-left: 2rem;
                line-height: 1;
            }

            .timeline-body h3 {
                font-size: 1.05rem;
                font-weight: 500;
                margin-bottom: 0.4rem;
            }

            .timeline-body .company {
                font-size: 0.8rem;
                letter-spacing: 0.1em;
                text-transform: uppercase;
                color: var(--rust);
                margin-bottom: 0.8rem;
            }

            .timeline-body p {
                font-size: 0.92rem;
                color: var(--warm-gray);
                line-height: 1.7;
                max-width: 500px;
            }

            /* ── CONTACT FOOTER ── */
            .contact-section {
                padding: 8rem 5rem;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 4rem;
                align-items: center;
            }

            .contact-left h2 {
                font-family: 'Playfair Display', serif;
                font-size: clamp(2.5rem, 4vw, 4rem);
                line-height: 1.1;
                margin-bottom: 1.5rem;
            }

            .contact-left h2 em {
                font-style: italic;
                color: var(--rust);
            }

            .contact-left p {
                font-size: 0.95rem;
                color: var(--warm-gray);
                line-height: 1.8;
                max-width: 400px;
            }

            .contact-right {
                display: flex;
                flex-direction: column;
                gap: 1.2rem;
            }

            .contact-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1.4rem 1.8rem;
                border: 1px solid var(--light-line);
                text-decoration: none;
                color: var(--ink);
                transition: border-color 0.2s, background 0.2s;
            }

            .contact-item:hover {
                border-color: var(--rust);
                background: rgba(196, 98, 45, 0.04);
            }

            .contact-item-label {
                font-size: 0.75rem;
                letter-spacing: 0.2em;
                text-transform: uppercase;
                color: var(--warm-gray);
            }

            .contact-item-value {
                font-size: 0.95rem;
            }

            .contact-arrow {
                font-size: 1.1rem;
                color: var(--rust);
            }



            /* ── ANIMATIONS ── */
            @keyframes fadeSlideLeft {
                from {
                    opacity: 0;
                    transform: translateX(-30px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @keyframes fadeUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* ── RESPONSIVE ── */
            @media (max-width: 900px) {
                nav {
                    padding: 1.2rem 1.5rem;
                }

                .nav-links {
                    gap: 1.2rem;
                }

                .hero {
                    grid-template-columns: 1fr;
                }

                .hero-right {
                    height: 340px;
                }

                .hero-left {
                    padding: 8rem 2rem 4rem;
                }

                .stats-band {
                    grid-template-columns: 1fr;
                }

                .stat-item {
                    border-right: none;
                    border-bottom: 1px solid var(--light-line);
                    padding: 2rem;
                }

                .story {
                    grid-template-columns: 1fr;
                    padding: 4rem 2rem;
                    gap: 2rem;
                }

                .skills-section {
                    padding: 4rem 2rem;
                }

                .skills-header {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 1rem;
                }

                .skills-header p {
                    text-align: left;
                }

                .skills-grid {
                    grid-template-columns: 1fr;
                }

                .timeline-section {
                    padding: 4rem 2rem;
                }

                .timeline-item {
                    grid-template-columns: 80px 1fr;
                    gap: 1.5rem;
                }

                .timeline-year {
                    font-size: 1.2rem;
                    padding-left: 1.5rem;
                }

                .contact-section {
                    grid-template-columns: 1fr;
                    padding: 4rem 2rem;
                }

                footer {
                    padding: 1.5rem 2rem;
                    flex-direction: column;
                    gap: 0.5rem;
                    text-align: center;
                }
            }
        </style>
        </head>

        <Main class="flex-grow-1 d-flex flex-column">



            <!-- HERO -->
            <section class="hero">
                <div class="hero-left">
                    <p class="eyebrow">About Us</p>
                    <h1>Lap Tools Web <br /><em>Found Every Web You Need</em><br />At One Place.</h1>
                    <p class="hero-desc">
                        At Lap Tools Web, we are passionate about connecting you with the best online resources
                        across a wide range of categories. Whether you're a developer, designer, or just someone
                        looking for reliable tools and websites, we've got you covered. Our mission is to curate
                        a comprehensive directory of high-quality web platforms that empower you to achieve your
                        goals efficiently and effectively.
                    </p>
                    <div class="cta-row">
                        <a href="#contact" class="btn-primary">Get in Touch</a>
                        <a href="#story" class="btn-ghost">Our Story</a>
                    </div>
                </div>
                <div class="hero-right">
                    <div class="portrait-block">
                        <div class="portrait-circle">
                            <div class="portrait-inner"></div>
                        </div>
                    </div>
                    <div class="decoration-line"></div>
                    <span class="hero-caption">Portfolio · {{ date('Y') }}</span>
                </div>
            </section>

            <!-- STATS -->
            <section class="stats-band">
                <div class="stat-item" style="animation-delay:0.1s">
                    <div class="stat-number">999<span>+</span></div>
                    <div class="stat-label">Different website</div>
                </div>
                <div class="stat-item" style="animation-delay:0.2s">
                    <div class="stat-number">15<span>+</span></div>
                    <div class="stat-label">Different fields</div>
                </div>
                <div class="stat-item" style="animation-delay:0.3s">
                    <div class="stat-number">&infin;<span>+</span></div>
                    <div class="stat-label">creativity</div>
                </div>
            </section>

            <!-- STORY -->
            <section class="story" id="story">
                <div class="story-label">Our Story</div>
                <div class="story-content">
                    <h2>Digital Platform for Tech, Design & Creative Resources</h2>
                    <p>
                        A digital platform that brings together the most useful websites, tools, and resources across multiple fields such as programming, web development, UI/UX design, video editing, graphic design, and game development, & desktop productivity software like Word, Excel, PowerPoint, and other essential applications used by developers, designers, students, and content creators.
                    </p>
                    <p>
                        The platform provides organized and quick access to:

                        Front-End, Back-End, and app development resources.
                        UI/UX, graphic design, and creative tools.
                        Video editing and content creation platforms.
                        Game development engines and tools.
                        Desktop productivity software and office applications.
                        Hosting services, databases, and developer utilities.
                        Educational resources, tutorials, and learning platforms for beginners and professionals.
                    </p>
                    <p>
                        The platform is also designed to continuously grow by allowing the addition of new websites and tools suggested by users, creating a complete digital library for technology, creativity, and productivity.
                    </p>
                </div>
            </section>

            <!-- SKILLS -->
            <section class="skills-section">
                <div class="skills-header">
                    <h2>What we<br /><em style="font-family:'Playfair Display',serif;font-style:italic;">offer</em> to you</h2>
                    <p>And What Is Our Services</p>
                </div>
                <div class="skills-grid">
                    <a href="{{ route('Developers') }}">
                        <div class="skill-card">
                            <div class="skill-icon">✦</div>
                            <h3>Developers</h3>
                            <p>This feature is very important for developers because it helps them quickly find the websites, tools, and resources they need while working or learning. Instead of wasting time searching randomly, it provides reliable sources and links that make it easier to access solutions, libraries, and the best tools for their projects.</p>
                            <div class="skill-bar-wrap">
                                <div class="skill-bar" style="width:100%"></div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('Design') }}">

                        <div class="skill-card">
                            <div class="skill-icon">◈</div>
                            <h3>Design</h3>
                            <p>This feature is very useful because it helps save time, provides inspiration, and supports designers in finding the right tools, templates, and resources to build professional and creative work. It also makes the design process smoother and more efficient by reducing the effort needed to search for high-quality assets, improving productivity, and allowing designers to focus more on creativity, user experience, and innovation rather than spending long hours looking for resources.</p>
                            <div class="skill-bar-wrap">
                                <div class="skill-bar" style="width:100%"></div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('AnimationAnd3D') }}">

                        <div class="skill-card">
                            <div class="skill-icon">◎</div>
                            <h3>
                                Animation And 3D</h3>
                            <p>This feature is very useful because it helps save time, provides inspiration, and supports artists and developers in finding the right tools, models, textures, and software resources needed to create high-quality professional work. It also makes the production process more efficient, improves workflow, and allows creators to focus more on creativity, storytelling, and visual innovation instead of spending too much time searching for assets or solutions.</p>
                            <div class="skill-bar-wrap">
                                <div class="skill-bar" style="width:100%"></div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('AIROOM') }}">

                        <div class="skill-card">
                            <div class="skill-icon">⬡</div>
                            <h3>AI</h3>
                            <p>This feature is very useful because it helps save time, provides inspiration, and supports users in finding the right tools, solutions, and resources faster and more accurately. It can assist in generating ideas, solving problems, automating repetitive tasks, and improving the overall quality of work. AI also makes workflows more efficient by reducing manual effort, increasing creativity, and allowing users to focus more on innovation and important decisions instead of spending time on complex or repetitive processes.</p>
                            <div class="skill-bar-wrap">
                                <div class="skill-bar" style="width:100%"></div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('office') }}">

                        <div class="skill-card">
                            <div class="skill-icon">◇</div>
                            <h3>office</h3>
                            <p>This feature is very useful because it helps save time, provides easy-to-use tools, and supports users in finding the right templates, formats, and resources to complete their work faster and more accurately. It improves organization, increases productivity, and allows users to focus on their tasks instead of struggling with manual formatting or complex processes.</p>
                            <div class="skill-bar-wrap">
                                <div class="skill-bar" style="width:100%"></div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('Editing') }}">

                        <div class="skill-card">
                            <div class="skill-icon">✧</div>
                            <h3>Editing
                            </h3>
                            <p>This feature is very useful because it helps save time, provides inspiration, and supports editors in finding the right tools, effects, templates, and resources to create high-quality and engaging work. It improves workflow efficiency, makes the editing process smoother, and allows users to focus more on creativity and storytelling instead of spending too much time on technical adjustments and manual work.</p>
                            <div class="skill-bar-wrap">
                                <div class="skill-bar" style="width:100%"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </section>

            <!-- TIMELINE -->
            <section class="timeline-section">
                <h2>Management & More About Us</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-year">founder</div>
                        <div class="timeline-body">
                            <h3>Ibrhume Mohammed Qndeel</h3>
                            <div class="company">Full Stack-Software engineer</div>
                            <p>Software Engineer and Full-Stack Web Developer specialized in building modern, responsive, and user-friendly web applications. Passionate about front-end and back-end development, UI/UX design, and creating innovative digital solutions with clean performance and professional user experiences.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">Readiness</div>
                        <div class="timeline-body">
                            <h3>Much more to come</h3>
                            <div class="company">Coming soon</div>
                            <p>The site is under construction, but many more sites and categories will be coming soon.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">Ambition</div>
                        <div class="timeline-body">
                            <h3>Within five years</h3>
                            <div class="company">After a lot of work</div>
                            <p>Our goal is to become the world's largest online library and help people access all the websites they need.</p>
                        </div>
                    </div>
                    <div class="timeline-item" style="padding-bottom:0">
                        <div class="timeline-year">The manager's personal website</div>
                        <div class="timeline-body">
                            <a href="#">
                                <h3>Click To Visit</h3>
                            </a>
                            <div class="company">For direct contact with the manager</div>
                            <p>If you'd like to learn more about Uber managers and contact them directly, click to visit their website.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CONTACT -->
            <section class="contact-section" id="contact">
                <div class="contact-left">
                    <h2>Let's make<br />something<br /><em>great</em> together.</h2>
                    <p>Whether you have a project in mind or just want to say hello — my inbox is always open.</p>
                </div>
                <div class="contact-right">
                    <a href="mailto:alex@monroedesign.com" class="contact-item">
                        <div>
                            <div class="contact-item-label">Email</div>
                            <div class="contact-item-value">ibrahimgandeel@gmail.com</div>
                        </div>
                        <div class="contact-arrow">→</div>
                    </a>
                    <a href="#" class="contact-item">
                        <div>
                            <div class="contact-item-label">LinkedIn</div>
                            <div class="contact-item-value">linkedin.com/in/alexmonroe</div>
                        </div>
                        <div class="contact-arrow">→</div>
                    </a>
                    <a href="#" class="contact-item">
                        <div>
                            <div class="contact-item-label">Instagram</div>
                            <div class="contact-item-value">@alex.monroe.design</div>
                        </div>
                        <div class="contact-arrow">→</div>
                    </a>
                    <a href="{{ url('https://t.me/lapToolsWeb') }}" target="_blank" class="contact-item">
                        <div>
                            <div class="contact-item-label">Telegram</div>
                            <div class="contact-item-value">lapToolsWeb</div>
                        </div>
                        <div class="contact-arrow">↓</div>
                    </a>
                </div>
            </section>

        </main>
</x-muster>
