<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $kursus_id = $_POST['kursus_id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi, "
        INSERT INTO materi (kursus_id, judul, deskripsi)
        VALUES ('$kursus_id','$judul','$deskripsi')
    ");

    header("Location: adminMateri.php");
    exit;
}

$kursus = mysqli_query($koneksi, "SELECT * FROM kursus");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Materi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Tambah Materi</h2>

<form method="post">

    <select name="kursus_id" required>
        <option value="">-- Pilih Kursus --</option>
        <?php while($k = mysqli_fetch_assoc($kursus)) { ?>
            <option value="<?= $k['id'] ?>"><?= $k['judul'] ?></option>
        <?php } ?>
    </select>

    <input type="text" name="judul" placeholder="Judul Materi" required>
    <textarea name="deskripsi" placeholder="Deskripsi Materi"></textarea>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>
