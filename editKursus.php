<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT * FROM kursus WHERE id='$id'")
);

if (isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi, "
        UPDATE kursus SET
        judul='$judul',
        deskripsi='$deskripsi'
        WHERE id='$id'
    ");

    header("Location: adminKursus.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kursus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Kursus</h2>

<form method="post">
    <input type="text" name="judul" value="<?= $data['judul'] ?>" required>
    <textarea name="deskripsi"><?= $data['deskripsi'] ?></textarea>

    <button type="submit" name="update">Update</button>
</form>

</body>
</html>
