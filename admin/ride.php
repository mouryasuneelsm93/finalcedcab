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

$sno=$_GET['r_id'];

$sql="update tbl_rides set status='2' where ride_id='$sno'";

if($con->query($sql)==true)
{
    header("location:dashboard.php");
}
else 
{
    echo "query error";
}

?>