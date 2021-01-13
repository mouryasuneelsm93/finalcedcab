<?php
error_reporting(0);
session_start();

$motp1=$_POST['otp'];



$otp1=$_SESSION['mobileotp'];
// echo $otp1;
if($motp1==$otp1)
{
    echo "otp verified";
   
}
else 
{
    echo "wrong otp";
    
}



?>