<?php

session_start();
include '../3databases/generalDB.php';
include '../3databases/RegistrationDB.php';

$Email =  $_SESSION['Email'];

$query = "UPDATE userinfo 
          SET Course1='ROBOTICS',
              NoOfCourses=1 
           WHERE Email='$Email' LIMIT 1";
mysqli_query($General_Conn,$query);


$query = "UPDATE registration 
          SET Status = 'Purchased' 
           WHERE Email='$Email' LIMIT 1";
mysqli_query($Registration_Conn,$query);

header('Location: https://www.myjigyasa.com/1AccountSystem/dashbord')

?>