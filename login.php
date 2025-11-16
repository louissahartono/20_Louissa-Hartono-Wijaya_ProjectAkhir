<?php
include 'koneksi.php'; 
if(isset($_POST['login'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $query = "SELECT * FROM information WHERE Username='$Username'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($Password == $data['Password']) {
            $_SESSION['Username'] = $data['Username'];
            echo "<script>
            alert('Login berhasil!');
            window.location='tambah.php';
            </script>";
        } else {
              echo "<script>alert('Username atau password salah!');</script>";
        }
 } else {
        echo "<script>alert('Username atau password tidak ditemukan!');</script>";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
    <nav>
        <a href="index.php">Landing Page</a>
        <a href="about.php">About</a>
        <a href="login.php">Login</a>
    </nav>
</header>
        <form method="POST">
        <input type="text" name="Username" placeholder="Username" required><br>
        <input type="password" name="Password" placeholder="Password" required><br>
        <button type="submit" name="login" href="data.php">LOGIN</button>
    </form>
   <div class="bottom-info">
    <p>Don't have an account yet? <a href="register.php">Register here</a></p>
</div>
<footer>
    <div class="copyright">
        © Login Page - Louissa Hartono Wijaya @2025
    </div>
</footer>

</body>
</html>