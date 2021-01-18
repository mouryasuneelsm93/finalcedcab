<?php
session_start();
include "connect.php";

// echo $user."\n".$pwd;
$sql="SELECT *from tbl_ride";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      // echo "Email".$row['Email']."\nName".$row['Name']."\nNumber".$row['Number']."\nPassword".$row['Password'].$row['Is_Admin'];
     
      
     $a= $row['ride_id'];
        // header("location:user/userdashboard.php");
       
      
    }
 } else {
    echo "0 results";
  }
  
  echo $a;
  $_SESSION['total_ride']=$a;
  $con->close();
  

?>