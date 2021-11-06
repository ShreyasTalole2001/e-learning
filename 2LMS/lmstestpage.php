<?php
session_start();
include '../3databases/generalDB.php';
include '../3databases/Robotics_generalDataDB.php';
include '../3databases/Robotics_assignmentDB.php';


// echo   $_SESSION['AssignmentNo'];
// echo "<br>";
// echo   $_SESSION['CourseName'];
// echo "<br>";
// echo   $_SESSION['Email'];

// -----------------------------------------------------
$CourseName = $_SESSION['CourseName'];
$AssignmentNo = $_SESSION['AssignmentNo'];
$Email = $_SESSION['Email']; 
$LectureNo = $_SESSION['LectureNo'];
// -----------------------------------------------------
// FOR REMOVE ALL WHITE SPACES
$CourseName=str_replace(' ', '',$CourseName);
// -----------------------------------------------------------------------------------------------------------
// FOLLOWING CODE IS FOR ADD ASS AT THE END OF COURSE NAME
$CourseAssignmentConnection = $CourseName."ASS";
// -----------------------------------------------------------------------------------------------------------
// THE FOLLOWING CODE IS FOR SELECTING DATABASE OF ASSIGNMENT

// ---------------------------------------------------------------------------------------------------------
// FOLLOWING CODE IS FOR PARSING URL COMPONENTS TO CHECK THE ANSWERS
$URL = $_SERVER['REQUEST_URI'];            
$url_components = parse_url($URL);
parse_str($url_components['query'], $params); 
// THE FOLLOWING CODE IS FOR CHECKING ANSWERS
$AssignmentNOwithName = "assignment".$AssignmentNo;
$count = 0;
$query = "SELECT * FROM $AssignmentNOwithName";   
           if($result=mysqli_query($Robotics_Assignment_Conn,$query)){
            $rowcount = mysqli_num_rows($result);
             while ($row=mysqli_fetch_array($result)){
              $AnswerForCheck = $row['Answer'];
                for ($i=1; $i<=$rowcount ; $i++) { 
                  $question_UserAnswer=$params[$i];
                  if ($AnswerForCheck == $question_UserAnswer) {
                    $count = $count + 1;
                    break;
                  }
                }
            }
          }
// ----------------------------------------------------------------------------------------------------------
// THE FOLLOWING CODE IS FOR FETCHING USER NAME
$query2="SELECT * FROM userinfo WHERE Email='$Email'";
$result2=mysqli_query($General_Conn,$query2);
$row2=mysqli_fetch_array($result2);
$UserName = $row2['FirstName'];



// echo $count;


// this code is to save assignment marks and to redirect video page
if ($count >= 0 ) {
  $query = "UPDATE assignmentresult
          SET $AssignmentNOwithName = '$count' WHERE Email='$Email'";
  if (mysqli_query($Robotics_GeneralData_Conn,$query)) {
       // echo "Success";
        $_SESSION['AssignmentNOwithName'] = $AssignmentNOwithName;
        $_SESSION['count'] = $count;


        // THIS SENDS STUDENT RESULT EMAL TO THE PARENT
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <noreply@myjigyasa.com>' . "\r\n";       
        $message = 
        include 'studentResultmailbody.php';





       mail($Email, 'Assignment Result',$message,$headers);



        header("Location: ../1AccountSystem/achivments.php");

    } 
 
}else{
  echo "Please submit the test";
}








?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap CSS -->
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
        width: 80%;
        margin: 0px auto;
      }

       @media all and (max-width: 800px) {
          #mainview{
        margin-right:0px;
        width: 100%;
        
        }
       #sidebar{
        /*display: none;*/
        width: 300px;
        background-color: #39424E;
        z-index: 1000000;
       }
     }
/*---------------------------------------------------------------*/
        /*Account Tab*/
      .disabled{
         pointer-events: none;
         background-color: gray !important;
         font-weight: 700;
         color: white !important;
      }

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

/*----------------------------------------------------------------------------*/
/*ASSIGNMENT SECTION*/
/* ------------------------*/
    #assignment_wrapper{
      /*border: 1px solid black;*/
      margin:50px;
      background-color: white;
      font-family: Arial, Helvetica, sans-serif;
      /*height: 1000px;*/
      box-shadow:0 0 10px #9ecaed;
      padding: 20px;
      margin-top: 0px;
    }
    #assignment_wrapper h4{
      text-align: center;
      padding: 10px;
      color:#118EFD ;
      font-family: Arial, Helvetica, sans-serif;
    }
    @media all and (max-width: 800px) {
      #assignment_wrapper{
      /*border: 1px solid black;*/
      width: 100%;
      background-color: white;
      font-family: Arial, Helvetica, sans-serif;
      margin: 0px;
    }
    }

    #question{
      background-color: #9ecaed;
      padding: 10px;

    }
    #answers{
      background-color: #9ecaed;
      padding: 10px;

    }

    /*------------------*/
    /*SIDEBAR*/
    #QuestionNoIndicatior{
      width: 50px;
      height: 50px;
      background-color: #E9ECEF;
      /*text-align: center;*/
      font-weight: 700;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 5px;

    }
    </style>
    <title>LMS TEST PAGE</title>
  </head>
  <body>


<!-- ================================================================== -->
<!-- Page Content -->
<!-- ================================================================== -->
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
            <li class="nav-item">
              <a class="nav-link" href="../1AccountSystem/dashbord">Dashbord</a>
            </li>
            <li class="nav-item" style="margin-right: 5px">
               <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b> <i class="fa fa-lock" aria-hidden="true"></i>
                  Account </b>
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item disabled">  <?php echo $UserName; ?> </a>
                  <!-- <a class="dropdown-item" href="..//profile.php">Profile</a> -->
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
  <!-- ------------------------------------------------------------------ -->


<div class="container_fluid" id="assignment_wrapper">

<div style="text-align: center;font-family: calibri;" class="container_fluid">
<h3>Assignment <?php echo "$AssignmentNo"; ?> </h3>
</div>
<?php

$query = "SELECT * FROM $AssignmentNOwithName";   
            if($result=mysqli_query($Robotics_Assignment_Conn,$query)){
            while ($row=mysqli_fetch_array($result)){
                $QuestionNO = $row['QuestionNO'];
                $Question = $row['Question'];
                $QuestionImage = $row['QuestionImage'];
                $Option1 = $row['Option1'];
                $Option2 = $row['Option2'];
                $Option3 = $row['Option3'];
                $Option4 = $row['Option4'];
                $Answer = $row['Answer'];

                print("

 <form method='get' id='assignmentform'>              
<div id='question'>
  <label id='$QuestionNO' style='font-size: 120%;'><b>{$Question}</b></label>
</div> ");

if($QuestionImage != ""){
print("
<div id='question'>
  <img class='img-fluid' src='QuestionImagesFolder/{$QuestionImage}'>
</div> ");
}

print("
<div id='answers'>
<div class='input-group'>
  <div class='input-group-prepend'>
    <div class='input-group-text'>
    <input type='radio' aria-label='Radio button for following text input' name='{$QuestionNO}' value='$Option1' required>
    </div>
  </div>
  <input disabled type='text' class='form-control' aria-label='Text input with radio button' value='{$Option1}'> 
</div>
<br>
<div class='input-group'>
  <div class='input-group-prepend'>
    <div class='input-group-text'>
    <input type='radio' aria-label='Radio button for following text input' name='{$QuestionNO}' value='$Option2' >
    </div>
  </div>
  <input disabled type='text' class='form-control' aria-label='Text input with radio button' value='{$Option2}'>
</div>
<br>
<div class='input-group'>
  <div class='input-group-prepend'>
    <div class='input-group-text'>
    <input type='radio' aria-label='Radio button for following text input' name='{$QuestionNO}' value='$Option3' >
    </div>
  </div>
  <input disabled type='text' class='form-control' aria-label='Text input with radio button' value='{$Option3}'>
</div>
<br>
<div class='input-group'>
  <div class='input-group-prepend'>
    <div class='input-group-text'>
    <input type='radio' aria-label='Radio button for following text input' name='{$QuestionNO}' value='$Option4' >
    </div>
  </div>
  <input disabled type='text' class='form-control' aria-label='Text input with radio button' value='{$Option4} '>
</div>
</div>

<hr>



                  ");

            }
          }


          print("
            <input type='button' data-toggle='modal' data-target='#exampleModal' value='Finish attempt' >
               </form> 
            ");
?>




</div>

<!-- -------------------------------------------------------------------------------------------- -->
<!-- The code is for launch model on submit to view score of assignment -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Please make sure thet you solved all questions before submitting the test.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button form="assignmentform" type="submit" class="btn btn-primary">Submit</button>
      </div>
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
function w3_open() {
  document.getElementById("sidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("sidebar").style.display = "none";
}
    </script>
    <script type="text/javascript">
    
    </script>
  </body>
</html>