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
  <a href="user_dashboard.php" class="menu-aktif">Dashboard</a>
  <a href="user_kursus.php">Kursus Saya</a>
  <a href="user_materi.php">Materi</a>
</aside>
  <main class="konten-user">
    <h1>Dashboard Member</h1>
    <p>Selamat datang di area member Edutech Academy.</p>
    <div class="kotak-ringkasan">
      <div class="card-ringkasan">
        <h3>Kursus Diikuti</h3>
        <p>3</p>
      </div>
      <div class="card-ringkasan">
        <h3>Status Akun</h3>
        <p>Aktif</p>
      </div>
      <div class="card-ringkasan">
        <h3>Progress Belajar</h3>
        <p>25%</p>
      </div>
    </div>
  </main>
</div>
</body>
</html>
