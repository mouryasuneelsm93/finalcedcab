<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">



</head>

<body>
<?php
session_start();

if(isset($_SESSION['email']))
{
    echo '<nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
        <a class="navbar-brand" href=""><span class="logo">CED </span><span class="logo1">CAB</span></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                <button class="btn  dropdown-toggle" style="font-size:20px;color:white;background-color: yellowgreen;" type="button" data-toggle="dropdown">'.$_SESSION['email'].'
                </button>
                <ul class="dropdown-menu">
                <li class="nav-item"><a href="user/userdashboard.php" class="text-muted" style="font-size:15px;text-transform: lowercase!important;">Dashboard</a></li>
                  <li class="nav-item"><a href="change.php" class="text-muted" style="font-size:15px;text-transform: lowercase!important;">Change Password</a></li>
                  <li class="nav-item"><a href="user/logout.php" class="text-muted" style="font-size:15px;text-transform: lowercase!important;">Logout</a></li>
                </ul>
                </li>
                <li class="nav-item">
                Back
                </li>
            </ul>
        </div>
    </nav>';
}
else
{
    echo '<nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
        <a class="navbar-brand" href="index.php"><span class="logo">CED </span><span class="logo1">CAB</span></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="cab_drive.php">Cab Drive |<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cab Select |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="signup1.php">signup</a>
                </li>
                
            </ul>
        </div>
    </nav>';
}
?>
</body>

</html>
