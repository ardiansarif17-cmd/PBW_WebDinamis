<?php
session_start();
include 'koneksi.php';

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $koneksi->prepare("
    SELECT * FROM users 
    WHERE email = ? AND is_active = 1
    LIMIT 1
");
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['login'] = true;
    $_SESSION['id']    = $user['id'];
    $_SESSION['nama']  = $user['nama'];
    $_SESSION['role']  = $user['role'];
    if ($user['role'] === 'admin') {
        header("Location: admin_dashboard.php");
    } else {
        header("Location: user_dashboard.php");
    }
    exit;

} else {
    header("Location: login.php?error=login_gagal");
    exit;
}
