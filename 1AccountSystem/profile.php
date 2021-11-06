<?php
session_start();

// TO CHECK USER IS ENTER BY LOGIN ONLY
if ($_SESSION['loggedIn']) {
  // Allow USER
}else{

  header('Location: ../login.php');  
}

include '../3databases/generalDB.php';
$sessionvariable = $_SESSION['Email'];
$Email = $_SESSION['Email'];

// $Email="sudeshna@gmail.com";

$query = "SELECT * FROM userinfo WHERE Email='$sessionvariable' ";
   if($result=mysqli_query($General_Conn,$query)){
      while ($row=mysqli_fetch_array($result)){
        $UserName = $row['FirstName'];
        $LastName = $row['LastName'];
         $ImageURL ='uploads_Profile/'.$row['ProfileImageURL'];
            }
          }


$NameOfStudent=mysqli_real_escape_string($General_Conn,$_POST['NameOfStudent']);
$DateOfBirth=mysqli_real_escape_string($General_Conn,$_POST['DateOfBirth']);
$Age=mysqli_real_escape_string($General_Conn,$_POST['Age']);
$Gender=mysqli_real_escape_string($General_Conn,$_POST['Gender']);
$SchoolName=mysqli_real_escape_string($General_Conn,$_POST['SchoolName']);
$ParentName=mysqli_real_escape_string($General_Conn,$_POST['ParentName']);
$Address=mysqli_real_escape_string($General_Conn,$_POST['Address']);
$City=mysqli_real_escape_string($General_Conn,$_POST['City']);
$State=mysqli_real_escape_string($General_Conn,$_POST['State']);
$Pincode=mysqli_real_escape_string($General_Conn,$_POST['Pincode']);
$FatherMobile=mysqli_real_escape_string($General_Conn,$_POST['FatherMobile']);
$MotherMobile=mysqli_real_escape_string($General_Conn,$_POST['MotherMobile']);



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $query="UPDATE studentdetails 
          SET  
             
             StudentName='$NameOfStudent' ,
             DateOfBirth='$DateOfBirth' ,
             Age='$Age' ,
             Gender='$Gender' ,
             SchoolName='$SchoolName' ,
             ParentName='$ParentName' ,
             Address='$Address' ,
             City='$City',
             State='$State' ,
             PinCode='$Pincode' ,
             FatherMobileNo ='$FatherMobile' ,
             MotherMobileNo ='$MotherMobile'
       
             

          WHERE Email= '$sessionvariable' LIMIT 1";
          mysqli_query($General_Conn,$query);


}

    $query="SELECT * FROM studentdetails WHERE Email='$sessionvariable' ";
   if ($result=mysqli_query($General_Conn,$query)) {
       $row=mysqli_fetch_array($result);
         $NameOfStudent = $row['StudentName'];
         $DateOfBirth = $row['DateOfBirth'];
         $Age = $row['Age'];
         $Gender = $row['Gender'];
         $SchoolName = $row['SchoolName'];
         $ParentName = $row['ParentName'];
         $Address = $row['Address'];
         $City = $row['City'];
         $State = $row['State'];
         $Pincode = $row['PinCode'];
         $FatherMobile = $row['FatherMobileNo'];
         $MotherMobile = $row['MotherMobileNo'];
         }


?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      #sidebar{
        width:25%;
        background-color: #051E34;
      }
      #mainview{
        margin-left:25%;
      }
       @media all and (max-width: 800px) {
         #sidebar{
        /*display: none;*/
         width: 300px;
         background-color: #39424E;
         z-index: 1000000;
          }
         #mainview{
         margin-left:0px;
          }
       }
/* ----------------------------------------------------*/
     /* SIDEBAR VIEW FORM HERE*/
 .ProfileImage_wrapper{
      
     }
 .ProfileImage_wrapper img{
  width: 200px;
  height: 200px;
  border: 1px solid #ddd;
  border-radius: 50%;
  background-color: white;
  margin: 30px;
}





/* ----------------------------------------------------*/
     /* MAIN VIEW FORM HERE*/

       body{
        background-color: #F1F7FD;
      }
      /* Main Menu Bar */
      .menu_wrapper{
     
        font-family: Arial, Helvetica, sans-serif;
        background-color: #F1F7FD;

      
      
      }
      .nav-link {
       color: black !important;
       margin-right: 20px;
       font-size: 120%;
      }

       @media all and (max-width: 800px) {
        .menu_wrapper{
        font-family: Arial, Helvetica, sans-serif;
        background-color: #39424E;  
         }
         #hr{
          display: none;
         }
         .nav-link {
           color: white !important;
           margin-right: 20px;
           font-size: 120%;
          }
       }

     /* ------------------------*/
        /*Account Tab*/
      .disabled{
         pointer-events: none;
         background-color: gray !important;
         font-weight: 700;
         color: white !important;
      }

     /* ------------------------*/
      /* INFORMATION  */
       #form_wrapper{
        /*border: 1px solid black;*/
        width: 600px;
        margin-top: 20px;
        margin-bottom: 20px;
        font-family: Arial, Helvetica, sans-serif;
        background-color: #F1F7FD;
        padding-top: 10px;
        box-shadow:0 0 10px #9ecaed;
      }
      input::-webkit-inner-spin-button {
             -webkit-appearance: none;
             margin: 0;
      }
      @media all and (max-width: 800px) {
        #form_wrapper{
        width: 300px;
       }
      }
     /* ----------*/

     #yourBtn {
 
      margin: 0px auto;
      font-family: calibri;
      width: 150px;
      padding: 10px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border: 1px dashed #BBB;
      text-align: center;
      background-color: #DDD;
      cursor: pointer; 
        }
      



    </style>
    <title>Profile</title>
  </head>
  <body>


<!-- --------------------------------------------------------------- -->
      <!-- SIDEBAR VIEW FORM HERE -->
<!-- --------------------------------------------------------------- -->
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" id="sidebar">
<button style="color: white;" class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>





<?php

  

      include '../3databases/generalDB.php'; 
      $query = "SELECT * FROM userinfo WHERE Email='$Email'";
      $result=mysqli_query($General_Conn,$query);
        while ($row=mysqli_fetch_array($result)) {
        $UserName = $row['FirstName'];
        $LastName = $row['LastName'];
        $ImageURL ='../uploads_Profile/'.$row['ProfileImageURL'];

        if ($ImageURL == "../uploads_Profile/") {
          print("
            <div class='ProfileImage_wrapper d-flex justify-content-center'>
            
                 <img src='../uploads_Profile/4.png'  alt='Cinque Terre' >

            </div>
          ");
        }else{
           print("
              <div class='ProfileImage_wrapper d-flex justify-content-center'>
               
                   <img src='{$ImageURL}'  alt='Cinque Terre' >
              
              </div>
            ");
        }

         
        }

?>



  
  <h3 style="color: white;text-align: center;"><?php echo strtoupper($UserName) ; ?> <?php echo strtoupper($LastName); ?></h3>








</div>
<!-- --------------------------------------------------------------- -->
      <!-- MAIN VIEW FORM HERE -->
<!-- --------------------------------------------------------------- -->
<div id="mainview">

  <! Main Menu Bar !>
     <div  class="container_fluid menu_wrapper sticky-top">
            <div class="container">

              <nav class="navbar navbar-expand-lg navbar-light">
        <!-- <a class="navbar-brand" href="#"><span style="color: blue;font-size: 120%;">JIGYASA</span></a> -->
        <img style="width: 200px;" src="../images/MyJiyasaLogo1.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashbord">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="achivments">Achievement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Exercise">Exercise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="CourseIntro">Course Details</a>
            </li>
            <li class="nav-item" style="margin-right: 5px">
               <div class="btn-group" role="group">
                <button style="background-color: #0054D1;color: white;" id="btnGroupDrop1" type="button" class="btn dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b> <i class="fa fa-lock" aria-hidden="true"></i>
                  Account </b>
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="./logout.php">LogOut</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        
      </nav>

      </div>
    </div>
    <hr id="hr">

    <!-- ------------------------------------------- -->
   
 

<div class="container" id="form_wrapper">
<div class="form-row">
  <div class="form-group">
<form action="uploads_Profile.php" method="post" enctype="multipart/form-data" name="myForm">
  <div id="yourBtn" onclick="getFile()">Upload Profile</div>
 
  <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" type="file" name="fileToUpload" value="upload" onchange="sub(this)" /></div>
  
</form>
  </div>
</div>






<form method="post">

<div class="form-group">
    <label for="NameOfStudent">Name Of Student</label>
    <input type="text" class="form-control" id="NameOfStudent" name="NameOfStudent" placeholder="" value="<?php echo$NameOfStudent; ?>">
</div>
<div class="form-group">
    <label for="DateOfBirth">Date Of Birth</label>
    <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" placeholder=""  value="<?php echo$DateOfBirth; ?>">
</div>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="Age">Age</label>
      <input type="number" class="form-control" id="Age" name="Age" placeholder="" value="<?php echo $Age; ?>">
  </div>

  <div class="form-group col-md-6">
      <label for="Gender">Gender</label>
      <select name="Gender" id="inputState" class="form-control" >
        <option value="<?php echo $Gender; ?>"  selected><?php echo $Gender; ?></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
  </div>
</div>
<div class="form-group">
    <label for="SchoolName">School Name</label>
    <input type="text" class="form-control" id="SchoolName" name="SchoolName" placeholder="" value="<?php echo$SchoolName; ?>">
</div>
<div class="form-group">
    <label for="ParentName">Parent Name</label>
    <input type="text" class="form-control" id="ParentName" name="ParentName" placeholder="" value="<?php echo$ParentName; ?>">
</div>
<div class="form-group">
    <label for="Address">Address</label>
    <input type="text" class="form-control" id="Address" name="Address" placeholder="" value="<?php echo $Address; ?>">
</div>
<div class="form-row">
 <!-- <div class="form-group col-md-4">
      <label for="City">City</label>
      <select name="City" id="inputState" class="form-control" >
        <option value="<?php echo $City; ?>"  selected><?php echo $City; ?></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
  </div>
   <div class="form-group col-md-4">
      <label for="State">State</label>
      <select name="State" id="inputState" class="form-control" value="<?php echo $State; ?>">
        <option value="<?php echo $State; ?>"  selected><?php echo $State; ?></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
  </div> -->
  <div class="form-group col-md-4">
     <label for="City">City</label>
     <input type="test" name="City" id="inputState" class="form-control" value="<?php echo $City; ?>">
  </div>
  <div class="form-group col-md-4">
     <label for="State">State</label>
     <input type="test" name="State" id="inputState" class="form-control" value="<?php echo $State; ?>">
  </div>
   <div class="form-group col-md-4">
      <label for="Pincode">Pincode</label>
      <input type="number" class="form-control" id="Pincode" name="Pincode" placeholder="" value="<?php echo 
      $Pincode; ?>">
  </div>
</div>
<hr>
<div class="form-row">
<div class="form-group col-md-6">
    <label for="FatherMobile">Father Mobile</label>
    <input type="number" class="form-control" id="FatherMobile" name="FatherMobile" placeholder="" value="<?php echo $FatherMobile; ?>">
</div>
<div class="form-group col-md-6">
    <label for="MotherMobile">Mother Mobile</label>
    <input type="number" class="form-control" id="MotherMobile" name="MotherMobile" placeholder="" value="<?php echo $MotherMobile; ?>">
</div>
</div>

<div class="form-group" style="text-align: center;">
<button style="width: 200px;" type="submit" class="btn btn-primary">Submit</button>
</div>
<br>


</form>
</div>



















</div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function getFile() {
  document.getElementById("upfile").click();
}

function sub(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
  document.myForm.submit();
  event.preventDefault();
}
    </script>
        <script type="text/javascript">
function w3_open() {
  document.getElementById("sidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("sidebar").style.display = "none";
}
    </script>
  </body>
</html>