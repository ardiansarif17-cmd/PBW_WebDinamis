<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$id = $_GET['id'];

$q = mysqli_query($koneksi, "
    SELECT materi.*, kursus.judul AS nama_kursus
    FROM materi
    JOIN kursus ON materi.kursus_id = kursus.id
    WHERE materi.id='$id'
");

$m = mysqli_fetch_assoc($q);
?>

<!DOCTYPE html>
<html>
<head>
  <title><?= $m['judul'] ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-user">

<h1><?= $m['judul'] ?></h1>
<p><strong>Kursus:</strong> <?= $m['nama_kursus'] ?></p>
<p><?= nl2br($m['deskripsi']) ?></p>

<a href="user_materi.php">⬅ Kembali</a>

</body>
</html>
