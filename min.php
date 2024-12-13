<?php
// Start the session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Your authentication logic goes here
    // Example: Check if username and password match a record in your database
    if ($username === "your_username" && $password === "your_password") {
        // Authentication successful, redirect to enrollment page
        $_SESSION["username"] = $username;
        header("Location: enrollment.php");
        exit();
    } else {
        // Authentication failed, redirect back to login page with error message
        header("Location: login.html?error=invalid_credentials");
        exit();
    }
}
?>
