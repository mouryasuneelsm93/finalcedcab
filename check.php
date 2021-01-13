<?php
session_start();
$otp=$_POST["otp"];

// echo $otp;

$motp=$_SESSION['mailotp'];

if($otp==$motp)
{
    echo "otp verified";
   
}
else 
{
    echo "wrong otp";
    
}



?>