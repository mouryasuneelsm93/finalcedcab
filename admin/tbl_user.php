<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <tr><th>Email</th>
        <th>Name</th>
        <th>Mobile Number</th>
        
    <?php

include "connect.php";


$sql="SELECT *from signup";
$result=$con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["Email"]. "</td><td>" . $row["Name"]. "</td><td> " . $row["Number"]. "</td><td><a href='' type='button' class='btn btn-danger'>Edit</a> <a href='delete.php?' type='button' class='btn btn-danger'>Delete</a></td></tr>";
    }
  } else {
    echo "0 results";
  }
  $con->close();


?>

</table>
</body>
</html>

