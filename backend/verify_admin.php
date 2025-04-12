<?php
session_start();

$USERNAME = "anoopgroverrr";
$PASSWORD = "AcademicPotential123"; // Change if you like

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
