<?php
// This is a simple example. In a real-world scenario, you should perform proper validation and use secure methods for handling passwords.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Your authentication logic here (e.g., check against a database)

    // For simplicity, let's assume valid credentials are "user" and "password"
    if ($username == "nabinjana" && $password == "password") {
        echo "Login successful!";
    } else {
        echo "Invalid username or password";
    }
}
?>
