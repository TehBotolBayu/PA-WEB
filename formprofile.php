<?php

session_start();
$status = $_SESSION['status'];
$id_akun = $_SESSION['id_akun'];
$user = $_SESSION['username'];
if($status == 'user' || $status == 'admin'){ 
}else{
    header('Location: header.php');
}

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query = "select * from profil where id='$id'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
        
    $about = $_POST["about"];
    $education = $_POST["education"];
    $skill = $_POST["skill"];
    $certif = $_POST["certif"];

    $filename = $_FILES["pict"]["name"];
    $tempname = $_FILES["pict"]["tmp_name"];
    $folder = "./asset/" . $filename;

    
    if($filename != ""){
        $result = mysqli_query($db, "UPDATE profil SET tentang='$about', pendidikan='$education', skill='$skill', sertifikat='$certif', foto='$filename' WHERE id='$id'");
        move_uploaded_file($tempname, $folder);
    } else {
        $result = mysqli_query($db, "UPDATE profil SET tentang='$about', pendidikan='$education', skill='$skill', sertifikat='$certif' WHERE id='$id'");
    }
    if($result){
        echo "<script>
            alert('DATA TERUPDATE!');
            document.location.
             href = 'profil.php'
            </script>";
    } else {
        echo "<script>alert('DATA GAGAL DISIMPAN')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Profile</title>
    <link rel="stylesheet" href="formprofile.css">
</head>
<body>

    <div class="container"> 
        <div class="screen"> 
            <div class="screen__content"> 
                <form method="POST" action="" enctype="multipart/form-data">

                    <h2>Form Profile</h2>
                    <div class="form_field">
                        <label for="tentang">About : </label>
                        <input type="text" class="form_input" name="about" id="about" value="<?=$row['about']?>"> <br>
                    </div>

                    <div class="form_field">
                        <label for="education">Education : </label>
                        <input type="text" class="form_input" name="education" id="education" value="<?=$row['pendidikan']?>"> <br>
                    </div>

                    <div class="form_field">
                        <label for="skill">Skill : </label>
                        <input type="text" class="form_input" name="skill" id="skill" value="<?=$row['skill']?>"> <br>
                    </div>

                    <div class="form_field">
                        <label for="certif">Certificate : </label>
                        <input type="text" class="form_input" name="certif" id="certif" value="<?=$row['sertifikat']?>"> <br>
                    </div>

                    <div class="form_field">
                        <label for="pict">Upload Picture : </label>
                        <input type="file" class="form_input" name="pict" id="pict"> <br>
                    </div>

                    <button type="submit" class="button_submit" name="submit">
                        <span class="button__text">Submit</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>