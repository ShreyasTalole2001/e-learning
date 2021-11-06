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

. {
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

<button style="display: none;" id="scrollbtn" onclick="myFunction()">Scroll</button>

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
  
       <div id='01' data-toggle='collapse' data-target='#01)introduction' class='collapse_card MainHeading ' >
        <p>  01) introduction </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='01)introduction'  > <small> Mark as done </small></input>
      </div>

       <div id='01)introduction' class='collapse collapse_card'> 

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
     

          

    
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Changing Technology Video
           </button>
 

          

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Introduction to Robotics and Electronics
           </button>
      

          

  
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Why you should learn robotics?
           </button>
    

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Course instructions
           </button>
  

          </div>
       <div id='02' data-toggle='collapse' data-target='#02)basictheory' class='collapse_card MainHeading ' >
        <p>  02) basic theory </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='02)basictheory'  > <small> Mark as done </small></input>
      </div>

       <div id='02)basictheory' class='collapse collapse_card'> 

    
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Breadboard
           </button>
   

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) PCB and its types
           </button>
     

          

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Basic theory & basic tools
           </button>
       

          

          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Resistor color coding with examples
           </button>
     

          

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
   

          </div>
       <div id='03' data-toggle='collapse' data-target='#03)breadboard1-basicelectriccircuit' class='collapse_card MainHeading ' >
        <p>  03) breadboard 1 - basic electric circuit </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='03)breadboard1-basicelectriccircuit'  > <small> Mark as done </small></input>
      </div>

       <div id='03)breadboard1-basicelectriccircuit' class='collapse collapse_card'> 

          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
  

          

 
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Theory & working of Basic Electric Circuit
           </button>
     

          

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Connections on Breadboard
           </button>
     

          </div>
       <div id='04' data-toggle='collapse' data-target='#04)breadboard2-testingofdiode&leds' class='collapse_card MainHeading ' >
        <p>  04) breadboard 2 - testing of diode & leds </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='04)breadboard2-testingofdiode&leds'  > <small> Mark as done </small></input>
      </div>

       <div id='04)breadboard2-testingofdiode&leds' class='collapse collapse_card'> 

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
   
          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Theory & working of Testing Diode & LED
           </button>
       
          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Connections on Breadboard
           </button>
     

          </div>
       <div id='05' data-toggle='collapse' data-target='#05)breadboard3-transistorasaswitch' class='collapse_card MainHeading ' >
        <p>  05) breadboard 3 - transistor as a switch </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='05)breadboard3-transistorasaswitch'  > <small> Mark as done </small></input>
      </div>

       <div id='05)breadboard3-transistorasaswitch' class='collapse collapse_card'> 

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
     

          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Theory & working of Transistors as a switch
           </button>
        

          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Connections on Breadboard
           </button>
       

          </div>
       <div id='06' data-toggle='collapse' data-target='#06)project1-dancinglight' class='collapse_card MainHeading ' >
        <p>  06) project 1 - dancing light </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='06)project1-dancinglight'  > <small> Mark as done </small></input>
      </div>

       <div id='06)project1-dancinglight' class='collapse collapse_card'> 

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Introductory - Dancing Light
           </button>
       

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Theory & working of Dancing Light
           </button>
        

          

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Implementation on PCB
           </button>
       

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications
           </button>
       

          

   
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 1
           </button>
       

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise
           </button>
       

          </div>
       <div id='07' data-toggle='collapse' data-target='#07)project2-renewableenergysource' class='collapse_card MainHeading ' >
        <p>  07) project 2 - renewable energy source </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='07)project2-renewableenergysource'  > <small> Mark as done </small></input>
      </div>

       <div id='07)project2-renewableenergysource' class='collapse collapse_card'> 

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
        

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Introductory - Renewable Energy Source
           </button>
  

          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Theory & working of Renewable Energy Source
           </button>
     

          

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Implementation oan PCB
           </button>
       
          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications
           </button>


          

          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 2
           </button>
     

          

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise
           </button>
   

          </div>
       <div id='08' data-toggle='collapse' data-target='#08)project3-tanklevelindicator' class='collapse_card MainHeading ' >
        <p>  08) project 3 - tank level indicator </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='08)project3-tanklevelindicator'  > <small> Mark as done </small></input>
      </div>

       <div id='08)project3-tanklevelindicator' class='collapse collapse_card'> 

 
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           


          

   
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Introductory - Tank Level Indicator
           </button>


          

          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Theory & working of Tank Level Indicator
           </button>
    

 
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Implementation on PCB
           </button>
     

          

    
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications
           </button>
  

          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 3
           </button>
    

          

  
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise
           </button>
  

          </div>
       <div id='09s' data-toggle='collapse' data-target='#09)project4-automaticstreetlights' class='collapse_card MainHeading ' >
        <p>  09) project 4 - automatic street lights </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='09)project4-automaticstreetlights'  > <small> Mark as done </small></input>
      </div>

       <div id='09)project4-automaticstreetlights' class='collapse collapse_card'> 

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='504040275'>1) Introductory - Automatic Street Lights
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='504058869'>2) Theory & working of Automatic Street Lights
           </button>
        </form>

          

        <form id='myform' method='get'>
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='502449035'>3) Implementation on PCB
           </button>
        </form>

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications <br>
           <i class='fa fa-lock' aria-hidden='true' style='color:red;'> Only for Premium Members</i></button>
           
     

          


          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 3 <br>
           <i class='fa fa-lock' aria-hidden='true' style='color:red;'> Only for Premium Members</i></button>
  

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise <br>
           <i class='fa fa-lock' aria-hidden='true' style='color:red;'> Only for Premium Members</i></button>
       

          </div>
       <div id='10' data-toggle='collapse' data-target='#10)project5-touchonoff' class='collapse_card MainHeading ' >
        <p>  10) project 5 - touch on off </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='10)project5-touchonoff'  > <small> Mark as done </small></input>
      </div>

       <div id='10)project5-touchonoff' class='collapse collapse_card'> 

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
   

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Introductory - Touch On Off
           </button>
      

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Theory & working of Touch On Off
           </button>
       

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Implementation on PCB
           </button>
        

          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications
           </button>
       

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 5
           </button>
       

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise
           </button>
       

          </div>
       <div id='11' data-toggle='collapse' data-target='#11)project6-multi-soundgenerator' class='collapse_card MainHeading ' >
        <p>  11) project 6 - multi-sound generator </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='11)project6-multi-soundgenerator'  > <small> Mark as done </small></input>
      </div>

       <div id='11)project6-multi-soundgenerator' class='collapse collapse_card'> 

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
        

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Introductory -Multi-sound Generator
           </button>
      

          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Theory & working of Multi-sound Generator
           </button>
      

          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Implementation on PCB
           </button>
        

          


          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications
           </button>
        

          

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 6
           </button>
        

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise
           </button>
      

          </div>
       <div id='12' data-toggle='collapse' data-target='#12)project7-snake&ladder' class='collapse_card MainHeading ' >
        <p>  12) project 7 - snake & ladder </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='12)project7-snake&ladder'  > <small> Mark as done </small></input>
      </div>

       <div id='12)project7-snake&ladder' class='collapse collapse_card'> 

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
    

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Introductory - Snake & Ladder
           </button>
       

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Theory & working of Snakes & Ladders
           </button>


          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Implementation on PCB
           </button>
 
          


          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications
           </button>
    

          

    
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 7
           </button>
     

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise
           </button>
       

          </div>
       <div id='13' data-toggle='collapse' data-target='#13)project8-energygenerator' class='collapse_card MainHeading ' >
        <p>  13) project 8 - energy generator </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='13)project8-energygenerator'  > <small> Mark as done </small></input>

      </div>

       <div id='13)project8-energygenerator' class='collapse collapse_card'> 

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
   

          

   
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Introductory - Energy Generator
           </button>

          

    
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Theory & working of Energy Generator
           </button>

          


          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Implementation on PCB
           </button>


          

          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications
           </button>


          

    
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 8
           </button>


          


          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise
           </button>
     

          </div>
       <div id='14' data-toggle='collapse' data-target='#14)project9-objectsensor' class='collapse_card MainHeading ' >
        <p>  14) project 9 - object sensor </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='14)project9-objectsensor'  > <small> Mark as done </small></input>
      </div>

       <div id='14)project9-objectsensor' class='collapse collapse_card'> 


          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           


          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Introductory - Object Sensor
           </button>


          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Theory & working of Object Sensor
           </button>
     

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Implementation on PCB
           </button>
 

          

    
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications
           </button>
   

          

   
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 9
           </button>


          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise
           </button>
       

          </div>
       <div id='15' data-toggle='collapse' data-target='#15)project10-remotecontrolfan' class='collapse_card MainHeading ' >
        <p>  15) project 10 - remote control fan </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='15)project10-remotecontrolfan'  > <small> Mark as done </small></input>
      </div>

       <div id='15)project10-remotecontrolfan' class='collapse collapse_card'> 

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
   

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Introductory - Remote Control Fan
           </button>
       

          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Theory & working of Remote Control Fan
           </button>
    

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Implementation on PCB
           </button>
       

          

    
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications
           </button>
  

          

        
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 10
           </button>
     
          

      
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise
           </button>
      

          </div>
       <div id='16' data-toggle='collapse' data-target='#16)project11-remotebaserobo' class='collapse_card MainHeading ' >
        <p>  16) project 11 - remote base robo </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='16)project11-remotebaserobo'  > <small> Mark as done </small></input>
      </div>

       <div id='16)project11-remotebaserobo' class='collapse collapse_card'> 

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           


          

  
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>1) Introductory - Remote Base Robo
           </button>


          

  
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>2) Theory & working of Remote Base Robo
           </button>


          

    
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>3) Implementation on PCB
           </button>
 

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>4) Applications
           </button>
   
          

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>5) Assignment 11
           </button>
     

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>6) Exercise
           </button>
   

          </div>
       <div id='17' data-toggle='collapse' data-target='#17)assignment12' class='collapse_card MainHeading ' >
        <p>  17) assignment 12 </p>
        <input type='checkbox' onclick='checkBox(this.value)' name='ch[]' value='17)assignment12'  > <small> Mark as done </small></input>
      </div>

       <div id='17)assignment12' class='collapse collapse_card'> 

       
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           
  

          

     
          <input  id='disablethis' type='text' name='CourseName' value='ROBOTICS'>  </input>
           <button  type='submit' class='w3-button w3-khaki w3-block w3-border' id='lecture' name='LectureNo' value='#'>Assignment 12
           </button>
      

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
                  <a class="dropdown-item disabled">  Shreyash  </a>
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
    <script src="./jq/jquery.js"></script>
    <script type="text/javascript">
function w3_open() {
  document.getElementById("sidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("sidebar").style.display = "none";
}
    </script>

<script type="text/javascript">
  // this function open the last project going on by user and scroll it t view area
function myFunction() {
  var x = "09s"
  // console.log("514545212")
  var elmnt = document.getElementById(x);
  elmnt.scrollIntoView({behavior: 'smooth'});
  document.getElementById(x).click()
}
document.getElementById("scrollbtn").click()

</script>
</script>





  </body>
</html>