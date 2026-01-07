<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'koneksi.php';

/* PROTEKSI ADMIN */
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

/* SIMPAN DATA */
if (isset($_POST['simpan'])) {
    $kursus_id  = $_POST['kursus_id'];
    $judul      = $_POST['judul'];
    $deskripsi  = $_POST['deskripsi'];

    mysqli_query($koneksi, "
        INSERT INTO materi (kursus_id, judul, deskripsi)
        VALUES ('$kursus_id', '$judul', '$deskripsi')
    ");

    header("Location: adminMateri.php");
    exit;
}

/* AMBIL DATA KURSUS */
$kursus = mysqli_query($koneksi, "SELECT * FROM kursus ORDER BY judul ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Materi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="halaman-admin">

<header class="header-user">
    <div class="logo-user">Admin Edutech</div>
    <a href="adminMateri.php" class="tombol-logout">Kembali</a>
</header>

<div class="konten-user">

    <h1>Tambah Materi</h1>

    <form method="post" class="form-admin">

        <label>Kursus</label>
        <select name="kursus_id" required>
            <option value="">-- Pilih Kursus --</option>
            <?php while ($k = mysqli_fetch_assoc($kursus)) { ?>
                <option value="<?= $k['id'] ?>">
                    <?= htmlspecialchars($k['judul']) ?>
                </option>
            <?php } ?>
        </select>

        <label>Judul Materi</label>
        <input type="text" name="judul" placeholder="Judul Materi" required>

        <label>Deskripsi Materi</label>
        <textarea name="deskripsi" placeholder="Deskripsi Materi"></textarea>
        <button type="submit" name="simpan" class="btn-primary">
            Simpan Materi
        </button>

    </form>

</div>

</body>
</html>
