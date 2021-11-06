<?php
session_start();




// TO CHECK USER IS ENTER BY LOGIN ONLY
if ($_SESSION['loggedIn']) {
  // Allow USER
}else{

  header('Location: ../login.php');  
}

include '../3databases/generalDB.php';
// include '../3databases/roboticsoneDB.php';
// include  '../3databases/VedicMathsDb.php';
$Email = $_SESSION['Email'];


include '../3databases/Robotics_chatboxDB.php';











?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      #sidebar{
        width:25%;
        background-color: #0054D1;

      }
      #mainview{
        margin-left:25%;
      }
       @media all and (max-width: 800px) {
         #sidebar{
        /*display: none;*/
        width: 300px;
        background-color: #39424E;
        z-index: 1000000;
          }
         #mainview{
         margin-left:0px;
          }
       }
/* ----------------------------------------------------*/
     /* SIDEBAR VIEW FORM HERE*/
     .ProfileImage_wrapper{
     
      
     }
 .ProfileImage_wrapper img{
  width: 200px;
  height: 200px;
  border: 1px solid #ddd;
  border-radius: 50%;
  background-color: white;
  margin: 30px;
}
/*     #yourBtn {
 
  margin: 0px auto;
  font-family: calibri;
  width: 150px;
  padding: 10px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border: 1px dashed #BBB;
  text-align: center;
  background-color: #DDD;
  cursor: pointer;
  margin-top: -20px;
}*/


/* ----------------------------------------------------*/
     /* MAIN VIEW FORM HERE*/

       body{
        background-color: #F1F7FD;
      }
      /* Main Menu Bar */
      .menu_wrapper{
        font-family: Arial, Helvetica, sans-serif;
        background-color: #F1F7FD;
      }
      .nav-link {
       color: black !important;
       margin-right: 20px;
       font-size: 120%;
      }
       @media all and (max-width: 800px) {
        .menu_wrapper{
        font-family: Arial, Helvetica, sans-serif;
        background-color: #39424E;  
         }
         #hr{
          display: none;
         }
         .nav-link {
           color: white !important;
           margin-right: 20px;
           font-size: 120%;
          }
       }

     /* ------------------------*/
        /*Account Tab*/
      .disabled{
         pointer-events: none;
         background-color: gray !important;
         font-weight: 700;
         color: white !important;
      }

     /* ------------------------*/
      /* Your Courses */
      .headings h4{
        margin-top: 20px;
        text-align: center;
        color: black; 
         font-family: Arial, Helvetica, sans-serif;
         font-weight: 700;
      }
      #your_courses_wrapper{
        margin-top: 30px;
     }
        /*border: 1px solid green;*/
      .card_wrapper{
        border-radius: 10px;
        background-color: white;
        /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
        box-shadow:0 0 10px #9ecaed;
      }
      .card_wrapper button{
        width: 100%;
        box-shadow:0 0 10px #9ecaed;
      }

       #Empty_Course_Section h3{
           color: gray;
       }
       #Empty_Course_Section{
        text-align: center;
         
         margin: 0px auto;
       }
      @media all and (max-width: 800px) {
       .card_wrapper{
        background-color: white;
       
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
         width: 100%;
         margin: 5px;     
       }
     }
      #disablethis{
         display: none;
          }

       /*------------------------------------------------------------------   */
       #demo_wrapper{
        margin: 0px auto;
       }
       /*------------------------------------------------------------------------*/
       /*CHAT BOX*/
       #chat_wrapper{
        /*border: 1px solid red;*/


       }
       #chat_wrapper h3{
        color: white;
        text-align: center;
       }
       #chat_diplay_area{
        /*width: 290px;*/
        height: 200px;
        overflow: auto;
        white-space: nowrap;
        background-color: #D3D3D3;
        /*background-image: linear-gradient(to top, #00BEA4 , green);*/
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       }
   
        
       
       #user textarea{
        background-color: #00BEA4;
        padding: 2px;
        color: white;
        border-radius: 5px;
        margin: 10px;
        width: 90%;
        margin-left: 1px;
        overflow:hidden


         
       }
       #teacher textarea{
        background-color: black;
        padding: 2px;
        color: white;
        border-radius: 5px;
        margin: 10px;
        width: 90%;
        margin-right: 0px;
        overflow:hidden
       }










    </style>
    <title>Account Dashbord</title>
  </head>
  <body>


<!-- --------------------------------------------------------------- -->
      <!-- SIDEBAR VIEW FORM HERE -->
<!-- --------------------------------------------------------------- -->
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" id="sidebar">
<button style="color: white;" class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
<!-- THE FOLLOWING PHP SCRIEPT IS FOR FETCH AND DISPLAY PROFILE IMAGE -->
<?php
      // include '../3databases/database.php'; 
      $query = "SELECT * FROM userinfo WHERE Email='$Email'";
      $result=mysqli_query($General_Conn,$query);
        while ($row=mysqli_fetch_array($result)) {
        $UserName = $row['FirstName'];
        $LastName = $row['LastName'];
        $ImageURL ='../uploads_Profile/'.$row['ProfileImageURL'];

        if ($ImageURL == "../uploads_Profile/") {
          print("
            <div class='ProfileImage_wrapper d-flex justify-content-center'>
            
                 <img src='../uploads_Profile/4.png'  alt='Cinque Terre' >

            </div>
          ");
        }else{
           print("
              <div class='ProfileImage_wrapper d-flex justify-content-center'>
               
                   <img src='{$ImageURL}'  alt='Cinque Terre' >
              
              </div>
            ");
           }   
      }

?>

  <h3 style="color: white;text-align: center;"><?php echo strtoupper($UserName) ; ?> <?php echo strtoupper($LastName); ?></h3>


<! CHAT BOX !>

<div class="container" id="chat_wrapper">
  <h3>Chat</h3>

<div class='mb-3'  id='chat_diplay_area'>
<?php

// TO FETXH USER CHATS
$query="SELECT * FROM chats WHERE Email='$Email' ";
if($result=mysqli_query($Chat_conn,$query)){
  while ($row=mysqli_fetch_array($result)) {

    // echo $row['Question'];
    $Question=$row['Question'];
    $Answer=$row['Answer'];
    // echo is_null($Question);

    if ($Answer=="") {
      $Answer .= "Your Question is under review...";
    }
    echo "<br>";
    print("

   <!-- USER INPUTES -->
    <div id='user'>
      <textarea  rows='2' disabled=''>{$Question}</textarea>
    </div>
     <!-- REPLYS -->
    <div id='teacher'>
      <textarea rows='2' disabled=''>{$Answer}</textarea>
    </div>
    <hr>


      ");
  }
  }



?>

  </div>



  <div>
<form id="ChatBox">
<div class="input-group mb-3">
  <input id="user_Input" type="text" class="form-control" placeholder="Ask Question" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
  <div class="input-group-append">
    <button class="btn" onclick="SendMessage()" type="button">Send</button>
  </div>
</div>     
</form>
  </div>
  
</div>




</div>
<!-- --------------------------------------------------------------- -->
      <!-- MAIN VIEW FORM HERE -->
<!-- --------------------------------------------------------------- -->
<div id="mainview">
  
  <! Main Menu Bar !>
     <div  class="container_fluid menu_wrapper sticky-top">
            <div class="container">

              <nav class="navbar navbar-expand-lg navbar-light">
        <!-- <a class="navbar-brand" href="#"><span style="color: blue;font-size: 120%;">JIGYASA</span></a> -->
        <img style="width: 200px;" src="../images/MyJiyasaLogo1.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashbord">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="achivments">Achievement</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="CourseIntro">Course Details</a>
            </li>
            <li class="nav-item" style="margin-right: 5px">
               <div class="btn-group" role="group">
                <button style="background-color: #0054D1;color: white;" id="btnGroupDrop1" type="button" class="btn dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b> <i class="fa fa-lock" aria-hidden="true"></i>
                  Account </b>
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="./logout.php">LogOut</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        
      </nav>

      </div>
    </div>
    <hr id="hr">

    <!-- ------------------------------------------- -->
    <!--  Your Courses -->
    <br>
    <div style="text-align: center;margin: 0px auto;">
      <button class="w3-button w3-teal w3-round-xxlarge w3-centre w3-hide-large" onclick="w3_open()">&#9776; PROFILE</button>
    </div>
    
     <div class="container" id="your_courses_wrapper">
        <div class="row">
           
           <?php    // This code is for printing various courses owned by user

           
            $query = "SELECT * FROM userinfo WHERE Email='$Email' ";
            if($result=mysqli_query($General_Conn,$query)){
            while ($row=mysqli_fetch_array($result)){
              

              for ($i=10; $i <11 ; $i++) { 
                
                if ($row[$i] != "") {
                                               
                                             // BElow query is for fetching perticular course info 

                     // $query1 = "SELECT * FROM CourseCreators WHERE CourseName='$row[$i]' ";
                     // $result1=mysqli_query($conn,$query1);
                     // $row1=mysqli_fetch_array($result1);
                     $CourseName=$row[$i];
                     $row[$i]= str_replace(' ', '',$row[$i]);

// -------------------------------------------------------------------------------------------------
                     // THE BELOW CODE IS TO FIND ON GOING PROJECT OF USER
// -------------------------------------------------------------------------------------------------
                     // $query2 = "SELECT * FROM cookies WHERE Email='$Email' ";
                     // $result2=mysqli_query($conn,$query2);
                     // $row2=mysqli_fetch_array($result2);
                     
                   
                      // TO REMOVE WHITE SPACES FROM COURSE NAME
                     // $NameOfCourse = str_replace(' ', '',$row[$i]);
                    

                     // CONVERTING A STRING OF COOKIES INTO ARRAY ==> $row2[$NameOfCourse] is a string Not $row2
                     // $Cookies_Array = explode(",",$row2[$NameOfCourse]);
                     // print_r($Cookies_Array);
                     // echo "<br>";
                     
                     
                     // TO FETCH COURCE CONTENT NAME ==> MAINHEADING OF THAT IS PROJECTS NAME
                     // $query3 = "show tables";
                     // $result3=mysqli_query($$NameOfCourse,$query3);
                     // $MainHeading="";
                     // while($table = mysqli_fetch_array($result3)) {
                      
                      // TO REMOVE WHITE SPACES FROM MAINHEADING AND ADD ALL MAINHEADINGS IN $MainHeading
                      // $MainHeading1 = str_replace(' ', '',$table[0]); 
                      // $MainHeading .= $MainHeading1." "; 
                     
                      // }
 
                     // TO MAKE ARRAY OF MAINHEADINGS
                     // $MainHeading_Array = explode(" ",$MainHeading);
                     // print_r($MainHeading_Array);
                     // echo "<br>";
                     

                     // TO FIND WHICH PROJECT IS GOING ON (PROJECT NAME)
                     // for ($k=0; $k < sizeof($Cookies_Array) ; $k++) { 
                       // if ($MainHeading_Array[$k] != $Cookies_Array[$k]) {
                         // echo "THIS PROJECT IS GOING ON ";
                         // echo "<br>";
                         // echo $MainHeading_Array[$k];
                         // $PreviousCookieProjectName = $MainHeading_Array[$k];
                         // echo $PreviousCookieProjectName;
                         // echo "<br>";
                         // break;
                       // }
                     // }


                    // print_r($MainHeading_Array);
                   // foreach ($MainHeading_Array as $key => $value) {
                     // if ($PreviousCookieProjectName == $value) {
                       // echo $key;
                       
                     // }
                   // }
                     // end($Cookies_Array);
                     // echo prev($Cookies_Array);;



                     


// ---------------------------------------------------------------------------------------------------
                // THE BELOW CODE IS FOR HOW COURSE CARD WILL LOOK
// ---------------------------------------------------------------------------------------------------
                   
                     
                      

              // Below is the html format how courses card will look
                    print("
                            




<div class='col col d-flex justify-content-center'>
<div class='card' style='width: 20rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
  <img class='card-img-top' src='../images/123.jpg' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'>{$CourseName}</h5>
    <p >Foundation of robotics </p>
    <hr>
    <!-- <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->

    <form method='get' action='video'>   
      <input id='disablethis' type='text' name='LectureNo' value='455703494'>  </input>
      <button type='submit' class='btn btn-primary btn-block' value='{$row[$i]}' name='CourseName'>Start Now</button>
     </form>
  </div>
</div>
  </div>






       
                       ");

                }else if($row[10] == ""){
                  // echo "Sorry it seems you don't have any course";
                  print("


<div class='row' id='demo_wrapper'>
<div class='col-md-6 d-flex justify-content-center'>
<div class='card' style='width: 20rem;margin:10px;'>
  <img class='card-img-top' src='../images/123.jpg' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'>Robotics Foundation</h5>
    <p class='card-text'>Duration: <b> 48 Hrs. </b> </p>
    <hr>
    <h3 class='card-text'> <b><span style='color: blue'>INR 9800</span></b> </h3>


<div style='text-align:center;'>
   <a class='btn btn-primary btn-block' href='./CoupanCode'>Enroll Now</a>
</div>


  </div>
</div>
</div>

<div class='col-md-6 d-flex justify-content-center'>
<div class='card' style='width: 20rem;margin:10px;'>
  <img class='card-img-top' src='../images/123.jpg' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'>Robotics Foundation</h5>
    <p class='card-text'>Duration: <b> 48 Hrs. </b> </p>
    <hr>
    <h3 class='card-text'> <b><span style='color: blue'>Free</span></b> </h3>


     <form method='get' action='demo'>   
      <input id='disablethis' type='text' name='LectureNo' value='455703494'>  </input>
      <button type='submit' class='btn btn-primary btn-block' value='ROBOTICS' name='CourseName'>Attend Demo</button>
     </form>
  </div>
</div>
</div>
</div>


                    ");
                  break;
              
                }
                  
                
              }
              
             }  
                
          }

          
      ?>
        </div>
      </div>

</div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
function w3_open() {
  document.getElementById("sidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("sidebar").style.display = "none";
}
    </script>
    <script type="text/javascript">
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}      

    </script>
    <!-- Ajax -->
    <script type="text/javascript">
      function SendMessage() {
  var form = document.getElementById("ChatBox");
  var Email = "<?php echo $Email; ?>";
  var x= document.getElementById('user_Input').value;
  if(x==""){
    alert("Please Type Message")
  }else{
  // console.log(x);
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.open("POST", "SendMessage.php?q="+x+"&Email="+Email, true);
  xhttp.send();
   alert("Message send successfully")
   // form.reset();
   location.reload();
    }

      }


    </script>
    <script type="text/javascript">
      document.cookie = "x=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    </script>
    <script type="text/javascript">


    </script>
  </body>
</html>