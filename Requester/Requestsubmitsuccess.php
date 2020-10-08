<?php 
define('TITLE','Submit success');
include('includes/header.php');
include('../dbConnection.php');
session_start();
?>
<div class="col-sm-9">
<form class='mt-5 ml-5'action="#" method="POST">
 
 <h2 class="text-center">All Information</h2> 

    <table class="table border">
 
    <?php
  $q="SELECT * FROM requester_submit where myid={$_SESSION['myid']} ";
    $result=mysqli_query($conn,$q);
    $row=$result->fetch_assoc();
   
     echo" 
     <tr>
     <th>Requester ID</th>
     <td>".$row['myid']."</td>
     </tr>
     <tr>
     <th>State</th>
     <td>".$row['state']."</td>
     </tr>
     <tr>
     <th>District</th>
     <td>".$row['district']."</td>
     </tr>
     <tr>
     <th>City</th>
     <td>".$row['city']."</td>
     </tr>
     <tr>
     <th>Location</th>
     <td>".$row['location']."</td>
     </tr>
     <tr>
     <th>Property Type</th>
     <td>".$row['property']."</td>
     </tr>
     <tr>
     <th>Date</th>
     <td>".$row['date']."</td>
     </tr>
    
     <tr>
     <th>Name</th>
     <td>".$row['name']."</td>
     </tr>
     <tr>
     <th>Mobile</th>
     <td>".$row['mobile']."</td>
     </tr>
     <tr>
     <th>Father's Name</th>
     <td>".$row['father']."</td>
     </tr>
     <tr>
     <th>Alternet No.</th>
     <td>".$row['alternet no.']."</td>
     </tr>
     <tr>
     <th>Address</th>
     <td>".$row['address']."</td>
     </tr>
     <tr>
     <th>Email</th>
     <td>".$row['email']."</td>
     </tr>
     <tr>
     <th>Idtype</th>
     <td>".$row['idtype']."</td>
     </tr>
    
     <tr>
       
       <td><input class='btn btn-danger mt-5 ml-5 d-print-none' type='submit'value='print' onclick='window.print()'><td>
     </tr>
     </table>
     </center>
     </form>
    ";		
 
?>

</div>
<?php
include("includes/footer.php");
?>
