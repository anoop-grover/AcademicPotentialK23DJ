<?php
session_start();

$USERNAME = "//Privacy on known to developer";
$PASSWORD = "//Privacy on known to developer"; // Change if you like

$inputUser = $_POST["username"];
$inputPass = $_POST["password"];

if ($inputUser === $USERNAME && $inputPass === $PASSWORD) {
    $_SESSION["logged_in"] = true;
    header("Location: ../admin.html");
    exit();
} else {
    echo "<script>alert('Invalid credentials!'); window.location.href='../admin_login.html';</script>";
}
?>
