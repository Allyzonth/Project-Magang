<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Arahkan pengguna kembali ke halaman login jika belum login
    exit;
}

// Sesuai dengan kode yang Anda berikan sebelumnya
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inosoft";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Dashboard</title>
     <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            color: #000000;
        }

        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 80%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:hover {
            background-color: #e2e6ea;
        }

        @media (max-width: 768px) {
            table {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <a href="logout.php" class="logout-btn">Logout</a>

    <h2>Feedback Dashboard</h2>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nama</th><th>Email</th><th>Feedback</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nama"] . "</td><td>" . $row["email"] . "</td><td>" . $row["pesan"] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Tidak ada feedback.</p>";
    }
    ?>

</body>

</html>

<?php
// Menutup koneksi database
$conn->close();
?>


