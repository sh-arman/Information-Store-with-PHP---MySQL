<?php
include 'db.php';

$con = new db();

if(isset($_POST['submit'])){

  $con->insert($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['gender'],$_POST['country'],$_POST['dateofbirth'],$_POST['password']);
  echo "Submitted to database sucessfully!";
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP Assignment.</title>
  </head>
  <body>
    <!-- main body  -->
    <div class="container">
      <!-- form controll  -->
  <form method="post">
    <!-- first name -->
  <div class="form-group">
    <label for="FirstName">First Name</label>
    <input name="first_name" type="text" class="form-control" id="FirstName" placeholder="First Name">
  </div>
  <!-- last name  -->
  <div class="form-group">
    <label for="LastName">Last Name</label>
    <input name="last_name" type="text" class="form-control" id="LastName" placeholder="Last Name">
  </div>
  <!-- email -->
  <div class="form-group">
   <label for="exampleInputEmail1">Email address</label>
   <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
 </div>
 <!-- gender section -->
 <label >Select Gender</label>
 <div class="form-check">
   <input  class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
   <label class="form-check-label" for="male">
     Male
   </label>
 </div>
 <div class="form-check">
   <input  class="form-check-input" type="radio" name="gender" id="female" value="Female">
   <label class="form-check-label" for="female">
     Female
   </label>
 </div>
 <!-- country  -->
 <div class="form-group">
      <label for="Country">Country</label>
      <input name="country" type="text" class="form-control" id="Country">
  </div>

  <!--date of birth  -->
  <div class="form-group row">
  <label for="example-date-input" class="col-4 col-form-label">Date of Birth :</label>
  <div class="col-custom">
    <input name="dateofbirth" class="form-control" type="date" value="2019-10-19" id="example-date-input">
  </div>
</div>

 <!-- password section -->
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
