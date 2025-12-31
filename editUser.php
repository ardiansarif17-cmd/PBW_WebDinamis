<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';
$id = $_GET['id'];

$user = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT * FROM users WHERE id=$id")
);

if (isset($_POST['update'])) {
    mysqli_query($koneksi, "
        UPDATE users SET
        nama='{$_POST['nama']}',
        email='{$_POST['email']}',
        whatsapp='{$_POST['whatsapp']}',
        role='{$_POST['role']}',
        is_active='{$_POST['is_active']}'
        WHERE id=$id
    ");

    header("Location: adminUser.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit User</h2>

<form method="post">
<input type="text" name="nama" value="<?= $user['nama'] ?>">
<input type="email" name="email" value="<?= $user['email'] ?>">
<input type="text" name="whatsapp" value="<?= $user['whatsapp'] ?>">

<select name="role">
<option value="student" <?= $user['role']=='student'?'selected':'' ?>>Student</option>
<option value="admin" <?= $user['role']=='admin'?'selected':'' ?>>Admin</option>
</select>

<select name="is_active">
<option value="1">Aktif</option>
<option value="0">Nonaktif</option>
</select>

<button name="update">Update</button>
</form>

</body>
</html>
