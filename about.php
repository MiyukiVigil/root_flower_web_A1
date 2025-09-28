<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About This Assignment</title>
    <meta name="author" content="Ivan">
    <meta name="keywords" content="About, Assignment, PHP, Frameworks">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="./style/style.css" rel="stylesheet">
    <link rel="icon" href="./images/logo.svg">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="about-page">
    <header>
        <?php include 'includes/navbar.inc'; ?>
    </header>

    <main class="container my-5">
        <div class="about-card p-4 p-md-5 mx-auto">
            <div class="text-center mb-5">
                <h1 class="display-5">Assignment Details</h1>
                <p class="lead text-muted">A summary of the work completed for this project.</p>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h5><i class="bi bi-code-slash"></i> PHP Version Used</h5>
                    <p>This website is running on PHP version: <span class="php-version"><?= phpversion(); ?></span></p>

                    <h5><i class="bi bi-check2-square"></i> Completed Tasks</h5>
                    <ul>
                        <li><i class="bi bi-check"></i><b>Task 1:</b> Home Page (`index.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 2:</b> Main Menu Page (`main_menu.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 3:</b> Products Page (`products.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 4:</b> Workshops Page (`workshops.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 5:</b> Student Works Page (`studentworks.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 6:</b> View Student Work Page (`studentwork_detail.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 7:</b> Profile Page (`profile.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 8:</b> Update Profile Page (`update_profile.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 9:</b> Account Registration Page (`registration.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 10:</b> Process Registration Page (`process_registration.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 11:</b> Workshop Registration Page (`workshop_reg.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 12:</b> Login Page (`login.php`)</li>
                        <li><i class="bi bi-check"></i><b>Task 13:</b> About Page (`about.php`)</li>
                    </ul>

                    <h5><i class="bi bi-x-square"></i> Unattempted or Incomplete Tasks</h5>
                     <ul>
                        <li><i class="bi bi-check"></i>All assigned tasks have been attempted and completed.</li>
                    </ul>

                    <h5><i class="bi bi-box-seam"></i> Frameworks & 3rd Party Libraries</h5>
                    <ul>
                        <li><i class="bi bi-bootstrap-fill"></i><b>Bootstrap v5.3.3</b> - Used as the core CSS framework for layout and components.</li>
                        <li><i class="bi bi-person-bounding-box"></i><b>Bootstrap Icons v1.11.3</b> - Used for iconography throughout the site.</li>
                        <li><i class="bi bi-google"></i><b>Google Fonts</b> - Used for the 'Poppins' and 'Merriweather' typefaces.</li>
                        <li><i class="bi bi-box-arrow-down"></i><b>AOS (Animate on Scroll) v2.3.4</b> - Used for scroll-triggered animations on the home page.</li>
                    </ul>

                    <h5><i class="bi bi-camera-video-fill"></i> Video Presentation</h5>
                    <p>The video presentation showcasing the website's functionalities can be viewed at the link below.</p>
                    <a href="#" class="btn btn-primary"><i class="bi bi-play-btn-fill me-2"></i>Watch Video (Placeholder Link)</a>

                    <hr class="my-4">

                    <div class="text-center">
                        <a href="index.php" class="btn btn-outline-secondary"><i class="bi bi-house-door-fill me-2"></i>Return to Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.inc'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>