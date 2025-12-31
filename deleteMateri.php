<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM materi WHERE id=$id");
header("Location: adminMateri.php");
