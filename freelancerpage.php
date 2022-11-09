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
        <a class="link" href="offerjobspage.php">Freelancer List</a>
    </h3>

    <!-- FREELANCER LIST -->
    <section class="job-list" id="jobs">
        <a href="#">
            <div class="job-card">
                <div class="job-name">
                    <img class="job-profile" src="../asset/#" alt="">
                    <div class="job-detail">
                        <h4>Bayu Abdurrosyid</h4>
                        <h3>Web Developer </h3>
                        <p>Lorem Ipsum ini detail pengertian Freelancer</p>
                    </div>
                </div>
                <div class="job-label">
                    <a class="label-a" >HTML & CSS</a>
                    <a class="label-b" >Javascript</a>
                    <a class="label-c" >PHP & MYSql</a>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="job-card">
                <div class="job-name">
                    <img class="job-profile" src="../asset/#" alt="">
                    <div class="job-detail">
                        <h4>Dimas Arya Nugraha</h4>
                        <h3>Hacker </h3>
                        <p>Lorem Ipsum ini detail pengertian Freelancer</p>
                    </div>
                </div>
                <div class="job-label">
                    <a class="label-a" >Cryphtography</a>
                    <a class="label-b" >Redhat</a>
                    <a class="label-c" >Cybersecurity</a>
                </div>
            </div>
        </a>

        <a href="#">
            <div class="job-card">
                <div class="job-name">
                    <img class="job-profile" src="../asset/#" alt="">
                    <div class="job-detail">
                        <h4>Muhammad Nanda</h4>
                        <h3>Android Developer </h3>
                        <p>Lorem Ipsum ini detail pengertian Freelancer</p>
                    </div>
                </div>
                <div class="job-label">
                    <a class="label-a" >Kotlin</a>
                    <a class="label-b" >Java</a>
                    <a class="label-c" >Flutter</a>
                </div>
            </div>
        </a>
        
    </section>
    
    <script src="offerjobspage.js"></script>
</body>
</html>