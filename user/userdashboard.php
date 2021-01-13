<?php
session_start();

if(!isset($_SESSION['email']))
{
header("location:../login.php");
}

include "connect.php";
$s=$_SESSION['id'];
$usercount=0;
$expense=0;
$sql="SELECT *from tbl_rides where user_id=$s";
$result = $con->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
      $expense=$expense+$row['total_fare'];
      $usercount++;
  }
  }  else {
    echo "0 results";
  }
  $con->close();

?>
<?php

include "connect.php";

$complete=0;
$sql="SELECT *from tbl_rides where status=2 and user_id=$s";
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

$pending=0;
$sql="SELECT *from tbl_rides where status=1 and user_id=$s";
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
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="user.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
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

          <a href="index3.html" class="nav-link dropdown-toggle" data-toggle="dropdown">User</a>
          <ul class="dropdown-menu">
            <li class="nav-item dropdown-item"><a href="../change.php">Change Password</a></li>
            <li class="nav-item dropdown-item"><a href="logout.php">Logout</a></li>
          </ul>

        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Hi !
            <?php echo $_SESSION['uname']; ?>
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
            <a href="#" class="d-block">User Panel</a>
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
              <a href="userdashboard.php" class="nav-link ">
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
              <h1 class="m-0">User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../index.php">Book_New_Ride</a></li>
                <li class="breadcrumb-item active"></li>
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
                <h3><?php echo $expense;?></h3>

                <p>Total Expense</p>
              </div>

              <a href="#" class="small-box-footer">Total Expense</i></a>
            </div>
          </div>

          <div class="col-lg-3 ">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner text-center">
                <h3><?php echo $usercount;?></h3>

                <p>Total Rides</p>
              </div>
              <div class="icon">
                <i class="far fa-analytics"></i>
              </div>
              <a href="tbl_ride.php" class="small-box-footer" id="">More info <i
                  class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-danger ">
              <div class="inner text-center">
                <h3><?php echo $complete;?></h3>

                <p>Total Completed Rides</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="completed.php" class="small-box-footer" id="">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 ">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner text-center">
                <h3><?php echo $cancel;?></h3>

                <p>Cancel Rides</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="cancel.php" class="small-box-footer" id="">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                <h3><?php echo $pending;?></h3>

                <p>Panding Rides</p>
              </div>

              <a href="pending.php" class="small-box-footer" id="">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>

          <!-- /.row -->

        </div>
      </span>
      
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
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  
    <script src="user.js"></script>
   
   
</body>

</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script>

  $(document).ready(function () {
    $('#total_rides').click(function () {
      $.ajax({
        type: 'POST',
        url: 'tbl_ride.php',
        data: $(this).serialize(),
        success: function (data) {
          document.getElementById("ride_detail").innerHTML = data;

        }
      })
    })
    $('#completed').click(function () {
      $.ajax({
        type: 'POST',
        url: 'completed.php',
        data: $(this).serialize(),
        success: function (data) {
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
          document.getElementById("ride_detail").innerHTML = data;

        }
      })
    })
    $('#pending').click(function () {
      $.ajax({
        type: 'POST',
        url: 'pending.php',
        data: $(this).serialize(),
        success: function (data) {
          document.getElementById("ride_detail").innerHTML = data;

        }
      })
    })
  })
</script>