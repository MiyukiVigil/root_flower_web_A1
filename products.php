<?php 
    session_start();

    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Products</title>
        <meta name="author" content="Ivan">
        <meta name="keywords" content="Products">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <link href="./style/style.css" rel="stylesheet">
        <link rel="icon" href="./images/logo.svg">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body class="product-page">
       <header>
            <?php include 'includes/navbar.inc'; ?>
       </header>
        <section class="page-header text-center text-white py-5" style="background: url('./images/hero.jpg') no-repeat center center/cover;">
            <div class="container hero-content">
                <h1 class="display-4 fw-bold">Our Products</h1>
                <p class="lead">Handcrafted bouquets and arrangements for every occasion.</p>
            </div>
        </section>
        <main class="container my-5">
            <div class="mb-5">
                <h2 class="section-title">Occasion Bouquets</h2>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product7.jpg" class="card-img-top" alt="Graduation Bear Bouquet">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Graduation Bouquet<br>毕业花束</h5>
                                <p class="card-text">A perfect tribute to their hard work! This charming bouquet features an adorable graduation bear to celebrate their achievement in style.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product10.jpg" class="card-img-top" alt="Birthday Balloon Bouquet">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Soap Roses Bouquet<br>玫瑰香皂花花束</h5>
                                <p class="card-text">Celebrate their special day with a gift that lasts. This stunning bouquet features intricately crafted soap roses and a personalized birthday balloon.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product9.jpg" class="card-img-top" alt="Snack Bouquet">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Snacks Bouquet<br>零食花束</h5>
                                <p class="card-text">Surprise the foodie in your life! This fun and generous bouquet is overflowing with a delicious assortment of popular snacks.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product12.jpg" class="card-img-top" alt="Chinese New Year Lantern Arrangement">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Lunar New Year Arrangement<br>年宵花</h5>
                                <p class="card-text">Usher in good fortune for the Lunar New Year. This vibrant arrangement is designed with auspicious colors and a classic red lantern.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product11.jpg" class="card-img-top" alt="Lucky Sunflower Bouquet">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Opening Flowers Stand<br>开张花架</h5>
                                <p class="card-text">Wish them great success with this impressive opening flower stand. Bright sunflowers and a lucky cat bring energy and good fortune.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product8.jpg" class="card-img-top" alt="Grand Opening Flower Basket">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Opening Flowers Basket<br>开张花篮</h5>
                                <p class="card-text">A classic gesture of success. Congratulate a new venture with this elegant flower basket, designed to wish them luck and prosperity.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h2 class="section-title">The Signature Collection</h2>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product7.jpg" class="card-img-top" alt="Graduation Bear Bouquet">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Graduation Bouquet<br>毕业花束</h5>
                                <p class="card-text">A perfect tribute to their hard work! This charming bouquet features an adorable graduation bear to celebrate their achievement in style.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product10.jpg" class="card-img-top" alt="Birthday Balloon Bouquet">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Soap Roses Bouquet<br>玫瑰香皂花花束</h5>
                                <p class="card-text">Celebrate their special day with a gift that lasts. This stunning bouquet features intricately crafted soap roses and a personalized birthday balloon.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product9.jpg" class="card-img-top" alt="Snack Bouquet">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Snacks Bouquet<br>零食花束</h5>
                                <p class="card-text">Surprise the foodie in your life! This fun and generous bouquet is overflowing with a delicious assortment of popular snacks.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product12.jpg" class="card-img-top" alt="Chinese New Year Lantern Arrangement">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Lunar New Year Arrangement<br>年宵花</h5>
                                <p class="card-text">Usher in good fortune for the Lunar New Year. This vibrant arrangement is designed with auspicious colors and a classic red lantern.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product11.jpg" class="card-img-top" alt="Lucky Sunflower Bouquet">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Opening Flowers Stand<br>开张花架</h5>
                                <p class="card-text">Wish them great success with this impressive opening flower stand. Bright sunflowers and a lucky cat bring energy and good fortune.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm product-card">
                            <img src="./images/products/occasion_prod/product8.jpg" class="card-img-top" alt="Grand Opening Flower Basket">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Opening Flowers Basket<br>开张花篮</h5>
                                <p class="card-text">A classic gesture of success. Congratulate a new venture with this elegant flower basket, designed to wish them luck and prosperity.</p>
                                <p class="fw-bold fs-5 text-primary mt-auto pt-2">Price: N/A</p>
                                <a href="#" class="btn btn-primary disabled">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h2 class="section-title">Special Arrangements</h2>
                <div class="row g-4">
                    <p class="text-muted">Content for this category will be added soon.</p>
                </div>
            </div>

        </main>

        <?php include 'includes/footer.inc'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>