<?php
session_start();


include '../3databases/RegistrationDB.php';
include '../3databases/ConsultantsDB.php';
$ConsultantCode = mysqli_real_escape_string($Consultant_conn,$_POST['ConsultantCode']);
$Password = mysqli_real_escape_string($Consultant_conn,$_POST['Password']);
$error="";
echo $ConsultantCode;
echo "<br>";
echo $Password;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$query = "SELECT * FROM login WHERE ConsultantCode = '$ConsultantCode' AND Password = '$Password'";
 if ($result = mysqli_query($Consultant_conn,$query)) {
    $rowcount=mysqli_num_rows($result);
    if ($rowcount==1) {
      $_SESSION['ConsultantCode']=$ConsultantCode;
      // echo "success";
      header('Location: ./ConsultantDashboard.php');
       $_SESSION['loggedIn']= true;
       $error = "SUCCESS";
      
    }
    else{
       $error="invalid username and password";
       $roboterror=1;

       
    }
 }

}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style type="text/css">
      body {
            background-color: bisque;
        }
      #login_Wrapper {
            width: 300px;
            height: 350px;
            background-color: aliceblue;
            margin-top: 80px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
        }
    </style>
    <title>MyJigyasa | Consultant Login</title>
  </head>
  <body>

<div class="container" id="login_Wrapper">
  <div style="text-align: center;width: 250px;margin: 0px auto;padding: 20px;">
    <img src="../images/MyJiyasaLogo1.png" class="img-fluid">
  </div>
  <hr>
  <form method="post">
    <div class="mb-3">
      <input type="text" class="form-control" name="ConsultantCode" id="exampleFormControlInput1" placeholder="VF Code">
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" name="Password" id="exampleFormControlInput1" placeholder="Password">
    </div>
    <div class="mb-3" style="text-align: center;">
      <input type="submit" class="btn btn-primary" value="Log In" >
    </div>
  </form>
  <hr>
  <div style="text-align: right;text-decoration: none;">
    <a style="text-decoration: none;" href="https://forms.gle/jPcJqBWh1DyTFWhm9">Join as a Virtual Franchise</a>
  </div>
</div>



<!-- Button trigger modal -->
<button type="button" style="display: none;" class="btn btn-primary" id="btnmodal" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Invalid Username And Password
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <script type="text/javascript">
      var x = <?php echo $roboterror; ?>;
      console.log(x)
       
       if (x==1) {
        document.getElementById('btnmodal').click()
       }

      if (x==0) {
        document.getElementById('loginsuccess').style.display="block";
      }else{
        document.getElementById('loginfail').style.display="block"
      }


    </script>

   
  </body>
</html>