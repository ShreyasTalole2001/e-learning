<?php

$FirstName = $_SESSION['FirstName'];



?>



<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
    <style type='text/css'>
      #wrapper{
        width: 600px;
        /*height: 600px;*/
        border: 1px solid black;
        padding: 0px;

      }
      #logo{
         text-align: center;
        margin: 0px auto;
        padding: 10px;
      }
      #logo img{
        width: 200px;

      }
      #header{
        background-color: #8B3DE4;
        height: 200px;
      }
      #header h2{
        color: white;
        font-family: calibri;
        padding: 20px;
        padding-top: 50px;
        text-align: center;

      }

      #body p{
        margin: 20px;
        font-family: calibri;
      }
      #body form{
        text-align: center;
      }

@media screen and (max-width: 480px) {
      #wrapper{
        width: 100%;
        margin: 0px;
      }
      #header h2{
        text-align: center;

      }
      #body button{
        padding: 10px;
      }
}
    </style>
    <title>Email body</title>
  </head>
  <body>

    <div class='container' id='wrapper'>
      
      <div id='logo'>
        <img src='https://myjigyasa.com/images/MyJiyasaLogo1.png' class='img-fluid'>
      </div>

      <div id='header'>
        <h2>ACCOUNT ACTIVATION</h2>
      </div>
      <div id='body'>
        <!-- <h4>Welcome to Myjigyasa , Pranav ! Before we get started, please confirm Your email address</h4> -->
        <p>Hi <?php echo $FirstName; ?> , <br>
          <br>
           Greetings from my jigyasac Works ! We welcome you aboard the MyJigyasa community ! <br>
           <br>
           Click the button below to confirm your email address. This is the email address on which your profile will be created

        </p>

        <form>
          <!--<button type='submit' class='btn btn-success'>Confirm Email Address </button>      -->
          <a href="https://www.myjigyasa.com/verify.php?Vkey=$Vkey'&Email=$Email">Verify Email</a>
        </form>

       <!--  <p style='text-align: center;'>
          If you have trouble using the button above, you can also confirm by copying the link below into your addess bar:
        </p> -->
        <p style='text-align: left;'>
          Cheers, <br>
          my jigyasac Works 
        </p>
        <p>
          If you did not sign up or request for email confirmation, please ignore this email
        </p>


      </div>

   
    </div>


   

















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
  </body>
</html>

