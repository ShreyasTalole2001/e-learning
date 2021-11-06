<?php
session_start();
include '../3databases/RegistrationDB.php';





?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Admin Dashboard</title>
</head>

<body>
    <!-- Main Menu -->
<div class="container-fluid">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyJigyasa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Registrations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Exercise</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./logout.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>




    <!-- Registrations -->
<?php 

$i=1;
$query = "SELECT * FROM registration";
if ($result = mysqli_query($Registration_Conn, $query)) {
    while ($row = mysqli_fetch_array($result)) {
        // print_r($row);
        $FirstName = $row['FirstName'];
        $LastName = $row['LastName'];
        $MobileNo = $row['MobileNo'];
        $Email = $row['Email'];
        $City = $row['City'];
        $State = $row['State'];
        $ConsultantCode = $row['ConsultantCode'];
        $date = $row['dateOfRegistration'];
        $Status = $row['Status'];
        $SRNO = $i++;

        print("
        <table class='table table-dark table-striped'>
        <thead>
            <tr>
                <th scope='col'>SR.NO.</th>
                <th>Date</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>City</th>
                <th>State</th>
                <th>Consultant Code</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope='row'>{$SRNO}</th>
                <td>{$date}</td>
                <td>{$FirstName}</td>
                <td>{$LastName}</td>
                <td>{$MobileNo}</td>
                <td>{$Email}</td>
                <td>{$City}</td>
                <td>{$State}</td>
                <td>{$ConsultantCode}</td>
                <td>{$Status}</td>

            </tr>
        </tbody>
    </table>
        
        
        
        
        ");
    }
}




?>





    




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>