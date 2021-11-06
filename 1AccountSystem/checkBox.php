<?php
// THIS FILE IS USE TO STORE CHECKBOX CLICKS TO THE SERVER USING AJAX


session_start();
include '../3databases/Robotics_generalDataDB.php';
$q = $_REQUEST["q"];
$Email = $_REQUEST["Email"];
$CourseName = $_REQUEST["CourseName"];
$query = "UPDATE cookies
          SET $CourseName = '$q'
          WHERE Email='$Email' ";

mysqli_query($Robotics_GeneralData_Conn,$query);


?>