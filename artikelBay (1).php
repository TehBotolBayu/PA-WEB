

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Article</title>

    <link rel="stylesheet" href="artikelBay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section>
        <header>
        <img src="asset/logo.png" width="50px" class="logo">
        <h1>Workpedia</h1>
            <ul class="menu">
                <li><a href="#home">Find Freelancer</a></li>
                <li><a href="#news">Discover Job</a></li>
                <li><a href="">Sign In</a></li>
                <li><a href="">Join</a></li>
            </ul>
        </header>

        <div class="imgBox">
            <img src="" alt="" class="image">
            <a href="">INI GAMBAR</a>
        </div>

        <div class="content">
            <div class="textBox">
                <h2 class="title1" id="title1"><br> <span></span></h2>
                <p class="p1" id = "p1">
                    ini paragraph yaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                </p>
            </div>
        </div>

        
    </section>


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




        