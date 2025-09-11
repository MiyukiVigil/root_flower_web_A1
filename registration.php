<?php
session_start();
$errors  = $_SESSION['errors'] ?? [];
$old     = $_SESSION['old'] ?? [];
$success = $_SESSION['success'] ?? '';
unset($_SESSION['errors'], $_SESSION['old'], $_SESSION['success']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="author" content="Ivan">
    <meta name="keywords" content="Register">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link href="./style/style.css" rel="stylesheet">
    <link rel="icon" href="./images/logo.svg">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body id="reg_body">
    <header><?php include 'includes/navbar.inc' ?></header>

    <div class="reg-wrapper">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                
                <div class="col-lg-6 register-info text-center text-lg-start mb-5 mb-lg-0">
                    <h1 class="display-4 text-white fw-bold">Create an account</h1>
                    <p class="lead text-white-75 mt-3">
                        Create an account to exclusive access features in this website such as workshop registration, access our students' work and more!
                    </p>
                    <img src="./images/logo.svg" alt="RootFlowers Logo" class="register-info-logo mt-4">
                </div>

                <div class="col-lg-6">
                    <div class="card register-card">
                        <div class="card-body p-4">
                            <h2 class="text-center mb-4">🌸 Register New Account</h2>

                            <?php if ($success): ?>
                                <div class="alert alert-success"><?= $success ?></div>
                            <?php endif; ?>

                            <form action="process_registration.php" method="POST" novalidate>
                                
                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" 
                                           name="first_name" 
                                           class="form-control <?= !empty($errors['first_name']) ? 'is-invalid' : '' ?>" 
                                           value="<?= htmlspecialchars($old['first_name'] ?? '') ?>" 
                                           required>
                                    <?php if (!empty($errors['first_name'])): ?>
                                        <div class="invalid-feedback"><?= $errors['first_name'] ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" 
                                           name="last_name" 
                                           class="form-control <?= !empty($errors['last_name']) ? 'is-invalid' : '' ?>" 
                                           value="<?= htmlspecialchars($old['last_name'] ?? '') ?>" 
                                           required>
                                    <?php if (!empty($errors['last_name'])): ?>
                                        <div class="invalid-feedback"><?= $errors['last_name'] ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" 
                                           name="dob" 
                                           class="form-control <?= !empty($errors['dob']) ? 'is-invalid' : '' ?>" 
                                           value="<?= htmlspecialchars($old['dob'] ?? '') ?>" 
                                           required>
                                    <?php if (!empty($errors['dob'])): ?>
                                        <div class="invalid-feedback"><?= $errors['dob'] ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select name="gender" 
                                            class="form-select <?= !empty($errors['gender']) ? 'is-invalid' : '' ?>" 
                                            required>
                                        <option value="Female" <?= (isset($old['gender']) && $old['gender']=="Female") ? "selected" : "" ?>>Female</option>
                                        <option value="Male" <?= (isset($old['gender']) && $old['gender']=="Male") ? "selected" : "" ?>>Male</option>
                                    </select>
                                    <?php if (!empty($errors['gender'])): ?>
                                        <div class="invalid-feedback"><?= $errors['gender'] ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" 
                                           name="email" 
                                           class="form-control <?= !empty($errors['email']) ? 'is-invalid' : '' ?>" 
                                           value="<?= htmlspecialchars($old['email'] ?? '') ?>" 
                                           required>
                                    <?php if (!empty($errors['email'])): ?>
                                        <div class="invalid-feedback"><?= $errors['email'] ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Hometown</label>
                                    <input type="text" 
                                           name="hometown" 
                                           class="form-control <?= !empty($errors['hometown']) ? 'is-invalid' : '' ?>" 
                                           value="<?= htmlspecialchars($old['hometown'] ?? '') ?>" 
                                           required>
                                    <?php if (!empty($errors['hometown'])): ?>
                                        <div class="invalid-feedback"><?= $errors['hometown'] ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" 
                                           name="password" 
                                           class="form-control <?= !empty($errors['password']) ? 'is-invalid' : '' ?>" 
                                           required>
                                    <?php if (!empty($errors['password'])): ?>
                                        <div class="invalid-feedback"><?= $errors['password'] ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" 
                                           name="confirm_password" 
                                           class="form-control <?= !empty($errors['confirm_password']) ? 'is-invalid' : '' ?>" 
                                           required>
                                    <?php if (!empty($errors['confirm_password'])): ?>
                                        <div class="invalid-feedback"><?= $errors['confirm_password'] ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>

                            <div class="mt-3 text-center">
                                <a href="index.php" class="text-decoration-none"><i class="bi bi-house-door-fill"></i> Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.inc' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>