<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $page_title = isset($page_seo_title) ? $page_seo_title : "Marketenza | SEO  , Web & App Development Company";
        $meta_desc = isset($page_meta_desc) ? $page_meta_desc : "Marketenza is a leading SEO  , website development & mobile app company in Noida. Scale your startup with high-ROAS marketing and custom tech.";
    ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="icon" href="image/favicon.ico">
</head>

<body class="lightmode">
    <header>
        <div class="navbar-wrapper">
            <nav class="navbar navbar-expand-lg">
                <div class="navbar-container">
                    <div class="logo-container-header">
                        <a href="index.php"><img src="img/logo.png" alt="Marketenza - SEO & Web Development Company Logo" class="site-logo img-fluid"></a>
                    </div>
                    <button class="nav-btn">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="about.php">About</a>
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link dropdown-toggle" href="service.php" role="button"
                                    aria-expanded="false">
                                    Services <i class="fa-solid fa-angle-down accent-color"></i>
                                </a>
                                <div class="mega-dropdown-menu">
                                    <div class="mega-dropdown-header">
                                        <div class="mega-header-text">
                                            <h3 class="mega-title">Our Flagship Services: <span
                                                    class="accent-text">Marketenza</span></h3>
                                            <p class="mega-subtitle">End-to-end performance marketing, web development &
                                                digital solutions.</p>
                                        </div>
                                        <a href="service.php" class="mega-see-all">
                                            SEE ALL SERVICES <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="mega-dropdown-divider"></div>
                                    <div class="mega-services-grid">
                                        <a href="website-development.php" class="mega-service-card">
                                            <div class="mega-card-header">
                                                <div class="mega-icon-wrapper">
                                                    <i class="fa-solid fa-laptop-code"></i>
                                                </div>
                                                <h4 class="mega-card-title">Website Development</h4>
                                            </div>
                                            <p class="mega-card-desc">Custom, fast, responsive & high-converting
                                                websites.</p>
                                            <div class="mega-card-link">
                                                <span>EXPLORE SERVICE</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                        <a href="app-development.php" class="mega-service-card">
                                            <div class="mega-card-header">
                                                <div class="mega-icon-wrapper">
                                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                                </div>
                                                <h4 class="mega-card-title">Mobile App Development</h4>
                                            </div>
                                            <p class="mega-card-desc">Native & cross-platform iOS & Android mobile
                                                applications.</p>
                                            <div class="mega-card-link">
                                                <span>EXPLORE SERVICE</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>



                                        <a href="social-media-marketing.php" class="mega-service-card">
                                            <div class="mega-card-header">
                                                <div class="mega-icon-wrapper">
                                                    <i class="fa-solid fa-share-nodes"></i>
                                                </div>
                                                <h4 class="mega-card-title">Social Media Marketing</h4>
                                            </div>
                                            <p class="mega-card-desc">Strategic social growth, content strategy & brand
                                                engagement.</p>
                                            <div class="mega-card-link">
                                                <span>EXPLORE SERVICE</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>

                                        <a href="search-engine-optimization.php" class="mega-service-card">
                                            <div class="mega-card-header">
                                                <div class="mega-icon-wrapper">
                                                    <i class="fa-solid fa-magnifying-glass-chart"></i>
                                                </div>
                                                <h4 class="mega-card-title">Search Engine Optimization</h4>
                                            </div>
                                            <p class="mega-card-desc">Organic search visibility, keyword ranking &
                                                technical SEO.</p>
                                            <div class="mega-card-link">
                                                <span>EXPLORE SERVICE</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>





                                        <a href="branding-creative-design.php" class="mega-service-card">
                                            <div class="mega-card-header">
                                                <div class="mega-icon-wrapper">
                                                    <i class="fa-solid fa-palette"></i>
                                                </div>
                                                <h4 class="mega-card-title">Branding & Creative Design</h4>
                                            </div>
                                            <p class="mega-card-desc">Brand identity, logo design, visuals & creative
                                                assets.</p>
                                            <div class="mega-card-link">
                                                <span>EXPLORE SERVICE</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>

                                        <a href="crm-lead-management.php" class="mega-service-card">
                                            <div class="mega-card-header">
                                                <div class="mega-icon-wrapper">
                                                    <i class="fa-solid fa-users-gear"></i>
                                                </div>
                                                <h4 class="mega-card-title">CRM & Lead Management</h4>
                                            </div>
                                            <p class="mega-card-desc">Lead capture, automated pipelines & customer
                                                workflows.</p>
                                            <div class="mega-card-link">
                                                <span>EXPLORE SERVICE</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link dropdown-toggle" href="technology.php" role="button"
                                    aria-expanded="false">
                                    Technologies 
                                </a>
                            
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-action-container">
                        <div class="navbar-action-button">


                            <button class="info-btn">
                                <svg fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 0h4v4H0V0zm0 6h4v4H0V6zm0 6h4v4H0v-4zM6 0h4v4H6V0zm0 6h4v4H6V6zm0 6h4v4H6v-4zm6-12h4v4h-4V0zm0 6h4v4h-4V6zm0 6h4v4h-4v-4z"
                                        fill-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="navbar-icon-wrapper">
                            <div class="icon-circle">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <span class="heading-xxs">+91 85274 30152</span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <aside>
        <div class="info-sidebar-overlay"></div>
        <div class="info-sidebar">
            <div class="info-sidebar-header">
                <div></div>
                <div class="close-info-btn">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="info-sidebar-content">
                <div class="image-container info-sidebar-logo">
                    <img src="img/logo.png" alt="Logo" class="site-logo">
                </div>

                <h4>Innovative IT Solutions for a Digital Future</h4>
                <p>We deliver custom responsive websites, mobile applications, cloud services, and enterprise IT
                    solutions designed to help businesses streamline operations, improve efficiency, and achieve
                    long-term success</p>
                <div class="sidebar-info-contact">
                    <i class="fa-solid fa-phone sidebar-info-icon"></i>
                    <h5>Phone Number</h5>
                    <p>+91 85274 30152</p>
                </div>
                <div class="sidebar-info-contact">
                    <i class="fa-solid fa-envelope sidebar-info-icon"></i>
                    <h5>Email Address</h5>
                    <p>marketenza@gmail.com</p>
                </div>
                <div class="sidebar-info-contact">
                    <i class="fa-solid fa-phone-alt sidebar-info-icon"></i>
                    <h5>Address</h5>
                    <p>Noida</p>
                </div>
            </div>
        </div>
    </aside>

    <aside>
        <div class="sidebar-overlay"></div>
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <img src="img/logo.png" class="site-logo img-fluid logo" alt="Logo">
                </div>
                <button class="close-btn"><span>X</span></button>
            </div>
            <ul class="menu">
                <li><a href="indexs.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="sidebar-dropdown">
                    <div class="dropdown-header">
                        <a href="service.php">Services</a>
                        <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button>
                    </div>
                    <ul class="sidebar-dropdown-menu">
                        <li><a href="service.php"><i class="fa-solid fa-layer-group"></i> All Services</a></li>
                        <li><a href="performance-marketing.php"><i class="fa-solid fa-chart-line"></i> Performance
                                Marketing</a></li>
                        <li><a href="social-media-marketing.php"><i class="fa-solid fa-share-nodes"></i> Social Media
                                Marketing</a></li>
                        <li><a href="search-engine-optimization.php"><i class="fa-solid fa-magnifying-glass-chart"></i>
                                Search Engine Optimization</a></li>
                        <li><a href="website-development.php"><i class="fa-solid fa-laptop-code"></i> Website
                                Development</a></li>
                        <li><a href="app-development.php"><i class="fa-solid fa-mobile-screen-button"></i> Mobile App
                                Development</a></li>
                        <li><a href="ecommerce-solutions.php"><i class="fa-solid fa-cart-shopping"></i> E-Commerce
                                Solutions</a></li>
                        <li><a href="branding-creative-design.php"><i class="fa-solid fa-palette"></i> Branding &
                                Creative Design</a></li>
                        <li><a href="crm-lead-management.php"><i class="fa-solid fa-users-gear"></i> CRM & Lead
                                Management</a></li>
                        <li><a href="analytics-business-intelligence.php"><i class="fa-solid fa-chart-column"></i>
                                Analytics & BI</a></li>
                        <li><a href="cloud-it-solutions.php"><i class="fa-solid fa-cloud-arrow-up"></i> Cloud & IT
                                Solutions</a></li>
                    </ul>
                </li>
                <li class="sidebar-dropdown">
                    <div class="dropdown-header">
                        <a href="technology.php">Technologies</a>
                        <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button>
                    </div>
                    <ul class="sidebar-dropdown-menu">
                        <li><a href="technology.php"><i class="fa-solid fa-microchip"></i> All Technologies</a></li>
                        <li><a href="dotnet.php"><i class="fa-solid fa-code"></i> .NET / C#</a></li>
                        <li><a href="laravel.php"><i class="fa-brands fa-laravel"></i> Laravel PHP</a></li>
                        <li><a href="node-js.php"><i class="fa-brands fa-node-js"></i> Node.js</a></li>
                        <li><a href="react-js.php"><i class="fa-brands fa-react"></i> React JS</a></li>
                        <li><a href="next-js.php"><i class="fa-solid fa-bolt"></i> Next.js</a></li>
                        <li><a href="vue-js.php"><i class="fa-brands fa-vuejs"></i> Vue.js</a></li>
                        <li><a href="react-native.php"><i class="fa-solid fa-mobile-screen"></i> React Native</a></li>
                        <li><a href="flutter.php"><i class="fa-solid fa-mobile-button"></i> Flutter</a></li>
                        <li><a href="mysql.php"><i class="fa-solid fa-database"></i> MySQL & Postgres</a></li>
                        <li><a href="mongodb.php"><i class="fa-solid fa-server"></i> MongoDB</a></li>
                        <li><a href="shopify.php"><i class="fa-brands fa-shopify"></i> Shopify CMS</a></li>
                        <li><a href="wordpress.php"><i class="fa-brands fa-wordpress"></i> WordPress & Woo</a></li>
                        <li><a href="google-analytics-seo.php"><i class="fa-solid fa-chart-pie"></i> GA4 & Search
                                Console</a></li>
                        <li><a href="ahrefs-semrush-seo.php"><i class="fa-solid fa-magnifying-glass-arrow-right"></i>
                                Ahrefs & SEMrush</a></li>
                        <li><a href="screaming-frog-seo.php"><i class="fa-solid fa-bug-slash"></i> Screaming Frog & Tech
                                SEO</a></li>
                    </ul>
                </li>
                <li><a href="blog.php">Blog</a></li>


                <li class="below-dropdown"><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </aside>