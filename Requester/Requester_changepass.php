<?php 
define('PAGE','ChangePass');
include('includes/header.php');
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
 $sql="select r_email from requester_login where r_email='$rEmail'";
 $result=$conn->query($sql);
 
 if($result->num_rows==1)
 {
  $row=$result->fetch_assoc();
  
 }
 if(isset($_REQUEST['Passwordupdate']))
 {
   if($_REQUEST['rPassword']!="")
   {
    $password= $_REQUEST['rPassword'];
    $sql="UPDATE  requester_login set r_password='$password' where r_email='$rEmail' ";
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
<!--  start  change password 2nd coloumn -->
<div class="col-md-6 mt-5">
               <form action=""Method="POST" class="mx-5" >
                 <div class="form-group">
                   <label for="inputEmail">Email</label>
                    <input type="email"  name="email"class="form-control" value="<?php if(isset($rEmail)){echo $rEmail;}?>" readonly>
                  </div>
                  <div class="form-group">
                   <label for="inputName">New Password</label>
                  <input type="Password"  name="rPassword"class="form-control"placeholder="New Password" >
                  </div>
                  
                  <input type="submit" value="Update" class="btn btn-danger" name="Passwordupdate">
                  <input type="reset" value="reset" class="btn btn-secondary" name="newreset"><br>
                  <?php if(isset($warning)){echo"$warning";}?>
               </form>
              
            </div>
 <!--  End change password 2nd coloumn -->

<?php 
include('includes/footer.php');
?>