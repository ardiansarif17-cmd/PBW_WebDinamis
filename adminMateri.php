<?php
include 'auth_admin.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Materi</title>
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
  <a href="adminKursus.php">Kelola Kursus</a>
  <a href="adminMateri.php" class="menu-aktif">Kelola Materi</a>
</aside>

<main class="konten-user">
  <h1>Kelola Materi</h1>
  <a href="addMateri.php" class="btn-ungu">+ Tambah Materi</a>

  <table class="tabel-admin">
    <tr>
      <th>Judul Materi</th>
      <th>Kursus</th>
      <th>Aksi</th>
    </tr>

    <?php
    $q = mysqli_query($koneksi, "
      SELECT materi.id, materi.judul, kursus.judul AS judul_kursus
      FROM materi
      JOIN kursus ON materi.kursus_id = kursus.id
    ");

    while ($m = mysqli_fetch_assoc($q)) {
    ?>
    <tr>
      <td><?= $m['judul']; ?></td>
      <td><?= $m['judul_kursus']; ?></td>
      <td>
        <a href="editMateri.php?id=<?= $m['id']; ?>" class="btn-edit">Edit</a>
        <a href="deleteMateri.php?id=<?= $m['id']; ?>" class="btn-hapus"
           onclick="return confirm('Hapus materi ini?')">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</main>

</div>
</body>
</html>
