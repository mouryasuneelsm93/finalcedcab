<?php
session_start();

if(!isset($_SESSION['admin']))
{
header("location:../login.php");
}

include "connect.php";

$admincount=0;
$earn=0;
$sql="SELECT *from tbl_rides";
$result = $con->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
      $earn=$earn+$row['total_fare'];
      $admincount++;
  }
  }  else {
    echo "0 results";
  }
  $con->close();
?>
<?php


include "connect.php";

$complete=0;

$sql="SELECT *from tbl_rides where status=2";
$result = $con->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    
      $complete++;
  }
  }  else {
    echo "0 results";
  }
  $con->close();

?>
<?php


include "connect.php";

$block=0;

$sql="SELECT *from signup where status=0";
$result = $con->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    
      $block++;
  }
  }  else {
    echo "0 results";
  }
  $con->close();

?>
<?php


include "connect.php";

$unblock=0;

$sql="SELECT *from signup where status=1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    
      $unblock++;
  }
  }  else {
    echo "0 results";
  }
  $con->close();

?>
<?php


include "connect.php";

$pending=0;

$sql="SELECT *from tbl_rides where status=1";
$result = $con->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    
      $pending++;
  }
  }  else {
    echo "0 results";
  }
  $con->close();

?>
<?php


include "connect.php";
$cancel=0;
$sql="SELECT *from tbl_rides where status=0";
$result = $con->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    
      $cancel++;
  }
  }  else {
    echo "0 results";
  }
  $con->close();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="links/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="links/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="links/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="links/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="links/overlayScrollbars/css/OverlayScrollbars.min.css">
  
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item ">

          <a href="index3.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin</a>
          <ul class="dropdown-menu">
            <li class="nav-item dropdown-item">Change Password</li>
            <li class="nav-item dropdown-item"><a href="logout.php" class="nav-link">Logout</a></li>
          </ul>

        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <?php echo $_SESSION['name']; ?>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">

        <span class="logo">Ced</span> <span class="logo1">Cab</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">Admin Panel</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link ">
                <i class="fas fa-user-plus"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
          
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"></a></li>

              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Small boxes (Stat box) -->
      <span id="ride_detail">
        
        <div class="row">
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner text-center">
                <h3>
                  <?php echo $earn;?>
                </h3>

                <p>Total Earning</p>
              </div>

              <a href="#" class="small-box-footer">Total Earning</a>
            </div>
          </div>

          <div class="col-lg-3 ">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner text-center">
                <h3>
                  <?php echo $admincount;?>
                </h3>

                <p>Total Rides</p>
              </div>
              <div class="icon">
                <i class="far fa-analytics"></i>
              </div>
              <a href="#" class="small-box-footer" value="1" name="ab">Total Rides</a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-danger ">
              <div class="inner text-center">
                <h3>
                  <?php echo $complete;?>
                </h3>

                <p>Completed Rides</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="complete.php" class="small-box-footer" id="">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 ">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner text-center">
                <h3>
                  <?php echo $cancel;?>
                </h3>

                <p>Canceled Rides</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="cancel.php" class="small-box-footer" id=''>More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

        </div>
        <!-- /.row -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner text-center">
                <h3>
                  <?php echo $pending;?>
                </h3>

                <p>Ride Request</p>
              </div>

              <a href="pending.php" class="small-box-footer" id="">More info <i
                  class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 ">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner text-center">
                <h3>
                  <?php echo $block;?>
                </h3>

                <p>Block User</p>
              </div>
              <div class="icon">
                <i class="far fa-analytics"></i>
              </div>
              <a href="block.php" class="small-box-footer" id=''>More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 ">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner text-center text-center">
                <h3>
                  <?php echo $unblock;?>
                </h3>

                <p>Unblock User</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="unblock.php" class="small-box-footer" id=''>More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 ">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner text-center">
                <h3>65</h3>

                <p>Serviceable Location</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="location.php" class="small-box-footer" id=''>More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col">
            <table class='table table-borderless display' >
            <thead><tr class='bg-warning'><th>Ride_From</th><th>Ride_to</th><th>Ride_Date</th><th>Total_Distance</th><th>Luggage</th><th>Total_Fare</th><th>Action</th></tr></thead>
            <tbody>
            <?php
            class approve
            {
                function new_request()
                {
                    
            include "connect.php";
            
            $admincount=0;
            $earn=0;
            echo "";
            
            $sql="SELECT *from tbl_rides where status=1";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
               
                
                echo " <tr><td>".$row['ride_from']."</td>";
                echo "<td>".$row['ride_to']."</td>";
                echo "<td>".$row['ride_date']."</td>";
                echo "<td>".$row['total_distance']."</td>";
                echo "<td>".$row['luggage']."</td>";
                echo "<td>".$row['total_fare']."</td>";
                echo "<td><a href='ride.php?r_id=$row[ride_id]' class='btn btn-primary'>Accept</a> <a href='reject.php?r_id=$row[ride_id]' class='btn btn-danger'>Reject</a></td></tr>";
                
                $earn=$earn+$row['total_fare'];
                
                $admincount++;
              }
              }  else {
                echo "<tr class='text-muted'><td>No Pending Request!</td></tr>";
              }
              $con->close();
              $_SESSION['admincount']=$admincount;
            $_SESSION['earn']=$earn;
                }
               
            }
            
            $obj=new approve();
            $obj->new_request();
            ?>
          </tbody>
            </table>
          </div>
        </div>
      </span>
    </div>
      <!-- /.content-wrapper -->
  

      <footer class="main-footer">
        <div class="row">
          <div class="col-sm-4 text-center pt-3">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram-square"></i></a>
            <a href=""><i class="fab fa-google-plus-square"></i></a>

          </div>
          <div class="col-sm-4 text-center pt-3 ">

            <h4 class="about">copyright@cab.com</h4>


          </div>
          <div class="col-sm-4 text-center">
            <a href=""> <span class="logo">CED</span></a>
            <a href=""> <span class="logo1">CAB</span></a>

          </div>
        </div>
      </footer>
       
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="links/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="links/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="links/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="links/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="links/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="links/jqvmap/jquery.vmap.min.js"></script>
    <script src="links/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="links/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="links/moment/moment.min.js"></script>
    <script src="links/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="links/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="links/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="links/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  
    <script src="admin.js"></script>
</body>

</html>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script> -->

<script>

  $(document).ready(function () {

    
    $('#total_rides').click(function () {
      $.ajax({
        type: 'POST',
        url: 'admin.php',
        data: $(this).serialize(),
        success: function (data) {
          console.log("hello");
          document.getElementById("ride_detail").innerHTML = data;

        }
      })
    })
    $('#complete').click(function (e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'complete.php',
        data: $(this).serialize(),
        success: function (data) {
          console.log("hello");
          document.getElementById("ride_detail").innerHTML = data;

        }
      })
    })
    $('#cancel').click(function () {
      $.ajax({
        type: 'POST',
        url: 'cancel.php',
        data: $(this).serialize(),
        success: function (data) {
          console.log(data);
          
          document.getElementById("ride_detail").innerHTML = data;

        }
      })
    })
    $('#location').click(function () {
      $.ajax({
        type: 'POST',
        url: 'location.php',
        data: $(this).serialize(),
        success: function (data) {
          console.log(data);
          document.getElementById("ride_detail").innerHTML = data;

        }
      })
    })
    $('#location').click(function () {
      $.ajax({
        type: 'POST',
        url: 'location.php',
        data: $(this).serialize(),
        success: function (data) {
          console.log("hello");
          document.getElementById("ride_detail").innerHTML = data;

        }
      })
    })
    $('#block').click(function () {
      $.ajax({
        type: 'POST',
        url: 'block.php',
        data: $(this).serialize(),
        success: function (data) {
          console.log(data);
          document.getElementById("ride_detail").innerHTML = data;

        }
      })
    })
    $('#unblock').click(function () {
      $.ajax({
        type: 'POST',
        url: 'unblock.php',
        data: $(this).serialize(),
        success: function (data) {
          console.log("hello");
          document.getElementById("ride_detail").innerHTML = data;

        }
      })
    })
  })

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script>
  $(document).ready(function () {
    $('table.display').DataTable();
  });
</script>
