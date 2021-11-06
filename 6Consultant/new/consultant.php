<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style type="text/css">
      #top_wrapper{
        background-color: black;
        padding: 0px;
        margin: 0px;
      }
      #image1{
        opacity: 0.6;

      }
      .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
       
      }
      .centered h1{
         font-size: 800%;
         color: white;
         font-family: Georgia, serif;
         font-weight: 700;
      }
      @media all and (max-width: 800px) {
         #image1{
          /*display: none;*/
        }
        .centered {
          position: absolute;
          top: 12%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
        .centered h1{
         font-size: 200%;
         color: white;
         font-family: Georgia, serif;
         font-weight: 700;
      }
      }

      /*--------------------------*/
      #div_2 p{
        font-size: 120%;
        font-weight: 700;
      }
      #div_2 ul{
        margin-top: 80px;
      }
      #login_Wrapper {
            width: 300px;
            height: 350px;
            background-color: aliceblue;
            margin-top: 80px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
        }
          @media all and (max-width: 800px) {
             #div_2 ul{
        margin-top: 00px;
      }
          }
    </style>
    <title>Consultant</title>
  </head>
  <body>
    <div class="container-fluid" id="top_wrapper">
      <img id="image1" src="images/consultant_1.jpg" class="img-fluid">
      <div class="centered">
        <h1>CONSULTANT</h1>
        
      </div>
    </div>

    <!-- ------------------------------ -->

    <div class="container">
      <div class="row" id="div_2">
        <div class="col-sm-6" >
          <ul style="font-family: Poppins, sans-serif;">
            <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> Opportunity to work and earn as per your convenience</p>
            <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> Dedicated MyJigyasa dashboard to track your progress</p>
            <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> Digital marketing material provided</p>
            <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> Online and easy process</p>
            <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> Free Growth and Development Webinars</p>
            <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> 100% Transparency</p>
            <p><i class="fa fa-check-circle" style="color:  #9ecaed;"></i> *Free Business Development course worth 3000 INR</p>

          </ul>
        </div>
        <div class="col-sm-6">
          <div id="form_wrapper">
            <div class="container" id="login_Wrapper">
                <div style="text-align: center;width: 250px;margin: 0px auto;padding: 20px;">
                  <img src="images/MyJiyasaLogo1.png" class="img-fluid">
                </div>
                <hr>
                <form method="post">
                  <div class="mb-3">
                    <input type="number" class="form-control" name="mobileNo" id="exampleFormControlInput1" placeholder="Mobile Number" required="">
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" name="Password" id="exampleFormControlInput1" placeholder="Password" required>
                  </div>
                  <div class="mb-3" style="text-align: center;">
                    <input type="submit" class="btn btn-primary" value="Log In" >
                  </div>
                </form>
                <hr>
              </div>
          </div>
        </div>
      </div>
    </div>





<div style="margin-top: 1000px;">sadsd</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
  </body>
</html>