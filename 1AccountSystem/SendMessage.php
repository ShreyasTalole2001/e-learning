<?php

include '../3databases/Robotics_chatboxDB.php';
$q = $_REQUEST["q"];
$Email = $_REQUEST["Email"];
$query = "INSERT INTO chats (Email,Question)VALUES('$Email','$q')";
mysqli_query($Chat_conn,$query);

?>