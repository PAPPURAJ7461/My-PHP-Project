<?php
 
  include('../dbConnection.php');
  session_start();
  if(!isset($_SESSION['a_login']))
  {
    if(isset($_REQUEST['aEmail'])){
      $aEmail=mysqli_real_escape_string($conn,trim($_REQUEST['aEmail']));
      $aPass=mysqli_real_escape_string($conn,trim($_REQUEST['aPass']));
      $sql="SELECT a_email ,a_password FROM Adminlogin WHERE 
      a_email='".$aEmail."' AND a_password='".$aPass."'limit 1";
      $result=$conn->query($sql);
      if($result->num_rows==1)
      { 
        $_SESSION['a_login']=true;
        $_SESSION['aEmail']=$aEmail;
        echo"<script>location.href='dashboard.php'</script>";
      }
      else
      {
        $warning="<div class='alert alert-warning mt-2'>Please enter valied Email ID
        and Password </div>";
      }
    }
  }
  else
  {
    echo"<script>location.href='dashboard.php'</script>";
  }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
   <!--Bootstrap file-->
   <link rel="stylesheet" type="text/css" href="../Css/bootstrap.min.css">
   <!--Font Awesome file-->
   <link rel="stylesheet" type="text/css" href="../Css/all.min.css">
   <!-- Fontawesome icons-->
	<link rel="stylesheet" type="text/css" href="../Css/all.css">
   <!--Custom Css file-->
   <link rel="stylesheet" type="text/css" href="../Css/custom.css">
   <style>
   .custom{
    margin-top:-85px;
    padding-top:25px;
    background-color:black;
    border-radius:100%;
    width:120px;
    height:120px;
    text-align:center;
    color:white;
    margin-left:190px;
   }
   @media only screen and (max-width: 700px){
    .custom{
   
    margin-left:100px;
   }
    
  }
  
   </style>
</head>
<body>
<div class="container pt-5" id="registration">
          <h1 class="text-center">Admin Login</h1> <br><br>
          <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
               <form action="#" method="POST" class="shadow-lg p-4">
                <div class="form-group">
               <div class="text-center custom" ><i class="fas  fa-4x fa-user"></i></div>
                
                   <i class="fas fa-user"></i><label for="Email"
                   class="font-weight-bold pl-2">Email</label><input type="email"
                   class="form-control" placeholder="Email" name="aEmail"required >
                   <small class="form-text"> We'll never share your email with anyone else</small>
                   <i class="fas fa-key"></i><label for="Name"
                   class="font-weight-bold pl-2">New Password</label><input type="password"
                   class="form-control" placeholder="Password" name="aPass"required >
                </div>
                <button  type="submit"class="btn btn-outline-danger mt-5 btn-block
                shadaw-sm font-weight-bold" name="rsignup">Login</button>
                <?php if(isset($warning)){echo"$warning";}?>
                
               </form> 
               <div class="text-center"><a href="../index.php" class="btn btn-info mt-3 
               font-weight-bold shadow-sm">Back to Home</a></div>
            </div>
          </div>
       </div>
<!---------JavaScript File------------>
<script src="../Js/jquery3.4.1.main.js"></script>
 <script src="../Js/popper.js"></script>
 <script src="../Js/bootstrap.min.js"></script>
 <script src="../Js/all.min.js"></script>  
</body>
</html>