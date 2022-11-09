<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFFER JOBS</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="" href="offerjobspage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="container">
            <h1>WorkPedia</h1>

            <div class="menu">
                <a href="index.html" class="">Home</a>
                <a href="offer.php"  class="">Offer</a>
                <a href="hire.php"   class="">Hire</a>
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
        <div class="box"></div>
            <img src="../asset/backgroundjobs4.png" class="header-img" alt="">
        </div>
        <h1 class="header-title">
            Find Your <br> Jobs Easily
        </h1>
    </header>

    <!-- SEARCH -->
    <div class="search-wrapper">
        <div class="search-box">
            <div class="search-card">
                <input class="search-input" type="text" placeholder="Search Your Jobs">
                <button class="search-button">Search</button>
            </div>
        </div>
    </div>

    <h3>
        <a class="link" href="freelancerpage.php">Jobs List</a>
    </h3>
    
    <!-- JOBS LIST -->
    <section class="job-list" id="jobs">
        <a href="#">
            <div class="job-card">
                <div class="job-name">
                    <img class="job-profile" src="../asset/joki.png" alt="">
                    <div class="job-detail">
                        <h4>Game</h4>
                        <h3>Games Joki </h3>
                        <p>Lorem Ipsum ini detail pengertian pekerjaan</p>
                    </div>
                </div>
                <div class="job-label">
                    <a class="label-a" >Mobile Legends</a>
                    <a class="label-b" >Point Blank</a>
                    <a class="label-c" >Dota 2</a>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="job-card">
                <div class="job-name">
                    <img class="job-profile" src="../asset/web.png" alt="">
                    <div class="job-detail">
                        <h4>Web.me</h4>
                        <h3>Web Profile</h3>
                        <p>Lorem Ipsum ini detail pengertian pekerjaan</p>
                    </div>
                </div>
                <div class="job-label">
                    <a class="label-a" >HTML & CSS</a>
                    <a class="label-b" >Javascript</a>
                    <a class="label-c" >PHP</a>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="job-card">
                <div class="job-name">
                    <img class="job-profile" src="../asset/canva.png" alt="">
                    <div class="job-detail">
                        <h4>Digital Poster</h4>
                        <h3>UI UX Designer</h3>
                        <p>Lorem Ipsum ini detail pengertian pekerjaan</p>
                    </div>
                </div>
                <div class="job-label">
                    <a class="label-a" >Canva</a>
                    <a class="label-b" >Adobe Illustrator</a>
                    <a class="label-c" >Photosop</a>
                </div>
            </div>
        </a>
        
        <a href="#">
            <div class="job-card">
                <div class="job-name">
                    <img class="job-profile" src="../asset/tiktok.png" alt="">
                    <div class="job-detail">
                        <h4>Business Application</h4>
                        <h3>Digital Marketing</h3>
                        <p>Lorem Ipsum ini detail pengertian pekerjaan</p>
                    </div>
                </div>
                <div class="job-label">
                    <a class="label-a" >Dart</a>
                    <a class="label-b" >Flutter</a>
                    <a class="label-c" >Kotlin</a>
                </div>
            </div>
        </a>
    </section>
    
    <script src="offerjobspage.js"></script>
</body>
</html>