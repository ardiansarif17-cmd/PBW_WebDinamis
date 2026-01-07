<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

/* Ambil semua materi + kursus */
$q = mysqli_query($koneksi, "
    SELECT 
        materi.id,
        materi.judul AS judul_materi,
        materi.deskripsi,
        kursus.judul AS judul_kursus
    FROM materi
    JOIN kursus ON materi.kursus_id = kursus.id
    ORDER BY materi.id DESC
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard User | Edutech Academy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
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

    <?php if (mysqli_num_rows($q) == 0) { ?>
        <p>Belum ada materi tersedia.</p>
    <?php } ?>

    <?php while ($m = mysqli_fetch_assoc($q)) { ?>
      <div class="card-materi">
        <h3><?= htmlspecialchars($m['judul_materi']) ?></h3>

        <!-- status dummy (opsional) -->
        <span class="status-materi status-aktif">Aktif</span>

        <p><?= htmlspecialchars($m['deskripsi']) ?></p>
        <small>Kursus: <?= htmlspecialchars($m['judul_kursus']) ?></small>

        <a href="materi_detail.php?id=<?= $m['id'] ?>">
          Lihat Materi
        </a>
      </div>
    <?php } ?>

  </div>
</div>

</div>
</body>
</html>
