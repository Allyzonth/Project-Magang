
<?php
session_start();
require_once("db.php");

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi input untuk menghindari serangan SQL Injection
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Gunakan prepared statements untuk keamanan
    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login berhasil
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // Sesuaikan dengan halaman setelah login berhasil
        exit;
    } else {
        // Login gagal
        $error_message = "Invalid username or password. Please try again.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="path/to/your/style.css">
    <!-- Gantilah path di atas dengan path yang benar ke file CSS Anda -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(to right, #141e30, #243b55);
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            color: #007bff;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button,
        .form-group a {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; /* Untuk link */
            margin-right: 10px;
        }

        .form-group button:hover,
        .form-group a:hover {
            background-color: #0056b3;
        }

        .back-link {
            background-color: #dc3545; /* Warna merah untuk tombol back */
        }

        .back-link:hover {
            background-color: #bb2d3b; /* Warna merah gelap untuk tombol back saat dihover */
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if ($error_message !== "") : ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form class="login-form" action="login.php" method="post">
            <div class="form-group">

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
            <button type="button" class="back-button" onclick="window.location.href='home.php'">&#60;</button>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>
