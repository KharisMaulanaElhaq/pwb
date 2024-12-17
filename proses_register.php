<?php
include("koneksi.php");

$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Cek apakah username sudah ada
$query = "SELECT * FROM users WHERE fullname='$fullname'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Username sudah terdaftar!');window.location='proses_register.php';</script>";
} else {
    // Masukkan data ke tabel login
    $insert = "INSERT INTO users (fullname, password) VALUES ('$fullname', '$password')";
    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Registrasi berhasil! Silakan login.');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan, coba lagi.');window.location='register.php';</script>";
    }
}
?>