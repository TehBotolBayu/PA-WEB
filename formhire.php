<?php
session_start();

require "config.php";


if (isset($_POST['submit'])) {

    $judul = $_POST["judul"];
    $skill = $_POST["skill"];
    $harga = $_POST["harga"];
    $deskripsi = $_POST["deskripsi"];
    $kategori = $_POST["kategori"];
    $tanggal = date("Y-m-d");
    $id_akun = $_SESSION['id_akun'];

    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    $folder = "./asset/" . $filename;
 
    $sql = "INSERT INTO konten (judul, deskripsi, skill, kategori, harga, tanggal, tipe, gambar, id_akun) VALUES ('$judul', '$deskripsi', '$skill', '$kategori', '$harga', '$tanggal', 't', '$filename', '$id_akun')";
    
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {
      echo "<script>alert('Data uploaded successfully!')</script></h3>";      
    }else {
        echo "<script>alert('Failed to upload data!')</script>";
    }
    header('Location: offerjobspage.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formhire.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
          Buat Permintaan
        </div>
        <form method="POST" class="form" action="" enctype="multipart/form-data">
            <div class="inputfield">
                <label><b>Judul</b></label>
                <input type="text" class="input" name="judul">
            </div>  
            <div class="inputfield">
                <label><b>Skill</b></label>
                <input type="text" class="input" name="skill">
            </div> 
            <div class="inputfield">
                <label><b>Kategori</b></label>
                <input type="text" class="input" name="kategori">
            </div> 
              <div class="inputfield">
                <label><b>Harga</b></label>
                <input type="number" class="input" name="harga">
            </div> 
            <div class="inputfield">
                <label><b>Deskripsi</b></label>
                <textarea class="textarea" name="deskripsi"></textarea>
            </div> 
            <div class="inputfield">
                <label><b>Gambar</b></label>
                <input type="file" class="input" name="fileToUpload">
            </div> 
            <div class="inputfield">
              <input type="submit" value="Upload" class="btn" name="submit">
            </div>
        </form>
    </div>
</body>
</html>
