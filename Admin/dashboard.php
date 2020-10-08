<?php 
define('PAGE','dashboard');
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
<!--  start second coloumn  -->
<div class="col-sm-9 col-md-10">
 <div class="row text-center mx-5">
  <div class="col-sm-4 mt-5">
   <div class="card text-white bg-danger mb-3">
    <div class="card-header">Requests Received</div>
    <div class="card-body">
    <h3 class="card-title">43</h3>
    <a href="#" class="btn text-white">View</a>
    </div>
   </div>
    
  </div>
  <div class="col-sm-4 mt-5">
   <div class="card text-white bg-success mb-3">
    <div class="card-header">Assigned Booking</div>
    <div class="card-body">
    <h3 class="card-title">20</h3>
    <a href="#" class="btn text-white">View</a>
    </div>
   </div>
    
  </div>
 <div class="col-sm-4 mt-5">
    <div class="card text-white bg-primary mb-3">
       <div class="card-header">No. of House Owner</div>
        <div class="card-body">
         <h3 class="card-title">1</h3>
         <a href="#" class="btn text-white">View</a>
        </div>
       </div>
      </div>
   </div>
   <!-- start Requester list -->
   <div class="mt-5 mx-5 text-center">
    <p class="bg-dark p-2 text-white">List of Requesters</p>
    <table class="table">
     <thead>
      <tr>
      <th>Requester ID</th>
      <th>Name</th>
      <th>Email</th>
      </tr> 
      <tbody>
      <tr>
      <?php
      $sql="SELECT * from requester_login ";
      $result=$conn->query($sql);
      if($result->num_rows > 0)
      {
          while($row=$result->fetch_assoc())
          {
            echo'<tr>';
            echo'<td>'.$row['r_login_id'].'</td>';
            echo'<td>'.$row['r_name'].'</td>';
            echo'<td>'.$row['r_email'].'</td>';
            echo'</tr>';
          }   
      }
      ?>
     
      </tbody>
     </thead>
    </table>
   </div>
   <!--  end Requester list  -->
</div>

<!--  end second coloumn    -->
<?php 
include('includes/footer.php');
?>