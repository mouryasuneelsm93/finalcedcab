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


<style>
   
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
            <div class="row">
                <div class="col-sm-3 col1">
                        <form id="change">
                            <div class="row">
                                <div class="col-sm-12 text-center b1">
                                    <span style="font-size:20px;"> Change Password</span>
                                </div>
                            </div>
                            <br>
                           
                            <div class="row ">
                                <div class="col-sm-12">
                                    <input type='password' id='new' class="form-control" 
                                        placeholder="enter new password" style="height:40px;" >
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-sm-12">
                                    <input type='password' id='confirm' class="form-control" 
                                        placeholder="enter confirm password" style="height:40px;" >
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col">
                                    <input type="submit" value="Change" class="form-control btn btn-primary" 
                                        style="height:50px;font-size:1.5rem!important;background-color:#D6DF22;backgound-color:greenyellow;">
                                </div>
                            </div>
                        </form>

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
        $("#change").submit(function(e){
            e.preventDefault();
            // console.log("hello");
            var new1=$("#new").val();
            var confirm=$("#confirm").val();
            console.log(new1,confirm);
            if(new1=="")
            {
                alert("please enter password");
            }
            else if(confirm=="")
            {
                alert("please enter confirm password");
            }
            else if(new1!=confirm)
            {
                alert("confirm password did not match");
            }
            else{
                
                $.ajax({
                    type:'POST',
                    url:'passwordchange.php',
                    data:{'new1':new1,'confirm':confirm},
                    success:function(data){
                        console.log(data);
                        if(data==1)
                        {
                            alert("password changed");
                
                        }
                        else if(data==0)
                        {
                            alert("something went wrong");
                        }
                        
                    }
                })
            }
            
        })
    </script>