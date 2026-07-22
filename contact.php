<?php include 'header.php'; ?>

    <!-- Section Main Content -->
    <main>
        <!-- Section Banner -->
        <div class="section-banner">
            <div class="banner-layout-wrapper">
                <div class="banner-layout">
                    <div class="d-flex flex-column text-center align-items-center gspace-2">
                        <h1 class="title-heading heading-lg animation-box anim-normal anim-delay-sm" data-animation="fade-left">Contact Us</h1>
                        <nav class="breadcrumb">
                            <a href="index.php" class="gspace-2">Home</a>
                            <span class="separator-link">/</span>
                            <p class="current-page">Contact Us</p>
                        </nav>    
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>
        <!-- Section Contact -->
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-lg-2 row-cols-1 g-5">
                    <div class="col col-lg-5">
                        <div class="contact-title-wrapper">
                            <div class="card contact-title">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Reach out to us</span>
                                </div>
                                <h2 class="title-heading">Get in Touch</h2>
                                <p>Get in touch with our experts to turn your ideas into innovative digital solutions.</p>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-phone-volume accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span>Phone Number</span>
                                        <h3 class="heading-xs">+91 85274 30152</h3>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-envelope accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gspace-0">
                                        <span>Email Address</span>
                                        <h3 class="heading-xs">marketenza@gmail.com</h3>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-location-dot accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gspace-0">
                                        <span>Office Address</span>
                                        <h3 class="heading-xs">Noida</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-7">
                        <div id="success-message" class="alert success hidden">
                            <span class="check-icon"><i class="fa-solid fa-2xl fa-check"></i></span>
                            <p>Thank you! Form submitted successfully.</p>
                        </div>
                        
                        <div id="error-message" class="alert error hidden">
                            <span class="cross-icon"><i class="fa-solid fa-2xl fa-xmark"></i></span>
                            <p>Oops! Form submission failed. Please try again.</p>
                        </div>
                        <div class="form-layout-wrapper">
                            <div class="card form-layout">
                                <h3 class="title-heading">Let's Talk About Your Next Project</h3>
                                <form action="send_mail.php" method="post" id="contact-form" class="form">
                                    <input type="hidden" name="form_type" value="contact">
                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="text" name="first-name" id="first-name" placeholder="First Name">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="last-name" id="last-name" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="email" name="email" id="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="subject" id="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
                                    <div class="form-button-container">
                                        <button type="submit" class="btn btn-accent" id="contact-submit-btn">
                                            <span class="btn-title">
                                                <span>Send a Message</span>
                                            </span>
                                            <span class="icon-circle">
                                              <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Maps -->
        <div class="section pt-0">
            <div class="hero-container">
                <iframe loading="lazy" class="maps overflow-hidden"
                    src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                    title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom">
                </iframe>
            </div>
        </div>
    </main>

<?php include 'footer.php'; ?>
   