<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sesuaikan dengan struktur tabel dan kolom di database Anda
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // Sesuaikan dengan halaman setelah login berhasil
    } else {
        // Login gagal
        echo "Login failed. Invalid username or password.";
    }
}

$conn->close();
?>
