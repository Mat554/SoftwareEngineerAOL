<?php
session_start();
include("connect.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Trash'In</title>
    <link rel="stylesheet" type="text/css" href="homepage.css">

    <!--- box icons link --->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!--- remix icons link --->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <!--- google fonts link --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

    <!--- header --->
    <header>
    <a href="#" class="logo">
        <img src="img/logo.png">
        </a>

        <ul class="navlist">
            <li><a href="http://localhost/SE_PKMKC/leaderboard.php">Leaderboard</a></li>
            <li><a href="http://127.0.0.1:5500/product.html">Products</a></li>
            <li><a href="http://127.0.0.1:5500/Locations.html">Location</a></li>
        </ul>

        <div class="profile-picture" onclick="window.location.href='profile.html'">
            <img src="profile.jpg" alt="Profile Picture" class="profile-img">
        </div>

    </header>

    <!--- hero --->
    <section class="hero">
        <div class="hero-text">
        <h5 data-aos="fade-right" data-aos-duration="1400">Trash'In</h5>
            <h1 data-aos="zoom-in-left" data-aos-duration="1400" data-aos-delay="200">Trade your trash, Now!</h1>
            <p data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">Don't Forget to trade your points!</p>

            <div class="main-hero" data-aos="flip-down" data-aos-duration="1400" data-aos-delay="400">
                <a href="http://localhost/SE_PKMKC/point.php" class="btn">Point</a>
                <a href="#" class="price">
                    250point 
                </a>
            </div>
        </div>

        <div class="hero-img" data-aos="zoom-in" data-aos-duration="1400">
            <img src="img/hero.png">
        </div>
    </section>

    <div class="icons">
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="600"><i class="ri-facebook-line"></i></a>
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="700"><i class="ri-youtube-line"></i></a>
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="800"><i class="ri-twitter-line"></i></a>
    </div>

    <div class="scroll" data-aos="zoom-out-down" data-aos-duration="1400" data-aos-delay="550">
        <a href="#"><i class="ri-scroll-to-bottom-line"> Scroll down </i></a>
    </div>

    <!--- js link --->
    <script src="js/script.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset:1,
      });
    </script>

</body>
</html>
