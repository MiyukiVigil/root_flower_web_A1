<?php
session_start();

function valid_password($password) {
    return preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $password);
}

$first_name      = trim($_POST['first_name'] ?? '');
$last_name       = trim($_POST['last_name'] ?? '');
$dob             = trim($_POST['dob'] ?? '');
$gender          = trim($_POST['gender'] ?? '');
$email           = trim($_POST['email'] ?? '');
$hometown        = trim($_POST['hometown'] ?? '');
$password        = $_POST['password'] ?? '';
$confirm_password= $_POST['confirm_password'] ?? '';

$errors = [];

// --- Field-specific validations ---
if (empty($first_name) || !preg_match("/^[a-zA-Z ]+$/", $first_name)) {
    $errors['first_name'] = "First name must contain only letters and spaces.";
}

if (empty($last_name) || !preg_match("/^[a-zA-Z ]+$/", $last_name)) {
    $errors['last_name'] = "Last name must contain only letters and spaces.";
}

if (empty($dob)) {
    $errors['dob'] = "Date of birth is required.";
}

if (empty($gender)) {
    $errors['gender'] = "Gender is required.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Please provide a valid email address.";
}

if (empty($hometown)) {
    $errors['hometown'] = "Hometown is required.";
}

if (empty($password) || !valid_password($password)) {
    $errors['password'] = "Password must be at least 8 characters, include 1 number and 1 symbol.";
}

if ($password !== $confirm_password) {
    $errors['confirm_password'] = "Passwords do not match.";
}

// --- If there are errors, redirect back ---
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_POST;
    header("Location: registration.php");
    exit;
}

// --- Save to file ---
// Path inside your project: assignment1/data/User
$dir = __DIR__ . "/data/User";  
$file = $dir . "/user.txt";

// Create directory if it doesn't exist
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

// Create file if it doesn't exist
if (!file_exists($file)) {
    $handle = fopen($file, "w"); // create empty file
    fclose($handle);
}

// Check dupe email
if (file_exists($file)) {
    $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        // Extract email field
        $parts = explode("|", $user);
        foreach ($parts as $field) {
            if (strpos($field, "Email:") === 0) {
                $savedEmail = substr($field, 6); // cut "Email:"
                if (strcasecmp($savedEmail, $email) === 0) { 
                    $_SESSION['errors']['email'] = "This email is already registered.";
                    header("Location: registration.php");
                    exit;
                }
            }
        }
    }
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Format DOB as dd-mm-yyyy (assignment requirement)
$dobFormatted = date("d-m-Y", strtotime($dob));

// Build record
$record = "First Name:$first_name"
        . "|Last Name:$last_name"
        . "|DOB:$dobFormatted"
        . "|Gender:$gender"
        . "|Email:$email"
        . "|Hometown:$hometown"
        . "|Password:$hashed_password\n";

// Append to file
file_put_contents($file, $record, FILE_APPEND);

// --- Redirect on success ---
header("Location: login.php");
exit;
?>