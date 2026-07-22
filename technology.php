<?php include 'header.php'; ?>

<!-- Section Main Content -->
<main>
    <!-- Section Banner -->
    <div class="section-banner">
        <div class="banner-layout-wrapper">
            <div class="banner-layout">
                <div class="d-flex flex-column text-center align-items-center gspace-2">
                    <h1 class="title-heading heading-lg animation-box anim-normal anim-delay-sm" data-animation="fade-left">Our Technology Stack</h1>
                    <nav class="breadcrumb" aria-label="breadcrumb">
                        <a href="index.php" class="gspace-2">Home</a>
                        <span class="separator-link">/</span>
                        <p class="current-page">Technologies</p>
                    </nav>
                </div>
                <div class="spacer"></div>
            </div>
        </div>
    </div>

    <!-- Section Hero/About-Style Compact Layout (Matching index.php About Marketenza) -->
    <!-- <div class="section">
        
    </div> -->

    <!-- Section Categorized Technology Grid Cards -->
    <div class="section pt-2 mt-5">
        <div class="hero-container">
            <div class="d-flex flex-column justify-content-center text-center gspace-5">
                 <!-- 3. FRONTEND FRAMEWORKS -->
                <div class="tech-category-block text-start mt-5">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="service-icon-box" style="width: 48px; height: 48px; font-size: 20px;">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <div>
                            <h3 class="heading-sm mb-1">Frontend Engineering</h3>
                            <p class="text-secondary m-0">Modern client-side libraries, SSR frameworks & responsive CSS.</p>
                        </div>
                    </div>
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-brands fa-html5"></i></div>
                                    <span class="service-tag">UI Foundation</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">HTML5 & CSS3</h3>
                                    <p>Semantic HTML5 structure, responsive CSS Grid, Flexbox & CSS keyframe animations.</p>
                                </div>
                                <a href="html-css.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore HTML5 & CSS3</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-brands fa-js"></i></div>
                                    <span class="service-tag">Scripting</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">JavaScript ES6+</h3>
                                    <p>Modern asynchronous DOM manipulation, fetch APIs, and TypeScript support.</p>
                                </div>
                                <a href="javascript.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore JavaScript</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-brands fa-react"></i></div>
                                    <span class="service-tag">Single Page Apps</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">React JS</h3>
                                    <p>Component-driven web applications, virtual DOM speed & Redux state management.</p>
                                </div>
                                <a href="react-js.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore React JS</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-solid fa-bolt"></i></div>
                                    <span class="service-tag">SSR & Fullstack</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Next.js</h3>
                                    <p>Server-Side Rendering (SSR), static generation & Lighthouse 100 SEO performance.</p>
                                </div>
                                <a href="next-js.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Next.js</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-brands fa-vuejs"></i></div>
                                    <span class="service-tag">Progressive UI</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Vue.js</h3>
                                    <p>Progressive JavaScript framework for building intuitive, highly reactive web interfaces.</p>
                                </div>
                                <a href="vue-js.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Vue.js</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>

                  <!-- 2. BACKEND FRAMEWORKS -->
                <div class="tech-category-block text-start mt-5">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="service-icon-box" style="width: 48px; height: 48px; font-size: 20px;">
                            <i class="fa-solid fa-server"></i>
                        </div>
                        <div>
                            <h3 class="heading-sm mb-1">Backend Web Frameworks</h3>
                            <p class="text-secondary m-0">High-concurrency servers, RESTful APIs & enterprise microservices.</p>
                        </div>
                    </div>
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-solid fa-code"></i></div>
                                    <span class="service-tag">Enterprise C#</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">.NET / ASP.NET Core</h3>
                                    <p>High-speed C# web APIs, Entity Framework ORM & Azure microservices.</p>
                                </div>
                                <a href="dotnet.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore .NET</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-brands fa-laravel"></i></div>
                                    <span class="service-tag">PHP Framework</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Laravel (PHP)</h3>
                                    <p>Elegant PHP web framework for robust backend portals, Eloquent ORM & APIs.</p>
                                </div>
                                <a href="laravel.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Laravel</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-brands fa-node-js"></i></div>
                                    <span class="service-tag">Asynchronous JS</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Node.js / Express</h3>
                                    <p>Event-driven, non-blocking I/O JavaScript runtime for scalable Web APIs.</p>
                                </div>
                                <a href="node-js.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Node.js</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
                <!-- 1. MOBILE TECHNOLOGIES -->
                <div class="tech-category-block text-start">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="service-icon-box" style="width: 48px; height: 48px; font-size: 20px;">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <div>
                            <h3 class="heading-sm mb-1">Mobile App Technologies</h3>
                            <p class="text-secondary m-0">Cross-platform & native mobile application frameworks.</p>
                        </div>
                    </div>
                    <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-4">
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-solid fa-mobile-screen"></i></div>
                                    <span class="service-tag">Cross-Platform</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">React Native</h3>
                                    <p>Deploy native iOS & Android mobile apps from a single shared JavaScript codebase.</p>
                                </div>
                                <a href="react-native.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore React Native</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-solid fa-mobile-button"></i></div>
                                    <span class="service-tag">Google Dart</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Flutter</h3>
                                    <p>Google's UI toolkit for crafting natively compiled mobile, web, and desktop apps.</p>
                                </div>
                                <a href="flutter.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Flutter</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>

              

               

                <!-- 4. DATABASES -->
                <div class="tech-category-block text-start mt-5">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="service-icon-box" style="width: 48px; height: 48px; font-size: 20px;">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <div>
                            <h3 class="heading-sm mb-1">Database Systems</h3>
                            <p class="text-secondary m-0">Relational SQL & Document NoSQL database engines.</p>
                        </div>
                    </div>
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-solid fa-database"></i></div>
                                    <span class="service-tag">Relational SQL</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">MySQL & PostgreSQL</h3>
                                    <p>Enterprise relational databases with ACID compliance, indexing & complex queries.</p>
                                </div>
                                <a href="mysql.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore MySQL & Postgres</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-solid fa-server"></i></div>
                                    <span class="service-tag">NoSQL Store</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">MongoDB</h3>
                                    <p>High-speed JSON/BSON document-oriented NoSQL database for unstructured data.</p>
                                </div>
                                <a href="mongodb.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore MongoDB</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- 5. CMS PLATFORMS -->
                <div class="tech-category-block text-start mt-5">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="service-icon-box" style="width: 48px; height: 48px; font-size: 20px;">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <div>
                            <h3 class="heading-sm mb-1">CMS & E-Commerce Platforms</h3>
                            <p class="text-secondary m-0">Turnkey store platforms & custom CMS customization.</p>
                        </div>
                    </div>
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-brands fa-shopify"></i></div>
                                    <span class="service-tag">E-Commerce</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Shopify & Shopify Plus</h3>
                                    <p>Custom Shopify Liquid themes, checkout optimization & custom app development.</p>
                                </div>
                                <a href="shopify.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Shopify</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-brands fa-wordpress"></i></div>
                                    <span class="service-tag">CMS Engine</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">WordPress & WooCommerce</h3>
                                    <p>Custom WordPress themes, plugin engineering & WooCommerce e-commerce setups.</p>
                                </div>
                                <a href="wordpress.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore WordPress</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- 6. SEO & ANALYTICS TOOLS -->
                <div class="tech-category-block text-start mt-5 mb-4">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="service-icon-box" style="width: 48px; height: 48px; font-size: 20px;">
                            <i class="fa-solid fa-magnifying-glass-chart"></i>
                        </div>
                        <div>
                            <h3 class="heading-sm mb-1">SEO & Marketing Intelligence Tools</h3>
                            <p class="text-secondary m-0">Advanced crawlers, search console analytics & competitor SERP suites.</p>
                        </div>
                    </div>
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-solid fa-chart-pie"></i></div>
                                    <span class="service-tag">Google Suite</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">GA4 & Search Console</h3>
                                    <p>Google Analytics 4 event tracking, GTM & indexing audits.</p>
                                </div>
                                <a href="google-analytics-seo.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore GA4 & GSC</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-solid fa-magnifying-glass-arrow-right"></i></div>
                                    <span class="service-tag">SERP Intelligence</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Ahrefs & SEMrush</h3>
                                    <p>Competitor keyword gap analysis & backlink profile research.</p>
                                </div>
                                <a href="ahrefs-semrush-seo.php" class="btn btn-accent w-100 mt-auto">
                                    <div class="btn-title"><span>Explore Ahrefs & SEMrush</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </article>
                        </div>

                        <div class="col">
                            <article class="card card-service h-100">
                                <div class="service-card-header">
                                    <div class="service-icon-box"><i class="fa-solid fa-bug-slash"></i></div>
                                    <span class="service-tag">Technical Crawler</span>
                                </div>
                                <div class="service-card-body">
                                    <h3 class="heading-sm">Screaming Frog</h3>
                                    <p>Deep website crawler audits for 404 errors, canonicals & schema validation.</p>
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
    </div>

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
