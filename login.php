<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM penyewa WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "<p style='color: red; text-align: center;'>Username atau password salah!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PT Bendi Car</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <div class="container">
        <h2>Login PT Bendi Car</h2>
        <form action="" method="post">
            <label>Username:</label>
            <input type="text" name="username" required>
            <label>Password:</label>
            <input type="password" name="password" required>
           <button type="submit" name="login">Login</button>
        </form>
        
    </div>
</center>
</body>
</html>
