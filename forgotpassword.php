<?php
session_start();
include './3databases/RegistrationDB.php';
include './3databases/generalDB.php';

// THIS CODE IS FOR SEND OTP TO THE REGISTERED MOBILE NO WITH THE EMAIL
if ($_POST['Send_OTP']) {
  $Email = mysqli_real_escape_string($General_Conn,$_POST['Email']);
  // echo $Email;
  $GENERATED_OTP = rand ( 1000 , 9999 );
  // echo $GENERATED_OTP;
  $Message = "";
  
  $query = "SELECT * FROM userinfo WHERE Email='$Email'";
  $result = mysqli_query($General_Conn,$query);
  $row = mysqli_fetch_array($result);
  $FirstName = $row['FirstName'];
  $lastName = $row['LastName'];
  // echo $FirstName;
  // echo $lastName;


  $MobileNo = $row['MobileNo'];
  $_SESSION['MobileNo']=$MobileNo;
  $_SESSION['GENERATED_OTP']=$GENERATED_OTP;
  $_SESSION['Email']=$Email;
  $Message = "We've send the OTP to your registered email address. It should appear in your email section within the next five minutes.";
  $_SESSION['Message']=$Message;
  // header('Location: ./ChangePasswordOTP.php');


  $to=$Email;
  $subject = "Password Reset";
  $txt = "Hello ".$FirstName." ".$lastName.", your OTP for password reset is ".$GENERATED_OTP;
  $headers = "From: noreply@myjigyasa.com" . "\r\n" ;
  mail($to,$subject,$txt,$headers);

}
$Message = $_SESSION['Message'];
// echo $Message;
// THIS CODE IS FOR CHECK OTP AND CHANG PASSWORD
if ($_POST['Change_Password']) {
  $GENERATED_OTP = $_SESSION['GENERATED_OTP'];
  $Email = $_SESSION['Email'];
  $Message = "";
  $OTP = mysqli_real_escape_string($Registration_Conn,$_POST['OTP']);
  $Password = mysqli_real_escape_string($Registration_Conn,$_POST['Password']);
  $Password_Conform = mysqli_real_escape_string($Registration_Conn,$_POST['Password_Conform']);

  if ($GENERATED_OTP != $OTP) {
    $Message .= "OTP IS NOT MATCHED";
    // echo $Message;
  }else if ($Password != $Password_Conform) {
    $Message .= "Passwords Are not same";
  }else {
    $query = "UPDATE registration 
              SET Password ='$Password',
                  PasswordC = '$Password_Conform'
              WHERE Email='$Email' ";
    mysqli_query($Registration_Conn,$query);
    $Message .= "Your Password is Changed";
    $_SESSION['Message'] = $Message;
    $Message = $_SESSION['Message'];
    $Password_Is_Changed = 1;
  }

  if ($Password_Is_Changed == 1) {
     header('Location: ./login.php');
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
       body{
        background-color: #F1F7FD;
      }

      /*----------------------------------*/
      /*FORGOT PASSWORD SECTION*/
      #wrapper{
        width: 100%;
        
        background-color: white;
        margin: 0px auto;
        margin-top: 40px;
        padding: 20px;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
      
    </style>
    <title>Forgot Password</title>
    <link rel="icon" href="images/TitleLogo.png" type="image/icon type">
  </head>
  <body>



   <div class="container">
    <br>
    <div style="text-align: center;">
      <img style="width: 200px;" src="images/MyJiyasaLogo1.png" class="img-fluid">
    </div>
     <div class="col-md-6" id="wrapper">
       <form method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email" name="Email" required="">
                    <!-- <small style="margin-left: 10px;">OTP WILL SEND TO YOUR REGISTERED MOBILE NO</small> -->
                  </div>
                  
                  <div class="form-group" style="text-align: center;margin-bottom: 20px;">
                    <input style="width:100px;" id="submitbtn" type="submit" class="btn btn-primary" name="Send_OTP" value="Send OTP">
                  </div>
                  
                
       </form>

       <form method="post">
                  <div class="form-group">
                    <input type="password" class="form-control" id="OTP" placeholder="OTP" name="OTP" required="">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" required="">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="Password_Conform" placeholder="Password" name="Password_Conform" required="">
                  </div>
                  <div class="form-group" style="text-align: center;margin-bottom: 20px;">
                    <input style="width:auto;" id="submitbtn" type="submit" class="btn btn-primary" name="Change_Password" value="Change Password">
                  </div>
       </form>
     </div>
   </div>

<!-- -------------------------------------------------------------------- -->
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
        <?php echo $Message; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
     var x = "<?php echo $Message; ?>"
       if (x=="") {
        
       }else{
        document.getElementById('btnmodal').click()
       }
    </script>

<?php
// $_SESSION['Message'] = "";
?>


  </body>
</html>