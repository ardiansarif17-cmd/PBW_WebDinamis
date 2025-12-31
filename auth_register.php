<?php
include 'koneksi.php';

$nama     = $_POST['nama'];
$username = $_POST['username'];
$email    = $_POST['email'];
$wa       = $_POST['whatsapp'];
$password = $_POST['password'];
$confirm  = $_POST['confirm_password'];
if ($password !== $confirm) {
    echo "Password tidak sama";
    exit;
}
$cek = mysqli_query($koneksi, "SELECT id FROM users WHERE email='$email'");
if (mysqli_num_rows($cek) > 0) {
    echo "Email sudah terdaftar";
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

mysqli_query($koneksi, "
    INSERT INTO users (nama, username, email, whatsapp, password)
    VALUES ('$nama', '$username', '$email', '$wa', '$hash')
");

header("Location: user_dashboard.php");
exit;
?>
