<?php

require 'config.php';

if(isset($_GET['id'])){
        $id = $_GET['id'];
}

$query = "select * from konten where id='$id'";

$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Description</title>

    <link rel="stylesheet" href="desc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <img src="asset/logo.png" width="50px" class="logo">
        <h1>Workpedia</h1>
            <ul class="menu">
                <li><a href="freelancerpage.php">Find Freelancer</a></li>
                <li><a href="offerjobspage.php">Discover Job</a></li>
            </ul>
    </nav>
    <header class="">
        <div class="title-back">
            <div class="title">
                <h1 class="judul"><hr></h1>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="left-column">
            <img src="asset/<?=$data['gambar']?>" alt="">
        </div>

        <div class="right-column">
            <div class="work-description">
                <h1><?=$data['judul']?></h1>
                <span><b><?=$data['kategori']?></b></span>
                <p><?=$data['deskripsi']?></p>
            </div>

            <div class="work-price">
                <span>Rp. <?=$data['harga']?></span>
                <a href="transaksi.php?id=<?=$data['id']?>" class="cart-btn">HIRE ME</a>
            </div>
        </div>


    </div>
    
    
    
     
</body>
</html>