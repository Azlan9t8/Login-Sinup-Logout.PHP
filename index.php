<?php
session_start();
if ($_SESSION['name'] != "") {
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <h1><?php echo  "Wellcome"."  ".$_SESSION['name']; ?></h1>
  <a href="logout.php"><button class="btn btn-secondary mb-4" style="  float: right;">Log Out</button></a>
  <div class="container mt-5">
<table class="table table-bordered table-dark table-striped">

  <tr>
    <th>ID</th>
    <th>Frist Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>City</th>
    <th>Phone</th>
    <th>Password</th>
    <th>Picture</th>
    <?php
    if ($_SESSION['usertype']==0) {   
    ?>
    <th>Update</th>
    <th>Remove</th>
</tr>
<?php
}
?>
<?php

$conn = mysqli_connect("localhost","root","","contact");
$query = "SELECT * FROM `users`";
$res = mysqli_query($conn,$query);

if (mysqli_num_rows($res)) {
  
while($data =mysqli_fetch_array($res)){


?>
<tr>
  <td><?php echo $data[0] ?></td>
  <td><?php echo $data[1] ?></td>
  <td><?php echo $data[2] ?></td>
  <td><?php echo $data[3] ?></td>
  <td><?php echo $data[4] ?></td>
  <td><?php echo $data[5] ?></td>
  <td><?php echo $data[6] ?></td>
  <td><?php echo $data[7] ?></td>
  <td><img src="<?php echo $data[8] ?>" width="100px"></td>
  <?php
  if($_SESSION['usertype'] ==0){

  
  ?>
  <td><a href=update.php?id="<?php echo $data[0] ?>"><button class="btn btn-info">Update</button></a></td>
  <td><a href=remove.php?myid="<?php echo $data[0] ?>"><button class="btn btn-danger">Remove</button></a></td>
  
<?php
}
?>
</tr>

<?php
}
}else{
  echo "Error";
}
?>
</table>
</div>
<br><br>
<a href="insert.php">Add information</a>
<?php
}else{
  header('Location: login.php');
}
?>
</body>
</html>