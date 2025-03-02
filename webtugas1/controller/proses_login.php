<?php
session_start();

// Data akun yang benar (Sebaiknya gunakan database)
$valid_username = "admin";
$valid_password = "12345";

// Ambil data dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Cek apakah username & password sesuai
if ($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username; // Simpan session
    header("Location: ../view/home.php"); // Arahkan ke home.php di folder view
    exit();
} else {
    $_SESSION['error'] = "Username atau Password salah!"; // Simpan pesan error
    header("Location: ../view/login.php"); // Kembali ke login.php
    exit();
}
?>
