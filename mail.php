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

        label {
            font-size: 15px;
            color: rgba(0, 0, 0, .7);
        }

        #login {
            display: none;
        }
        #otp {
            display: none;
        }
        #motp {
            display: none;
        }
        .e1
        {
            height:6vh!important;
        }
        #input{
            height:6vh;
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
                                <input type="email" class="form-control e1" id="" placeholder="Email" name="email">
                                
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-6 pt-3">
                            <input type="submit" name="submit" id="input" value="Generate otp" class="form-control btn btn-primary">
                        </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col">
                                <input type="email" class="form-control e1" id="" placeholder="verify otp" name="email">
                                
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <input type="submit" name="submit" id="input" value="verify" class="form-control btn btn-primary">
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

    function signup() {
        $("#loginform").css("display", "none");
        $("#login").css("display", "block");
    }
    $(document).ready(function(){

        $("#email").focusout(function(){
            var a=$(this).val();
            console.log(a);
            
            $.ajax({
                type:'POST',
                url:'mailotp.php',
                data:{'mail':a},
                success:function(data){
                    console.log(data);
                }
            })
            $("#otp").css("display","block");

        })
        $("#otp").focusout(function(){
            var b=$(this).val();
            console.log(b);
            
            $.ajax({
                type:'POST',
                url:'check.php',
                data:{'otp':b},
                success:function(data){
                    console.log(data);
                    // document.getElementById("veri").innerHTML=data;
                    if(data=="otp verified")
                    {
                        document.getElementById("veri").innerHTML=data;
                        $("#name").prop('disabled',false);
                        $("#number").prop('disabled',false);
                    }
                    else
                    {
                        document.getElementById("veri").innerHTML=data;
                    }
                }
            })
            $("#otp").css("display","none");

        })
        $("#number").focusout(function(){
            var n=$(this).val();
            console.log(n);
            
            $.ajax({
                type:'POST',
                url:'mobileotp.php',
                data:{'num':n},
                success:function(data){
                    console.log(data);
                }
            })
            $("#motp").css("display","block");

        })
        $("#motp").focusout(function(){
            var bb=$(this).val();
            console.log(bb);
            
            $.ajax({
                type:'POST',
                url:'checkotp.php',
                data:{'otp':bb},
                success:function(data){
                    console.log(data);
                    if(data=="otp verified")
                    {
                        document.getElementById("verif").innerHTML=data;
                        $("#pwd").prop('disabled',false);
                        $("#cn").prop('disabled',false);
                    }
                    else
                    {
                        document.getElementById("verif").innerHTML=data;
                    }
                    
                }
            })
            $("#otp").css("display","none");

        })


        $("#login").submit(function(e){

            e.preventDefault();
            $.ajax({
                type:'POST',
                url:'signup.php',
                data:$(this).serialize(),
                success:function(data){
                console.log(data)
            }

            })

        })
        $("#loginform").submit(function(e){

e.preventDefault();
$.ajax({
    type:'POST',
    url:'show.php',
    data:$(this).serialize(),
    success:function(data){
    console.log(data)
}

})

})

    })
</script>