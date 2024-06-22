<?php
session_start();
include("connect.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="pointstyle.css">
</head>
<body>
    <div class="buttons">
        <div class="button-group">
        <a href = "http://localhost/SE_PKMKC/homepageafterlogin.php#"><button id="homepageButton" >Homepage</button></a>
        </div>

<div class="container">
    <p>Enter your text or URL</p>
    <input type="text" placeholder="Text or URL" id="qrText" >
    <div id="imgBox">
        <img src="" id="qrImage">
    </div>
    
    
    <button onclick="generateQR()">Generate QR Code</button>
</div>

<script>
let imgBox = document.getElementById("imgBox");
let qrImage = document.getElementById("qrImage");
let qrText = document.getElementById("qrText");

function generateQR(){
    if(qrText.value.length > 0){
    qrImage.src = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data="+ qrText.value;
    imgBox.classList.add("show-img");
    }
    else{
        qrText.classList.add('error');
        setTimeout(()=>{
            qrText.classList.remove('error');
        },1000);
    }
}

</script>
</body>
</html>