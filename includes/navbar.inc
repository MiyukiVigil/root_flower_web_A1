<?php
echo <<<NAVBAR
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm py-2">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.svg" alt="Root Flowers Logo" class="navbar-logo">
            <span class="brand-logo-text ms-2">Root Flowers</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarRoot" aria-controls="navbarRoot" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarRoot">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item"><a class="nav-link <?= (\$currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= (\$currentPage == 'products.php') ? 'active' : '' ?>" href="products.php">Products</a></li>
                <li class="nav-item"><a class="nav-link <?= (\$currentPage == 'workshops.php') ? 'active' : '' ?>" href="workshops.php">Workshops</a></li>
                <li class="nav-item"><a class="nav-link <?= (\$currentPage == 'studentworks.php') ? 'active' : '' ?>" href="studentworks.php">Student Works</a></li>
                <li class="nav-item"><a class="nav-link disabled" href="#">Flower Name</a></li>
                <li class="nav-item"><a class="btn btn-light rounded-pill ms-lg-3 px-3 py-2" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
NAVBAR;
?>