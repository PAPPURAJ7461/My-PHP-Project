
<?php
include('dbConnection.php');
$warning="";
if(isset($_REQUEST['rsignup']))
{
 $r_name=$_REQUEST['rName'];
 $r_email=$_REQUEST['rEmail'];
 $r_password=$_REQUEST['rPass'];
//----------checking Empaty Field-----------
if(($r_name=="")||($r_email=="")||($r_password==""))
{
 $warning="<div class='alert alert-warning mt-2'>All fields are required </div>";
}
else
{
   //--------Checking  Email Id alredy Registered
   $sql="SELECT r_email FROM requester_login WHERE r_email='".$REQUEST['rEmail']."'";
   $result=$conn->query($sql);
   if($result->num_rows==1)
   {
      $warning="<div class='alert alert-danger mt-2'>Email alredy registered</div>"; 
   }
   else
   {
      // --------assigning user's  value to variables
      $sql="INSERT INTO requester_login(r_name,r_email,r_password)values('$r_name','$r_email','$r_password')";
      if($conn->query($sql)==true)
      {
         $warning="<div class='alert alert-success mt-2'>Account Sucessfully Created</div>";  
      }
      else
      {
         $warning="<div class='alert alert-danger mt-2'>Unable to create account </div>";
      }
   }
   
}

}
?>
<div class="container pt-5" id="registration">
          <h2 class="text-center">Create an Account</h2> 
          <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
               <form action="#" method="POST" class="shadow-lg p-4">
                <div class="form-group">
                <i class="fas fa-user"></i><label for="Name"
                   class="font-weight-bold">Name</label><input type="text"
                   class="form-control" placeholder="Name" name="rName" > 
                   <i class="fas fa-user"></i><label for="Email"
                   class="font-weight-bold pl-2">Email</label><input type="email"
                   class="form-control" placeholder="Email" name="rEmail" >
                   <small class="form-text"> We'll never share your email with anyone else</small>
                   <i class="fas fa-key"></i><label for="Name"
                   class="font-weight-bold pl-2">New Password</label><input type="password"
                   class="form-control" placeholder="Password" name="rPass" >
                </div>
                <button  type="submit"class="btn btn-danger mt-5 btn-block
                shadaw-sm font-weight-bold" name="rsignup">Sign Up</button>
                <em style="font-size:10px">Note - By clicking Sign Up , you agree to our Terms 
                    Data Policy and Cookie Policy
                </em>
                <?php if(isset($warning)){echo $warning;}?>
               </form> 
            </div>
          </div>
       </div>