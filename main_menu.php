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
        <title>Main Menu</title>
        <meta name="author" content="Ivan">
        <meta name="keywords" content="Main Menu">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
        <link href="./style/style.css" rel="stylesheet">
        <link rel="icon" href="./images/logo.svg">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php include 'includes/navbar.inc'; ?>
        </header>

        <main class="container my-5">
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold">🌸 Main Menu</h1>
                <p class="lead text-muted">Welcome! Select an option below to get started.</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body p-4 d-flex flex-column">
                            <i class="bi bi-box-seam fs-1 text-primary mb-3"></i>
                            <h5 class="card-title">Products</h5>
                            <p class="card-text">Browse our collection of beautiful floral arrangements.</p>
                            <a href="products.php" class="btn btn-primary mt-auto">View Products</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body p-4 d-flex flex-column">
                            <i class="bi bi-pencil-square fs-1 text-primary mb-3"></i>
                            <h5 class="card-title">Workshops</h5>
                            <p class="card-text">Join a workshop and learn the art of flower arrangement.</p>
                            <a href="workshops.php" class="btn btn-primary mt-auto">See Workshops</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body p-4 d-flex flex-column">
                            <i class="bi bi-palette fs-1 text-primary mb-3"></i>
                            <h5 class="card-title">Student Works</h5>
                            <p class="card-text">See the amazing creations from our talented students.</p>
                            <a href="studentworks.php" class="btn btn-primary mt-auto">Explore Gallery</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body p-4 d-flex flex-column">
                            <i class="bi bi-camera fs-1 text-primary mb-3"></i>
                            <h5 class="card-title">Flower Name</h5>
                            <p class="card-text">Identify a flower type by uploading a photo.</p>
                            <a href="#" class="btn btn-secondary mt-auto disabled">Coming Soon</a>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <?php include 'includes/footer.inc' ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>