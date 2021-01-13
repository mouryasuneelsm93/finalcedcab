<?php
session_start();
include "connect.php";
$user=$_POST['user'];
$pwd=$_POST['password'];
$_SESSION['forget']=$user;
// echo $user."\n".$pwd;
$sql="SELECT *from signup where Email='$user' and Password='$pwd'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      // echo "Email".$row['Email']."\nName".$row['Name']."\nNumber".$row['Number']."\nPassword".$row['Password'].$row['Is_Admin'];
     
      if($user==$row['Email']&&$pwd==$row['Password']&&$row['Is_Admin']==0)
      {
        $_SESSION['email']=$user;
        $_SESSION['id']=$row['S_No'];
        $_SESSION['status']=$row['status'];
        $_SESSION['uname']=$row['Name'];
        //  echo $_SESSION['user_id'];
        // header("location:user/userdashboard.php");
        echo "1";
      }
      else if($user==$row['Email']&&$pwd==$row['Password']&&$row['Is_Admin']==1)
      {
        $_SESSION['admin']=$user;
        $_SESSION['name']=$row['Name'];
        echo "2";
      }
      else 
      {
        echo "not match";
      }
      
    }
 } else {
    echo "0 results";
  }
  
  
  $con->close();
  

?>