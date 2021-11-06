<?php
session_start();
include 'databases/database.php';

if (isset($_GET['Vkey'])) {
	$Vkey = $_GET['Vkey'];
// 	$Email = $_GET['Email'];
	$Email=$_SESSION['Email'];

	


	$query = "UPDATE registration
				SET Verify = 'Verified'
				WHERE Email='$Email'";
	mysqli_query($conn,$query);
	

	
	header('Location: login.php');



	


}else{
	die("Something went wrong");
}

?>