
<?php
session_start();


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
     
        
        <div class="row">
          <div class="col">
            <!-- small box -->
            <?php


class approve
{
    function new_request()
    {
        
include "connect.php";

echo "<table class='table table-striped display' >";
echo "<thead>
<tr class='bg-primary'>
<th>Name</th><th>Email</th><th>Number</th><th>Date</th>
<th>Action</th>
</tr>
</thead>";
echo "<tbody>";
$sql="SELECT *from signup where status=0";
$result = $con->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 
    echo "<tr><td>".$row['Name']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['Number']."</td>";
    echo "<td>".$row['Date']."</td>";
    echo "<td><a href='unblockuser.php?sno=$row[S_No]' class='btn btn-primary'>Ublock</a></tr>";
    
    
  }} 
   else {
    echo "0 results";
  }
  $con->close();
  
    }
   
}

$obj=new approve();
$obj->new_request();
echo "</tbody>";
echo "</table>"
?>   </div>
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

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script>
  $(document).ready(function () {
    $('table.display').DataTable();
  });
</script>
