<?php 
define('PAGE','requests');
include('includes/header.php');
include("../dbConnection.php");

session_start();
if($_SESSION['a_login'])
{
  $aEmail=$_SESSION['aEmail']; 
  
}
else
{
   echo"<script>location.href='Adminlogin.php'</script>";
}
?>
<!-- start second coloumn -->
<div class="col-sm-4">
<?php
  $sql="SELECT myid ,state,district,property,date FROM requester_submit";
  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())
    {
      echo'<div class="card mx-5 mt-5 shadow-lg">';
      echo'<div class="card-header">';
      echo'<b><i>REQUEST ID: '.$row['myid'].'</b></i>';
      echo'</div>';
      echo'<div class="card-body">';
      echo'<h5 class="card-title"><b>State:</b> '.$row['state'].'   <b>District:</b> '.$row['district'].'</h5>';
      echo'<p class="card-text"><b>Property:</b> '.$row['property'].'</p>';
      echo'<p class="card-text"><b>Date:</b> '.$row['date'].'</p>';
      echo'<div class="float-right ">';
      echo'<form action="#"method="POST">';
      echo'<input type="hidden" name="Id" value='.$row['myid'].'>';
      echo'<input type="submit"name="view" class="btn btn-danger ml-2" value="View">';
      echo'<input type="submit" name="close"class="btn btn-secondary ml-2" value="Close">';
      echo'</form>';
      echo'</div>';
      echo'</div>';
      echo'</div>';
    
    }
  }
?>
</div>
<!-- End second coloumn -->
<?php
if(isset($_REQUEST['view']))
{
$sql="SELECT *FROM requester_submit WHERE myid={$_REQUEST['Id']}" ;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
}
if(isset($_REQUEST['close']))
{
  echo"<script> alert('You want to delete!');</script>";
$sql="DELETE FROM requester_submit WHERE myid={$_REQUEST['Id']}" ;
echo"<meta http-equiv='refresh' content='0;URL=?closed'/> ";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
}
if(isset($_REQUEST['assign']))
{
  
  $state=$_REQUEST['State'];
  $Dist =$_REQUEST['Dist'];
  $City=$_REQUEST['City'];
  $Location=$_REQUEST['Location'];
  $Property=$_REQUEST['Property'];
  $Name=$_REQUEST['Name'];
  $Mobile=$_REQUEST['Mobile'];
  $Father=$_REQUEST['Father'];
  $Alternet=$_REQUEST['Alternet'];
  $Address=$_REQUEST['Address'];
  $Email=$_REQUEST['Email'];
  $Idproof=$_REQUEST['Idproof'];
  $Date=$_REQUEST['Date'];
  $House=$_REQUEST['House'];

$sql="INSERT INTO assign_owner( `state`, `district`, `city`, `location`, `property`, `name`, `mobile`, `father`, `alternet`, `address`, `email`, `idproof`, `date`, `owner`) VALUES ( '$state', '$Dist', '$City', '$Location', '$Property', '$Name', '$Mobile', '$Father', '$Alternet', '$Address', '$Email', '$Idproof', '$Date', '$House');" ;
if($conn->query($sql)==true){
  
  $warning="<div class='alert alert-success col-sm-6 mt-2 '>successfully Assigned!</div>";
}

}

?>
<!-- start 3rd coloumn for form -->
<div class="jumbotron col-sm-5 mt-5 shadow">              
     <form action="#" method="POST">
     <h4 class="text-center ">Assign Booking Order</h4>
     <div class="form-group">
       <label for="Request-id">Request ID <span>*</span></label>
       <input type="text" class="form-control"name="Requestid" value="<?php if(isset($row['myid'])){echo $row['myid'];}?>"required readonly>
     </div>
     <h5>Booking Detail</h5>
     
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="State">State <span>*</span></label>
         <input type="text" class="form-control"name="State"value="<?php if(isset($row['state'])){echo $row['state'];}?>" required>
       </div>
       <div class="form-group col-md-6">
         <label for="District">District <span>*</span></label>
         <input type="text" class="form-control"name="Dist"value="<?php if(isset($row['district'])){echo $row['district'];}?>" required>      
  
       </div>
     </div>
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="City">City <span>*</span></label>
         <input type="text" class="form-control"name="City"value="<?php if(isset($row['city'])){echo $row['city'];}?>" required>
       </div>
       <div class="form-group col-md-6">
         <label for="Location">Near By Location <span>*</span></label>
         <input type="text" class="form-control"name="Location"value="<?php if(isset($row['location'])){echo $row['location'];}?>" required>
       </div>
     </div>
        <div class="form-group ">
         <label for="Property">Property Type<span>*</span></label>
         <input type="text" class="form-control"name="Property"value="<?php if(isset($row['property'])){echo $row['property'];}?>" required>
       </div>
       <h5>Customer Details</h5>
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="Name">Name <span>*</span></label>
         <input type="text" class="form-control"name="Name"value="<?php if(isset($row['name'])){echo $row['name'];}?>" required>
       </div>
       <div class="form-group col-md-6">
         <label for="Mobile">Mobile No. <span>*</span></label>
         <input type="text" class="form-control"name="Mobile"value="<?php if(isset($row['mobile'])){echo $row['mobile'];}?>"onkeypress="isIntergerInput(event)" required>
       </div>
     </div>
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="Father">Father's Name <span>*</span></label>
         <input type="text" class="form-control"name="Father"value="<?php if(isset($row['father'])){echo $row['father'];}?>" required>
       </div>
       <div class="form-group col-md-6">
         <label for="Alternet">Alternet No. <span>*</span></label>
         <input type="text" class="form-control"name="Alternet"value="<?php if(isset($row['alternet no.'])){echo $row['alternet no.'];}?>"onkeypress="isIntergerInput(event)" required>
       </div>
     </div>
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="Address">Address<span>*</span></label>
         <input type="text" class="form-control"name="Address"value="<?php if(isset($row['address'])){echo $row['address'];}?>" required>
       </div>
       <div class="form-group col-md-6">
         <label for="Email">Email <span>*</span></label>
         <input type="email" class="form-control"name="Email"value="<?php if(isset($row['email'])){echo $row['email'];}?>" required>
       </div>
     </div>
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="Idproof">Identity Proof <span>*</span></label>
         <input type="text" class="form-control"name="Idproof"value="<?php if(isset($row['idtype'])){echo $row['idtype'];}?>" required>
       </div>
       <div class="form-group col-md-6">
         <label for="Date">Date <span>*</span></label>
         <input type="Date" class="form-control"name="Date" required>
       </div>
     </div>
     <div class="form-group ">
         <label for="House">Name of House owner <span>*</span></label>
         <input type="text" class="form-control"name="House" required>
      </div>
     <div class="float-right">
       <button type="submit" name="assign"class="btn btn-success mr-2">Assign</button>
      <input type="reset" class="btn btn-secondary" value="Reset"><br>
     
      </div> 
      <?php if(isset($warning)){echo"$warning";}?>
     </form>   
      
</div>
<!-- End 3rd coloumn    -->
 
<?php 
include('includes/footer.php');
?>