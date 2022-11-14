<?php

require 'config.php';

if(isset($_GET['id'])){
        $id = $_GET['id'];
}
$query = "select * from artikel where id='$id'";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
        
        $about = $_POST["judul"];
        $education = $_POST["isi"];
        $skill = $_POST["tanggal"];
    
        $filename = $_FILES["gambar"]["name"];
        $tempname = $_FILES["gambar"]["tmp_name"];
        $folder = "./asset/" . $filename;
    
        
        if($filename != ""){
            $result = mysqli_query($db, "UPDATE artikel SET judul='$about', isi='$education', tanggal='$skill', gambar='$filename' WHERE id='$id'");
            move_uploaded_file($tempname, $folder);
        } else {
            $result = mysqli_query($db, "UPDATE artikel SET judul='$about', isi='$education', tanggal='$skill' WHERE id='$id'");
        }
        if($result){
            echo "<script>
                alert('DATA TERUPDATE!');
                document.location.
                 href = 'admin.php'
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
    <link rel="stylesheet" href="formartikel.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
          BUAT PENAWARAN
        </div>
        <form method="POST" class="form" action="" enctype="multipart/form-data">
                
                <div class="inputfield">
                        <label><b>Judul</b></label>
                        <input type="text" class="input" name="judul" value=<?=$data['judul']?>>
                </div>  
                
                <div class="inputfield">
                        <label><b>Isi</b></label>
                        <input type="text-area" class="input" name="isi" value=<?=$data['isi']?>>
                </div>  
                
                <div class="inputfield">
                        <label><b>Gambar</b></label>
                        <input type="file" class="input" name="gambar">
                </div> 
                
                <div class="inputfield">
                        <label><b>Tanggal</b></label>
                        <input type="date" class="input" name="tanggal" value=<?=$data['tanggal']?>>
                </div> 
                <div class="inputfield">
                        <input type="submit" value="Upload" class="btn" name="submit">
                </div>
        </form>
</body>
</html>