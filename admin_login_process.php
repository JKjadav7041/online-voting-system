<?php
session_start();

$admin_username = $_POST['admin_username'];
$admin_password = $_POST['admin_password'];

// Simple static login (you can use database instead)
if ($admin_username == 'jivraj' && $admin_password == '83206') {
    $_SESSION['admin_logged_in'] = true;
    header("Location: admin.php");
    exit();
} else {
    echo "<script>alert('Invalid credentials'); window.location='admin_login.php';</script>";
}
?>
