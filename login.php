<?php
session_start();

if(isset($_SESSION['email']))
{
header("Location:user/userdashboard.php");
}

 else if(isset($_SESSION['admin']))
{
    header("Location:admin/dashboard.php");  
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <title>Document</title>
    <style>
        .container {
            margin-top: 10%;
            padding-bottom: 5%;
        }

        .a {
            color: white;
            font-weight: bold;
            font-size: 15px;

            font-family: 'Cinzel', serif;

        }
        .a:hover
        {
            color:white;
           
        }

        .e1 {
            height: 6vh !important;
        }

        #input {
            height: 6vh;
            font-weight: bold;
            font-size: 15px;

            font-family: 'Cinzel', serif;

        }
        #generate
        {
            display:none;   
        }
        #login
        {
            display:none;   
        }
        #forget
        {
            display:none;   
        }
     
    </style>
</head>

<body>
    <?php
   include "header.php";
   ?>

    <div class="container-fluid">
        <div class="contain">
            <div class="text-center">
                <h1>book a city taxi to your destination in town </h1>
                <p>choose from a range of categories and prices</p>
            </div>
            <div class="row r2">
                <div class="col-sm-3 col1">
                    <form id="loginform">
                        <div class="row">
                            <div class="col-sm-12 text-center b1">
                                <p id="p1">city taxi</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h4>Your EveryDay Travel Partner</h4>
                                <h5>AC Cab For Point to Point Travel</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="email" required class="form-control e1" id="" placeholder="username" name="user">

                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col">
                                <input type="password" required name="password" id="e1" placeholder=" password"
                                    class="form-control e1">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col pt-3">
                            <button type="button" id="input1" style="height:6vh;background-color: yellowgreen;" class="form-control btn btn-warning" ><a href="signup1.php"
                                    class="a">signup</a></button>
                                    <button type="button" id="forget" style="height:6vh;font-size:15px;background-color: yellowgreen;color:white" class="form-control btn btn-warning a" onclick="forget1()">Forget Password</button>
                        </div>
                        <div class="col pt-3">
                            <input type="submit" name="submit" id="input" value="Login"
                                class="form-control btn btn-warning" style="height:6vh;font-size:15px;background-color: yellowgreen;color:white;">
                        </div>
                        </div>
                    </form>
                    <form id="generate">
                        <div class="row">
                            <div class="col-sm-12 text-center b1">
                                <p id="p1">city taxi</p>
                            </div>
                        </div>
                       
                        <div class="row pt-3">
                            <div class="col">
                                <input type="number" class="form-control e1" name="num" placeholder="Enter mobile no">

                            </div>
                        </div>
                        

                       <div class="row pt-3">
                        <div class="col">
                            <input type="submit" name="submit" id="Generate OTP" value="Generate OTP"
                                class="form-control btn btn-primary" style="height:6vh;font-size:15px;background-color: yellowgreen;color:white">
                        </div>
                       </div>
                    </form>
                    <form id="login">
                        <div class="row">
                            <div class="col-sm-12 text-center b1">
                                <p id="p1">city taxi</p>
                            </div>
                        </div>
                       
                        <div class="row pt-3">
                            <div class="col">
                                <input type="number" class="form-control e1" name="otp" placeholder="Enter OTP">

                            </div>
                        </div>
                        

                       <div class="row pt-3">
                        <div class="col">
                            <input type="submit" name="submit" value="Verify"
                                class="form-control btn btn-primary" style="height:6vh;font-size:15px;background-color: yellowgreen;color:white">
                        </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
   include "footer.php";
   ?>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<script>

function forget1()
{
    $("#loginform").hide();
    $("#generate").show();
}
    $(document).ready(function () {

        $("#loginform").submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'show.php',
                data: $(this).serialize(),
                success: function (data) {
                    console.log(data);
                    if (data == '1') {
                        location.href = "user/userdashboard.php";
                    }
                    else if (data == 2) {
                        location.href = "admin/dashboard.php";
                    }
                    else {
                        alert("wrong username and password");
                        $("#input1").hide();
                        $("#forget").show();
                    }
                }

            })
        })
            $("#generate").submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'mobileotp.php',
                data: $(this).serialize(),
                success: function (data) {
                    console.log(data);
                    $("#generate").hide();
                    $("#login").show();
                   
                }

            })

        })
        $("#login").submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'checkotp.php',
                data: $(this).serialize(),
                success: function (data) {
                    console.log(data);
                    if(data=="otp verified")
                    {
                        window.location.href="change.php";
                    }
                    else
                    {
                        alert("wrong otp");
                    }
                   
                }

            })

        })

    })
</script>