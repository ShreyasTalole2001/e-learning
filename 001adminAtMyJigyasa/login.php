<?php
session_start();


$Email = $_POST['Email'];
$Password = $_POST['Password'];
$roboterror=0;
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$query = "SELECT * FROM registration WHERE Email='$Email' AND Password='$Password' ";
 if ($Password == "ABC@123" && $Email == "shreyastalole2001@gmail.com") {
    header('Location: ./dashboard.php');
    $_SESSION['Email'] = $Email;
    }
    else{
       $error="invalid username and password";
       $roboterror=1;
    }
 }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        /*Login Section*/
#wrapper{
  background-color: white;
  width: 500px;
  box-shadow:0 0 10px #9ecaed;
  margin-top: 50px;
  padding: 10px;
}
#Login_clm1{
    background-color: #37DEE7;
}
#Login_clm2{
font-family: Poppins, sans-serif;

}
#Login_clm2 h2{
font-weight: 700;
text-align: center;
margin-top: 20px;
}
#error{
  color: red;
  text-align: center;
 }


@media all and (max-width: 800px) {
  #Login_clm1{
    display: none;
  }
  #wrapper{
    width: 300px;
    padding: 10px;
    border-radius: 5px;
  }
}

    </style>
    <title>Admin login</title>
  </head>
  <body>


  <!--  --------------------------------------------------------- -->
  <! Login Section !>
   <div class="container" id="wrapper">

    
        <div class="col-sm" id="Login_clm2">
          <h2>Log in</h2>

                <form method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email" name="Email" required="">
                  </div>
                  <br>
                  <div class="form-group">
                    <input type="password" class="form-control" id="MobileNo" placeholder="Password" name="Password" required="">
                  </div>
                  <br>
                  <div class="form-group" style="text-align: center;margin-bottom: 20px;">
                    <input style="width:100px;" id="submitbtn" type="submit" class="btn btn-primary" value="Log In">
                  </div>
                </form> 
        </div>

   </div>
   <!--  --------------------------------------------------------- -->





   
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>