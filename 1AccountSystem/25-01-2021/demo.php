<?php
session_start();
// TO CHECK USER IS ENTER BY LOGIN ONLY
if ($_SESSION['loggedIn']) {
  // Allow USER
}else{

  header('Location: ../login.php');  
}
// FOLLOWING CODE IS FOR PARSING URL COMPONENTS
$URL = $_SERVER['REQUEST_URI'];            //URl is taken
$url_components = parse_url($URL);
parse_str($url_components['query'], $params); 
$CourseName=$params['CourseName'];
$LectureNo=$params['LectureNo'];
// --------------------------------------------------------------------------------
$_SESSION['CourseName'] = $CourseName;
$_SESSION['LectureNo'] = $LectureNo;




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




    </style>
    <title>MyJigyasa | Demo</title>
  </head>
  <body onload="onloadFunction();this.onclick=null;">


<!-- Button trigger modal -->
<button style="display: none" id="modalbtn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
<button style="display: none;" id="scrollbtn" onclick="myFunction()">Scroll</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Demo Class Announcement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Water Level Indicator project is available for demo</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>















<!-- ================================================================== -->
<!-- Sidebar -->
<!-- ================================================================== -->
<div class="w3-sidebar w3-bar-block w3-card w3-animate-right w3-collapse" id="sidebar">
         <!-- this button is for mobile users -->
<button style="color: white;" class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>

<div class="sticky-top" id="CourseContent">
  <h3 style="">Course Content</h3>
</div>

<div id="Content_Wrapper">
  
       <div id='' data-toggle='collapse' data-target='#01)introduction' class='collapse_card MainHeading' >
        <p>  01) introduction </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='01)introduction'  > <small> Mark as done </small></input>
      </div>

       <div id='01)introduction' class='collapse collapse_card'> 

      

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value='455703494'>1) Changing Technology Video
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value='455703494'>2) Introduction to Robotics and Electronics
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value='455703494'>3) Why you should learn robotics?
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value='455703494'>4) Safety Precautions & Basic Tools
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value='1'>Assignment 1
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#02)basictheory' class='collapse_card MainHeading' >
        <p>  02) basic theory </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='02)basictheory'  > <small> Mark as done </small></input>
      </div>

       <div id='02)basictheory' class='collapse collapse_card'> 


          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Breadboard
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) PCB and its types
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Basic components & symbols
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>4) Register color coding with examples
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='2'>Assignment 2
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#03)breadboard1:basicelectriccircuit' class='collapse_card MainHeading' >
        <p>  03) breadboard 1 : basic electric circuit </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='03)breadboard1:basicelectriccircuit'  > <small> Mark as done </small></input>
      </div>

       <div id='03)breadboard1:basicelectriccircuit' class='collapse collapse_card'> 


          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Basic of Electricity
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Breadboard connections & working
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Experiment on Breadboard
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#04)breadboard2testingofdiode&leds' class='collapse_card MainHeading' >
        <p>  04) breadboard 2  testing of diode & leds </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='04)breadboard2testingofdiode&leds'  > <small> Mark as done </small></input>
      </div>

       <div id='04)breadboard2testingofdiode&leds' class='collapse collapse_card'> 


          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Theory of Diode & LEDs
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Breadboard connections & working
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Experiment on Breadboard
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#05)breadboard3transistorasaswitch' class='collapse_card MainHeading' >
        <p>  05) breadboard 3  transistor as a switch </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='05)breadboard3transistorasaswitch'  > <small> Mark as done </small></input>
      </div>

       <div id='05)breadboard3transistorasaswitch' class='collapse collapse_card'> 


          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Theory of Transistors and switches
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Breadboard connections & working
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Experiment on Breadboard
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#06)project1:dancinglight' class='collapse_card MainHeading' >
        <p>  06) project 1 :  dancing light </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='06)project1:dancinglight'  > <small> Mark as done </small></input>
      </div>

       <div id='06)project1:dancinglight' class='collapse collapse_card'> 


          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Introductory - Dancing Light
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Theory & working of Dancing Light
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='1'>5) Assignment 1
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>6) Exercise
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#07)project2:renewableenergysource' class='collapse_card MainHeading' >
        <p>  07) project 2 :  renewable energy source </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='07)project2:renewableenergysource'  > <small> Mark as done </small></input>
      </div>

       <div id='07)project2:renewableenergysource' class='collapse collapse_card'> 



          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Introductory - Renewable Energy Source
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Theory & working of Renewable Energy Source
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='2'>5) Assignment 2
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>6) Exercise
           </button>
        </form>

          </div>
       <div id='08s' data-toggle='collapse' data-target='#08)project3:waterlevelindicator' class='collapse_card MainHeading' >
        <p>  08) project 3  : water level indicator </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='08)project3:waterlevelindicator'  > <small> Mark as done </small></input>
      </div>

       <div id='08)project3:waterlevelindicator' class='collapse collapse_card'> 


          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled  name='LectureNo' value='225'>1) Introductory - Water Level Indicator
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled  name='LectureNo' value='455703494'>2) Theory & working of Water Level Indicator
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled  name='LectureNo' value='455703494'>3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  disabled  name='LectureNo' value='455703494'>4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  disabled name='LectureNo' value='3'>5) Assignment 3
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'disabled  name='LectureNo' value='455703494'>6) Exercise
           </button>
        </form>

          </div>
       <div id='09s' data-toggle='collapse' data-target='#09)project4:automaticstreetlight' class='collapse_card MainHeading' >
        <p>  09) project 4 : automatic street light </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='09)project4:automaticstreetlight'  > <small> Mark as done </small></input>
      </div>

       <div id='09)project4:automaticstreetlight' class='collapse collapse_card'> 


          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value='504040275'>1) Introductory - Automatic Street Light
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value='504058869'>2) Theory & working of Automatic Street Light
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value='502449035'>3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value=''>4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value=''>5) Assignment 3
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture'  name='LectureNo' value=''>6) Exercise
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#10)project5:touchonoff' class='collapse_card MainHeading' >
        <p>  10) project 5 :  touch on off </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='10)project5:touchonoff'  > <small> Mark as done </small></input>
      </div>

       <div id='10)project5:touchonoff' class='collapse collapse_card'> 



          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Introductory - Touch On Off
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Theory & working of Touch On Off
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='5'>5) Assignment 5
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>6) Exercise
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#11.project6:tonegenerator' class='collapse_card MainHeading' >
        <p>  11. project 6 : tone generator </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='11.project6:tonegenerator'  > <small> Mark as done </small></input>
      </div>

       <div id='11.project6:tonegenerator' class='collapse collapse_card'> 


          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Introductory - Tone Generator
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Theory & working of Tone Generator
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='6'>5) Assignment 6
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>6) Exercise
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#12.project7:snake&ladder' class='collapse_card MainHeading' >
        <p>  12. project 7 : snake & ladder </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='12.project7:snake&ladder'  > <small> Mark as done </small></input>
      </div>

       <div id='12.project7:snake&ladder' class='collapse collapse_card'> 



          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Introductory - Snake & Ladder
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Theory & working of Snake & Ladder
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='7'>5) Assignment 7
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>6) Exercise
           </button>
        </form>

          </div>
       <div id='13s' data-toggle='collapse' data-target='#13)project:energygenerator' class='collapse_card MainHeading' >
        <p>  13) project : energy generator </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='13)project:energygenerator'  > <small> Mark as done </small></input>
      </div>

       <div id='13)project:energygenerator' class='collapse collapse_card'> 

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='455703494' disabled="">1) Introductory : Energy Generator
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='455703494' disabled="">2) Theory & working of Energy Generator
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='455703494' disabled="">3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='455703494' disabled="">4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='8' disabled="">5) Assignment 8
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='455703494' disabled="">6) Exercise
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#14)project9:objectdetector' class='collapse_card MainHeading' >
        <p>  14) project 9 : object detector </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='14)project9:objectdetector'  > <small> Mark as done </small></input>
      </div>

       <div id='14)project9:objectdetector' class='collapse collapse_card'> 


          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Introductory : Object Detector
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Theory & working of Object Detector
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='9'>5) Assignment 9
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>6) Exercise
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#15)project10:irfan' class='collapse_card MainHeading' >
        <p>  15) project 10 : ir fan </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='15)project10:irfan'  > <small> Mark as done </small></input>
      </div>

       <div id='15)project10:irfan' class='collapse collapse_card'> 



          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Introductory - IR Fan
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Theory & working of IR Fan
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='10'>5) Assignment 10
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>6) Exercise
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#16)project11:remotecontrolrobo' class='collapse_card MainHeading' >
        <p>  16) project 11 : remote control robo </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='16)project11:remotecontrolrobo'  > <small> Mark as done </small></input>
      </div>

       <div id='16)project11:remotecontrolrobo' class='collapse collapse_card'> 



          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>1) Introductory - Remote Control Robo
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>2) Theory & working of Remote Control Robo
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>3) Implementation on PCB
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>4) Applications
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='11'>5) Assignment 11
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='455703494'>6) Exercise
           </button>
        </form>

          </div>
       <div id='' data-toggle='collapse' data-target='#assignment12' class='collapse_card MainHeading' >
        <p>  assignment 12 </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='assignment12'  > <small> Mark as done </small></input>
      </div>

       <div id='assignment12' class='collapse collapse_card'> 

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' disabled name='LectureNo' value='12'>id
           </button>
        </form>

          </div>
 

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

        
    <!  Video Section  !>
    <div class="container_fluid" id="video_wrapper">
      <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/<?php echo $LectureNo; ?>" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
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
// var Email = "<br />
// var CourseName = "ROBOTICS";
// function checkBox() {
// var checkboxes = document.getElementsByName('ch[]');
// var vals = "";
// for (var i=0, n=checkboxes.length;i<n;i++) 
// {
//     if (checkboxes[i].checked) 
//     {
//         vals += checkboxes[i].value+",";
//     }
// }

//   var xhttp;
//   xhttp = new XMLHttpRequest();
//   xhttp.open("POST", "checkBox.php?q="+vals+"&Email="+Email+"&CourseName="+CourseName, true);
//   xhttp.send();
// }
    </script>
    <script>



// this function open the last project going on by user and scroll it t view area
function myFunction() {
  var x = "09s"
  // console.log("514545212")
  var elmnt = document.getElementById(x);
  elmnt.scrollIntoView({behavior: 'smooth', block: 'center'});
  document.getElementById(x).click()
}
document.getElementById("scrollbtn").click()

</script>



    <script type="text/javascript">
  



      // function onloadFunction(){
      //   document.getElementById("modalbtn").click()
        
      // }
  
    </script>

  </body>
</html>