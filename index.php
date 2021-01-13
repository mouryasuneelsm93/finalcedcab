<?php
session_start();


if(isset($_SESSION['admin']))
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

                        <div class="input-group mb-3 input-group-lg" style="height:40px;">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">PICKUP</label>
                            </div>
                            <select id="pickup" class="form-control " style="height:40px;-webkit-appearance: none;">
                                <option value="Current Location">Current Location</option>
                                <option value="Charbagh">Charbagh</option>
                                <option value="Indira Nagar">Indira Nagar</option>
                                <option value="BBD">BBD</option>
                                <option value="Barabanki">Barabanki</option>
                                <option value="Basti">Basti</option>
                                <option value="Faizabad">Faizabad</option>
                                <option value="Gorakhpur">Gorakhpur</option>
                            </select>
                        </div>




                        <div class="input-group mb-3 input-group-lg" style="height:40px;">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">DROP</label>
                            </div>
                            <select id="drop" class="form-control" style="height:40px;-webkit-appearance: none;">
                                <option selected value="Destination">Destination</option>
                                <option value="Charbagh">Charbagh</option>
                                <option value="Indira Nagar">Indira Nagar</option>
                                <option value="BBD">BBD</option>
                                <option value="Barabanki">Barabanki</option>
                                <option value="Basti">Basti</option>
                                <option value="Faizabad">Faizabad</option>
                                <option value="Gorakhpur">Gorakhpur</option>
                            </select>
                        </div>



                        <div class="input-group mb-3 input-group-lg" style="height:40px;">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">CAR TYPE</label>
                            </div>
                            <select id="cabtype" class="form-control" style="height:40px;-webkit-appearance: none;"
                                onchange="pro()">
                                <option> Select Cab</option>
                                <option> CedMicro</option>
                                <option>CedMini</option>
                                <option> CedRoyal</option>
                                <option>CedSUV</option>

                            </select>
                        </div>


                        <input type="number" step=".000001" class="input-group input-group-lg" style="height:40px;"
                            id="luggage" placeholder="Enter weight in kg">

                        <br>
                        <input type="submit" value="Calculate Fare" class="form-control btn btn-success"
                            data-toggle="modal" data-target="#myModal"
                            style="height:50px;font-size:2.1rem!important;background-color:#D6DF22;">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <span class="logo">Details</span>
                                        
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="message-show pl-3" id="message-show">
                                    
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                    <!-- <a href="login.php"> <button class="btn btn-danger"  data-dismiss="modal"
                                            style="height:50px;font-size:2.1rem!important;background-color:#D6DF22;"
                                            >Book
                                            Now</button></a> -->
                                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="book()" style="height:50px;font-size:2.1rem!important;background-color:#D6DF22;">Book
                                            Now</button>
                                        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal"
                                            style="height:50px;font-size:2.1rem!important;background-color:#D6DF22;">Close</button> -->
                                    </div>

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
    function book()
    {
        $.ajax({
            type:'POST',
            url:'book.php',
            data:$(this).serialize(),
            success:function(data){
            console.log(data);
                if(data==1)
                {
                    alert("please login first");
                    window.location.href="login.php";
                }
                else if(data=="successfuly submit")
                {   
                    confirm("Do you want to book ride!");
                    // alert("your ride has been booked but approval is needed from admin please wait for the approval");
                    window.location.href="user/userdashboard.php";
                }
                else if(data==2)
                {
                    alert("you can't book ride because admin had blocked you");
                    
                }
            }
        })
    }
    function pro() {
        var ced = document.getElementById("cabtype").value;
        if (ced == "CedMicro") {
            $('#luggage').val('');
            $("#luggage").prop("disabled", true);
            $("#luggage").attr("placeholder", "Carriage is not available for CedMicro").placeholder();


        }
        else {
            $("#luggage").prop("disabled", false);
            $("#luggage").attr("placeholder", "Enter weight in kg").placeholder();
        }
    }
    $(document).ready(function () {
        $('select').on('change', function (event) {
            //restore previously selected value
            var prevValue = $(this).data('previous');
            $('select').not(this).find('option[value="' + prevValue + '"]').show();
            //hide option selected                
            var value = $(this).val();
            //update previously selected data
            $(this).data('previous', value);
            $('select').not(this).find('option[value="' + value + '"]').hide();
        });
        $('#luggage').keyup(function () {
            vals = this.value;
            if (vals === "") {
                document.getElementById("message-show").innerHTML = "please enter valid weight";
            }
        });
        document.querySelector("#luggage").addEventListener("keypress", function (evt) {
            if ((evt.which < 48 || evt.which > 57) && evt.which != 46) {
                evt.preventDefault();
            }
        });
        $("#loginform").submit(function (e) {
            e.preventDefault();
            var a = $("#pickup").val();
            var b = $("#drop").val();
            var c = $("#cabtype").val();
            var d = $("#luggage").val();

            if (a == "Current Location") {
                document.getElementById("message-show").innerHTML = "Please select your current location";
            }
            else if (b == "Destination") {
                document.getElementById("message-show").innerHTML = "please select your destination";
            }
            else if (c == "Select Cab") {
                document.getElementById("message-show").innerHTML = "please select Cab";
            }
            else if (d > 500) {
                document.getElementById("message-show").innerHTML = "max limit of weight is 500kg";
            }

            else {
                //console.log(a);

                $.ajax({
                    type: "POST",
                    url: "next.php",
                    data: { "pickup": a, "drop": b, "cabtype": c, "luggage": d },
                    success: function (data) {
                        console.log(data);
                        document.getElementById("message-show").innerHTML = data;

                    }
                })
            }
        })
    })
</script>