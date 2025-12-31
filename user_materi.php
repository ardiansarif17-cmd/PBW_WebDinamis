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
    href="https:
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
  <a href="user_kursus.php">Kursus Saya</a>
  <a href="user_materi.php" class="menu-aktif">Materi</a>
</aside>
<div class="konten-user">
  <h1>Materi</h1>
  <p>Daftar materi pembelajaran yang tersedia</p>
  <div class="materi-grid">
    <div class="card-materi">
      <h3>HTML Dasar</h3>
      <span class="status-materi status-selesai">Selesai</span>
      <p>Pengenalan struktur HTML dan elemen dasar.</p>
      <a href="#">Lihat Materi</a>
    </div>
    <div class="card-materi">
      <h3>cyberSecurity Dasar</h3>
      <span class="status-materi status-aktif">Aktif</span>
      <p>Pengenalan jaringan</p>
     <a href="materi_detail.php?id=2">Lanjutkan</a>
    </div>
    <div class="card-materi materi-terkunci">
      <h3>JavaScript Dasar</h3>
      <span class="status-materi status-terkunci">Terkunci</span>
      <p>Materi akan terbuka setelah menyelesaikan CSS.</p>
      <a href="#">Terkunci</a>
    </div>
  </div>
</div>
</div>
</body>
</html>
