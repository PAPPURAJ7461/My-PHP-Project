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
<!-- Start Requester List -->
 <div class="mt-5 col-sm-10 col-md-10">
    <p class="bg-dark p-2 text-white text-center">List of Requesters</p>
    <table class="table">
     <thead>
      <tr>
      <th>Requester ID</th>
      <th>State</th> 
      <th>City</th>
      <th>Property Type</th>
      <th>Name</th>
      <th>Mobile</th>
      <th>House Owner</th>
      <th>Assign Date</th>
      <th>Action</th>
      </tr> 
      <tbody>
      <tr>
      <?php
      $sql="SELECT * from assign_owner";
      $result=$conn->query($sql);
      if($result->num_rows > 0)
      {
          while($row=$result->fetch_assoc())
          {
            echo'<tr>';
            echo'<td>'.$row['request_id'].'</td>';
            echo'<td>'.$row['state'].'</td>';
            echo'<td>'.$row['city'].'</td>';
            echo'<td>'.$row['property'].'</td>';
            echo'<td>'.$row['name'].'</td>';
            echo'<td>'.$row['mobile'].'</td>'; 
            echo'<td>'.$row['owner'].'</td>';
            echo'<td>'.$row['date'].'</td>';
            echo'<td>';
            echo'<form action="viewassignwork.php" method="POST" class="d-inline">';
            echo'
            <input type="hidden" name="id" value='.$row['request_id'].'>
            <button class="btn btn-warning" name="view"><i class="far fa-eye"></i></button>';
            echo'</form>';
            echo'<form action="" method="POST" class="d-inline"> ';
            
            echo'
            <input type="hidden" name="id" value='.$row['request_id'].'>
            <button class="btn btn-secondary" name="delete"><i class="far fa-trash-alt"></i></button>';
            echo'</form>';
            echo'</td>';
            echo'</tr>';
          }   
      }
      if(isset($_REQUEST['delete']))
      {
        $sql="DELETE  FROM assign_owner where request_id={$_REQUEST['id']}";
        $result=$conn->query($sql);  
      }
      ?>
     
      </tbody>
     </thead>
    </table>
   </div>
   <!--  end Requester list  -->


<?php 
include('includes/footer.php');
?>