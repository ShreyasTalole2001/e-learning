<?php
session_start();
// TO CHECK USER IS ENTER BY LOGIN ONLY
if ($_SESSION['loggedIn']) {
  // Allow USER
}else{

  header('Location: ../login.php');  
}


include '../3databases/generalDB.php';
include '../3databases/Robotics_generalDataDB.php';

// FOLLOWING CODE IS FOR PARSING URL COMPONENTS
$URL = $_SERVER['REQUEST_URI'];            //URl is taken
$url_components = parse_url($URL);
parse_str($url_components['query'], $params); 
$CourseName=$params['CourseName'];
$LectureNo=$params['LectureNo'];
// --------------------------------------------------------------------------------
$_SESSION['CourseName'] = $CourseName;
$_SESSION['LectureNo'] = $LectureNo;
$NameOfCourse = str_replace(' ', '',$CourseName)  ;

// FOR GETTING USER NAME AND OTHER DATA OF USER FROM userinfo table
$Email = $_SESSION['Email'];
$query = "SELECT * FROM userinfo WHERE Email='$Email' ";   
            if($result=mysqli_query($General_Conn,$query)){
            while ($row=mysqli_fetch_array($result)){
                $UserName = $row['FirstName'];
            }
          }
// ----------------------------------------------------------------------------------
// TO CHECK CHECKBOX VALUES AND GET ALL THIS VALUES IN A ARRAY ELEMENT
// THIS ARRAY IS OF COOKIES, WE ARE USING THIS ARRAY BELOW TO CHECK THE PREVIOUSLY DONE PROJECTS
$query = "SELECT $NameOfCourse FROM cookies WHERE Email='$Email'";
$result=mysqli_query($Robotics_GeneralData_Conn,$query);
$row=mysqli_fetch_array($result);

if ($NameOfCourse=='ROBOTICS') {
  $ARRAY =explode(",",$row['ROBOTICS']);
}


// ----------------------------------------------------------------------------------------
// THIS CODE TAKES ASSIGNMENT NO AND REDIRECT TO LMS ASSIGNMENT PAGE WITH ASSIGNMENT NO as a session
for($i=1;$i<=20;$i++)
if ($LectureNo==$i) {
    $_SESSION['AssignmentNo'] = $i;
    header("Location: ../2LMS/lmstestpage");
}
// ------------------------------------------------------------------------------------------
// $AssignmentNOwithName = $_SESSION['AssignmentNOwithName'];
// $count = $_SESSION['count'] 


// this code provides the second last element of array for function myFunction in JavaScript
end($ARRAY);
$second_last = prev($ARRAY);
// echo $second_last;
// ------------------------------------------------------------------------------------------


// CODE TO EXTRACT ASSIGNMENT RESULT TO CHECK USERS PROGRESS

$query = "SELECT * FROM assignmentresult WHERE EMAIL='$Email'";
if($Result = mysqli_query($Robotics_GeneralData_Conn,$query)){
 $row = mysqli_fetch_array($Result);
 // print_r($row);
 // echo "<br>";

for($i=2;$i<6;$i++){

  if ($row[$i]==0) {
   $ProjectNoToUnlock = ($i-1+5);
   // echo "Unlock The Project No ".$ProjectNoToUnlock;
   break;
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      html {
       scroll-behavior: smooth;
        }
      #sidebar{
        width:25%;
        right:0;
        background-color:  #39424E;
        
      }
      #mainview{
        margin-right:25%;
        
      }

       @media all and (max-width: 800px) {
          #mainview{
        margin-right:0px;
        
                }
                 #sidebar{
        /*display: none;*/
        width: 300px;
        background-color: #39424E;
        z-index: 1000000;
       }
     }
       /*---------------------------------------------------------------*/
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
                 /*Account Tab*/
      .disabled{
         pointer-events: none;
         background-color: gray !important;
         font-weight: 700;
         color: white !important;

      }

     /* ------------------------*/
     /*Video Section */
     #video_wrapper{
      padding: 0px 20px;
      /*box-shadow:0 0 10px #9ecaed;*/
     }
      @media all and (max-width: 800px) {
      #video_wrapper{
        padding: 0px;
        /*box-shadow:0 0 10px #9ecaed;*/
          }
      }




    /* ------------------------*/
    /*COURSE Content Section */
      #CourseContent{
        background-color: #9BBFE7;
        text-align: center;
        font-family: calibri;
        padding: 10px;
        font-weight: 700;

      }
      #CourseContent h3{
        color : black;
        font-weight: 700;
      }
      #Content_Wrapper{

      }
      #disablethis{
        display: none;
      }
      .MainHeading{
        background-color: #F1F7FD;
        background-color: white;
        padding: 10px;
        border-bottom: 1px solid black;
      }
      #lecture{
        background-color: white;
      }
      .MainHeading p{
        /*font-family: calibri;*/
        font-family: "Times New Roman", Times, serif;
        /*font-family: Arial, Helvetica, sans-serif;*/
        /*font-weight: 700;*/
        font-size: 150%;
        cursor: context-menu;
      }
     small{
        cursor: context-menu;
      }
      #lecture{
        font-family: calibri;
        font-weight: 700;
        text-align: left;
      }

.disable-div {
  pointer-events: none;
}
/*.disable-lock {
  display: block;
}*/
.disable-lock-unlock {
  display: none;
}



    </style>
    <title>Video page 2</title>
  </head>
  <body>



<!-- ================================================================== -->
<!-- Sidebar -->
<!-- ================================================================== -->
<div class="w3-sidebar w3-bar-block w3-card w3-animate-right w3-collapse" id="sidebar">
         <!-- this button is for mobile users -->
<button style="color: white;" class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
<div class="sticky-top" id="CourseContent">
  <h3 style="">Course Content</h3>
</div>
<button style="display: none;" id="scrollbtn" onclick="myFunction()">Scroll</button>
<div id="Content_Wrapper">
  <?php
  // THIS CODE IS FOR INCLUDING DATABSE OF COURSE
  include '../3databases/Robotics_syllabusDB.php';

   // THIS CODE IS FOR FETCHING MAIN HEADINGS OF INDEX 
  $query = "show tables";
  $result=mysqli_query($Robotics_Syllabus_Conn,$query);
  while($table = mysqli_fetch_array($result)) {
      // echo $table[0];
    $MainHEad = str_replace(' ', '',$table[0]);
    // echo $MainHEad;
       $HeadID  = substr($MainHEad, 0, 2);
      print("
       <div id='{$HeadID}' data-toggle='collapse' data-target='#{$MainHEad}' class='collapse_card MainHeading disable-div' >
        <p>  {$table[0]} </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='{$MainHEad}'"); 

      // THE FOLLOWING CODE IS FOR ADDING TIC TO THE PREVIOUSLY DONE PROJECTS.
      // THE $ARRAY VARIABLE IS TAKEN FROM ABOVE CODE
      $output = substr($MainHEad, 0, 2);
      foreach ($ARRAY as $key => $value) {
        if ($output==$value) {
          echo "checked";
        }
      }
     print("  > <small> Mark as done </small></input>
      <i id='{$HeadID}1' class='fa fa-lock' aria-hidden='true' style='color:red;'>  Complete Previous Project To unlock</i>
      </div>

       <div id='{$MainHEad}' class='collapse collapse_card'> ");


      // THE FOLLOWING CODE IS FOR FETCHING SUBHEADINGS OF INDEX FROM USING MAIN HEADINGS
      $query2 = "SELECT * FROM `$table[0]`";
        if($result2=mysqli_query($Robotics_Syllabus_Conn,$query2)){
            while ($row2=mysqli_fetch_assoc($result2)){
              foreach ($row2 as $key => $value) {
        print("

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='{$CourseName}'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='{$value}'>{$key}
           </button>
        </form>

          ");
              
         }  
        }
      }     
                
      print("</div>");
      
}
  

  ?>

 

</div>

</div>
<!-- ============================================================================================================================================ -->
<!-- Page Content -->
<!-- ============================================================================================================================================ -->
<div id="mainview">
  <! Main Menu Bar !>
     <div  class="container_fluid menu_wrapper sticky-top">
            <div class="container">

              <nav class="navbar navbar-expand-lg navbar-light">
        <img style="width: 200px;" src="../images/MyJiyasaLogo1.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./dashbord">Dashboard <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item" style="margin-right: 5px">
               <div class="btn-group" role="group">
                <button style="background-color: #0054D1;color: white;" id="btnGroupDrop1" type="button" class="btn dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b> <i class="fa fa-lock" aria-hidden="true"></i>
                  Account </b>
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item disabled">  <?php echo $UserName; ?> </a>
                  <a class="dropdown-item" href="./profile.php">Profile</a>
                  <a class="dropdown-item" href="./logout.php">LogOut</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
        
      </nav>

      </div>
    </div>
    <!-- <hr id="hr"> -->

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------- -->

   <?php                
      // Code To Get Lecture No Or Code From URl
      $LectureCode=$params['LectureNo'];
   ?>
     
    <!  Video Section  !>
    <div class="container_fluid" id="video_wrapper">
      <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/<?php echo($LectureCode); ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
    </div>

    <p id="show"></p>



   <div style="text-align: center;margin: 0px auto;">
     <button class="w3-button w3-teal w3-round-xxlarge w3-centre w3-hide-large" onclick="w3_open()">&#9776; Course Content</button>
   </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./jq/jquery.js"></script>
    <script type="text/javascript">
function w3_open() {
  document.getElementById("sidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("sidebar").style.display = "none";
}
    </script>



    <!-- AJAX ACRIPT -->
    <script type="text/javascript">
var Email = "<?php echo $Email; ?>";
var CourseName = "<?php echo $CourseName; ?>";
function checkBox() {
var checkboxes = document.getElementsByName('ch[]');
var vals = "";
for (var i=0, n=checkboxes.length;i<n;i++) 
{    
    if (checkboxes[i].checked) 
    {      
         var checkboxumbers = checkboxes[i].value;
         checkboxumbers = checkboxumbers.substring(0,2);
        // checkboxes[i] = checkboxes[i].value.substring(0, 2);
        // console.log(checkboxes[i].value)
        vals += checkboxumbers+",";
    }
}

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.open("POST", "checkBox.php?q="+vals+"&Email="+Email+"&CourseName="+CourseName, true);
  xhttp.send();
}
    </script>

<script type="text/javascript">
var ProjectsNoToUnlockArray = "<?php echo $ProjectsNoToUnlockArray; ?>"
console.log(ProjectsNoToUnlockArray)
  $(document).ready(function() {
    for(var m=0;m<=9;m++){
  $("#"+ProjectsNoToUnlockArray[m]).removeClass("disable-div");
  }
    });
</script>


    <script>



// this function open the last project going on by user and scroll it t view area
function myFunction() {
  var x = "<?php echo $second_last;  ?>"
  // console.log("514545212")
  var elmnt = document.getElementById(x);
  elmnt.scrollIntoView({behavior: 'smooth', block: 'center'});
  document.getElementById(x).click()
}
document.getElementById("scrollbtn").click()

</script>


<!-- Code to unlock first null projects -->
<script type="text/javascript">
var aarr = ["01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17"]
var x = "<?php  echo $ProjectNoToUnlock;  ?>"
  $(document).ready(function() {
    for(var l=0;l<=x-1;l++){
  $("#"+aarr[l]).removeClass("disable-div");
  $("#"+aarr[l]+"1").addClass("disable-lock-unlock");
  }
    });
</script>



  </body>
</html>