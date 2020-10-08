<?php 
define('PAGE','ServiceStatus');
include('includes/header.php');
include('../dbConnection.php');
?>
<!-- start 2nd coloumn -->
<div class=" col-sm-6 mt-5 ">
 <form action=""method="POST" class="form-inline">
   <div class="form-group">
     <label class="d-print-none" for="Request Id">Request Id: </label>
     <input type="text" name="Requestid" class="form-control ml-2 mr-3 d-print-none"onkeypress="isIntergerInput(event)" required>
     <input type="submit" name="search" value="Search" class=" btn btn-danger d-print-none">
     
   </div>
 </form>
 <?php 
  if(isset($_REQUEST['search']))
  {
    
  $sql="SELECT * FROM assign_owner where request_id={$_REQUEST['Requestid']}";
  $sql1="SELECT * FROM requester_submit where myid={$_REQUEST['Requestid']}";
  $result=$conn->query($sql);
  $result1=$conn->query($sql1);
  $row=$result->fetch_assoc();
  if($_REQUEST['Requestid']==$row['request_id'])
  {
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
 <button class='btn btn-danger mt-5 d-print-none'style="margin-left:250px" onclick='window.print()'>Print</button>        
 <?php
 }
 else
 {
  if($result1->num_rows > 0)
  {
    $warning="<div class='alert alert-warning col-sm-6 mt-2 '>Your request is Pending!</div>";
    echo"$warning";
  }
  else
  {
    $warning="<div class='alert alert-warning col-sm-6 mt-2 '>Sorry Inviled Request ID!</div>";
    echo"$warning";
  }
 }
 } 
 ?>
</div>
<!-- end 2nd coloumn -->
<?php 
include('includes/footer.php');
?>