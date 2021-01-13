<?php

session_start();
// echo $user=$_SESSION['email'];
include "connect.php";
if(isset($_SESSION['email']))
{
$pickup=$_SESSION['pickup'];
$drop=$_SESSION['drop'];
$cab=$_SESSION['cab'];
$luggage=$_SESSION['luggage'];
$distance=$_SESSION['distance'];
$bill=$_SESSION['fare'];
$user=$_SESSION['email'];
// echo $_SESSION['status'];

   if($_SESSION['status']==1)
     {
      $sql1="INSERT into tbl_rides(ride_from,ride_to,total_distance,luggage,total_fare,status,user_id) Values('$pickup','$drop','$distance','$luggage','$bill',1,(SELECT S_No from signup where Email='$user'))";
      if($con->query($sql1)==true)
      {
        echo "successfuly submit";
        
      }
      
      else
      {
          echo "1";
      }
    }
    else
    {
      echo "2";
    }
         

}
else 
{
  echo "1";
}


?>