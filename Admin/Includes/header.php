<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Bootstrap file-->
  <link rel="stylesheet" type="text/css" href="../Css/bootstrap.min.css">
   <!--Font Awesome file-->
   <link rel="stylesheet" type="text/css" href="../Css/all.min.css">
   <!-- Fontawesome icons-->
	<link rel="stylesheet" type="text/css" href="../Css/all.css">
  <!--Custom Css file-->
  <link rel="stylesheet" type="text/css" href="../Css/custom.css">
  <title>Requester_profile</title>
</head>
<body>
 <!-----------------Start Navbar--------------> 
 <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
     <a href="../index.php" class="navbar-brand">TOLET</a>
    
     <button type="button" class="navbar-toggler"
     data-toggle="collapse"data-target="#myMenu">
     <span class="navbar-toggler-icon"></span>
    </button>
    
     </nav>
  <!----------------- End  Navbar-------------->
  <!-- ----------Start Container-------------- -->
  <div class="container-fluid "style="margin-top:40px;">
    <div class="row">
      <!-- Start sidebar -->
      <nav class="col-sm-2 bg-light sidebar py-5 d-print-none ">
        <div class='sidebar-sticky'>
       <ul class="nav flex-column">
         <li class="nav-item"><a href="dashboard.php" class="nav-link <?php 
         if(PAGE=='dashboard'){echo"active";}?> "><i class='fas fa-tachometer-alt'></i>Dashboard</a></li>
         <li class="nav-item"><a href="Booking_Order.php" class="nav-link <?php 
         if(PAGE=='bookingorder'){echo"active";}?> "><i class='fab fa-accessible-icon'></i>Booking Order</a></li>
         <li class="nav-item"><a href="Request.php" class="nav-link <?php if(PAGE=='requests'){echo"active";}?> "><i class='fas fa-user'></i>Requests</a></li>
         <li class="nav-item"><a href="House_owner.php" class="nav-link <?php if(PAGE=='house'){echo"active";}?> "><i class='fas fa-owner'></i>House Owner</a></li>
         <li class="nav-item"><a href="Requester.php" class="nav-link <?php if(PAGE=='requester'){echo"active";}?> "><i class='fas fa-users'></i>Requester</a></li>
         <li class="nav-item"><a href="Booking_report.php" class="nav-link <?php if(PAGE=='bookingr'){echo"active";}?> "><i class='fas fa-table'></i>Booking Report</a></li>
         <li class="nav-item"><a href="ChangePass.php" class="nav-link <?php if(PAGE=='ChangePass'){echo"active";}?> "><i class='fas fa-key'></i>Change Password</a></li>
         <li class="nav-item"><a href="../logout.php" class="nav-link"><i class='fas fa-sign-out-alt'></i>Logout</a></li>
       </ul>
       </div>
      </nav><!-- End sidebar  -->