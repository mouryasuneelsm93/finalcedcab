<?php
session_start();



$obj=new change();
$obj->chng();



class change
{
    function chng(){
        include "connect.php";
        $password=$_POST['new1'];
        if(isset($_SESSION['email']))
        {
            $us=$_SESSION['email'];
            $sql="UPDATE signup set password='$password' where Email='$us'";
            if($con->query($sql)==true)
            {
                echo "1";

            }
            else
            {
                echo "0";
             }

        }
        else
        {
        $email=$_SESSION["forget"];
        $sql1="SELECT *from signup where Email='$email'";
        $result=$con->query($sql1);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

            $sql="UPDATE signup set password='$password' where Email='$email'";
            if($con->query($sql)==true)
            {
                echo "1";

            }
            else
            {
                echo "0";
             }

        }}
        else
        {
            alert("email address does not exit");
        }
    }
    }
}



?>