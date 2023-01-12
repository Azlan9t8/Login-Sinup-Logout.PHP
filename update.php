<?php

$conn = mysqli_connect("localhost","root","","contact");

$id =$_GET['id'];
$q = "SELECT * FROM `users` WHERE `id` = $id";
$result = mysqli_query($conn,$q);

if (mysqli_num_rows($result)) {
    $data = mysqli_fetch_array($result);
?>

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
    <input type="text" class="form-control"  placeholder="Enter Your Frist Name" name="fname" value="<?php echo $data[1]  ?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter Your last Name" name="lname" value="<?php echo $data[2]  ?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address" value="<?php echo $data[3]  ?>">
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" placeholder="Apartment, studio, or floor" value="<?php echo $data[4]  ?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">City</label>
    <input type="text" class="form-control" name="city" placeholder="Enter Your City Name" value="<?php echo $data[5]  ?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Phone Number</label>
    <input type="number" class="form-control" name="pnumber" placeholder="Enter Your phone Number" value="<?php echo $data[6]  ?>" >
  </div>
  <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" placeholder="Enter Your password" value="<?php echo $data[7]  ?>">
  </div><br>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary" value="Save">Submit</button>
  </div>
</form>
</div>

<?php

if (isset($_POST["submit"])) {
    
$fristname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$phone = $_POST["pnumber"];
$pass = $_POST["pass"];
$query ="UPDATE `users` SET `Name`='$fristname',`Last Name`='$lastname',`Email`='$email',`Address`='$address',`City`='$city',`Phone`='$phone',`Password`='$pass' WHERE `id` =$id";
$res = mysqli_query($conn,$query);

if ($res) {
header('Location:index.php');
}else{
    echo "Error";
}
}
}
?>
</body>
</html>