<?php
error_reporting(0);
session_start();
$status = $_SESSION['status'];
$id_akun = $_SESSION['id_akun'];
require "config.php";

if($status == 'user' || $status == 'admin'){
  $query = "select * from akun where id=$id_akun";
  $result = mysqli_query($db, $query);
  $data = mysqli_fetch_assoc($result);

  $username = $data['username'];

}

if (isset($_POST['submit'])){
    $cari = $_POST['cari'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="" href="freelancerpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="container">
            <h1>WorkPedia</h1>

            <div class="menu">
                <a href="index.php" class="">Home</a>
                <a href="formapply.php"  class="">Buat Layanan</a>
                <a href="formhire.php"   class="">Buat Permintaan</a>
                <a href="logout.php" class="">Logout</a>
            </div>

            <button class="tombol">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </nav>

    <!-- HEADER -->
    <header>
        <div class="box">
            <img src="asset/backgroundjobspage.png" class="header-img" alt="">
        </div>
        <h1 class="header-title">
            Find Your <br> Jobs Easily
        </h1>
    </header>

    <!-- SEARCH -->
    <div class="search-wrapper">
        <div class="search-box">
            <form action="" method="post">
                <input class="search-input" name="cari" type="text" placeholder="Search Your Jobs">
                <button class="search-button" name="submit">Search</button>
            </form>
        </div>
    </div>
    
    <h3>
    <div class="link">Daftar Layanan</a>
    </h3>

    <!-- FREELANCER LIST -->
    <section class="job-list" id="jobs">

        <?php
        $query = "select * from konten where tipe='l'";
        $result = mysqli_query($db, $query);
        $len = 1;
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <a href="desc.php?id=<?=$data['id']?>">
            <div class="job-card">
                <div class="job-name">

                        <?php
                            $id_akun = $data['id_akun'];
                            $q = "select * from konten where tipe='l' and judul like '%$cari%'";
                            $res = mysqli_query($db, $q);
                            $d = mysqli_fetch_assoc($res);
                            
                        ?>
                    <img class="job-profile" src="asset/<?=$data['gambar']?>" alt="">
                    <div class="job-detail">
                        <h4><?=$d['username']?></h4>
                        <h3><?=$data['judul']?></h3>
                        <p><?=$data['deskripsi']?></p>
                    </div>
                </div>
                <div class="job-label">
                    <a class="label-c" ><?=$data['skill']?></a>
                    <a class="label-a" >Rp.<?=$data['harga']?></a>
                </div>
            </div>
        </a>
        <?php
            $len += 1;
            }
            if($len == 0){
                echo "<p>Tidak ada data</p>";
            }
		?>
        
    </section>
    
    <script src="offerjobspage.js"></script>
</body>
</html>