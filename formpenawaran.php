<?php

require 'config.php';

if(isset($_GET['id'])){
        $id = $_GET['id'];
}
$query = "select * from konten where id='$id'";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
        
        $judul = $_POST["judul"];
        $deskripsi = $_POST["deskripsi"];
        $skill = $_POST["skill"];
        $kategori = $_POST["kategori"];
        $harga = $_POST["harga"];
        $tanggal = $_POST["tanggal"];
        $result = mysqli_query($db, "UPDATE konten SET judul='$judul', deskripsi='$deskripsi', skill='$skill', kategori='$kategori', harga=$harga, tanggal='$tanggal' WHERE id='$id'");

        if($result){
            echo "<script>
                alert('DATA TERUPDATE!');
                document.location.
                 href = 'layanan.php'
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
    <link rel="stylesheet" href="formpenawaran.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
          EDIT PERMINTAAN
        </div>
        <form method="POST" class="form" action="" enctype="multipart/form-data">
        
        <div class="inputfield">
                <label><b>Judul</b></label>
                <input type="text" class="input" name="judul" value=<?=$data['judul']?>>
        </div>  
        
        <div class="inputfield">
                <label><b>Dekripsi</b></label>
                <input type="text-area" class="input" name="dekripsi" value=<?=$data['deskripsi']?>>
        </div>  

        <div class="inputfield">
                <label><b>Skill</b></label>
                <input type="text" class="input" name="skill" value=<?=$data['skill']?>>
        </div>  
            
        <div class="inputfield">
                <label><b>Kategori</b></label>
                <input type="text" class="input" name="kategori" value=<?=$data['kategori']?>>
        </div> 
        
        <div class="inputfield">
                <label><b>Harga</b></label>
                <input type="number" class="input" name="harga" value=<?=$data['harga']?>>
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