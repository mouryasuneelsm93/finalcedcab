<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">

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
                    <a class="nav-link" href="cab_drive.php">Cab Drive |<span class="sr-only">(current)</span></a>
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
                        style="height:50px;font-size:2.1rem!important;background-color:#D6DF22;font-weight:bold;">
                </li>
            </ul>
        </div>
    </nav>
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
                                <option selected value="option1">Destination</option>
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


                        <input type="text" class="input-group input-group-lg" style="height:40px;" id="luggage"
                            placeholder="Enter weight in kg">

                        <br>
                        <input type="submit" value="Calculate Free" class="form-control btn btn-success"
                            data-toggle="modal" data-target="#myModal"
                            style="height:50px;font-size:2.1rem!important;background-color:#D6DF22;">
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h3>Billing Details</h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="message-show pl-3" id="message-show">
                                    
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"
                                            style="height:50px;font-size:2.1rem!important;background-color:#D6DF22;">Book
                                            Now</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"
                                            style="height:50px;font-size:2.1rem!important;background-color:#D6DF22;">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                </div>
                </form>
            </div>
        </div>
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

            </div>
        </div>
    </footer>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<script>
    function pro() {
        var ced = document.getElementById("cabtype").value;
        if (ced == "CedMicro") {
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
        $("#loginform").submit(function (e) {
            e.preventDefault();
            var a = $("#pickup").val();
            var b = $("#drop").val();
            var c = $("#cabtype").val();
            var d = $("#luggage").val();
            
            if (a == "Current Location") {
                document.getElementById("message-show").innerHTML= "Please select your current location";
            }
            else if (b == "Destination") {
                document.getElementById("message-show").innerHTML= "please select your destination";
            }
            else if (c == "Select Cab") {
                document.getElementById("message-show").innerHTML= "please select Cab";
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