<?php
session_start();
include '../3databases/teacher_portalDB.php';

$Email = mysqli_real_escape_string($teacher_portal_Conn,$_POST['Email']);
$Password = mysqli_real_escape_string($teacher_portal_Conn,$_POST['Password']);
$roboterror=0;
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$query = "SELECT * FROM login WHERE Email='$Email' AND Password='$Password' ";
 
 if ($result = mysqli_query($teacher_portal_Conn,$query)) {
    $rowcount=mysqli_num_rows($result);
    if ($rowcount==1) {
      $_SESSION['Email']=$_POST['Email'];
      echo "success";
      $_SESSION['loggedIn']= true;
      header('Location: ../4teacherdashbord/teacher_dashboard.php');
       
      
    }
    else{
       $error="invalid username and password";
       $roboterror=1;

       
    }
 }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      body{
        background-color: #A7CFD7;
      }
      #login_wrapper{
        max-width: 500px;
        height: 400px;
        /*border: 1px solid red;*/
        margin-top: 50px;
        background-color: #CAE3E8;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      #clm1 h3{
        text-align: center;
        padding: 10px;
        font-family: Arial, Helvetica, sans-serif;
      }
     
      @media all and (max-width: 800px) {
        body{
        background-color: #CAE3E8;
      }
       #login_wrapper{
        max-width: 500px;
        height: 400px;
        /*border: 1px solid red;*/
        margin-top: 50px;
        background-color: #CAE3E8;
        box-shadow: none;
        padding: 50px;
      }
      }
    </style>
    <title>Teacher Login</title>
  </head>
  <body>
    <div class="container" id="login_wrapper">
        <div class="col" id="clm1">
          <div style="text-align: center;padding-top:  10px;">
          <img style="width: 200px;" src="../images/logo1.png">            
          </div>
          <h3>Teacher Login</h3>
        </div>

<form method="post">
  <div class="form-group">
    <label for="Email">Email address</label>
    <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
  </div>
    <div class="form-group" style="text-align: center;">
    <input type="submit" class="btn-primary btn" id="submit" name="submit">
  </div>
</form>






    </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>