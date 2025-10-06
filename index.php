<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Root Flowers - Bouquets & Floral Workshops in Kuching</title>
        <meta name="author" content="Ivan">
        <meta name="keywords" content="Flower, Kuching, Bouquet, Workshop, Florist">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
        <link href="./style/style.css" rel="stylesheet">
        <link rel="icon" href="./images/logo.svg">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body class="index-page">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm py-2">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo.svg" alt="Root Flowers Logo" class="navbar-logo">
                        <span class="brand-logo-text ms-2">Root Flowers</span>
                    </a>
                </div>
            </nav>
        </header>

        <section class="hero d-flex align-items-center justify-content-center text-center text-white">
            <div class="hero-content">
                <h1 class="display-3 fw-bold">🌸 Welcome to Root Flowers</h1>
                <p class="lead">Bringing joy through bouquets & floral workshops in Kuching</p>
                <div class="mt-4">
                    <a href="main_menu.php" class="btn btn-primary btn-lg m-2"><i class="bi bi-grid-3x3-gap-fill me-2"></i>Main Menu</a>
                    <a href="login.php" class="btn btn-light btn-lg m-2"><i class="bi bi-box-arrow-in-right me-2"></i>Login</a>
                    <a href="registration.php" class="btn btn-light btn-lg m-2"><i class="bi bi-person-plus-fill me-2"></i>Register</a>   
                </div>
                 <p class="mt-4">
                    <a href="https://api.whatsapp.com/send?phone=60143399709" class="btn btn-success">
                        <i class="bi bi-whatsapp"></i> Chat with Us on WhatsApp
                    </a>
                </p>
            </div>
        </section>

        <!-- "Why Choose Us" Section -->
        <section class="py-5">
            <div class="container text-center">
                 <h2 class="section-title mb-5">Why Choose Root Flowers?</h2>
                 <div class="row g-4">
                     <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                         <div class="feature-box">
                            <div class="feature-icon"><i class="bi bi-palette-fill"></i></div>
                            <h5 class="mt-3">Creative Designs</h5>
                            <p class="text-muted">Unique, handcrafted bouquets for every occasion, made with love and artistry.</p>
                         </div>
                     </div>
                     <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                         <div class="feature-box">
                            <div class="feature-icon"><i class="bi bi-award-fill"></i></div>
                            <h5 class="mt-3">Expert-Led Workshops</h5>
                            <p class="text-muted">Learn from experienced florists in a fun, hands-on, and supportive environment.</p>
                         </div>
                     </div>
                     <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-box">
                            <div class="feature-icon"><i class="bi bi-patch-check-fill"></i></div>
                            <h5 class="mt-3">Fresh & Quality Blooms</h5>
                            <p class="text-muted">We source the freshest flowers to ensure your arrangements are vibrant and long-lasting.</p>
                        </div>
                     </div>
                 </div>
            </div>
        </section>

        <!-- New Infinite Scrolling Product Carousel -->
        <section class="py-5 bg-light">
            <div class="container-fluid">
                <h2 class="text-center section-title mb-5">Our Signature Bouquets</h2>
                <div class="product-carousel-wrapper" data-aos="fade-in">
                    <div class="product-carousel-track">
                        <?php
                            // Fetch images and limit to 8 for performance
                            $images = glob("images/products/signature_prod/*.jpg");
                            shuffle($images);
                            $images_to_show = array_slice($images, 0, 8); 
                            
                            // Duplicate the array to create a seamless loop
                            $looped_images = array_merge($images_to_show, $images_to_show);

                            // Loop through and display product cards
                            foreach ($looped_images as $img) {
                                echo '
                                <div class="carousel-product-card">
                                    <div class="card-img-container">
                                        <img src="' . $img . '" class="card-img-top" alt="Featured Bouquet">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="products.php" class="btn btn-sm btn-outline-primary mt-1">View Collection</a>
                                    </div>
                                </div>
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Assignment Links Section -->
        <section class="assignment-links-section py-5">
            <div class="container text-center" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                         <h2 class="section-title mb-3">Project & Profile Information</h2>
                         <p class="lead text-muted mb-4">
                            Explore the assignment details, completed tasks, and view my student profile page.
                         </p>
                         <div>
                            <a href="about.php" class="btn btn-primary btn-lg m-2"><i class="bi bi-info-circle-fill me-2"></i>About This Assignment</a>
                            <a href="profile.php" class="btn btn-outline-primary btn-lg m-2"><i class="bi bi-person-circle me-2"></i>My Profile</a>
                         </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- AOS (Animate on Scroll) JS -->
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

        <!-- Initialize AOS -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out', 
                    once: true
                });
            });
        </script>
    </body>
</html>

