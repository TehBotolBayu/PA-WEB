<?php
error_reporting(0);
session_start();
$status = $_SESSION['status'];
$id_akun = $_SESSION['id_akun'];
require "config.php";


if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
}
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="cari.css">
</head>

<html>
    <body>
        <header>
            <ul>
                <img src="asset/logo.png" width="50px">
                <li><a href="index.php">Home</a></li>

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
        <h1>
          Result for <?=$cari?>
        </h1> 


        <h1 class="rekomendasi">Permintaan</h1>
        <div>
          <div class="slider rekomendasi">
              <?php
             		$query = "select * from konten where tipe = 't' and kategori like '%$cari%'";
                     $result = mysqli_query($db, $query);
                     $len = 0;
                     while ($data = mysqli_fetch_assoc($result)) { 
              ?>
              <div class="card">
                  <div class="card-header">
                    <img src="asset/<?=$data['gambar']?>" alt="rover" />
                  </div>
                  <div class="card-body">
                    <span class="tag tag-teal"><?=$data['kategori']?></span>
                    <h4>
                      <?=$data['judul']?>
                    </h4>
                    <p>
                      <?=$data['deskripsi']?>
                    </p>
                    <?php
                    $id_akun = $data['id_akun'];
                    $query2 = "select * from akun where id='$id_akun'";
                    $result2 = mysqli_query($db, $query2);
                    $data2 = mysqli_fetch_assoc($result2);
                    $query3 = "select * from profil where id_akun='$id_akun'";
                    $result3 = mysqli_query($db, $query3);
                    $data3 = mysqli_fetch_assoc($result3);
                    ?>
                    <div class="user">
                      <img src="asset/<?=$data3['foto']?>" alt="user" />
                      <div class="user-info">
                        <h5><?=$data2['username']?></h5>
                        <small>2h ago</small>
                      </div>
                    </div>
                  </div>
              </div>
              <?php
              $len += 1;
              }
              if($len == 0){
                echo "<p align='center'>Tidak ada data</p>";
            }
              ?>

          </div>
        </div>

        <h1 class="rekomendasi">Layanan</h1>
        <div>
          <div class="slider rekomendasi">
              <?php
             				 $query = "select * from konten where tipe = 'l' and kategori like '%$cari%'";
                     $result = mysqli_query($db, $query);
                     $len = 0;
                     while ($data = mysqli_fetch_assoc($result)) { 
              ?>
              <div class="card">
                  <div class="card-header">
                    <img src="asset/<?=$data['gambar']?>" alt="rover" />
                  </div>
                  <div class="card-body">
                    <span class="tag tag-teal"><?=$data['kategori']?></span>
                    <h4>
                      <?=$data['judul']?>
                    </h4>
                    <p>
                      <?=$data['deskripsi']?>
                    </p>
                    <?php
                    $id_akun = $data['id_akun'];
                    $query2 = "select * from akun where id='$id_akun'";
                    $result2 = mysqli_query($db, $query2);
                    $data2 = mysqli_fetch_assoc($result2);
                    $query3 = "select * from profil where id_akun='$id_akun'";
                    $result3 = mysqli_query($db, $query3);
                    $data3 = mysqli_fetch_assoc($result3);
                    ?>
                    <div class="user">
                      <img src="asset/<?=$data3['foto']?>" alt="user" />
                      <div class="user-info">
                        <h5><?=$data2['username']?></h5>
                        <small>2h ago</small>
                      </div>
                    </div>
                  </div>
              </div>
              <?php
              $len += 1;
              }
              if($len == 0){
                echo "<p align='center'>Tidak ada data</p>";
            }
              ?>

          </div>
        </div>


    </body>
</html>