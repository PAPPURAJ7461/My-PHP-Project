<?php 
define('PAGE','Submit Request');
include('includes/header.php');
session_start();
if($_SESSION['is_login'])
{
  $rEmail=$_SESSION['rEmail']; 
  
}
else
{
 echo" <script>location.href='Requester_login.php'</script>";
}
if(isset($_REQUEST['rsubmit']))
{
  $state   = $_REQUEST['State'] ;
  $dist    = $_REQUEST['dist1'] ;
  $city    = $_REQUEST['city1'] ;
  $location= $_REQUEST['rNear'] ;
  $property= $_REQUEST['rProperty'] ;
  $date    = $_REQUEST['rDate'] ;
  $name    = $_REQUEST['rName'] ;
  $mobile  = $_REQUEST['rMobile'] ;
  $father  = $_REQUEST['rFather'] ;
  $alterno = $_REQUEST['rAltno'] ;
  $address = $_REQUEST['rAddress'] ;
  $email   = $_REQUEST['rEmail'] ;
  $idtype  = $_REQUEST['Identity1'] ;
  //----------file uploads----------
  $file  = $_FILES['rfile'] ;
  
  $fileName   =$_FILES['rfile']['name'];
  $fileTmpName=$_FILES['rfile']['tmp_name'];
  $fileSize   =$_FILES['rfile']['size'];
  $fileError  =$_FILES['rfile']['error'];
  $fileType   =$_FILES['rfile']['type'];

  $fileExt= explode('.',$fileName);
  $fileActualExt=strtolower(end($fileExt));
  $allowed=array('jpg','jpeg','png','pdf');
  if(in_array( $fileActualExt, $allowed))
  {
    if($fileError===0)
    {
      if($fileSize <1048576033434)
      {
        $fileDestination='Uploads/'.$fileName;
        move_uploaded_file($fileTmpName,$fileDestination);
        include("../dbConnection.php");
        $sql="SELECT email FROM requester_submit WHERE email='".$_REQUEST['rEmail']."'";
        $result= $conn->query($sql);
        if($result->num_rows==1)
        {
           $warning="<div class='alert alert-danger mt-2'>Email alredy registered</div>"; 
        }
        else
        {
          $sql= "INSERT INTO  requester_submit (`state`, `district`, `city`, `location`, `property`, `date`, `name`, `mobile`, `father`, `alternet no.`, `address`, `email`, `idtype`, `iddocument`) VALUES
          ('$state', '$dist', '$city ', ' $location', '$property', '$date ', ' $name', '$mobile', '$father', '$alterno', '$address  ', '$email  ', ' $idtype', '$fileDestination');";
          $result=$conn->query($sql);
          if($conn->query($sql)==true)
          {
            $genid=mysqli_insert_id($conn);
            $_SESSION['myid']=$genid;
          $warning="<div class='alert alert-success col-sm-6 mt-2 '>successfully submited !</div>";
          echo" <script>location.href='Requestsubmitsuccess.php'</script>";
          }
   
        }
        
       }
      else
      {
        $warning="<div class='alert alert-warning col-sm-6 mt-2 '>Your file is to big!</div>";
      }
    }
    else
    {
      $warning="<div class='alert alert-warning col-sm-6 mt-2 '>There was an error uploading your file!</div>";
    }
  }
  else
  {
    $warning="<div class='alert alert-warning col-sm-6 mt-2 '>You cannot upload files of this type</div>";
  }
 
}
?>


           <!--  start profile area 2nd coloumn -->
         
           <div class="col-sm-10 col-md-10 mt-5">
             <div class="form-row">
                <div class="form-group col-md-10 mx-5">
                <h2 align='center'><b>REGISTER OF BOOK DETAILS</b></h2>
                </div>
             </div>
             <div class="form-row">
                <div class="form-group col-md-10 mx-5">
                <h4>Location Details</h4>
                </div>
             </div>
             
             <form action="Requester_submit.php"Method="POST"enctype="multipart/form-data" class="mx-5" >
               
             <div class="form-row">
               <!-- 2nd coloumn -->
                <div class="form-group col-md-5 ">
                <label for="inputEmail">Estate<span>*<span></label>
                <select id="box" class="form-control" name='State' onchange="state()"required>
		                <option>select</option>
	                 <option>Hariyana</option>
                  <option>New Delhi</option>
                  <option>Punjab</option>
                  <option>Utar Pradesh</option>		   
		              </select>
                </div>
                <div class="form-group col-md-5 ">
                <label for="inputEmail">District<span>*<span></label>
                <select id="box1" class="form-control" name= 'dist1' onchange="Dist()" required >
		       	   
		            </select>
                </div>
                <div class="form-group col-md-5 ">
                <label for="inputEmail">City<span>*<span></label>
                <select id="box2" class="form-control" type=text name='city1'onchange="City()"required>
               			   
                </select>
                </div>
                 <!-- space -->
             
               <div class="form-group col-sm-1"></div>
               <div class="form-group col-sm-1"></div>
               <div class="form-group col-sm-1"></div>
                
               
             
               
                  <!-- 3rd coloumn -->
                  <div class="form-group col-md-5 ">
                <label for="inputEmail">Near By Location<span>*<span></label>
                <select id="box3" class="form-control"type=text name='rNear'required>
               			   
                </select>
                </div>
                <div class="form-group col-sm-5">
                 <label for="inputName">Date</label>
                 <input type="date"  name="rDate"class="form-control">
               </div>
             
               
             
                <!-- end 3rd coloumn -->
             </div>
             <!-- end 2nd coloumn -->
             <div class="form-row">
                <div class="form-group col-md-10 ">
                <h4>Seller Details</h4>
                </div>
             </div>
             
            
               
             <div class="form-row">
               <!-- 4th coloumn -->
               <div class="form-group col-sm-5">
                 <label for="inputName">Name<span>*<span></label>
                 <input type="text"  name="rName"class="form-control"placeholder="Name">
               </div>
               <div class="form-group col-sm-5">
                 <label for="inputName">Mobile NO.<span>*<span></label>
                 <input type="text"  name="rMobile"class="form-control"onkeypress="isIntergerInput(event)"placeholder="Mobile No.">
               </div>
               <div class="form-group col-sm-5">
                 <label for="inputName">Father's Name<span>*<span></label>
                 <input type="text"  name="rFather"class="form-control"placeholder="Father's Name">
               </div>
                <div class="form-group col-md-5 ">
                <label for="inputEmail">Alternate Number<span>*<span></label>
                <input type="text"  name="rAltno"class="form-control"onkeypress="isIntergerInput(event)"placeholder="Alternate No.">
               
                </div>
                <div class="form-group col-md-5 ">
                <label for="inputEmail">Address<span>*<span></label>
                <input type="text"  name="rAddress"class="form-control"placeholder="Address">
                </div>
                <div class="form-group col-md-5 ">
                <label for="inputName">Email<span>*<span></label>
                 <input type="email"  name="rEmail"class="form-control"placeholder="Email">
                </div>
               
                
             </div>
             <!--Start Book details -->
             <div class="form-row">
                <div class="form-group col-md-10 ">
                <h4>Book Details</h4>
                </div>
             </div>
             <div class="form-row">

                   <div class="form-group col-sm-5">
                       <label for="inputName"> Book Name<span>*<span></label>
                       <input type="text"  name="BName"class="form-control"placeholder="Book Name" required>
                   </div>
                   <div class="form-group col-sm-5">
                        <label for="inputName"> First Author Name<span>*<span></label>
                        <input type="text"  name="AName"class="form-control"placeholder=" First Author Name" required>
                   </div>
                   
                   

             </div>
             <div class="form-row">
             
                   <div class="form-group col-sm-5">
                        <label for="inputName">Publisher Name<span>*<span></label>
                        <input type="text"  name="PName"class="form-control"placeholder="Publisher Name" required>
                   </div>
                   <div class="form-group col-sm-5">
                        <label for="inputName">Second Author Name</label>
                        <input type="text"  name="AName"class="form-control"placeholder="Second Author Name">
                   </div>
                   <div class="form-group col-md-5 ">
                       <label for="inputEmail">Book Type<span>*<span></label>
                       <select class="form-control"id="box" name='Identity1' required>
                       <option>select</option>
			                      <option>School</option>
	                          <option>College</option>
                            <option>University</option>
                            <option>Other</option>	   
		            </select>
                </div>
                <div class="form-group col-md-5 ">
                      <label for="inputEmail">Class<span>*<span></label>
                        <select class="form-control"id="box" name='Identity1' required>
		                       
                           		   
		                    </select>
                </div>
                <div class="form-group col-sm-5">
                        <label for="inputName">Subject<span>*<span></label>
                        <input type="text"  name="AName"class="form-control"placeholder="Subject"required>
                   </div>
                <div class="form-group col-md-5 ">
                    <label for="inputEmail">Image of Book Front Page<span>*<span></label>
                   <input  type="file"  name="rfile"class="form-control"required>
              
                </div>
                <div class="form-group col-sm-5">
                        <label for="inputName">Book Store Name<span>*<span></label>
                        <input type="text"  name="AName"class="form-control"placeholder="Book Store Name">
                   </div>
                   <div class="form-group col-md-5 ">
                    <label for="inputEmail">Image of Book Contents Page<span>*<span></label>
                   <input  type="file"  name="rfile"class="form-control"required>
              
                </div>
                <div class="form-group col-sm-5">
                        <label for="inputName">Book Price<span>*<span></label>
                        <input type="text"  name="AName"class="form-control"placeholder="Book Price" onkeypress="isIntergerInput(event)"reuired>
                   </div>
                   <div class="form-group col-md-5 ">
                        <label for="inputEmail">Image of Book Backend Page<span>*<span></label>
                       <input  type="file"  name="rfile"class="form-control"required>
              
                </div>
             </div>

             <!-- end Book details -->
                <input type="submit" value="Submit" class="btn btn-danger" name="rsubmit"><br>
                <?php if(isset($warning)){echo"$warning";}?>
                
             </form>
             
        </div>
        <!--  End profile area 2nd coloumn -->
       
  

<?php 
include('includes/footer.php');
?>