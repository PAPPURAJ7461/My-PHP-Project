<?php 
define('PAGE','bookingorder');
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
<!-- start 2nd coloumn -->
<div class=" col-sm-6 mt-5 ">
 
 <?php 
  if(isset($_REQUEST['view']))
  {
    
  $sql="SELECT * FROM assign_owner where request_id={$_REQUEST['id']}";
  $result=$conn->query($sql); 
  $row=$result->fetch_assoc();
  
 ?>
 <h2 class="text-center mt-4">Assingn Booking Details</h2>
 <table class="table mt-4 border ">
 <tr>
     <td>Request Id</td>
     <td><?php if(isset($row['request_id'])){echo $row['request_id'];}?></td>
   </tr>
   <tr>
   <tr>
     <td>State</td>
     <td><?php if(isset($row['state'])){echo $row['state'];}?></td>
   </tr>
   <tr>
     <td>District</td>
     <td><?php if(isset($row['district'])){echo $row['district'];}?></td>
   </tr>
   <tr>
     <td>City</td>
     <td><?php if(isset($row['city'])){echo $row['city'];}?></td>
   </tr>
   <tr>
     <td>Neat By Location</td>
     <td><?php if(isset($row['location'])){echo $row['location'];}?></td>
   </tr>
   <tr>
     <td>Property Type</td>
     <td><?php if(isset($row['property'])){echo $row['property'];}?></td>
   </tr>
   
     <td>Name</td>
     <td><?php if(isset($row['name'])){echo $row['name'];}?></td>
   </tr>
   <tr>
     <td>Mobile No.</td>
     <td><?php if(isset($row['mobile'])){echo $row['mobile'];}?></td>
   </tr>
   <tr>
     <td>Father's Name</td>
     <td><?php if(isset($row['father'])){echo $row['father'];}?></td>
   </tr>
   <tr>
     <td>Alternet No.</td>
     <td><?php if(isset($row['alternet'])){echo $row['alternet'];}?></td>
   </tr>
   <tr>
     <td>Address</td>
     <td><?php if(isset($row['address'])){echo $row['address'];}?></td>
   </tr>
   <tr>
   <tr>
     <td>Email</td>
     <td><?php if(isset($row['email'])){echo $row['email'];}?></td>
   </tr>
   <tr>
   <tr>
     <td>Identity</td>
     <td><?php if(isset($row['idproof'])){echo $row['idproof'];}?></td>
   </tr>
   <tr>
   <tr>
     <td>Date</td>
     <td><?php if(isset($row['date'])){echo $row['date'];}?></td>
   </tr>
   <tr>
   <tr>
     <td>House Owner</td>
     <td><?php if(isset($row['owner'])){echo $row['owner'];}?></td>
   </tr>
   <tr>
   <tr>
     <td>Customer Sign</td>
     <td></td>
   </tr>
   <tr>
   <tr>
     <td>House Owner Sign</td>
     <td></td>
   </tr>
   <tr>
     
 </table>
 <form action="" class="d-inline">
 <button class='btn btn-danger mt-5 d-print-none 'style="margin-left:240px" onclick='window.print()'>Print</button>
 </form>
 
 <form action="Booking_Order.php"class="d-inline" >
 <button class='btn btn-secondary mt-5 d-print-none'style="margin-left:20px"  type="submit">Close</button> 
 </form>
        
 <?php
 } 
 ?>
</div>

<?php 
include('includes/footer.php');
?>