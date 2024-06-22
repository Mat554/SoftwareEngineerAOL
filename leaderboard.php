<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leaderboard</title>
    <link rel="stylesheet" type="text/css" href="leaderboardstyle.css">
    <link rel="stylesheet" type="text/css" href="pagestyle.css">
</head>

<body>

    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Leaderboard</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Profile <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Active Since <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Points <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                        <td> Seoul </td>
                        <td> 17 Dec, 2022 </td>
                        <td>
                            <p class="status delivered">Online</p>
                        </td>
                        <td> <strong>9823</strong></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td><img src="images/Jeet Saru.png" alt=""> Jeet Saru </td>
                        <td> Kathmandu </td>
                        <td> 27 Aug, 2023 </td>
                        <td>
                            <p class="status cancelled">Offline</p>
                        </td>
                        <td> <strong>8293</strong> </td>
                    </tr>
                    <tr>
                        <td> 3</td>
                        <td><img src="images/Sonal Gharti.jpg" alt=""> Sonal Gharti </td>
                        <td> Tokyo </td>
                        <td> 14 Mar, 2023 </td>
                        <td>
                            <p class="status shipped">Away</p>
                        </td>
                        <td> <strong>7319</strong> </td>
                    </tr>
                    <tr>
                        <td> 4</td>
                        <td><img src="images/Alson GC.jpg" alt=""> Alson GC </td>
                        <td> New Delhi </td>
                        <td> 25 May, 2023 </td>
                        <td>
                            <p class="status delivered">Online</p>
                        </td>
                        <td> <strong>6321</strong> </td>
                    </tr>
                    <tr>
                        <td> 5</td>
                        <td><img src="images/Sarita Limbu.jpg" alt=""> Sarita Limbu </td>
                        <td> Paris </td>
                        <td> 23 Apr, 2023 </td>
                        <td>
                            <p class="status pending">AFK</p>
                        </td>
                        <td> <strong>5263</strong> </td>
                    </tr>
                    <tr>
                        <td> 6</td>
                        <td><img src="images/Alex Gonley.jpg" alt=""> Alex Gonley </td>
                        <td> London </td>
                        <td> 23 Apr, 2023 </td>
                        <td>
                            <p class="status cancelled">Offline</p>
                        </td>
                        <td> <strong>4236</strong> </td>
                    </tr>
                    <tr>
                        <td> 7</td>
                        <td><img src="images/Alson GC.jpg" alt=""> Jeet Saru </td>
                        <td> New York </td>
                        <td> 20 May, 2023 </td>
                        <td>
                            <p class="status delivered">Online</p>
                        </td>
                        <td> <strong>3273</strong> </td>
                    </tr>
                    <tr>
                        <td> 8</td>
                        <td><img src="images/Sarita Limbu.jpg" alt=""> Aayat Ali Khan </td>
                        <td> Islamabad </td>
                        <td> 30 Feb, 2023 </td>
                        <td>
                            <p class="status pending">AFK</p>
                        </td>
                        <td> <strong>2172</strong> </td>
                    </tr>
                    <tr>
                        <td> 9</td>
                        <td><img src="images/Alex Gonley.jpg" alt=""> Alson GC </td>
                        <td> Dhaka </td>
                        <td> 22 Dec, 2023 </td>
                        <td>
                            <p class="status cancelled">Offline</p>
                        </td>
                        <td> <strong>1928</strong> </td>
                    </tr>
                    <tr>
                        <td> 10</td>
                        <td><img src="images/Alex Gonley.jpg" alt=""> Alson GC </td>
                        <td> Dhaka </td>
                        <td> 22 Dec, 2023 </td>
                        <td>
                            <p class="status cancelled">Offline</p>
                        </td>
                        <td> <strong>1209</strong> </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
   
    <div class="buttons">
        <div class="button-group">
            <a href = "http://localhost/SE_PKMKC/homepageafterlogin.php"><button id="homepageButton" >Homepage</button></a>
            <a href ="http://127.0.0.1:5500/Locations.html"><button id="locationButton">Locations</button></a>
            <a href = "http://localhost/SE_PKMKC/point.php"><button id="pointButton">Point</button></a>
            <a href = "http://127.0.0.1:5500/product.html"><button id="marketButton">Market</button></a>
        </div>
        <script src="script.js"></script>
</body>

</html>