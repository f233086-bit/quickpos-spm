<?php
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$errors = [];

if (empty($name)) $errors[] = "Name is required";
if (empty($email)) $errors[] = "Email is required";
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
if (empty($message)) $errors[] = "Message is required";

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;font-family:Arial;'>$error</p>";
    }
    echo "<a href='index.php' style='font-family:Arial;'>Go Back</a>";
} else {
    header("Location: thank-you.php");
    exit();
}
?>