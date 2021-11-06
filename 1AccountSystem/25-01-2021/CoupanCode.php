<?php
session_start();
include '../3databases/generalDB.php';
include '../3databases/Robotics_coupancodesDB.php';

$Email = $_SESSION['Email'];
$CoupanCode = mysqli_real_escape_string($Robotics_Coupan_Code_Conn,$_POST['CoupanCode']);
$ERROR="";


$query = "SELECT * FROM all_coupan_codes";
if ($result = mysqli_query($Robotics_Coupan_Code_Conn,$query)) {
  $row=mysqli_fetch_array($result);
  // print_r($row);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
  if (in_array($CoupanCode, $row))
    {
      $query = "UPDATE userinfo
                SET CoupanCode = '$CoupanCode'
                WHERE Email='$Email'";
      mysqli_query($General_Conn,$query);


      header("Location: https://pages.razorpay.com/MyJigyasa");
    }
  else
    {
      $ERROR = 1;
      echo $ERROR;
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
       background-color: #D4EBF2;
      }
      #wrapper{
        max-width: 400px;
        /*height: 300px;*/
        /*border: 1px solid black;*/
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        font-family: Poppins, sans-serif;
        padding: 20px;
        margin-top: 100px;
        background-color: white;



        

      }
      
    </style>
    <title>MyJigyasa | Payment Step-1</title>
  </head>
  <body>
    <div class="container" id="wrapper">

 <form method="post">
  <div class="form-group">
    <small>Please enter MyJigyasa consultant code. <br> If you don't have it please skip. <br>  </small>
    <br>
    <input type="text" class="form-control" id="CoupanCode" aria-describedby="emailHelp" name="CoupanCode" placeholder="Enter Consultant Code" required>
  </div>
  <button type="submit" class="btn btn-success">Continue</button> <br>
  <div style="text-align: right;">
    <a style="text-align: center;text-decoration: none;" href="#">Skip</a>
  </div>
</form>     
      
    </div>




<!-- Button trigger modal -->
<button style="display: none;"  type="button" class="btn btn-primary" id="btnmodal" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Invalid Consultant Code.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
   var x = "<?php echo $ERROR; ?>"
   console.log(x)

  if (x==1) {
    document.getElementById('btnmodal').click()
  }


  
</script>
  </body>
</html>