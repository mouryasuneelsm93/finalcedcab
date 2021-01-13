<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <style>
        .container-fluid {
            padding-left: 0px;
            padding-right: 0px;


        }

       

        a {
            font-size: 20px;
            font-family: 'Cinzel', serif;
        }

        .navbar {
            border-radius: 0px;
        }

        .actives {
            border-bottom: 5px solid #D6DF22;
        }

        .image {
            height: 90vh !important;
            width: 100%;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;

        }

        h1 {
            font-size: 60px !important;
            font-weight: bold;
        }

        p {
            font-size: 25px !important;
            padding-bottom: 15%;

        }

        .heading {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 5px;
            color: #000000;
        }

        .info {
            font-size: 18px;
            color: rgba(0, 0, 0, 0.6);
            font-weight: 300;
            line-height: 24px;
        }


        .active {
            background-image: url(https://media.cntraveller.in/wp-content/uploads/2018/08/GoaMiles1-1366x768.jpg);
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .active1 {
            background-image: url(https://www.radstravelandtours.com/wp-content/uploads/2018/08/1.jpg);
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .active2 {
            background-image: url(https://793168.smushcdn.com/1526543/wp-content/uploads/2019/07/taxi-1130x650.jpeg?lossy=1&strip=1&webp=1);
            height: 100vh;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
       
        .contain {
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, .8);
        }
        .col:hover{
            background-color: rgba(0, 0, 0, .1);
        }
    </style>
    <title>Document</title>
</head>

<body>
   <?php

include "header.php";
   ?>
    <div class="container-fluid">



        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="contain">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Entertainment on the go</h1>
                            <p>in-built music and infotainment to make every ride fun</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active1">
                    <div class="contain">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Entertainment on the go</h1>
                            <p>in-built music and infotainment to make every ride fun</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active2">
                    <div class="contain">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Entertainment on the go</h1>
                            <p>in-built music and infotainment to make every ride fun</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

<div class="jumbotron-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col">
                    <img src="https://www.olacabs.com/webstatic/img/fleet-image/prime-suv.png" width="200" height="200">
                </div>
                <div class="col">
                    <img src="https://www.olacabs.com/webstatic/img/fleet-image/prime-play.png" width="200" height="200">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col">
                    <img src="https://www.olacabs.com/webstatic/img/fleet-image/kaali-peeli.png" width="200" height="200">
                </div>
                <div class="col">
                    <img src="https://www.olacabs.com/webstatic/img/fleet-image/lux.png" width="200" height="200">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col">
                    <img src="https://www.goteso.com/products/assets/images/clone-scripts/taxify/bolt-app-clone-banner.png" width="200" height="200">
                </div>
                <div class="col">
                    <img src="https://5.imimg.com/data5/BG/VS/MY-38988800/swift-2c-dzire-2c-etios-2c-indigo-on-rent-for-tours-and-marriages-500x500.png" width="200" height="200">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col">
                    <img src="https://www.freepnglogos.com/uploads/taxi-png/taxi-png-images-are-download-crazypngm-31.png" width="200" height="200">
                </div>
                <div class="col">
                    <img src="https://www.techcommuters.com/wp-content/uploads/2019/06/A5D031D4-2722-4886-B6E9-E0DD96709E47.jpeg" width="200" height="200">
                </div>
            </div>
        </div>
    </div>
</div>
<?php

include "footer.php";
   ?>
</body>

</html>