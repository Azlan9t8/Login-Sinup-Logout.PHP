<?php
  session_start();
  error_reporting(0);
  if($_SESSION['name'] ==""){

  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container text-center mt-5">
<div class="mt-3"><h1>LOG In</h1></div>

<div class="card">
  <div class="card-body">
    
<form method="POST" action="#">
  <div class="form-group">
    <label>Email address</label>
    <input name="email" type="email" class="form-control" placeholder="Enter email">
  </div><br>
  <div class="form-group">
    <label>Password</label>
    <input name="pass" type="password" class="form-control"  placeholder="Enter your Password">
  </div><br>
  <button name="submit" type="submit" class="btn btn-success">Log in</button><br><br>
</form>
<a href="insert.php"><button name="submit"  class="btn btn-info">Sin Up</button><br></a>
</div>
</div>

<?php

$conn = mysqli_connect("localhost","root","","contact");

if (isset($_POST["submit"])) {
    
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $qu = "SELECT * FROM `users` WHERE `Email`='$email' && `Password`='$password' ";

    $result = mysqli_query($conn,$qu);

 if(mysqli_num_rows($result)){
 
 $data =mysqli_fetch_array($result);

  $_SESSION['name'] =$data[1];
  $_SESSION['usertype'] =$data[9];
  header('Location: index.php');
 }else{
  header('Loaction: login.php');
 }


}

?>
<?php
}else{
  header('Location:index.php');
}
?>


</body>
</html>