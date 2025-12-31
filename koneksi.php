<?php
$host = "localhost";
$user = "root";
$pass = "sarif15991";
$db   = "kursus_db";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
