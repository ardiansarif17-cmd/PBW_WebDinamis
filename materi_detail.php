<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'] ?? 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Materi</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="halaman-user">

  <div class="konten-user">
    <a href="user_materi.php">← Kembali ke Materi</a>

    <h1>Materi ID: <?= htmlspecialchars($id) ?></h1>

    <div class="card-materi">
      <h3>cyberSecurity dasar</h3>
      <p>Penjelasan lengkap materi di sini.</p>

    <div class="video-wrapper">
      <video controls>
        <source src="images/konfigurasi_jaringan.mp4" type="video/mp4">
      </video>
    </div>


    </div>
  </div>

</body>
</html>
