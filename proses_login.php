<?php
session_start();
include("koneksi.php");

$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "SELECT * FROM users WHERE fullname='$fullname' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
        $_SESSION['fullname'] = $row['fullname']; // Simpan fullname ke session
    // Menambahkan notifikasi login berhasil
    echo "<script>
            alert('Login berhasil! Selamat datang $fullname');
            window.location='home.php';
          </script>";
} else {
    echo "<script>alert('salah bro santai aja coba ulangi lagi 😁!');window.location='index.html';</script>";
}
?>
