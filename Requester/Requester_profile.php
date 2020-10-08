<?php
define('PAGE','Profile');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login'])
{
  $rEmail=$_SESSION['rEmail']; 
  
}
else
{
 echo" <script>location.href='Requester_login.php'</script>";
}
 $sql="select r_name ,r_email from requester_login where r_email='$rEmail'";
 $result=$conn->query($sql);
 
 if($result->num_rows==1)
 {
  $row=$result->fetch_assoc();
  $rName=$row['r_name']; 
  
 }
 if(isset($_REQUEST['nameupdate']))
 {
   if($_REQUEST['rName']!="")
   {
    $name= $_REQUEST['rName'];
    $sql="UPDATE  requester_login set r_name='$name' where r_email='$rEmail' ";
    $result=$conn->query($sql); 
    if($conn->query($sql)==true)
    {
    $warning="<div class='alert alert-success col-sm-6 mt-2 '>successfully updated </div>";
    }
   }
   else
   {
      $warning="<div class='alert alert-warning col-sm-6 mt-2 '>Field must be required</div>";
   }
 }
?>

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
     <span class="navbar-text">Customer's Happiness is our Aim</span>
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
      <nav class="col-sm-2 bg-light sidebar py-5 ">
        <div class='sidebar-sticky'>
       <ul class="nav flex-column">
         <li class="nav-item"><a href="Requester_profile.php" class="nav-link active"><i class='fas fa-user'></i>Profile</a></li>
         <li class="nav-item"><a href="Requester_submit.php" class="nav-link"><i class='fab fa-accessible-icon'></i>Submit Request</a></li>
         <li class="nav-item"><a href="Requester_servicestatus.php" class="nav-link"><i class='fas fa-align center'></i>Check Status</a></li>
         <li class="nav-item"><a href="Requester_changepass.php" class="nav-link"><i class='fas fa-key'></i>Change Password</a></li>
         <li class="nav-item"><a href="#" class="nav-link"><i class='fas fa-sign-out-alt'></i>Logout</a></li>
       </ul>
       </div>
      </nav><!-- End sidebar  -->
       <!--  start profile area 2nd coloumn -->
       <div class="col-md-6 mt-5">
               <form action=""Method="POST" class="mx-5" >
                 <div class="form-group">
                   <label for="inputEmail">Email</label>
                    <input type="email"  name="email"class="form-control" value="<?php if(isset($rEmail)){echo $rEmail;}?>" readonly>
                  </div>
                  <div class="form-group">
                   <label for="inputName">Name</label>
                  <input type="text"  name="rName"class="form-control" value="<?php if(isset($rName)){echo $rName;}?>">
                  </div>
                  
                  <input type="submit" value="Update" class="btn btn-danger" name="nameupdate"><br>
                  <?php if(isset($warning)){echo"$warning";}?>
               </form>
              
            </div>
 <!--  End profile area 2nd coloumn -->

    </div>
  </div>
  <!-- ----------End   container-------------- -->
  
 <!---------JavaScript File------------>
 <script src="../Js/jquery3.4.1.main.js"></script>
 <script src="../Js/popper.js"></script>
 <script src="../Js/bootstrap.min.js"></script>
 <script src="../Js/all.min.js"></script>
</body>
</html>