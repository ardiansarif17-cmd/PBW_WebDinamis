<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    mysqli_query($koneksi, "
        INSERT INTO users 
        (nama, username, email, whatsapp, password, role, is_active)
        VALUES 
        ('$nama','$username','$email','$whatsapp','$password','$role',1)
    ");

    header("Location: adminUser.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Tambah User</h2>

<form method="post">
    <input type="text" name="nama" placeholder="Nama" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="whatsapp" placeholder="WhatsApp">
    <input type="password" name="password" placeholder="Password" required>

    <select name="role">
        <option value="student">Student</option>
        <option value="admin">Admin</option>
    </select>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>
