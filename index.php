<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
  
<table >

  <tr>
    <th>ID</th>
    <th>Frist Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>City</th>
    <th>Phone</th>
    <th>Remove</th>
</tr>
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
  <td><a href=remove.php?myid="<?php echo $data[0] ?>"><button>Remove</button></a></td>
  

</tr>
<?php
}
}else{
  echo "Error";
}
?>
</table>
<br><br>
<a href="insert.php">Add information</a>

</body>
</html>