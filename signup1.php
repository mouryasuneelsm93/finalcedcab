
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
        #name1{
            display:none;
        }
       #mobile{
           display:none;
       }
        #oneotp {
            display: none;
        }
        #mobileotp {
            display: none;
        }
        #p
        {
            display:none;
        }
        #cp
        {
            display:none;
        }#l
        {
            display:none;
        }
        .e1
        {
            height:6vh!important;
        }
        #a{
            color:white;
            font-weight:bold;
            font-size:15px;
            padding-top:10px;
    font-family: 'Cinzel', serif;

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
                
                <div class="col-sm-4">
                    
                    <form id="login" class="col1">
                        
                        
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
                        <div class="row  pb-3" id="one" >
                            <div class="col-sm-12">
            
                                <label for="email">Email Verification:</label>
                                <input type="email" class="form-control e1" id="email" placeholder="Enter email" name="email" required>
                                <br>
                                <button type="button" name="submit" id="a" class="form-control btn btn-primary e1" onclick="generate()">Generate OTP</button>
            
                               
                            </div>
                        </div>
                        <div class="row pb-3" id="oneotp">
                            <div class="col-sm-12">
                            <label for="email">OTP:</label>
                                <input type="number" class="form-control" id="otp" placeholder="Enter otp" name="otp" onkeypress="if(this.value.length==4) return false;">
                                <br>
                                <button type="button" name="submit" id="a" class="form-control btn btn-primary e1" onclick="verify()">verify OTP</button>
            
                            </div>
                        </div>
                        <div class="row pb-3" id="name1">
                            <div class="col-sm-12">
            
            
                                <label for="pwd">Name:</label>
                                <input type="text" class="form-control e1" id="name" placeholder="Enter Name" name="name" required>
            
                            </div>
                        </div>
                        <div class="row pb-3 " id="mobileotp">
                            <div class="col-sm-12">
            
            
                                <label for="pwd">Mobile Verification:</label>
                                <input type="number" class="form-control e1"  onkeypress="if(this.value.length==10) return false;"
                                    placeholder="mobile number" name="number" id="number">
                                    <br>
                                    <button type="button" name="submit" id="a" class="form-control btn btn-primary e1" onclick="mgenerate()">Generate OTP</button>
                                    
            
                            </div>
                        </div>
                        <div class="row pb-3" id="mobile">
                            <div class="col-sm-12">
            
                            <label for="email">OTP:</label>
                                    <input type="number" class="form-control" onkeypress="if(this.value.length==4) return false;"
                                    placeholder="Enter password"  id="motp">
                                    <br>
                                    <button type="button" name="submit" id="a" class="form-control btn btn-primary e1" onclick="mverify()">Verify</button>
                                   
                            </div>
                        </div>
                        <div class="row pb-3 " id="p" >
                            <div class="col-sm-12">
            
            
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control e1"  placeholder="Enter Name" name="pwd" id="pwd" required>
            
                            </div>
                        </div>
                        <div class="row pb-3" id="cp">
                            <div class="col-sm-12">
                                <label for="pwd">Confirm Password:</label>
                                
                                    <input type="password" name="remember" placeholder="Enter password" id="cn" class="form-control e1" required>
                                
                            </div>
                        </div>
                        <div class="row pb-3" id="l">
                            <div class="col-sm-12">
            
                                <button type="submit" name="submit" id="a" class="form-control btn btn-primary e1">Login</button>
            
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
function generate()
{
    var a=$('#email').val();
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            //var address = document.getElementById[email].value;
         if(a=="")
         {
             alert("please enter email ");
         }   
          else if (reg.test(a) == false) 
            {
                alert('please enter valid Email Address');
                
            }
           
        
         else
         {
            $.ajax({
                type:'POST',
                url:'mailotp.php',
                data:{'mail':a},
                success:function(data){
                    console.log(data);
                    alert("OTP sent to your Email address");
                }
            })
            $("#oneotp").css("display","block");
            $("#one").hide();
        }
}
function verify()
{
    var b=$('#otp').val();
            console.log(b);
            if(b=="")
         {
             alert("please enter email ");
         }   
         else
         {
            $.ajax({
                type:'POST',
                url:'check.php',
                data:{'otp':b},
                success:function(data){
                    console.log(data);
                    // document.getElementById("veri").innerHTML=data;
                    if(data=="otp verified")
                    {
                       alert("verified");    
                       $("#mobileotp").css("display","block");
            $("#oneotp").hide();                }
                    else
                    {
                        alert("wrong verify");
                    }
                }
            })
            
        }
}
function mgenerate()
{
    var n=$("#number").val();
            console.log(n);
            if(n=="")
         {
             alert("please enter email ");
         }   
         else
         {
            $.ajax({
                type:'POST',
                url:'mobileotp.php',
                data:{'num':n},
                success:function(data){
                    console.log(data);
                    alert("OTP sent to your Mobile number");
                }
            })
            $("#mobile").css("display","block");
            $("#mobileotp").hide();
        }
}
function mverify()
{
    var bb=$("#motp").val();
           console.log(bb);  
           if(bb=="")
         {
             alert("please enter email ");
         }   
         else
         {
    $.ajax({
                type:'POST',
                url:'checkotp.php',
                data:{'otp':bb},
                success:function(data){
                    console.log(data);
                 if(data=="otp verified")
                 {
                     alert("otp verified");
                     $("#name1").css("display","block");
            $("#p").css("display","block");
            $("#cp").css("display","block");
            $("#l").css("display","block");
            $("#mobile").hide();
                 }   
                    else
                    {
                        alert("wrong otp");
                    }
                }
            })
           
        }
}
    $(document).ready(function(){

       
        $("#login").submit(function(e){
            e.preventDefault();
            var pwd=$("#pwd").val();
            var cn=$("#cn").val();
            console.log(pwd);
            // if(pwd>0)
            // {
            //     alert("confirm password is no same");
            // }
            // else
            // {
            e.preventDefault();
            $.ajax({
                type:'POST',
                url:'signup.php',
                data:$(this).serialize(),
                success:function(data){
                console.log(data)
                if(data=="inserted")
                {
                    alert("signup successfully");
                }
                else
                {
                    alert("something went wrong");
                }
            }

            })

        })
        
        
    })
</script>