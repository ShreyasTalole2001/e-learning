<?php
session_start();
if ($_SESSION['loggedIn']) {
  // Allow USER
}else{

  header('Location: ./teacher_login.php');  
}

$Email = $_SESSION['Email'];
include '../3databases/Robotics_chatboxDB.php';
include '../3databases/teacher_portalDB.php';

$id = mysqli_real_escape_string($Chat_conn,$_POST['id']);
$Answer = mysqli_real_escape_string($Chat_conn,$_POST['Answer']);


$query = "UPDATE chats
           SET Answer='$Answer',
               AnswerBy ='$Email'
          WHERE id = '$id' ";
mysqli_query($Chat_conn,$query);



// echo $id;
// echo "<br>";
// echo $Answer;


$query = "SELECT * FROM teacherdata WHERE Email='$Email'";
if ($result=mysqli_query($teacher_portal_Conn,$query)) {
  $row=mysqli_fetch_array($result);
}





?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <style type="text/css">
      body{
        background-color: #CAE3E8;
      }
       #mySidebar{
        width:300px;left:0;
         background-color: #79C8D5;
       }
       #mainview{
        margin-left:300px;
      
       }
       /*--------------------------*/
       #teacherdata h4{
        text-align: center;
        margin-top: 20px;
       }


     </style>
    <title>Teacher Dashboard</title>
  </head>
  <body>
 <! SIDEBAR VIEW FROM HERE !>

<! MAIN VIEW FROM HERE !>
<div class="w3-main container">  

<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="#"><img src="../images/MyJiyasaLogo1.png"  style="width: 200px;" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link btn btn-primary" href="./logout.php">Log Out</a>
      </li>
    </ul>
  </div>
</nav>
<!-- ------------------------------------------------------------ -->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" style="text-align: center;">Students Queries</th>
    </tr>
    <tr>
      <th class="" scope="col">Question ID</th>
      <th class="" scope="col">Question</th>
      <th style="text-align: center;" class="" scope="col">Answer</th>
    </tr>
  </thead>
  <tbody>

<?php

$query = "SELECT * FROM chats ORDER BY id DESC";
if ($result=mysqli_query($Chat_conn,$query)){
  while ($row=mysqli_fetch_array($result)) {
    // print_r($row);
    $Question = $row['Question'];
    $Answer = $row['Answer'];
    $id = $row['id'];
    $Email = $row['Email'];
    print("
   
   <form id='my{$id}' method='post'>
    <tr>
      <th scope='row'> <input style='width:50px;text-align:center;' type='text' value='{$id}' name='id'>  </th>
      <td> {$Question} </td>
      <td> <input type='text' class='form-control' id='exampleCheck1' Required value='{$Answer}'  name='Answer'>    </td>
      <td> <input type='submit' form='my{$id}'  ></td>
    </tr>
  </form>


      ");
  }
} 

 





?>


  </tbody>
</table>






<button class="w3-button w3-rectangle w3-xlarge w3-center w3-hide-large" onclick="w3_open()">&#9776;</button>
</div>












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
    </script>
  </body>
</html>