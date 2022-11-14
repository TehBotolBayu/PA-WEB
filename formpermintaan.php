<?php

require 'config.php';

if(isset($_GET['id'])){
        $id = $_GET['id'];
}
$query = "select * from konten where id='$id'";
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
    <link rel="stylesheet" href="formpermintaan.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
          EDIT PERMINTAAN<?=$data['judul'];?>
        </div>
        <form method="POST" class="form" action="" enctype="multipart/form-data">
        
        <div class="inputfield">
                <label><b>Judul</b></label>
                <input type="text" class="input" name="Judul" value=<?=$data['judul']?>>
        </div>  
        
        <div class="inputfield">
                <label><b>Dekripsi</b></label>
                <input type="text-area" class="input" name="Dekripsi" value=<?=$data['deskripsi']?>>
        </div>  

        <div class="inputfield">
                <label><b>Skill</b></label>
                <input type="text" class="input" name="Skill" value=<?=$data['skill']?>>
        </div>  
            
        <div class="inputfield">
                <label><b>Kategori</b></label>
                <input type="text" class="input" name="Katagori" value=<?=$data['kategori']?>>
        </div> 
        
        <div class="inputfield">
                <label><b>Harga</b></label>
                <input type="number" class="input" name="Harga" value=<?=$data['harga']?>>
        </div> 

        <div class="inputfield">
                <label><b>Tanggal</b></label>
                <input type="date" class="input" name="Tanggal" value=<?=$data['tanggal']?>>
        </div> 
        </form>
</body>
</html>