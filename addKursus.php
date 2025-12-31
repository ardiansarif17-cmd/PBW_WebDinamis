<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi, "
        INSERT INTO kursus (judul, deskripsi)
        VALUES ('$judul', '$deskripsi')
    ");

    header("Location: adminKursus.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kursus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Tambah Kursus</h2>

<form method="post">
    <input type="text" name="judul" placeholder="Judul Kursus" required>
    <textarea name="deskripsi" placeholder="Deskripsi Kursus"></textarea>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>
