<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT * FROM materi WHERE id='$id'")
);

$kursus = mysqli_query($koneksi, "SELECT * FROM kursus");

if (isset($_POST['update'])) {
    $kursus_id = $_POST['kursus_id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($koneksi, "
        UPDATE materi SET
        kursus_id='$kursus_id',
        judul='$judul',
        deskripsi='$deskripsi'
        WHERE id='$id'
    ");

    header("Location: adminMateri.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Materi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Materi</h2>

<form method="post">

    <select name="kursus_id" required>
        <?php while($k = mysqli_fetch_assoc($kursus)) { ?>
            <option value="<?= $k['id'] ?>"
                <?= $k['id']==$data['kursus_id']?'selected':'' ?>>
                <?= $k['judul'] ?>
            </option>
        <?php } ?>
    </select>

    <input type="text" name="judul" value="<?= $data['judul'] ?>" required>
    <textarea name="deskripsi"><?= $data['deskripsi'] ?></textarea>

    <button type="submit" name="update">Update</button>
</form>

</body>
</html>
