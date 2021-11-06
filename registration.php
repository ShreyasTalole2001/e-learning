<?php

session_start();
include './3databases/generalDB.php';
include './3databases/RegistrationDB.php';
include './3databases/Robotics_generalDataDB.php';


$FirstName = mysqli_real_escape_string($Registration_Conn,$_POST['FirstName']);
$LastName = mysqli_real_escape_string($Registration_Conn,$_POST['LastName']);
$ParentsName = mysqli_real_escape_string($Registration_Conn,$_POST['ParentsName']);
$MobileNo = mysqli_real_escape_string($Registration_Conn,$_POST['MobileNo']);
$Email = mysqli_real_escape_string($Registration_Conn,$_POST['Email']);
$City = mysqli_real_escape_string($Registration_Conn,$_POST['City']);
$State = mysqli_real_escape_string($Registration_Conn,$_POST['State']);
$ConsultantCode = mysqli_real_escape_string($Registration_Conn,$_POST['ConsultantCode']);
$Password = mysqli_real_escape_string($Registration_Conn,$_POST['Password']);
$PasswordC = mysqli_real_escape_string($Registration_Conn,$_POST['PasswordC']);
$error="";
$dateOfRegistration = date("y/m/d");
// Varification key
$Vkey = md5(time().$FirstName);
// echo $Vkey;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   $query="SELECT * FROM registration WHERE Email='$Email' OR MobileNo='$MobileNo' ";
   if ($result=mysqli_query($Registration_Conn,$query)) {
      $rowcount=mysqli_num_rows($result);

        if ($rowcount>0) {
        $error="You are already signed-up";
        $roboterror=1;
         
       }
       elseif ($Password!=$PasswordC) {
        $error="Password doesn't match";
        $roboterror=1;
       }
       // elseif ($MobileNo.length() != 10 ) {
       //   echo "Get Lost";
       // }
       else{
        $query = "INSERT INTO registration(FirstName, LastName, ParentsName, MobileNo, Email, City, State, Password, PasswordC, Vkey, Status, ConsultantCode, dateOfRegistration) VALUES('$FirstName', '$LastName' , '$ParentsName', '$MobileNo', '$Email', '$City', '$State', '$Password' , '$PasswordC', '$Vkey', 'Demo', '$ConsultantCode', '$dateOfRegistration') ";
       mysqli_query($Registration_Conn,$query);

       $query = "INSERT INTO userinfo(FirstName, LastName, ParentsName, MobileNo, City, State, Email) VALUES('$FirstName', '$LastName', '$ParentsName', '$MobileNo', '$City', '$State', '$Email') ";
       mysqli_query($General_Conn,$query);

       $query = "INSERT INTO studentdetails(FirstName, LastName, Email) VALUES('$FirstName', '$LastName' , '$Email') ";
       mysqli_query($General_Conn,$query);

        $query = "INSERT INTO assignmentresult(Email) VALUES('$Email') ";
       mysqli_query($Robotics_GeneralData_Conn,$query);

       $query = "INSERT INTO cookies(Email) VALUES('$Email') ";
       mysqli_query($Robotics_GeneralData_Conn,$query);

       $_SESSION['Email']=$_POST['Email'];
       $_SESSION['FirstName']=$_POST['FirstName'];
 
        
       
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <noreply@myjigyasa.com>' . "\r\n";       
        // $message = "<a href='https://www.myjigyasa.com/verify.php?Vkey=$Vkey'&Email=$Email>Register account</a>";
        $message = file_get_contents("mailbody.php"); 

       mail($Email, 'verification',$message,$headers);
       $error="Thank you for registration. Please check your email id for verification.";



       
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
            body{
        background-color: #F1F7FD;
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
  margin-top: 10px;
}
#Register_clm1{
    background-color: #37DEE7;

}
#Register_clm1 img{
  margin-top: 100px;
}
#Register_clm2{
font-family: Poppins, sans-serif;

}
#Register_clm2 h2{
font-weight: 700;
text-align: center;
margin-top: 20px;
}


    /*-----------------------------------------------------------*/
   /*  Password strength*/

#Bad{
display:none;
color: red;
}
#Weak{
display:none;
color: red;
}
#Good{
display:none;
color: yellow;
}
#Strong{
  display:none;
  color: green;
}
/*-------------------------------------------------------*/
      #old_user{
        text-align: right;
        padding: 5px;
      }
       #old_user a{
        text-decoration: none;
       

       } 
       #error{
        color: red;
        text-align: center;

      }






@media all and (max-width: 800px) {
  #Register_clm1{
    display: none;
  }
  #wrapper{
    width: 300px;
    padding: 10px;
    border-radius: 5px;
  }
}


    </style>

    <title>Registration Page</title>
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
              <form>
                  <a class="btn btn-primary" href="https://api.whatsapp.com/send/?phone=919307882577&text=i%20want%20more%20details%20about%20ROBO%20COURSE"><b><i class="fa fa-whatsapp" aria-hidden="true"></i> Connect</b></a>
              </form>
            </li>
            <li  class="nav-item" style="margin-right: 5px">
              <form method="get" action="./login">
                  <button id="btnaccount" type="submit" class="btn btn-primary" ><b><i class="fa fa-lock" aria-hidden="true"></i> Account</b></button>
              </form>
            </li>
          </ul>
        </div>
      </nav>
      </div>
    </div>


   <!--  --------------------------------------------------------- -->
   <! Registration Section !>
   <div class="container" id="wrapper">
     <div class="row"> 
        <div class="col-sm-7" id="Register_clm1">
          <img src="images/Registration.png" class="img-fluid">
        </div> 
        <div class="col-sm-5" id="Register_clm2">
          <h2>Creat Account</h2>
          <form method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" id="FirstName" placeholder="Student First Name" name="FirstName" required="" >
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="LastName" placeholder="Student Last Name" name="LastName" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="ParentsName" placeholder="Parents Name" name="ParentsName" required="">
                  </div>
                  <div class="form-group">
                    <input type="tel"  minlength="10" maxlength="10" size="10" class="form-control" id="MobileNo" placeholder="Mobile No" name="MobileNo" required="">
                    <small style="color: gray;">Please provide parents number as all notifications will be sent to the same.</small>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email" name="Email" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="City" placeholder="City" name="City" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="State" placeholder="State" name="State" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="ConsultantCode" placeholder="Consultant Code" name="ConsultantCode">
                  </div>
                  <div class="form-group d-flex">
                    <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" required="" >
                    <i class="fa fa-eye" onclick="myFunction()" style="font-size:24px;color: white;padding: 1px;margin-left: 5px;background-color: green;padding: 10px;box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19);"></i>
                  </div>
                   <div id='show_message'>
                       <p id='Bad'>Bad Password</p>
                       <p id='Weak'>WeakPassword</p>
                       <p id='Good'>Good Password</p>
                       <p id='Strong'>Strong Password</p>
                     </div>


                  <div class="form-group">
                    <input type="password" class="form-control" id="PasswordConform" placeholder="Confirm password" name="PasswordC" required="">
                  </div>
                  <div class="form-group" style="text-align: center;margin-bottom: 20px;">
                    <input style="width: 100%;" id="submitbtn" type="submit" class="btn btn-primary" value="REGISTER">
                  </div>
                </form> 



                

         <div id="old_user">
           <a href="login.php">Already have an account? Log In</a>
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
        <?php echo $error; ?>
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
    <script type="text/javascript">


    </script>
    <script type="text/javascript">
      
function myFunction() {
  var x = document.getElementById("Password");
  if (x.type === "password") {
    x.type = "text";
    x.style.color="black"
  } else {
    x.type = "password";
  }
}

    </script>
        <script type="text/javascript">
      

var myInput = document.getElementById("Password");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  var upperCaseLetters = /[A-Z]/g;
  var numbers = /[0-9]/g;
  if(myInput.value.match(lowerCaseLetters) || myInput.value.match(upperCaseLetters) || myInput.value.match(numbers)) {  
   document.getElementById('Bad').style.display = "block";
    document.getElementById('Weak').style.display = "none";
    document.getElementById('Good').style.display = "none";
    document.getElementById('Strong').style.display = "none";
  } else {
   document.getElementById('Bad').style.display = "none";
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(upperCaseLetters) && myInput.value.match(lowerCaseLetters) ) {  
   document.getElementById('Bad').style.display = "none";
    document.getElementById('Weak').style.display = "block";
    document.getElementById('Good').style.display = "none";
    document.getElementById('Strong').style.display = "none";
  } else {
   document.getElementById('Weak').style.display = "none";
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  var upperCaseLetters = /[A-Z]/g;
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(numbers) && myInput.value.match(upperCaseLetters) && myInput.value.match(lowerCaseLetters)) {  
    document.getElementById('Bad').style.display = "none";
    document.getElementById('Weak').style.display = "none";
    document.getElementById('Good').style.display = "block";
    document.getElementById('Strong').style.display = "none";
  } else {
   document.getElementById('Good').style.display = "none";
  }
  
  // Validate length
  if(myInput.value.length >= 8 && myInput.value.match(numbers) && myInput.value.match(upperCaseLetters) && myInput.value.match(lowerCaseLetters)) {
    document.getElementById('Bad').style.display = "none";
    document.getElementById('Weak').style.display = "none";
    document.getElementById('Good').style.display = "none";
    document.getElementById('Strong').style.display = "block";
    
  }
  else{
    document.getElementById('Strong').style.display = "none";
  }
}

    </script>

<script type="text/javascript">

  var y = "<?php echo $error; ?>"
  if (y=="") {
      
  }else{
    document.getElementById('btnmodal').click()
  }



</script>
  </body>
</html>