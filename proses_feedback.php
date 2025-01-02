<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan kunci-kunci yang dibutuhkan ada sebelum mengaksesnya
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';

    if (!empty($nama) && !empty($pesan)) {
        // Sesuaikan koneksi database dengan informasi Anda
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inosoft";

        // Membuat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi Gagal: " . $conn->connect_error);
        }

        // Memasukkan data ke dalam database
        $sql = "INSERT INTO feedback (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['feedback_success'] = "Feedback berhasil dikirim";
        } else {
            $_SESSION['feedback_error'] = "Error: " . $sql . "<br>" . $conn->error;
        }

        // Menutup koneksi database
        $conn->close();
    } else {
        $_SESSION['feedback_error'] = "Data yang diterima tidak lengkap";
    }
} else {
    $_SESSION['feedback_error'] = "Metode pengiriman data tidak valid";
}

// Redirect kembali ke index.php
header("Location: home.php");
exit();
?>
