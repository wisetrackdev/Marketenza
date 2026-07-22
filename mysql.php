<?php include 'header.php'; ?>

<!-- Section Main Content -->
<main>
    <!-- Section Banner -->
    <div class="section-banner">
        <div class="banner-layout-wrapper">
            <div class="banner-layout">
                <div class="d-flex flex-column text-center align-items-center gspace-2">
                    <h1 class="title-heading heading-lg animation-box anim-normal anim-delay-sm" data-animation="fade-left">MySQL & PostgreSQL Databases</h1>
                    <nav class="breadcrumb">
                        <a href="index.php" class="gspace-2">Home</a>
                        <span class="separator-link">/</span>
                        <a href="technology.php" class="gspace-2">Technologies</a>
                        <span class="separator-link">/</span>
                        <p class="current-page">MySQL & Postgres</p>
                    </nav>    
                </div>
                <div class="spacer"></div>
            </div>
        </div>
    </div>
    
    <!-- Section Technology Detail -->
    <div class="section pb-0">
        <div class="hero-container">
            <div class="d-flex flex-column flex-lg-row gspace-5 align-items-center mb-5">
                <div class="expertise-img-layout">
                    <div class="image-container expertise-img" style="max-width: 500px;">
                        <img src="image/Photo-14.jpg" alt="MySQL and PostgreSQL Relational Databases" class="img-fluid rounded-4 shadow-sm">
                    </div>
                </div>
                <div class="expertise-title">
                    <div class="sub-heading">
                        <i class="fa-solid fa-database text-primary"></i>
                        <span>Relational ACID Databases</span>
                    </div>
                    <h2 class="title-heading">High-Availability, Indexed & Structured Relational Engines</h2>
                    <p>MySQL and PostgreSQL are the gold standards for relational data storage. At MARKETENZA, we design normalized schemas, complex joins, index optimizations, ACID-compliant transaction pipelines, and read-replica clusters to handle millions of queries with zero downtime.</p>
                </div>
            </div>

            <div class="row row-cols-lg-2 row-cols-1 grid-spacer-5">
                <div class="col col-lg-8">
                    <div class="d-flex flex-column gspace-4">
                        <div class="card service-included">
                            <h4>Why Choose MARKETENZA for Relational Database Architecture?</h4>
                            <div class="underline-accent-short"></div>
                            <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                <div class="col">
                                    <ul class="check-list">
                                        <li>ACID-Compliant Relational Schema Design</li>
                                        <li>Indexing & Slow Query Optimization</li>
                                        <li>Stored Procedures, Triggers & Views</li>
                                        <li>PostgreSQL JSONB Semi-Structured Data</li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="check-list">
                                        <li>Automated Database Backups & Encryption</li>
                                        <li>Primary-Replica Clustering & Failover</li>
                                        <li>ORM Optimization (Entity Framework, Eloquent, Prisma)</li>
                                        <li>AWS RDS & Azure SQL Cloud Administration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col col-lg-4">
                    <div class="d-flex flex-column gspace-3">
                        <div class="card card-body p-4 bg-light rounded-4 border">
                            <h4 class="heading-xs mb-3">Database Stack</h4>
                            <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                                <li><i class="fa-solid fa-check text-primary me-2"></i> MySQL 8.0 & MariaDB</li>
                                <li><i class="fa-solid fa-check text-primary me-2"></i> PostgreSQL 16 & PostGIS</li>
                                <li><i class="fa-solid fa-check text-primary me-2"></i> AWS RDS & Aurora Clusters</li>
                                <li><i class="fa-solid fa-check text-primary me-2"></i> Redis Cache Acceleration</li>
                            </ul>
                        </div>
                        <div class="card card-body p-4 bg-primary text-white rounded-4">
                            <h4 class="heading-xs text-white mb-2">Optimize Database Performance</h4>
                            <p class="small text-white-50 mb-3">Need database schema design, indexing, or slow query optimization?</p>
                            <a href="contact.php" class="btn btn-light text-primary fw-bold w-100">Consult Database Engineers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
