<?php
session_start();
include './3databases/RegistrationDB.php';

$Email = mysqli_real_escape_string($Registration_Conn,$_POST['Email']);
$mobileNo = mysqli_real_escape_string($Registration_Conn,$_POST['mobileNo']);
$roboterror=0;
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$query = "INSERT INTO registrations (email,mobileNo) VALUES ('$Email', '$mobileNo')";
mysqli_query($Registration_Conn, $query);
header('Location: demo.php');
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
        background-color: #F1F7FD;
         /*background-image: linear-gradient(#25B3FA, white);*/
      }
   /*   -----------------------------*/
 /* Main Menu Bar */
      .menu_wrapper{
     
        font-family: Poppins, sans-serif;
        background-color: white;
      
      
      }
      .nav-link {
       color: black !important;
       margin-right: 20px;
       font-size: 120%;
      }

      /*----------------------------------*/
/*Login Section*/
#wrapper{
  background-color: white;
  width: 800px;
  box-shadow:0 0 10px #9ecaed;
  margin-top: 50px;
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
#new_user{
  text-align: right;
  padding: 5px;
}
#new_user a{
  text-decoration: none;
  font-family: Poppins, sans-serif;
        
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

    <title>Log In Page</title>
    <link rel="icon" href="images/TitleLogo.png" type="image/icon type">
  </head>
  <body>
    <! Main Menu Bar !>
          <div  class="container_fluid menu_wrapper sticky-top">
            <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light  ">
        <!-- <a class="navbar-brand" href="#"><span style="color: blue;font-size: 120%;">JIGYASA</span></a> -->
        <img style="width: 200px;" src="images/MyJiyasaLogo1.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./aboutus">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./bookdemo">Book free class</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contactus">Contact us</a>
            </li>
              <li class="nav-item" style="margin-right: 5px">
              <!-- <form>
                  <a class="btn btn-primary" href="https://api.whatsapp.com/send/?phone=919307882577&text=i%20want%20more%20details%20about%20ROBO%20COURSE"><b><i class="fa fa-whatsapp" aria-hidden="true"></i> Connect</b></a>
              </form> -->
            </li>
            <li  class="nav-item" style="margin-right: 5px">
              <!-- <form method="get" action="./login">
                  <button id="btnaccount" type="submit" class="btn btn-primary" ><b><i class="fa fa-lock" aria-hidden="true"></i> Account</b></button>
              </form> -->
            </li>
          </ul>
        </div>
      </nav>
      </div>
    </div>


   <!--  --------------------------------------------------------- -->
   <! Login Section !>
   <div class="container" id="wrapper">
     <div class="row"> 
        <div class="col-sm-7" id="Login_clm1">
          <img src="images/login1.png" class="img-fluid" style="display: none;" id="loginsuccess">
          <img src="images/login2.png" class="img-fluid" style="display: none;" id="loginfail">
        </div> 
        <div class="col-sm-5" id="Login_clm2">
          <h2>Log in</h2>

                <form method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email" name="Email" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="MobileNo" placeholder="Mobile No." name="mobileNo" required="">
                  </div>
                  <div class="form-group" style="text-align: center;margin-bottom: 20px;">
                    <input style="width:100px;" id="submitbtn" type="submit" class="btn btn-primary" value="Log In">
                  </div>
                </form> 

         <!-- <div id="new_user">
           <a href="registration.php">New User? Sign Up</a> <br>
           <a href="forgotpassword.php" target="_blank">Forgot password</a> <br>
         </div> -->
         <div id="error">

         </div>
        </div>
     </div>
   </div>
   <!--  --------------------------------------------------------- -->

<!-- Button trigger modal -->
<button type="button" style="display: none;" class="btn btn-primary" id="btnmodal" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-show="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Invalid Username and Password.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jq/jquery.js"></script>
    <script type="text/javascript">
      var x = <?php echo $roboterror; ?>;
      console.log(x)
       
       if (x==1) {
        document.getElementById('btnmodal').click()
       }

      if (x==0) {
        document.getElementById('loginsuccess').style.display="block";
      }else{
        document.getElementById('loginfail').style.display="block"
      }


    </script>
    <!-- AJAX TO SEND OTP DATA -->
    <script type="text/javascript">




    </script>
<?php
$_SESSION['Message']="";

?>

  </body>
</html>