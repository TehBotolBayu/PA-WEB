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

  $user = $data['username'];
  $_SESSION['username'] = $data['username'];

}

?>

<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        <div class="hero">
            <div class="slogan">
                <h1>WorkPedia</h1>
                <h1>Ini Adalah Sebuah Slogan</h1>
                <div class="search-container">
                    <form action="freelancerpage.php" method="POST">
                      <input type="text" placeholder="Cari Freelancer" name="cari">
                      <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                
            </div>

        </div>

        <h1 align="center">Our Partner</h1>
          <div class="partner">
            <hr>
              <marquee>
                  <div class="com"><img src="asset\amazon.png" width="100px"></div>
                  <div class="com"><img src="asset\facebok.png" width="100px"></div>
                  <div class="com"><img src="asset\google.png" width="100px"></div>
                  <div class="com"><img src="asset\ibm.png" width="100px"></div>
                  <div class="com"><img src="asset\netflix.png" width="100px"></div>
              </marquee>
          </div>


        
        <hr>

        <main>
        <h1 align="center" class="rekomendasi">Rekomendasi</h1>
        <div>
          <div class="slider rekomendasi">
              <?php
             				 $query = "select * from konten";
                     $result = mysqli_query($db, $query);
                     $len = 1;
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
              }
              ?>

          </div>
        </div>
        <hr color="">
        <h1 align="center">Popular</h1>
        <div id="popular">
              <div class="destination desain">
                <div class="slide">
                  <div class="card">
                    <p>Desain Grafis</p>
                  </div>
                </div>
              </div>

              <div class="destination web">
                <div class="slide">
                  <div class="card">
                    <p>Web Development</p>
                  </div>
                </div>
              </div>

              <div class="destination animasi">
                <div class="slide">
                  <div class="card">
                    <p>Animasi</p>
                  </div>
                </div>
              </div>
              <div class="destination triD">
                <div class="slide">
                  <div class="card">
                    <p>3D Asset</p>
                  </div>
                </div>
              </div>

              <div class="destination logo">
                <div class="slide">
                  <div class="card">
                    <p>Desain Logo</p>
                  </div>
                </div>
              </div>

              <div class="destination video">
                <div class="slide">
                  <div class="card">
                    <p>Video Editing</p>
                  </div>
                </div>
              </div>
        </div>

        <div id="why">
        <h1 class="why-title">Kenapa Anda Harus Menggunakan Layanan Kami?</h1></th>
        <table>
            <tr >
                <td class="box1"> 
                    <h1>1. Lorem ipsum dolor sit quasi iure delectus et odit.</h1> 
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum quisquam ratione, mollitia ullam placeat iste.</p>            
                </td>
                <td class="box2"> 
                    <h1>2. Lorem, ipsum dolor.</h1> 
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum quisquam ratione, mollitia ullam placeat iste.</p>                         
                </td>
                <td class="box-gambar" rowspan="2"> <img src="asset/why1.png" alt="" width="500px">       
                </td>
            </tr>
            <tr>
                <td class="box3">
                    <h1>3. Lorem, ipsum dolor.</h1> 
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum quisquam ratione, mollitia ullam placeat iste.</p>                         
                </td>
                <td class="box4">
                    <h1>4. Lorem, ipsum dolor.</h1> 
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum quisquam ratione, mollitia ullam placeat iste.</p>                          
                </td>
            </tr>
        </table>
    </div>

    <!-- ------------------------------------------------------------------------------------------------------------------------ --
    HOW -->
        <div class="tengah">
            <div class="kolom">
                <br><br>
                <h2>Cara Menemukan Pekerjaan </h2>
                <p>Untuk mendapatkan pekerjaan di website kami sangatlah mudah dengan cara berikut: </p><br>
            </div>

            <div class="tutor-list">
                <div class="kartu-tutor">
                    <div class="container">
                        <img src="asset/buatakun2.jpeg" width="200px" height="200px" />
                        <div class="title">Pembuatan Akun</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at mollitia laborum reiciendis itaque sint exercitationem expedita ipsam assumenda amet.</p>
                </div>

                <div class="kartu-tutor">
                    <div class="container">
                        <img src="asset/tawaran1.jpeg" width="200px" height="200px" />
                        <div class="title">Buat Tawaran</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at mollitia laborum reiciendis itaque sint exercitationem expedita ipsam assumenda amet.</p>
                </div>

                <div class="kartu-tutor">
                    <div class="container">
                        <img src="asset/transaksi1.jpg" width="200px" height="200px" />
                        <div class="title">Buat Transaksi</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ex ut nostrum magnam quam numquam quidem quia tempora nisi. Odio?</p>
                </div>

                <div class="kartu-tutor">
                    <div class="container">
                        <img src="asset/dapatuang1.png" width="200px" height="200px" />
                        <div class="title">Dapat Uang</div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores libero architecto nobis vero, doloribus nostrum quisquam est illum! Deleniti, officia.</p><br><br><br>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->

        <div id="find">
            <div class="Judul">
                <br><br>
                <h2>Jelajahi Marketplace</h2><br><br><br>
            </div>
            
            <div class="logo-list">
                <div class="logo-find">
                    <div class="logo-find-container a">
                        <img src="asset/logo-find6.png"/>
                        <div class="logo-find-text">Design Graphic</div>
                    </div>
                </div>

                <div class="logo-find">
                    <div class="logo-find-container b">
                        <img src="asset/logo-find2.png"/>
                        <div class="logo-find-text">Web Development</div>
                    </div>
                </div>
                
                <div class="logo-find">
                    <div class="logo-find-container c">
                        <img src="asset/logo-find3.png"/>
                        <div class="logo-find-text">Video Editing</div>
                    </div>
                </div>

                <div class="logo-find">
                    <div class="logo-find-container d">
                        <img src="asset/logo-find4.png"/>
                        <div class="logo-find-text">Game Development</div>
                    </div>
                </div>
        
                <div class="logo-find">
                    <div class="logo-find-container e">
                        <img src="asset/logo-find5.png"/>
                        <div class="logo-find-text">Music Writing</div>
                    </div>
                </div>

            </div>

        </div>



        <article id="News">
          <section class="newsintro">
            <br><br>
            <h1 align="center">Temukan Ide Baru</h1>
            <br><br>
          </section>
          
          <div class="slideshow-container" id="news">
    
        
    
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
    
    
            <?php
            $query = " select * from artikel ";
            $result = mysqli_query($db, $query);
            $len = 1;
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
        
    
                <a class="mySlides fade" href=artikel.php?id=<?php echo $data['id']; ?>>
                <div class="numbertext"><?php echo $data['tanggal']; ?></div>
                <img src="asset/<?php echo $data['gambar']; ?>" style="width:100%">
                <div class="text"><?php echo $data['judul']; ?></div>
                </a>
            <?php
            $len += 1;
            }		
            ?>		
            </div>
            <br>
            
            <div style="text-align:center" id="dots">
            <?php
              $i = 1;
              while($i < $len){
            ?>
              <span class="dot" onclick="currentSlide(<?=$i?>)"></span>
            <?php
              $i += 1;
            }
            ?>
            </div>

        </main>
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
            <p>Copyright Kelompok 255ba9s PA WEB Informatika 2021</p>
        </footer>


    </body>
    <script>

      
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}




    </script>
  


</html>
