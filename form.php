<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>form</title>
    <style>
        .form-control {}

        body {
            background-color: rgba(0, 0, 100, .1);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
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
                        style="height:50px;font-size:1.5rem!important;background-color:#D6DF22;font-weight:bold;">
                </li>
            </ul>


        </div>
        <a class="navbar-brand" href="index.php"><span class="logo">CED </span><span class="logo1">CAB</span></a>
    </nav>



    <div class="container pt-5">
        <div class="row">
            
            <div class="col-sm-4">
                <form action="/action_page.php">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="number" class="form-control" placeholder="Mobile Number" id="usr" name="username">
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#myModal">Send OTP</button>
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
                                <div class="message-show">
                                    <input type="text" placeholder="Enter OTP" class="form-control" style="border:0px;">
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"
                                        style="height:50px;font-size:1.5rem!important;background-color:#D6DF22;">
                                        Ok</button>


                                </div>
                            </div>
                        </div>

                </form>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>

</body>

</html>