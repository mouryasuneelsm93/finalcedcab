<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$servername="localhost";
$username="root";
$password="";
$dbname = "cedcab";

$con=mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
die("connection failed".mysqli_connect_error());
}

$rid=$_GET['rid'];

$sql="update tbl_rides set status='0' where ride_id='$rid'";

if($con->query($sql)==true)
{
    header("location:userdashboard.php");
}
else 
{
    echo "query error";
}

?>