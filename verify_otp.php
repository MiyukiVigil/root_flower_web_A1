<?php
session_start();

// Check which action this verification is for (register or reset)
$action = $_GET['action'] ?? 'register';

if ($action === 'register') {
    if (!isset($_SESSION['registration_data'])) {
        header("Location: registration.php");
        exit;
    }
    $page_title = "Verify Your Account";
    $email = $_SESSION['registration_data']['email'];
} else { // This part is for password reset
    if (!isset($_SESSION['reset_email'])) {
        header("Location: forgot_password.php");
        exit;
    }
    $page_title = "Verify Password Reset";
    $email = $_SESSION['reset_email'];
}


$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_otp = trim($_POST['otp']);
    
    // Check if OTP has expired
    if (time() > $_SESSION['otp_expiry']) {
        $error = "OTP has expired. Please request a new one.";
    } elseif ($user_otp == $_SESSION['registration_otp']) {
        
        if ($action === 'register') {
            // --- Success! Finalize Registration ---
            $data = $_SESSION['registration_data'];
            $hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);
            $dobFormatted = date("d-m-Y", strtotime($data['dob']));

            $record = "First Name:{$data['first_name']}|Last Name:{$data['last_name']}|DOB:{$dobFormatted}|Gender:{$data['gender']}|Email:{$data['email']}|Hometown:{$data['hometown']}|Password:{$hashed_password}\n";

            $file = __DIR__ . "/../../data/User/user.txt";
            file_put_contents($file, $record, FILE_APPEND);

            // Clean up session
            unset($_SESSION['registration_data'], $_SESSION['registration_otp'], $_SESSION['otp_expiry']);
            
            $_SESSION['success_message'] = "Registration complete! You can now log in.";
            header("Location: login.php");
            exit;
        } else { // Success for password reset
            $_SESSION['otp_verified'] = true; // Set flag for reset_password page
            header("Location: reset_password.php");
            exit;
        }

    } else {
        $error = "Invalid OTP. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?= $page_title ?></title>
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
                            <h2 class="text-center mb-3"><?= $page_title ?></h2>
                            <p class="text-center text-white-75 mb-4">An OTP has been sent to <strong><?= htmlspecialchars($email) ?></strong>. Please enter it below.</p>
                            
                            <?php if ($error): ?>
                                <div class="alert alert-danger text-center"><?= $error ?></div>
                            <?php endif; ?>

                            <form method="POST" action="verify_otp.php?action=<?= $action ?>">
                                <div class="mb-3">
                                    <label class="form-label">Enter 6-Digit OTP</label>
                                    <input type="text" name="otp" class="form-control text-center" maxlength="6" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Verify</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>