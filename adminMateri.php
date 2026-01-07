<?php
include 'auth_admin.php';
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Materi | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body class="halaman-user">

<header class="header-user">
    <div class="logo-user">Admin Edutech</div>
    <div class="info-user">
        Halo, <strong><?= $_SESSION['nama']; ?></strong>
        <a href="logout.php" class="tombol-logout"
           onclick="return confirm('Yakin logout?')">Logout</a>
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
        <div class="card-admin">

            <div class="card-header">
                <h1>Kelola Materi</h1>
                <a href="addMateri.php" class="btn-ungu">+ Tambah Materi</a>
            </div>

            <table class="tabel-admin">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Materi</th>
                        <th>Kursus</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                $no = 1;
                $q = mysqli_query($koneksi, "
                    SELECT 
                        materi.id,
                        materi.judul,
                        kursus.judul AS judul_kursus
                    FROM materi
                    JOIN kursus ON materi.kursus_id = kursus.id
                    ORDER BY materi.id DESC
                ");

                if (mysqli_num_rows($q) > 0) {
                    while ($m = mysqli_fetch_assoc($q)) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($m['judul']); ?></td>
                        <td><?= htmlspecialchars($m['judul_kursus']); ?></td>
                        <td class="aksi">
                            <a href="editMateri.php?id=<?= $m['id']; ?>" class="btn-edit">Edit</a>
                            <a href="deleteMateri.php?id=<?= $m['id']; ?>"
                               class="btn-hapus"
                               onclick="return confirm('Yakin hapus materi ini?')">
                               Hapus
                            </a>
                        </td>
                    </tr>
                <?php
                    }
                } else {
                ?>
                    <tr>
                        <td colspan="4" style="text-align:center;">Belum ada materi</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </main>

</div>
</body>
</html>
