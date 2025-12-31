<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-admin">
<header class="admin-header">
    <div class="admin-logo">Admin Edutech</div>
    <div class="admin-info">
        Halo, <?= $_SESSION['nama']; ?>
        <a href="logout.php" class="admin-logout">Logout</a>
    </div>
</header>
<div class="admin-layout">
    <aside class="admin-sidebar">
        <a href="dashboard.php" class="menu-aktif">Dashboard</a>
        <a href="adminUser.php">Kelola User</a>
        <a href="adminKursus.php">Kelola Kursus</a>
        <a href="adminMateri.php">Kelola Materi</a>
    </aside>
    <main class="admin-konten">
        <h1>Dashboard Admin</h1>
        <p>Ringkasan data sistem</p>
        <div class="admin-ringkasan">
            <div class="admin-card">
                <h3>Total User</h3>
                <p>120</p>
            </div>
            <div class="admin-card">
                <h3>Total Kursus</h3>
                <p>8</p>
            </div>
            <div class="admin-card">
                <h3>Total Materi</h3>
                <p>64</p>
            </div>
        </div>
    </main>

</div>
</body>
</html>
