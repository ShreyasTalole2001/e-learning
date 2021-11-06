<?php

session_start();

$ConsultantCode = $_SESSION['ConsultantCode'];
// TO CHECK USER IS ENTER BY LOGIN ONLY
if ($_SESSION['loggedIn']) {
  // Allow USER
}else{

  header('Location: CAVFmain.php');  
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
        body {
            background-color: aliceblue;
        }
    </style>
    <title>MyJigyasa | Consultant</title>
  </head>
  <body>
  
<! NAV BAR !>
<div class="container-fluid" style="background-color: #A7D883;">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">MyJigyasa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./logout.php">Log Out</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<!-- ---------------------------------------------------------- -->

<br>
<br>
<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
<?php
include '../3databases/RegistrationDB.php';
$query = "SELECT * FROM registration WHERE ConsultantCode = '$ConsultantCode'";
$i = 1;
if ($result = mysqli_query($Registration_Conn,$query)) {
  while ($row = mysqli_fetch_array($result)) {
    $FullName = $row['FirstName'] ." ". $row['LastName'];
    $Email = $row['Email'];
    $MobileNo = $row['MobileNo'];
    $Status = $row['Status'];
    $dateOfRegistration = $row['dateOfRegistration'];
    print("
    <tr>
      <th scope='row'>$i</th>
      <td>{$FullName}</td>
      <td>{$Email}</td>
      <td>{$MobileNo}</td>
      <td>{$Status}</td>
      <td>{$dateOfRegistration}</td>
    </tr>
      ");

    $i++;
  }
}


?>

  

  </tbody>
</table>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>