<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
         /* Main Menu Bar */
      .menu_wrapper{
     
        font-family: Arial, Helvetica, sans-serif;
        background-color: white;
      
      
      }
      .nav-link {
       color: black !important;
       margin-right: 20px;
       font-size: 120%;
      }
       @media all and (max-width: 800px) {
       #btnaccount{
        margin-top: 5px;
       }
      }

/*----------------------------------------------------------------------------*/
#image img{
  margin-top: 0px;
  width: 100%;
}
 @media all and (max-width: 800px) {
  #image img{
  margin-top: 0px;
  width: 100%;
}
 }
/*-------------------------------------------------------------------------------*/
/*SECTION2*/
#contact_wrapper{
  margin-top: 150px;
}
#contact_wrapper h4{
   padding: 10px;

}
#contact_wrapper form{
  text-align: center;
  margin-top: 50px;
}
 @media all and (max-width: 800px) {
  #contact_wrapper{
  margin-top: 10px;
  text-align: center;
}
 }
 /*-----------------------------------------------------------------------*/
/* Footer */

#footer_wrapperr{
  background-color: black;
padding: 10px;

}
#footer p{
  color: white;
  text-align: center;
    padding: 10px;
}
#footer ul{
  color: white;
}
/*footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  

}

 @media all and (max-width: 800px) {
  footer {
  position: relative;
}
 }*/


    </style>
    <title>Contact Us Page</title>
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
                  <a class="btn btn-primary" href="https://api.whatsapp.com/send/?phone=9503944006&text=Hello MyJigyasa"><b><i class="fa fa-whatsapp" aria-hidden="true"></i> Connect</b></a>
              </form> -->
            </li>
            <li  class="nav-item" style="margin-right: 5px">
            <form method="get" action="./login">
                  <button id="btnaccount" type="submit" class="btn btn-primary"><b> Attend Demo</b></button>
                </form>
            </li>
          </ul>
        </div>
      </nav>
      </div>
    </div>

<!-- ------------------------------------------------------------------------------------------- -->
<! Main Image and Text !>
 <div class="container" id="image">
  <div class="row">
   <div class="col-sm-6" style="text-align: center;">
      <img  src="images/Contact_Us.jpg" class="img-fluid">
   </div>
   <div class="col-6" style="text-align: center;">
      <div class="container" id="contact_wrapper">
       <!-- <form>
         <a class="btn btn-outline-success" href="https://api.whatsapp.com/send/?phone=919307882577&text=i%20want%20more%20details%20about%20ROBO%20COURSE"><b><i class="fa fa-whatsapp" aria-hidden="true"></i> Connect</b></a>
      </form> -->
      <h4><i class="fa fa-envelope" aria-hidden="true"></i> : support@myjigyasa.com <br>
      <!-- <i class="fa fa-whatsapp" aria-hidden="true"></i> : 9307882577</h4> -->
     </div>
   </div>
  </div>
   <!-- <hr> -->
 </div>
 <!-- ------------------------------------------------------------------------------------------- -->
<!-- ---------------------------------------------------------------------------------------- -->

        <! Footer !>
<footer>
        <div class="container_fluid footer_wrapper w3-animate-right" id="footer_wrapperr">
          <div class="container" id="footer">
            <p>© MyJigyasa 2020 Privacy Policy</p>
            <div class="row">

              <div class="col-md-4">
                <ul>
                  <li><a href="./termsofservices">Terms Of Services</a> </li>
                  <li><a href="./privacypolicy">Privacy Statement</a> </li>
                  <li><a href="./refundpolicy">Refund Policy</a> </li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul>
                  <li><a href="./aboutus">About Us</a></li>
                  <li><a href="./contactus">Contact Us</a></li>
                  <li><a href="./bookdemo">Book Free Class</a></li>
                </ul>
              </div>
              <div style="text-align: center;" class="col-md-4">
                <h3 style="color: white;text-align: center;padding: 0px;">Contact</h3>
                 <form>
                  <a class="btn btn-outline-success" href="https://api.whatsapp.com/send/?phone=919307882577&text=i%20want%20more%20details%20about%20ROBO%20COURSE"><b><i class="fa fa-whatsapp" aria-hidden="true"></i> Connect</b></a>
              </form>
              </div>

            </div>
          </div>
        </div>

</footer>
              



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>