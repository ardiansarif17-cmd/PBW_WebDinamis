<?php
include 'auth_admin.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Kursus</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-user">

<header class="header-user">
  <div class="logo-user">Admin Edutech</div>
  <div>
    Halo, <?= $_SESSION['nama']; ?>
    <a href="logout.php" class="tombol-logout">Logout</a>
  </div>
</header>

<div class="layout-user">

<aside class="sidebar-user">
  <a href="admin_dashboard.php">Dashboard</a>
  <a href="adminUser.php">Kelola User</a>
  <a href="adminKursus.php" class="menu-aktif">Kelola Kursus</a>
  <a href="adminMateri.php">Kelola Materi</a>
</aside>

<main class="konten-user">
  <h1>Kelola Kursus</h1>
  <a href="addKursus.php" class="btn-ungu">+ Tambah Kursus</a>

  <table class="tabel-admin">
    <tr>
      <th>Judul</th>
      <th>Deskripsi</th>
      <th>Aksi</th>
    </tr>

    <?php
    $q = mysqli_query($koneksi, "SELECT * FROM kursus");
    while ($k = mysqli_fetch_assoc($q)) {
    ?>
    <tr>
      <td><?= $k['judul']; ?></td>
      <td><?= $k['deskripsi']; ?></td>
      <td>
        <a href="editKursus.php?id=<?= $k['id']; ?>" class="btn-edit">Edit</a>
        <a href="deleteKursus.php?id=<?= $k['id']; ?>" class="btn-hapus"
           onclick="return confirm('Hapus kursus ini?')">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</main>

</div>
</body>
</html>
