<?php
 
$tgl = date("Y/m/d");
require "config.php";

$msg = "";


if (isset($_POST['submit'])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST['password'];
    $con = $_POST['konfirmasi'];

    $sql = "SELECT * FROM akun WHERE email = '$email' or username = '$username'";
    $user = $db->query($sql);
    
    if(mysqli_num_rows($user) > 0) {
        echo "<script>
            alert('Email telah digunakan');
            </script>";
    } else {
        if($password == $con){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO akun (username, email, password, status) VALUES ('$username', '$email', '$password', 'user')";
            
            $res = mysqli_query($db, $sql);
            if($res){
                $res = mysqli_query($db, "SELECT * FROM akun WHERE email = '$email'");
                $data = mysqli_fetch_assoc($res);
                $id_akun = $data['id'];
                $sql = "INSERT INTO profil (id_akun, foto, tentang, pendidikan, skill, sertifikat, rating, tanggal) VALUES ($id_akun, 'nopic.png', '-', '-', '-', '-', '-', '$tgl')";
                $res = mysqli_query($db, $sql);
                echo "<script>
                alert ('Anda telah terdaftar!');
                </script>"; 
            } else {
                echo "<script>
                alert ('Maaf, gagal menyimpan data anda');
                </script>";                
            }

        } else {
            echo "<script>
                alert ('Konfirmasi passsword salah');
                </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Your Account</title>
    <link rel="stylesheet" type="" href="regis.css">
    
    <!-- ICON -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>
<body>
    <div class="container"> 
        <div class="screen">
            <div class="screen__content"> 
                <form action=""  method="POST" autocomplete="off" class="regis">

                    <h2>Registrasi</h2>
                    <div class="regis_field>
                        <i class="regis__icon fas fa-user"></i>
                        <label for="email">Email : </label>
                        <input type="text" class="regis__input" name="email" id="email" required value="" placeholder="Email"> <br>
                    </div>

                    <div class="regis_field>
                        <i class="regis__icon fas fa-user"></i>
                        <label for="username">Username : </label>
                        <input type="text" class="regis__input" name="username" id="username" required value="" placeholder="Username"> <br>
                    </div>

                    <div class="regis_field>
                        <i class="regis__icon fas fa-user"></i>
                        <label for="password">Password: </label>
                        <input type="password" class="regis__input" name="password" id="password" required value="" placeholder="Your Password"> <br>
                    </div>

                    <div class="regis_field>
                        <i class="regis__icon fas fa-user"></i>
                        <label for="password">Konfirmasi Password: </label>
                        <input type="password" class="regis__input" name="konfirmasi" id="konfirmasi" required value="" placeholder="Your Password"> <br>
                    </div>

                    <button type="submit" class="button regis__submit" name="submit">
                        <span class="button__text">Sign Up</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>

                </form>

                <br>
                <h5>Sudah punya akun? <a href="login.php"> <span class="h5">Log In</span></a></h5>

            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>
</html>