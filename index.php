<!doctype html>
<html lang="en">

<head>

  <meta name="description" content="Robotics Course">
  <meta name="keywords" content="MyJigyasa,Robotics,Children,Robo Master,Affortable Robotics Course,">


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font families -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
  <!-- OWL CARNESOL -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
  <!-- FONT AWESOME ICON -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
    html {
      scroll-behavior: smooth;
    }

    /*QUICK LINKS*/
    #quicklink_wrapper {
      padding: 5px;
      background-color: #F1F7FD;

    }

    #quicklink_wrapper a {
      text-decoration: none;
      /*background-color: #01E8C4;*/
      padding: 5px;
      color: white;
      font-family: Poppins, sans-serif;
    }

    @media all and (max-width: 800px) {
      #quicklink_wrapper {
        display: none;
      }
    }

    /*----------------------------------------------------------------------------*/
    /* Main Menu Bar */
    .menu_wrapper {

      font-family: Nunito Sans;
      background-color: white;


    }

    .nav-link {
      color: black !important;
      margin-right: 20px;
      font-size: 120%;
    }

    @media all and (max-width: 800px) {
      #btnaccount {
        margin-top: 5px;
      }
    }

    /*----------------------------------------------------------------------------*/
    /* Main Image And Text SECTION 1*/
    .main_image_wrapper {
      display: flex;

      flex-flow: row-reverse wrap;
    }


    #clm1 h1 {
      font-weight: 700;
      margin-top: 30px;
      font-size: 470%;
      font-family: Nunito Sans;
    }

    #clm1 h5 {
      font-weight: 700;
      color: #0078FF;
      margin-left: 10px;
      font-family: Nunito Sans;
    }

    #desktop_image {
      /* margin-top: 100px;*/
      width: 80%;
    }

    #mobile_image {
      display: none;
    }

    @media all and (max-width: 800px) {
      #clm1 h1 {
        font-weight: 700;
        margin-top: 0px;
        font-size: none;

      }

      #clm1 ul {
        margin-left: -10px;
      }

      #mobile_image {
        display: block;
      }

      #desktop_image {
        display: none;
      }

    }



    /*----------------------------------------------------------------------------*/


    /*----------------------------------------------------------------------------*/
    /*WHY KIDS MUST LEARN ROBOTICS SECTION 2*/

    #SECTION2_Wrapper {
      background-color: #F1F7FD;
    }

    #SECTION2_Wrapper h2 {
      padding-top: 50px;
      font-weight: 500;
      text-align: center;
      font-family: Nunito Sans;
    }

    #SEC2_CLM1 img {
      margin-top: 10px;

    }

    #SEC2_CLM2 {
      margin-top: 50px;
      padding-left: 100px;
    }

    #SEC2_CLM2 p {
      font-family: Nunito Sans;
      font-size: 120%;
    }

    @media all and (max-width: 800px) {
      #SEC2_CLM2 {
        margin-top: 50px;
        padding-left: 20px;
      }
    }

    /*----------------------------------------------------------------------------*/
    /*WHO ARE WE SECTION 3*/

    #SECTION3_Wrapper h2 {
      padding-top: 50px;
      font-weight: 500;
      text-align: center;
    }

    #SECTION3_Wrapper p {
      text-align: justify;
      padding-top: 30px;
      font-weight: 700;
      width: 80%;
      margin: 0px auto;
      /*font-family: Poppins, sans-serif;*/
      font-family: Nunito Sans;
      font-size: 120%;
    }


    @media all and (max-width: 800px) {
      #SECTION3_Wrapper p {
        text-align: justify;
        padding-top: 30px;
        /*font-weight: 700;*/
        width: 100%;
        margin: 0px auto;
        /*font-family: Poppins, sans-serif;*/
        font-family: Poppins, sans-serif;
      }
    }

    /*----------------------------------------------------------------------------*/
    /*REVIEWS SECTION 4*/
    #REVIEWS_SECTION4 {
      background-color: #F1F7FD;
      padding-bottom: 20px;
    }

    #REVIEWS_SECTION4 h2 {
      padding-top: 50px;
      font-weight: 500;
      text-align: center;
    }

    .review_card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }


    /*----------------------------------------------------------------------------*/
    /* Frequently Asked Questions */
    .Frequently_Asked_Questions_wrapper {
      background-color: white;
      padding: 20px;
      background-image: linear-gradient(#25B3FA, white);

    }

    .Frequently_Asked_Questions_wrapper h2 {
      padding-top: 50px;
      font-weight: 500;
      text-align: center;

    }

    .Frequently_Asked_Questions_wrapper p {
      font-weight: 500;
      text-align: center;
      font-family: Nunito Sans;

    }

    .collapse_card {
      background-color: white;
      width: 70%;
      margin: 0px auto;
      /*border-radius: 20px;*/

    }

    .collapse_card p {
      font-weight: 700;
      text-align: left;
      padding: 20px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    #displaynone {
      display: none;
    }

    @media all and (max-width: 800px) {
      .collapse_card {
        background-color: white;
        width: 100%;
        margin: 0px auto;
        /*border-radius: 20px;*/

      }

      .collapse_card p {
        font-weight: 700;
        text-align: left;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

      }

      .Frequently_Asked_Questions_wrapper h2 {
        padding-top: 0px;
        font-weight: 500;
        text-align: center;

      }


    }

    /*----------------------------------------------------------------------------*/
    /*How to Begin?  / How it works*/
    #HOWTOBEGIN_wrapper {
      margin-top: 20px;
      /*background-color: #F1F7FD;*/
      padding-bottom: 20px;
    }

    #HOWTOBEGIN_wrapper h2 {
      padding-top: 50px;
      font-weight: 00;
      text-align: center;

    }

    .rectangle {
      width: 300px;
      /*height: 400px;*/
      /*background-color: #19AFFF;*/
      background-image: linear-gradient(to top, #19AFFF, #79C8D5);
      border-radius: 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-top: 20px;
    }

    .rectangle h3 {
      color: white;
      text-align: center;
      font-weight: 700;
      padding: 10px;
      padding-bottom: 0px;
    }

    .rectangle p {
      color: white;
      padding: 10px;
    }

    /* .Card_head{ */
    /*background-color: black;*/
    /*padding: 0px;*/
    /* } */



    @media all and (max-width: 800px) {

      #HOWTOBEGIN_wrapper {
        margin-top: 0px;
      }

      #HOWTOBEGIN_wrapper h2 {
        text-align: center;
        padding-top: 0px;
        font-weight: 700;
      }

    }

    /*-----------------------------------------------------------------------*/
    /* Footer */

    #footer_wrapperr {
      background-color: black;
      padding: 10px;

    }

    #footer p {
      color: white;
      text-align: center;
      padding: 10px;
    }

    #footer ul {
      color: white;
    }

    /*------------------------------------------------------------*/
    .iframe-container {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%;
      height: 0;
    }

    .iframe-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>

  <title>Jigyasa Home</title>
  <link rel="icon" href="images/TitleLogo.png" type="image/icon type">
</head>

<body>








  <!-- Quick links -->
  <div class="container_fluid " id="quicklink_wrapper">


    <div class="container col-12 col-md-10">
      <a style="color: gray;">Quick Switch</a>
      <a href="#Testimonials" class="btn btn-primary btnticker btn-sm">Testimonials</a>
      <a href="#faq" class="btn btn-info btn-sm">FAQ's</a>
      <a href="https://littleshaurya.com/" class="btn btn-success btn-sm">Early Learning</a>
      <a href="./bookdemo" class="btn btn-primary btn-sm"> Demo</a>
      <a href="./6Consultant/consultant" class="btn btn-dark btn-sm">Consultant</a>
      <a href="./6Consultant/vf" class="btn btn-dark btn-sm">Virtual Franchise</a>



    </div>
  </div>

  <!-- ------------------------------------------------------------------------------ -->
  <! Main Menu Bar !>
    <div class="container_fluid menu_wrapper sticky-top">
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
              <li class="nav-item" style="margin-right: 5px">
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

    <! Main Image And Text desktop !>

      <div class="container main_image_wrapper" id="main_image_desktop">
        <div class="row flex-column-reverse flex-lg-row">
          <div class="col-md-7 w3-container w3-animate-bottom" id="clm1">
            <h1>Be a Robo <span style="color: #0078FF;font-size: 120%;">Master</span> </h1>
            <h5>
              <!--  <a href="" class="typewrite" data-period="2000" data-type='[ "Exclusive Robotics Course + Product Kit For Age Group 8 To 15 Years."]'>
          <span class="wrap"></span>
        </a> -->
              <marquee>Exclusive Robotics Course + Product Kit For Age Group 8 To 18 Years.</marquee>
            </h5>
            <br>
            <ul style="font-family: Poppins, sans-serif;">
              <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> 11 + 3 Practical Robo Projects.</p>
              <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> 17 Exclusive Modules Designed by Experts</p>
              <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> 12 Quality Assesments.</p>
              <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> Designed For Easy Learning.</p>
              <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> Course duration 120 days with query support.</p>
              <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> Easily Affordable.</p>
            </ul>
            <br>

            <form class="form-inline">
              <a style="margin-left: 10px;" href="./registration" class="btn btn-primary"><i class="fa fa-lightbulb-o"></i> Enroll Now</a>
              <a style="margin-left: 10px;" href="./RoboCourseIntro" class="btn btn-primary"><i class="fa fa-user-plus"></i> Course Details</a>
            </form>

          </div>
          <div class="col-md-5 w3-animate-zoom" id="clm2">
            <img id="desktop_image" src="images/sudeshna4.jpg" class="img-fluid mx-auto" alt="Responsive image">
            <img id="mobile_image" src="images/Index_Mobile_Img.jpg" class="img-fluid mx-auto" alt="Responsive image">

          </div>
        </div>
      </div>


      <!--  ---------------------------------------------------------------------------------------- -->
      <br>
      <br>
      <! How to Begin? / How it works ? !>

        <div class="container_fluid" id="HOWTOBEGIN_wrapper">
          <h2 data-aos="fade-up">How It Works ?</h2>
          <br>
          <div class="container">
            <div class="row">


              <div class="col-md-4 d-flex justify-content-center" data-aos="flip-left">
                <div class="card rectangle" style="width: 18rem;">
                  <img class="card-img-top" src="images/How_It_Works_1.jpg" alt="Card image cap">
                  <div class="card-body ">
                    <h3 class="card-title">Enroll for the Online Course</h3>
                    <p class="card-text"> <a href="">Buy the course.</a> <br>
                      You can use several Safe and Secure Payment options available on our platform</p>
                  </div>
                </div>
              </div>
              <!-- ----------------------------------------------- -->
              <div class="col-md-4 d-flex justify-content-center" data-aos="flip-left">
                <div class="card rectangle" style="width: 18rem;">
                  <img class="card-img-top" src="images/How_It_Works_2.jpg" alt="Card image cap">
                  <div class="card-body ">
                    <h3 class="card-title">Get Robo Genius Kit Delivered</h3>
                    <p class="card-text">Get your Kit delivered at your doorstep. Activate the kit using code given in the Kit</p>
                  </div>
                </div>
              </div>
              <!-- ----------------------------------------------- -->
              <div class="col-md-4 d-flex justify-content-center" data-aos="flip-left">
                <div class="card rectangle" style="width: 18rem;">
                  <img class="card-img-top" src="images/How_It_Works_3.jpg" alt="Card image cap">
                  <div class="card-body ">
                    <h3 class="card-title">Start Exploring </h3>
                    <br>
                    <p class="card-text">Login in your account, Get started With the Online learning portal. Explore yourself !!!</p>
                  </div>
                </div>
              </div>
              <!-- ----------------------------------------------- -->


            </div>
          </div>
        </div>


        <!--  ---------------------------------------------------------------------------------------- -->
        <! WHY KIDS MUST LEARN ROBOTICS SECTION 2 !>

          <div class="container_fluid" id="SECTION2_Wrapper">
            <div class="container" style="text-align: center;">
              <h2 data-aos="fade-up">WHY KIDS MUST LEARN ROBOTICS?</h2>
              <!-- <div class="row">
    <div class="col-sm" id="SEC2_CLM1" data-aos="fade-up">
      <img src="images/Why_Kids_Must_Learn_Robotics.png" class="img-fluid mx-auto" alt="Responsive image">
    </div>
    <div class="col-sm" id="SEC2_CLM2" data-aos="fade-up">
      <p><i class="fa fa-check-circle" style="color:  #0078FF;"></i> It's Future. </p>
      <p><i class="fa fa-check-circle" style="color:  #0078FF;"></i> Improves Engagement .</p>
      <p><i class="fa fa-check-circle" style="color:  #0078FF;"></i> Build Problem-solving skills.</p>
      <p><i class="fa fa-check-circle" style="color:  #0078FF;"></i> Build Physical Skills.</p>
      <p><i class="fa fa-check-circle" style="color:  #0078FF;"></i> Builds creativity.</p>
      <p><i class="fa fa-check-circle" style="color:  #0078FF;"></i> It is an alternative.</p>
      <p><i class="fa fa-check-circle" style="color:  #0078FF;"></i> Robotics is fun.</p>

<br>

      <form class="form-inline">
        <button style="width: 100px;" class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-video-camera" aria-hidden="true"></i> <a style="text-decoration: none;color:inherit;" href="#">हिंदी</a> </button>
        <button style="margin-left: 10px;" class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-video-camera"></i> <a style="text-decoration: none;color:inherit;" href="#">English</a> </button>
      </form>

    </div>
  </div> -->
              <br>
              <div class="iframe-container">
                <iframe src="https://www.youtube.com/embed/6z7qm-k5jsc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>






            </div>
            <br>
          </div>



          <!-- -------------------------------------------------------------------------------------------------- -->
          <! WHO ARE WE SECTION 3!>
            <div id="aboutus"></div>
            <div class="container" id="SECTION3_Wrapper">
              <h2 data-aos="fade-up">Who Are We?</h2>
              <div class="row flex-column-reverse flex-lg-row">
                <div class="col-md-6" data-aos="fade-up">

                  <p>We are a team of passionate and enthusiastic people helping the young generation think out of the box. We strongly believe in the following: </p>
                  <!--  <p style="text-align: center;text-shadow: 2px 2px yellow;background-color: yellow;padding: 10px;">न हि ज्ञानेन सदृशं पवित्रमिह विद्यते | <br>
      तत्स्वयं योगसंसिद्धः कालेनात्मनि विन्दति
    </p> -->
                  <div style="text-align: center;margin-top: 10px;">
                    <img style="width: 80%;" src="images/test.png">
                  </div>

                  <p style="margin-top: -10px;">
                    This means - Knowledge is Power !!! <br>
                    Anyone who knows is powerful no matter wherever he/she is.
                    But do we know which is the main thing that helps to gain Knowledge? It is the Curiosity (Jigyasa) we have within. MyJigyasa has a simple motto to follow:
                    Turn your Curiosity (Jigyasa) into Power!!!
                  </p>
                  <!-- <p style="text-align: center;"> Here are MyJigyasa we follow most important path </p> -->
                  <!--     <div style="text-align: center;">
    <img  src="images/WHOWEARE.png" class="img-fluid mx-auto" alt="Responsive image">      
    </div> -->
                  <br>
                  <div style="text-align: center;">
                    <button style="margin: 0px auto;" class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-eye"></i> <a style="text-decoration: none;color:inherit;" href="./aboutus">Explore More</a> </button>
                  </div>
                </div>
                <br>

                <div class="col-md-6" data-aos="fade-up">
                  <img style="margin-top: 40px;" src="images/Who_Are_We.jpg" class="img-fluid mx-auto" alt="Responsive image">
                </div>
              </div>
            </div>






            <!-- -------------------------------------------------------------------------------------------------- -->






            <div class="container">
              <h2 data-aos="fade-up" id="Testimonials" style="font-weight: 700;text-align: center;padding: 20px;">Testimonials</h2>
              <div class="owl-carousel owl-theme">
                <div class="item d-flex justify-content-center">
                  <div class="card review_card" style="width: 18rem;margin-top: 20px;">
                    <img class="card-img-top" src="images/ReviewImages/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-text">Mayureshwar Choudhari</h5>
                      <hr>
                      <p style="text-align: justify;" class="card-text">Good learning website for Robotics .Good study content.
                        Great support team and teaching staff.Proper resolutions to queries and doubts.</p>
                    </div>
                  </div>
                </div>
                <div class="item d-flex justify-content-center">
                  <div class="card review_card" style="width: 18rem;margin-top: 20px;">
                    <img class="card-img-top" src="images/ReviewImages/2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-text">Sharvil Nikam</h5>
                      <hr>
                      <p class="card-text">It was good experience with MyJigyasa
                        Good Quality of course content, feasible price & informative session.</p>
                    </div>
                  </div>
                </div>
                <div class="item d-flex justify-content-center">
                  <div class="card review_card" style="width: 18rem;margin-top: 20px;">
                    <img class="card-img-top" src="images/ReviewImages/12.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-text">Pornima Warulkar</h5>
                      <hr>
                      <p class="card-text">My interest in science is incresing day by day due to MyJigyasa. Trainers are excellent and well qualified.
                        Wonderful support from the Support Team.
                        Good learning experience.</p>
                    </div>
                  </div>
                </div>
                <div class="item d-flex justify-content-center">
                  <div class="card review_card" style="width: 18rem;margin-top: 20px;">
                    <img class="card-img-top" src="images/ReviewImages/4.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-text">Dipesh Sanasane</h5>
                      <hr>
                      <p class="card-text">MyJigyasa for me is one of the best online platform, even the fees is also very efficient as compared to any online or offline classes.</p>
                    </div>
                  </div>
                </div>
                <div class="item d-flex justify-content-center">
                  <div class="card review_card" style="width: 18rem;margin-top: 20px;">
                    <img class="card-img-top" src="images/ReviewImages/5.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-text">Tejas Jadhav</h5>
                      <hr>
                      <p class="card-text">MyJigyasa courses are useful and we can learn more technology here. I will recommend you MyJigyasa.
                        thank you MyJigyasa team.
                        Quick responses from the customer support team and they provided demo courses as well.</p>
                    </div>
                  </div>
                </div>
                <div class="item d-flex justify-content-center">
                  <div class="card review_card" style="width: 18rem;margin-top: 20px;">
                    <img class="card-img-top" src="images/ReviewImages/6.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-text">Yug Kotecha</h5>
                      <hr>
                      <p class="card-text">Best online learning platform. You can also test yourself through online assessment they provide you.
                        Best way to learn.</p>
                    </div>
                  </div>
                </div>
                <div class="item d-flex justify-content-center">
                  <div class="card review_card" style="width: 18rem;margin-top: 20px;">
                    <img class="card-img-top" src="images/ReviewImages/7.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-text">Anushka Tandulkar</h5>
                      <hr>
                      <p class="card-text">On MyJigyasa i took Robotics class.
                        It was a wonderful experience and other than the cousre I got to learn general Knowledge things as well.</p>
                    </div>
                  </div>
                </div>
                <div class="item d-flex justify-content-center">
                  <div class="card review_card" style="width: 18rem;margin-top: 20px;">
                    <img class="card-img-top" src="images/ReviewImages/8.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-text">Purvesh Sonawane</h5>
                      <hr>
                      <p class="card-text">I have enjoyed learning through MyJigyasa the teachers are experienced.
                        Learning is made simple and explained in detail with the help of animation.</p>
                    </div>
                  </div>
                </div>
                <div class="item d-flex justify-content-center">
                  <div class="card review_card" style="width: 18rem;margin-top: 20px;">
                    <img class="card-img-top" src="images/ReviewImages/9.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-text">Piyush Sonawane</h5>
                      <hr>
                      <p class="card-text">On MyJigyasa teachers give you detailed knowlegde about the things and also made it so easy to understhand.</p>
                    </div>
                  </div>
                </div>
                <div class="item d-flex justify-content-center">
                  <div class="card review_card" style="width: 18rem;margin-top: 20px;">
                    <img class="card-img-top" src="images/ReviewImages/10.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-text">Ganesh Sarode</h5>
                      <hr>
                      <p class="card-text">MyJigyasa is the best. I have got Robotics Kit from them as I have enrolled for Robotics class
                        and above all I also got the digital cerificate after completing the course.</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
            <script type="text/javascript">
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                smartSpeed: 500,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 3
                  }
                }
              })
            </script>
            </div>


            <!-- -------------------------------------------------------------------------------------------------- -->
            <! Frequently Asked Questions !>
              <div class="container_fluid Frequently_Asked_Questions_wrapper">

                <div data-aos="zoom-in">
                  <h2 id="faq">Frequently Asked Questions</h2>
                  <p>for all those little doubts on your mind.</p>
                </div>

                <div class="container">

                  <div id="accordion">
                    <div data-toggle="collapse" data-target="#demo1" class="collapse_card" data-aos="flip-left">
                      <p><i class="fa fa-plus-circle" aria-hidden="true" style="color: blue;font-size: 110%;"></i> What does MyJigyasa offers?</p>
                    </div>

                    <div id="demo1" class="collapse collapse_card">
                      <p>Well-designed Robotics course & Product Kit (Robo Master Program) for the young generation of age 8 to 18 years </p>
                    </div>
                    <!-- ----------------------------------------------------------------------- -->
                    <div data-toggle="collapse" data-target="#demo2" class="collapse_card" data-aos="flip-right">
                      <p><i class="fa fa-plus-circle" aria-hidden="true" style="color: blue;font-size: 110%;"></i> How can I sign-up and access the course?</p>
                    </div>

                    <div id="demo2" class="collapse collapse_card">
                      <p>Click on the "Enroll now" button, fill in a few details, and make the payment using your desired payment option. That's it! You now have access to the subscribed course on your user dashboard after logging in.</p>
                    </div>

                    <!-- ----------------------------------------------------------------------- -->
                    <div data-toggle="collapse" data-target="#demo3" class="collapse_card" data-aos="flip-left">
                      <p><i class="fa fa-plus-circle" aria-hidden="true" style="color: blue;font-size: 110%;"></i> How will the Robo Master Program course help my kid?</p>
                    </div>

                    <div id="demo3" class="collapse collapse_card">
                      <p>Robotics is the next big thing in the future. Robo Genius course plus Kit helps Kids to learn robotics in an easy-fun way and It will also boost up extra-curricular activities of your kid </p>
                    </div>
                    <!-- ----------------------------------------------------------------------- -->
                    <div data-toggle="collapse" data-target="#demo4" class="collapse_card" data-aos="flip-left">
                      <p><i class="fa fa-plus-circle" aria-hidden="true" style="color: blue;font-size: 110%;"></i> When can me / my kid access this course?</p>
                    </div>

                    <div id="demo4" class="collapse collapse_card">
                      <p>ROBO MASTER PROGRAM course is available 24/7 as per convenience</p>
                    </div>
                    <!-- ----------------------------------------------------------------------- -->
                    <div data-toggle="collapse" data-target="#demo5" class="collapse_card" data-aos="flip-left">
                      <p><i class="fa fa-plus-circle" aria-hidden="true" style="color: blue;font-size: 110%;"></i> How will be queries/questions resolved during the course?</p>
                    </div>

                    <div id="demo5" class="collapse collapse_card">
                      <p>Users can easily log/ask questions in the dashboard provided to him/her. Question will be answered within 24 hours by a dedicated team at MyJigyasa</p>
                    </div>
                    <!-- ----------------------------------------------------------------------- -->
                    <div style="text-align: center;">
                      <p id="faq" onclick="knowmore()">Know more</p>

                    </div>

                    <!-- ----------------------------------------------------------------------- -->
                    <div id="displaynone">
                      <div data-toggle="collapse" data-target="#demo6" class="collapse_card" data-aos="flip-left">
                        <p><i class="fa fa-plus-circle" aria-hidden="true" style="color: blue;font-size: 110%;"></i> How the progress of course will be tracked?</p>
                      </div>

                      <div id="demo6" class="collapse collapse_card">
                        <p> Once the user starts going through the course, Parents will be notified through email and SMS every time a module is completed along with the results </p>
                      </div>
                      <!-- ----------------------------------------------------------------------- -->
                      <div data-toggle="collapse" data-target="#demo7" class="collapse_card" data-aos="flip-left">
                        <p><i class="fa fa-plus-circle" aria-hidden="true" style="color: blue;font-size: 110%;"></i> Does the Robo Genius course has an assessment?</p>
                      </div>

                      <div id="demo7" class="collapse collapse_card">
                        <p> Yes. This course has 12 quality assessments along with 1 Final assessment </p>
                      </div>
                      <!-- ----------------------------------------------------------------------- -->
                      <div data-toggle="collapse" data-target="#demo8" class="collapse_card" data-aos="flip-left">
                        <p><i class="fa fa-plus-circle" aria-hidden="true" style="color: blue;font-size: 110%;"></i> Does MyJigyasa provide a completion certificate? </p>
                      </div>

                      <div id="demo8" class="collapse collapse_card">
                        <p> Yes, Once the course and all assessments are completed certificate of completion will be provided. </p>
                      </div>
                      <!-- ----------------------------------------------------------------------- -->
                      <div data-toggle="collapse" data-target="#demo9" class="collapse_card" data-aos="flip-left">
                        <p><i class="fa fa-plus-circle" aria-hidden="true" style="color: blue;font-size: 110%;"></i> What payment modes are accepted on the website?</p>
                      </div>

                      <div id="demo9" class="collapse collapse_card">
                        <p> You can use all major credit and debit cards, you can also use net banking and payment wallets to subscribe. </p>
                      </div>
                      <!-- ----------------------------------------------------------------------- -->
                    </div>

                  </div>
                </div>
              </div>

              <!-- ---------------------------------------------------------------------------------------- -->
              <!-- Collabrations  -->
              <!-- <div class="container">
  <h2 data-aos="fade-up" style="font-weight: 700;text-align: center;padding: 20px;">Collabrations</h2>
  <div class="row">
    <div class="col-sm-4" style="margin: 0px auto;">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="images/collabrations1.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Production</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <h4 style="text-align: center;">Marketing</h4>
    </div>
    <div class="col-sm-4">
      <h4 style="text-align: center;">Skill Development</h4>
    </div>
  </div>
</div> -->


              <!-- ---------------------------------------------------------------------------------------- -->
              <div class="container_fluid">
                <img src="images/contactusstrip.jpg" class="img-fluid">
              </div>

              <!-- ---------------------------------------------------------------------------------------- -->

              <! Footer !>

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
                      <div class="col-md-4">
                        <ul>
                          <li><a href="./teachersPortal/teacher_login.php">Teacher Login</a></li>
                          <li><a href="./6Consultant/Consultant">Consultant</a></li>
                          <!-- <li><a href="">Teacher Login</a></li> -->
                        </ul>

                      </div>

                    </div>
                  </div>
                </div>





                <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
                <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <!-- <script type="jq/jquery.js"></script> -->
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                  AOS.init();
                </script>
                <!-- <script type="text/javascript">
  var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };

</script> -->
                <script type="text/javascript">
                  function knowmore() {
                    document.getElementById('displaynone').style.display = "block";
                    document.getElementById('faq').style.display = "none";
                  }
                </script>








</body>


</html>