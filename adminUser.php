<?php
include 'auth_admin.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-user">

<header class="header-user">
  <div class="logo-user">Admin Edutech</div>
  <div class="info-user">
    Halo, <?= $_SESSION['nama']; ?>
    <a href="logout.php" class="tombol-logout">Logout</a>
  </div>
</header>

<div class="layout-user">
  <aside class="sidebar-user">
    <a href="admin_dashboard.php">Dashboard</a>
    <a href="adminUser.php" class="menu-aktif">Kelola User</a>
    <a href="adminKursus.php">Kelola Kursus</a>
    <a href="adminMateri.php">Kelola Materi</a>
  </aside>
  <main class="konten-user">
    <h1>Kelola User</h1>
    <a href="addUser.php" class="btn-ungu">+ Tambah User</a>

    <table class="tabel-admin">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Role</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $q = mysqli_query($koneksi, "SELECT * FROM users");
        while ($u = mysqli_fetch_assoc($q)) {
        ?>
        <tr>
          <td><?= $u['nama']; ?></td>
          <td><?= $u['email']; ?></td>
          <td><?= $u['role']; ?></td>
          <td>
            <a href="editUser.php?id=<?= $u['id']; ?>" class="btn-edit">Edit</a>
            <a href="deleteUser.php?id=<?= $u['id']; ?>" class="btn-hapus" onclick="return confirm('Hapus user ini?')">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

  </main>

</div>
</body>
</html>
