<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <meta name="author" content="Ivan">
        <meta name="keywords" content="Flower">
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
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.php">
                        <img src="images/logo.svg" alt="Root Flowers Logo" class="navbar-logo me-2">
                        <span class="brand-logo-text">Root Flowers</span>
                    </a>
                </div>
            </nav>
        </header>
            <section class="hero d-flex align-items-center justify-content-center text-center text-white">
                <div class="hero-content">
                    <h1 class="display-3 fw-bold">🌸 Welcome to Root Flowers</h1>
                    <p class="lead">Bringing joy through bouquets & floral workshops in Kuching</p>
                    <p class="lead">
                        <a href="https://api.whatsapp.com/send?phone=60143399709" class="btn btn-success btn-lg">
                            <i class="bi bi-whatsapp"></i> 0143399709
                        </a>
                    </p>
                    <div class="mt-4">
                        <a href="main_menu.php" class="btn btn-light btn-lg m-2">🌸 Main Menu</a>
                        <a href="login.php" class="btn btn-light btn-lg m-2">🔑 Login</a>   
                        <a href="registration.php" class="btn btn-light btn-lg m-2">📝 Register</a>
                    </div>
                </div>
            </section>
            <section class="py-5 bg-light" data-aos="fade-up">
                <div class="container">
                    <h2 class="text-center section-title" data-aos="zoom-in">Our Flowers</h2>
                    <div class="carousel-wrapper">
                        <div class="carousel-track">
                            <?php
                            $images = glob("images/products/*.jpg");
                            shuffle($images);
                            $images = array_slice($images, 0, 8); // pick 8 random images

                            foreach ($images as $img) {
                                echo '
                                <div class="carousel-item-img">
                                    <img src="'.$img.'" alt="Flower product">
                                </div>
                                ';
                            }

                            // duplicate images for seamless loop
                            foreach ($images as $img) {
                                echo '
                                <div class="carousel-item-img">
                                    <img src="'.$img.'" alt="Flower product">
                                </div>
                                ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init({
            duration: 800,   // animation duration in ms
            easing: 'ease-in-out', 
            once: false       // whether animation should happen only once
            });
        });
        </script>
    </body>
    </html>