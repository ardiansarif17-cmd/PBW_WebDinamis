<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM kursus WHERE id=$id");
header("Location: adminKursus.php");
