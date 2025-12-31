<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard User | Edutech Academy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="halaman-user">
<header class="header-user">
  <div class="logo-user">Edutech Academy</div>

  <div class="info-user">
    👋 Halo, <strong><?= $_SESSION['nama']; ?></strong>
    <a href="logout.php" class="tombol-logout"
       onclick="return confirm('Yakin ingin logout?')">Logout</a>
  </div>
</header>
<div class="layout-user">
<aside class="sidebar-user">
  <a href="user_dashboard.php">Dashboard</a>
  <a href="user_kursus.php" class="menu-aktif">Kursus Saya</a>
  <a href="user_materi.php">Materi</a>
</aside>


<div class="konten-user">
  <h1>Kursus Saya</h1>
  <div class="daftar-kursus">
    <div class="card-kursus">
      <h3>Fullstack Web Developer</h3>
      <span class="status aktif">Aktif</span>
      <a href="#" class="tombol-aksi">Lanjutkan</a>
    </div>

    <div class="card-kursus">
      <h3>cyberSecurity</h3>
      <span class="status aktif">Aktif</span>
      <a href="#" class="tombol-aksi">Lanjutkan</a>
    </div>
  </div>
</div>
</div>
</body>
</html>
