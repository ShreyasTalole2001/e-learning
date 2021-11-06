<?php
session_start();

// TO CHECK USER IS ENTER BY LOGIN ONLY
if ($_SESSION['loggedIn']) {
  // Allow USER
}else{

  header('Location: ../login.php');  
}


include '../3databases/Robotics_generalDataDB.php';
$Email = $_SESSION['Email'];



// TO UNLOCK ACHIVMENTS
$query = "SELECT * FROM assignmentresult WHERE Email='$Email'";
$result = mysqli_query($Robotics_GeneralData_Conn,$query);
$row = mysqli_fetch_array($result);
// print_r($row['assignment1']);

$assignment1 = $row['assignment1'];
$assignment2 = $row['assignment2'];


$count = $_SESSION['count'];
session_unset($_SESSION['count']);








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
      background-color: #051E34;
      z-index: 1000000;
    }
    #mainview{
     margin-left:0px;
   }
 }
 /* ----------------------------------------------------*/
 /* SIDEBAR VIEW FORM HERE*/

 .ProfileImage_wrapper img{
  width: 200px;
  height: 200px;
  border: 1px solid #ddd;
  border-radius: 50%;
  background-color: white;
  margin: 30px;
}
/*     #yourBtn {
 
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
  margin-top: -20px;
  }*/


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
/*Robotics_Course_Achivments_Wrapper*/
#table_wrapper{
  width: 90%;
}
/*-------------------------------*/
.boxx{
  /*width: 100px;*/
  /*height: 100px;*/
  /*background-color: black;*/
  margin: 10px;
  background-image: linear-gradient(to top, #19AFFF , #79C8D5);
  text-align: center;
  padding: 20px;
  font-family: calibri;
  font-weight: 700;
  color: white;
  font-size: 150%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 10px;
}


</style>
<title>Achivment Section</title>
</head>
<body>


  <!-- --------------------------------------------------------------- -->
  <!-- SIDEBAR VIEW FORM HERE -->
  <!-- --------------------------------------------------------------- -->
  <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" id="sidebar">
    <button style="color: white;" class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
    <!-- THE FOLLOWING PHP SCRIEPT IS FOR FETCH AND DISPLAY PROFILE IMAGE -->
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
<br>
<!-- <div class="container" id="table_wrapper">
<table class="table table-success">
  <thead class="table-dark">
    <tr>
      <th scope="col">Assignment No</th>
      <th scope="col">Marks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Assignment 1</th>
      <td> <?php echo $assignment1;  ?> </td>
    </tr>
    <tr>
      <th scope="row">Assignment 2</th>
      <td><?php echo $assignment2;  ?></td>
    </tr>
    <tr>
      <th scope="row">Assignment 3</th>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">Assignment 4</th>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">Assignment 5</th>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">Assignment 6</th>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">Assignment 7</th>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">Assignment 8</th>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">Assignment 9</th>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">Assignment 10</th>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">Assignment 11</th>
      <td>20</td>
    </tr>
    <tr>
      <th scope="row">Assignment 12</th>
      <td>20</td>
    </tr>
  </tbody>
</table>
</div> -->

<!-- -------------------------------- -->

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-3 boxx">
      <h3>Assignment 1</h3>
      <hr>
      <?php echo $assignment1;  ?> </div>
      <div class="col-sm-3 boxx">
        <h3>Assignment 2</h3>
        <hr>
        <?php echo $assignment2;  ?>
      </div>
      <div class="col-sm-3 boxx">
        <h3>Assignment 3</h3>
        <hr>
        <?php echo $assignment1;  ?>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-sm-3 boxx">
        <h3>Assignment 4</h3>
        <hr>
        <?php echo $assignment1;  ?>
      </div>
      <div class="col-sm-3 boxx">
        <h3>Assignment 5</h3>
        <hr>
        <?php echo $assignment1;  ?>
      </div>
      <div class="col-sm-3 boxx">
        <h3>Assignment 6</h3>
        <hr>
        <?php echo $assignment1;  ?>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-sm-3 boxx">
        <h3>Assignment 7</h3>
        <hr>
        <?php echo $assignment1;  ?>
      </div>
      <div class="col-sm-3 boxx">
        <h3>Assignment 8</h3>
        <hr>
        <?php echo $assignment1;  ?>
      </div>
      <div class="col-sm-3 boxx">
        <h3>Assignment 9</h3>
        <hr>
        <?php echo $assignment1;  ?>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-sm-3 boxx">
        <h3>Assignment 10</h3>
        <hr>
        <?php echo $assignment1;  ?>
      </div>
      <div class="col-sm-3 boxx">
        <h3>Assignment 11</h3>
        <hr>
        <?php echo $assignment1;  ?>
      </div>
      <div class="col-sm-3 boxx">
        <h3>Assignment 12</h3>
        <hr>
        <?php echo $assignment1;  ?>
      </div>
    </div>

  </div>






</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
  function w3_open() {
    document.getElementById("sidebar").style.display = "block";
  }

  function w3_close() {
    document.getElementById("sidebar").style.display = "none";
  }
</script>
<script type="text/javascript">
var x = "<?php echo $count;  ?>"

alert("Congralations you got "+x+" marks and unlocked an new batch." )
</script>





</body>
</html>