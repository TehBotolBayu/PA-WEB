<?php

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM artikel WHERE id=$id";
    $result = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($result);  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Article</title>

    <link rel="stylesheet" href="artikel2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section>
        <header>
        <img src="asset/logo.png" width="50px" class="logo">
        <h1>Workpedia</h1>
            <ul class="menu">
                <li><a href="freelancerpage.php">Find Freelancer</a></li>
                <li><a href="offerjobspage.php">Discover Job</a></li>
                <li><a href="">Sign In</a></li>
                <li><a href="">Join</a></li>
            </ul>
        </header>

        <div class="imgBox">
            <img src="" alt="" class="image">
            <a href=""></a>
        </div>

        <div class="content">
            <div class="textBox">
                <h2 class="title"><?=$data['judul']?></h2>
                <p class="date"><?=$data['tanggal']?></p>
                <div class="image">
                    <img src="asset/<?=$data['gambar']?>">
                </div>
                <p class="konten">
                    <?=$data['isi']?>
                </p>
            </div>
        </div>

        
    </section>
    <hr>
    <footer class='bawah'>
          <div class="cont">
          <div class="col">
            <b>Kategori</b>
            <p>Web Development</p>
            <p>Graphic Design</p>
            <p>Video Editing</p>
            <p>Game Development</p>
            <p>Music</p>
          </div>
          <div class="col">
            <b>Tentang Kami</b>
            <p>Email: bayuuabdur2903@gmail.com</p>
            <p>Alamat: gg.Kasturi, Jl.M.Yamin, Samarinda</p>
            <p>No. Telp: 082353386739</p>
          </div>
          <div class="col">
            <b>Support</b>
            <p>Help&Support</p>
            <p>User Agreement</p>
          </div>
          <div class="col">
            <b>Komunitas</b>
            <p>Blog</p>
            <p>Forum</p>
          </div></div>

          

            
            
            
            
            <hr>
            <p>Copyright Kelompok 5 PA WEB Informatika 2021</p>
        </footer>


    <!-- BAGIAN JAVASCRIPT UNTUK MENJALANKAN FUNGSI ON CLICK -->
    <script type="text/javascript">
        function imgSlider(anything){
            document.querySelector('.black_apple').src = anything; 
        }
        function ubahText(){
            document.getElementById("title1").innerHTML= "Top Mobile Phone With IOS <br> <span>Apple Company</span>"
            document.getElementById("p1").innerHTML= "lorem ipsum ini penjelasan tentang deskripsi artikel yang panjang banget gatau mau diisi apa lagi cukup sekian dan terimakasih. ";
        }
        function ubahText1(){
            document.getElementById("title1").innerHTML= "For Better Freedom <br> <span>Our Twitter</span>"
            document.getElementById("p1").innerHTML= "lorem ipsum ini penjelasan tentang deskripsi artikel tapi untuk Twitter.";
        }
        function ubahText2(){
            document.getElementById("title1").innerHTML= "Simple Information From Hands <br> <span>Android</span>"
            document.getElementById("p1").innerHTML= "lorem ipsum ini penjelasan Artikel Android Developer.";
        }
    </script>
</body>
</html>




        