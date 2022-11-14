<?php

session_start();
$status = $_SESSION['status'];
$id_akun = $_SESSION['id_akun'];
require "config.php";

if($status == 'user' || $status == 'admin'){
  $query = "SELECT * FROM akun WHERE id='$id_akun'";
  $profil = "SELECT * FROM profil WHERE id_akun = '$id_akun'";

  $result = mysqli_query($db, $query);
  $data = mysqli_fetch_assoc($result);

  $resp = mysqli_query($db, $profil);
  $datap = mysqli_fetch_assoc($resp);

  $username = $data['username'];
  $email = $data['email'];

  $foto = $datap['foto'];
  $tentang = $datap['tentang'];
  $pendidikan = $datap['pendidikan'];
  $skill = $datap['skill'];
  $sertifikat = $datap['sertifikat'];
  $rating = $datap['rating'];

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profil.css">
</head>
<body>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  <header>
            <ul>
                <img src="asset/logo.png" width="50px">
                <li><a href="history.php">Transaksi</a></li>
                <li><a href="freelancerpage.php">Find Freelancer</a></li>
                <li><a href="offerjobspage.php">Discover Job</a></li>
                <li><a href="index.php">Beranda</a></li>
                <?php
                if($status == 'user' || $status == 'admin'){
                  echo "<li><a href='profil.php'>$username</a></li>
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

    <div class="profile-pict">
        <div class="wrapper">
              <div class="left">
                    <img src="asset/<?=$datap['foto']?>" alt="user" width="200px" height="200px">
                    <h1><?=$username?></h1><br>
                    <h3 class="img-text"><?=$datap['skill']?></h3>
                    <div class="status">
                  <h2>About Me</h2>
                  <br>
                  <p><?=$datap['tentang'];?></p>
                </div>
                <div class="rating">
                  <h2><?=$datap['rating']?></h2>
                  <br>
                  <p>ada gambar bintang yang fungsinya bisa melihat rating kita dibintang berapa</p>
                </div>


              </div>

              <div class="right">
                  <div class="info">
                      <h3>Informasi</h3>
                      <div class="info_data">
                          <div class="data">
                              <h4>Email</h4>
                              <p><?=$email?></p>
                          </div>
                          <div class="data">
                            <h4>Nomor</h4>
                              <p>9999-9999-9999</p>
                        </div>
                      </div>
                  </div>
                
                <div class="projects">
                      <h3></h3>
                      <div class="projects_data">
                          <div class="data">
                              <h4>Lokasi</h4>
                              <p>alamatmu cuy</p>
                          </div>
                          <div class="data">
                            <h4>Bergabung sejak</h4>
                              <p><?=$datap['tanggal']?></p>
                        </div>
                      </div>
                  </div>
                

              
                <div class="projects">
                  <h3>Pengalaman</h3>
                  <div class="projects_data">
                      <div class="data">
                          <h4>Daftar Layanan:</h4>
                          <?php
                          $query = "SELECT * FROM konten WHERE id_akun = '$id_akun' AND tipe = 'l'";
                          $resk = mysqli_query($db, $query);
                          $n = 0;
                          while($datak = mysqli_fetch_assoc($resk)){
                          ?>
                            <a href="">
                              <p align="left">- <?=$datak['judul'];?></p>
                            </a>
                          <?php
                          $n += 1;
                          }
                          ?>
                          <a href="layanan.php?id=<?=$id_akun;?>" style="color: black;"><p>Lebih lanjut...</p></a>
                      </div>
                      <div class="data">
                        <h4>Latar belakang pendidikan</h4>
                        <p><?=$datap['pendidikan']?></p>
                    </div>
                  </div>
              </div>
            
               <div class="projects">
                      <h3></h3>
                      <div class="projects_data">
                          <div class="data">
                              <h4>Keahlian</h4>
                              <p><?=$datap['skill']?></p>
                              <br><br><br>
                    
                          </div>
                          <div class="data">
                            <h4>Sertifikat</h4>
                              <p><?=$datap['sertifikat']?></p>
                        </div>
                      </div>
                  </div>
                
                  <div class="social-media">
                      <ul class="sosial-ul">
                        <li><a href="formprofile.php?id=<?=$datap['id']?>"><p>edit</p></a></li>
                        
                    </ul>
                </div>
              </div>
    </div>

    <div>
      <br><br><br><br><br>
    </div>

</body>
</html>