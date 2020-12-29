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

        .logo {
            font-size: 40px;
            color: #D6DF22;
            font-weight: bold;
        }

        .logo1 {
            font-size: 40px;
            color: rgba(0, 0, 0, .8);
            font-weight: bold;
        }

        a {
            font-size: 20px;
            font-family: 'Cinzel', serif;
        }

        .navbar {
            border-radius: 0px;
        }

        .actives {
            border-bottom: 5px solid black;
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
    </style>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php"><span class="logo">CED </span><span class="logo1">CAB</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link actives" href="#">Cab Drive </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cab Select |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cab Fleet |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <input type="button" class="btn btn-success" value="Book Now"
                        style="height:50px;font-size:1.5rem!important;background-color:#D6DF22;font-weight:bold;">
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">



        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="image"
                        src="https://media.cntraveller.in/wp-content/uploads/2018/08/GoaMiles1-1366x768.jpg"
                        alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Entertainment on the go</h1>
                        <p>in-built music and infotainment to make every ride fun</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="image" src="https://www.radstravelandtours.com/wp-content/uploads/2018/08/1.jpg"
                        alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Entertainment on the go</h1>
                            <p>in-built music and infotainment to make every ride fun</p>
                          </div>
                </div>
                <div class="carousel-item">
                    <img class="image"
                        src="https://793168.smushcdn.com/1526543/wp-content/uploads/2019/07/taxi-1130x650.jpeg?lossy=1&strip=1&webp=1"
                        alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Entertainment on the go</h1>
                            <p>in-built music and infotainment to make every ride fun</p>
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


    
    <footer>
        <div class="row">
            <div class="col-sm-4 text-center">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-google"></i></a>
            </div>
            <div class="col-sm-4 text-center">
                copyright@cedcab.com
            </div>
            <div class="col-sm-4 text-center">
                <a href="" class="">CEDCAB</a>
            </div>
        </div>
    </footer>
</body>

</html>