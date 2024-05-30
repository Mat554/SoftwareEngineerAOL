<?php
session_start();
include("connect.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="pagestyle.css">
    <style>
        .navbar {
            position: relative;
        }

        .profile-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }

        .profile-icon img {
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_SESSION['email'])){
            $email = $_SESSION['email'];
            $query= mysqli_query($conn, "SELECT users.*from `users` WHERE users.email=$email");
            while($row=mysqli_fetch_array($query)){
                echo $row['firstName'].' '.$row['lastName'];
            }
        }
        ?>

    <div class="navbar">
        <h1>Homepage</h1>
        <div class="profile-picture" onclick="window.location.href='profile.html'">
            <img src="profile.jpg" alt="Profile Picture" class="profile-img">
        </div>
        <div class="buttons">
            <div class="button-group">
            <a href = "http://127.0.0.1:5500/leaderboard.html"><button id="leaderboardButton">Leaderboard</button></a>
                <button id="locationButton">Location</button>
                <a href = "http://127.0.0.1:5500/point.html"><button id="pointButton">Point</button></a>
                <a href = "http://127.0.0.1:5500/product.html"><button id="marketButton">Market</button></a>
            </div>
        </div>
    </div>

    <div class="profile">
        <h2>Welcome, User</h2>
        <p>Name : Your Name</p>
        <p>Age : Your Age</p>
        <p>and other information</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
