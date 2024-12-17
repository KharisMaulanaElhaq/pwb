<?php
$host = "sql112.infinityfree.com"; // Server database
$user = "if0_37478939";      // Username database
$pass = "0erYx20d31";          // Password database
$db   = "if0_37478939_user_database";     // Nama database

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>