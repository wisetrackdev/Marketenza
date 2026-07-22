<?php include 'header.php'; ?>

<!-- Section Main Content -->
<main>
    <!-- Section Banner -->
    <section class="section-banner">
        <div class="banner-layout-wrapper">
            <div class="banner-layout">
                <div class="d-flex flex-column text-center align-items-center gspace-2">
                    <h1 class="title-heading heading-lg animation-box anim-normal anim-delay-sm"
                        data-animation="fade-left">Our Technology Stack</h1>
                    <nav class="breadcrumb" aria-label="breadcrumb">
                        <a href="index.php" class="gspace-2">Home</a>
                        <span class="separator-link">/</span>
                        <p class="current-page">Technologies</p>
                    </nav>
                </div>
                <div class="spacer"></div>
            </div>
        </div>
    </section>

    <!-- Section Intro Header -->
    <section class="section">
        <div class="hero-container">
            <div class="d-flex flex-column justify-content-center text-center gspace-5">
                <div class="d-flex flex-column justify-content-center text-center gspace-2">
                    <div class="sub-heading align-self-center animation-box anim-normal anim-delay-sm"
                        data-animation="fade-down">
                        <i class="fa-solid fa-microchip"></i>
                        <span>Modern Engineering & Marketing Tech</span>
                    </div>
                    <h2 class="title-heading heading-container heading-container-medium animation-box anim-normal anim-delay-sm"
                        data-animation="fade-down">Enterprise Backend, Reactive Frontend & Advanced SEO Tools</h2>
                    <p class="text-secondary max-w-700 mx-auto mt-2">At Marketenza, we engineer high-performance web applications, mobile platforms, and search engine strategies using industry-leading technologies. Discover our full technology stack below.</p>
                </div>

                <!-- CATEGORY 1: BACKEND DEVELOPMENT -->
                <div class="tech-category-wrapper mb-5">
                    <div class="d-flex align-items-center gap-3 mb-4 text-start">
                        <div class="service-icon-box" style="width: 48px; height: 48px; font-size: 20px;">
                            <i class="fa-solid fa-server"></i>
                        </div>
                        <div>
                            <h3 class="heading-sm mb-1">Backend Infrastructure & Web APIs</h3>
                            <p class="text-secondary m-0 fs-6">High-concurrency backend architecture, secure database microservices & cloud APIs.</p>
                        </div>
                    </div>
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box">
                                        <i class="fa-solid fa-code"></i>
                                    </div>
                                    <span class="service-tag">Backend Core</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">.NET & ASP.NET Core</h3>
                                    <p>Enterprise C# backend engineering, RESTful Web APIs, Entity Framework ORM, and high-speed cloud microservices.</p>
                                    <ul class="service-feature-list">
                                        <li><i class="fa-solid fa-circle-check"></i> High Performance C# & ASP.NET Core</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Scalable Microservices Architecture</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Enterprise Security & SQL Integration</li>
                                    </ul>
                                </div>
                                <a href="dotnet.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore .NET Details</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- CATEGORY 2: FRONTEND & MOBILE -->
                <div class="tech-category-wrapper mb-5">
                    <div class="d-flex align-items-center gap-3 mb-4 text-start">
                        <div class="service-icon-box" style="width: 48px; height: 48px; font-size: 20px;">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <div>
                            <h3 class="heading-sm mb-1">Frontend Engineering & Mobile Frameworks</h3>
                            <p class="text-secondary m-0 fs-6">Reactive UI design, lightning-fast rendering, and cross-platform mobile apps.</p>
                        </div>
                    </div>
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        <!-- HTML5 & CSS3 -->
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box">
                                        <i class="fa-brands fa-html5"></i>
                                    </div>
                                    <span class="service-tag">UI Foundation</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">HTML5 & CSS3</h3>
                                    <p>Semantic HTML markup for Google SEO optimization, modern CSS grid layouts, flexbox, and smooth hardware-accelerated animations.</p>
                                    <ul class="service-feature-list">
                                        <li><i class="fa-solid fa-circle-check"></i> W3C Compliant Semantic Code</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Mobile-First Responsive Design</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Glassmorphism & Keyframe FX</li>
                                    </ul>
                                </div>
                                <a href="html-css.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore HTML5 & CSS3</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <!-- JavaScript -->
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box">
                                        <i class="fa-brands fa-js"></i>
                                    </div>
                                    <span class="service-tag">Client Scripting</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">JavaScript ES6+</h3>
                                    <p>Modern asynchronous JavaScript, DOM manipulation, Fetch/Axios API integrations, and robust TypeScript type safety.</p>
                                    <ul class="service-feature-list">
                                        <li><i class="fa-solid fa-circle-check"></i> Asynchronous Promises & Async/Await</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Event-Driven Client Logic</li>
                                        <li><i class="fa-solid fa-circle-check"></i> TypeScript Enterprise Integration</li>
                                    </ul>
                                </div>
                                <a href="javascript.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore JavaScript</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <!-- React JS -->
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box">
                                        <i class="fa-brands fa-react"></i>
                                    </div>
                                    <span class="service-tag">Single Page Apps</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">React JS</h3>
                                    <p>Component-driven web applications, dynamic state management (Redux/Zustand), virtual DOM rendering, and modular architecture.</p>
                                    <ul class="service-feature-list">
                                        <li><i class="fa-solid fa-circle-check"></i> Reusable UI Components</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Virtual DOM Ultra Speed</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Rich React Ecosystem</li>
                                    </ul>
                                </div>
                                <a href="react-js.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore React JS</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <!-- Next.js -->
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box">
                                        <i class="fa-solid fa-bolt"></i>
                                    </div>
                                    <span class="service-tag">SSR & Fullstack</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Next.js</h3>
                                    <p>Fullstack React framework featuring Server-Side Rendering (SSR), Static Site Generation (SSG), automatic image optimization & top SEO.</p>
                                    <ul class="service-feature-list">
                                        <li><i class="fa-solid fa-circle-check"></i> Server-Side Rendering (SSR)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Zero-Config Lighthouse 100 Speed</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Built-in SEO Optimization</li>
                                    </ul>
                                </div>
                                <a href="next-js.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Next.js</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <!-- Vue.js -->
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box">
                                        <i class="fa-brands fa-vuejs"></i>
                                    </div>
                                    <span class="service-tag">Progressive UI</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Vue.js</h3>
                                    <p>Progressive JavaScript framework for building intuitive, highly reactive web interfaces and lightweight single-page applications.</p>
                                    <ul class="service-feature-list">
                                        <li><i class="fa-solid fa-circle-check"></i> Reactive Two-Way Data Binding</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Pinia & Vue Router Setup</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Lightweight & High Performance</li>
                                    </ul>
                                </div>
                                <a href="vue-js.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Vue.js</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <!-- React Native -->
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box">
                                        <i class="fa-solid fa-mobile-screen"></i>
                                    </div>
                                    <span class="service-tag">Cross-Platform</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">React Native</h3>
                                    <p>Build native mobile apps for iOS and Android using a single shared JavaScript/TypeScript codebase with 60fps native performance.</p>
                                    <ul class="service-feature-list">
                                        <li><i class="fa-solid fa-circle-check"></i> iOS & Android Native Performance</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Shared Single Codebase</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Native Camera & GPS Integration</li>
                                    </ul>
                                </div>
                                <a href="react-native.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore React Native</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- CATEGORY 3: SEO & ANALYTICS TOOLS -->
                <div class="tech-category-wrapper mb-4">
                    <div class="d-flex align-items-center gap-3 mb-4 text-start">
                        <div class="service-icon-box" style="width: 48px; height: 48px; font-size: 20px;">
                            <i class="fa-solid fa-magnifying-glass-chart"></i>
                        </div>
                        <div>
                            <h3 class="heading-sm mb-1">SEO Tools & Marketing Intelligence</h3>
                            <p class="text-secondary m-0 fs-6">Enterprise SEO crawlers, keyword analytics, backlink monitors & conversion tracking platforms.</p>
                        </div>
                    </div>
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        <!-- GA4 & Search Console -->
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box">
                                        <i class="fa-solid fa-chart-pie"></i>
                                    </div>
                                    <span class="service-tag">Analytics Suite</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">GA4 & Search Console</h3>
                                    <p>Google Analytics 4 event tracking, GTM tag containers, indexation monitoring, and search impression analytics.</p>
                                    <ul class="service-feature-list">
                                        <li><i class="fa-solid fa-circle-check"></i> Event & Funnel Conversion Tracking</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Google Indexation & Sitemap Audits</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Real-Time User Behavior Reports</li>
                                    </ul>
                                </div>
                                <a href="google-analytics-seo.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore GA4 & GSC</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <!-- Ahrefs & SEMrush -->
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box">
                                        <i class="fa-solid fa-magnifying-glass-arrow-right"></i>
                                    </div>
                                    <span class="service-tag">Keyword & Link Intelligence</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Ahrefs & SEMrush</h3>
                                    <p>Competitive keyword gap analysis, backlink profile audits, rank tracking, and domain authority growth research.</p>
                                    <ul class="service-feature-list">
                                        <li><i class="fa-solid fa-circle-check"></i> High-Intent Keyword Gap Analysis</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Competitor Backlink Audits</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Daily SERP Position Tracking</li>
                                    </ul>
                                </div>
                                <a href="ahrefs-semrush-seo.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Ahrefs & SEMrush</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <!-- Screaming Frog -->
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box">
                                        <i class="fa-solid fa-bug-slash"></i>
                                    </div>
                                    <span class="service-tag">Technical SEO Crawler</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Screaming Frog & Tech SEO</h3>
                                    <p>Deep website crawler audits for 404 errors, canonical loops, schema markup validation, and XML sitemap generation.</p>
                                    <ul class="service-feature-list">
                                        <li><i class="fa-solid fa-circle-check"></i> Deep Website Crawling & 404 Fixes</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Canonical & Redirection Audits</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Structured Schema Markup Validation</li>
                                    </ul>
                                </div>
                                <a href="screaming-frog-seo.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Screaming Frog</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section CTA Banner -->
    <section class="section-guide mb-5">
        <div class="guide-banner">
            <div class="hero-container">
                <div class="guide-content animation-box anim-normal anim-delay-sm text-center" data-animation="fade-up">
                    <div class="d-flex flex-column gspace-2 align-items-center">
                        <h3 class="title-heading">Need Help Selecting the Right Tech Stack?</h3>
                        <p class="max-w-700">Our senior architects and digital strategists are ready to evaluate your requirements and recommend the optimal technology stack for your project.</p>
                        <a href="contact.php" class="btn btn-accent mt-3">
                            <div class="btn-title">
                                <span>Talk to Our Solution Architects</span>
                            </div>
                            <div class="icon-circle">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
