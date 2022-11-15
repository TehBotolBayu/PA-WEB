<?php

require "config.php";

session_start();
$id_asli = $_SESSION['id_akun'];
$id_akun = $_GET['id'];
$status = $_SESSION['status'];

$sql = "SELECT * FROM konten WHERE id_akun = '$id_akun' AND tipe = 'l'";

$res = mysqli_query($db, $sql);


?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="layanan.css">
</head>

<body>
        <header>
            <ul>
                <img src="asset/logo.png" width="50px">
                <li><a href="freelancerpage.php">Find Freelancer</a></li>
                <li><a href="offerjobspage.php">Discover Job</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Explore</a>
                    <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                    </div>
                </li>
                <?php
                if($status == 'user' || $status == 'admin'){
                  echo "<li><a href='profil.php'>$user</a></li>
                        <li><a href='logout.php'>Log Out</a></li>";
                } else {
                  echo "<li><a href='login.php'>Sign In</a></li>
                        <li><a href='regis.php'>Join</a></li>";
                }
                
                if($status == 'admin'){
                  echo "<li><a href='admin.php'>Menu Admin </a></li>";
                }
                ?>
            </ul>
        </header>



    <h3>
        <div class="link">Daftar Layanan</a>
    </h3>
    <section class="job-list" id="jobs">
        <?php
        while($data = mysqli_fetch_assoc($res)){
        ?>
        <a href="#">
            <div class="job-card">
                <div class="job-name">
                    <img class="job-profile" src="asset/<?=$data['gambar']?>" alt="">
                    <div class="job-detail">
                        <h4><?=$data['kategori']?></h4>
                        <h3><?=$data['judul']?></h3>
                        <p><?=$data['deskripsi']?></p>
                    </div>
                </div>
                <div class="job-label">
                    <a href="" class="label-c"><?=$data['skill']?></a>
                    <a href="" class="label-a">Rp.<?=$data['harga']?></a>
                </div>
                <br>
                <?php
                  if($id_asli == $id_akun){
                  ?>
                <div class="job-label">
                    <a href="formpenawaran.php?id=<?=$data['id']?>" class="label-c">Edit</a>
                    <a href="delete.php?id=<?=$data['id']?>&table=<?='konten'?>" class="label-b">Delete</a>
                </div>
                <?php
                  }
                ?>
            </div>
        </a>
    <?php
    }
    ?>
    </section>
</body>

</html>






<?php
?>