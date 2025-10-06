<?php
session_start();

// Ensure the user has verified their OTP before accessing this page
if (!isset($_SESSION['otp_verified']) || !$_SESSION['otp_verified']) {
    header("Location: login.php");
    exit;
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basic password validation
    if (empty($password) || strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($errors)) {
        // --- Success! Update the password in the user file ---
        $email_to_update = $_SESSION['reset_email'];
        $file = __DIR__ . "/../../data/User/user.txt";
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $updated_lines = [];
        
        foreach ($lines as $line) {
            if (strpos($line, "Email:$email_to_update") !== false) {
                $parts = explode('|', $line);
                $new_parts = [];
                foreach ($parts as $part) {
                    if (strpos($part, "Password:") === 0) {
                        $new_parts[] = "Password:" . password_hash($password, PASSWORD_DEFAULT);
                    } else {
                        $new_parts[] = $part;
                    }
                }
                $updated_lines[] = implode('|', $new_parts);
            } else {
                $updated_lines[] = $line;
            }
        }

        file_put_contents($file, implode("\n", $updated_lines) . "\n");

        // Clean up session and redirect
        unset($_SESSION['reset_email'], $_SESSION['registration_otp'], $_SESSION['otp_expiry'], $_SESSION['otp_verified']);
        $_SESSION['success_message'] = "Password has been updated! Please log in.";
        header("Location: login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Set New Password</title>
        <meta name="author" content="Ivan">
            <meta name="keywords" content="Login">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
            <link href="./style/style.css" rel="stylesheet">
            <link rel="icon" href="./images/logo.svg">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body class="reg-body">
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
        <div class="reg-wrapper">
            <div class="container">
                <div class="col-lg-6 mx-auto">
                    <div class="card register-card">
                        <div class="card-body p-4">
                            <h2 class="text-center mb-4">Set a New Password</h2>
                            
                            <?php if (!empty($errors)): ?>
                                <div class="alert alert-danger">
                                    <?php foreach ($errors as $error): ?>
                                        <p class="mb-0"><?= $error ?></p>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <form method="POST" action="reset_password.php">
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm New Password</label>
                                    <input type="password" name="confirm_password" class="form-control" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>