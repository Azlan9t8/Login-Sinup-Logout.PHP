<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
 
<!-- Contact -->
<div class="container mt-5">
  <h1 class="mt-3 mb-2 text-center">CONTACT FORM</h1>
<form class="row g-3" method="POST" action="#">
  <div class="col-md-6">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control"  placeholder="Enter Your Frist Name" name="fname">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter Your last Name" name="lname">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label  class="form-label">City</label>
    <input type="text" class="form-control" name="city" placeholder="Enter Your City Name">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Phone Number</label>
    <input type="number" class="form-control" name="pnumber" placeholder="Enter Your phone Number">
  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
<!-- Contact -->


<?php


if (isset($_POST["submit"])) {

$fristname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$phone = $_POST["pnumber"];

$conn = mysqli_connect("localhost","root","","contact");
$query = "INSERT INTO `users`(`id`, `Name`, `Last Name`, `Email`, `Address`, `City`, `Phone`) VALUES (Null,'$fristname','$lastname','$email','$address','$city','$phone')";

mysqli_query($conn,$query);

}




?>
</body>
</html>