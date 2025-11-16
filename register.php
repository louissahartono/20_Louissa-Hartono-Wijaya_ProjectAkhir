<?php
include 'koneksi.php';
if(isset($_POST['register'])){
    $Full_name = $_POST['Full_name'];
    $Date_of_birth = $_POST['Date_of_birth'];
    $Email = $_POST['Email'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password']; 
    $query = "INSERT INTO information (Full_name, Date_of_birth, Email, Username, Password) VALUES ('$Full_name','$Date_of_birth', '$Email','$Username','$Password')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        echo "<script>alert('Welcome!');
        window.location='login.php';</script>";
    } else {
        echo "Error!" . mysqli_error($koneksi);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
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
        <table>
            <tr>
                <td>
                    <label for="Full_name">Nama Lengkap</label>
                </td>
                <br>
                <td>
                    <input type="text" name="Full_name" placeholder="Nama Lengkap" required><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Date_of_birth">Date of birth</label>
                </td>
                <br>
                <td>
                    <input type="date" name="Date_of_birth" placeholder="Date of birth" required><br>
                </td>                
            </tr>
             <tr>
                <td>
                    <label for="Email">Email</label>
                </td>
                <br>
                <td>
                    <input type="text" name="Email" placeholder="Email" required><br>
                </td>                
            </tr> 
            <tr>
                <td>
                    <label for="Username">Username</label>
                </td>
                <br>
                <td>
                    <input type="text" name="Username" placeholder="Username" required><br>
                </td>                
            </tr>
             <tr>
                <td>
                    <label for="Password">Password</label>
                </td>
                <br>
                <td>
                    <input type="password" name="Password" placeholder="Password" required><br>
                </td>                
            </tr>
        </table>
                <button type="submit" name="register">REGISTER</button>

</form>
<div class="bottom-info">
<p>Already have an account? <a href="login.php">Login here</a></p>
</div>
<footer>
    <div class="copyright">
        © Register Page - Louissa Hartono Wijaya @2025
    </div>
</footer>
</footer>
