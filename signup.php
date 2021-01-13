<?php
include "connect.php";

$email=$_POST['email'];
$name=$_POST['name'];
$number=$_POST['number'];
$pwd=$_POST['pwd'];
//echo $email."\n".$name."\n".$number."\n".$pwd;
$sql="INSERT into signup(Email,Name,Number,Password,Is_Admin,status) VALUES('$email','$name','$number','$pwd',0,1)";
if($con->query($sql)==true)
{
   
    echo "inserted";
}
else
{
    echo "not inserted";
}

?>