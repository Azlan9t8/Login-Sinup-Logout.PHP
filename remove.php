<?php

$conn = mysqli_connect("localhost","root","","contact");

$id = $_GET['myid'];

$qu= "SELECT * FROM `users` WHERE `id`=$id";
$result = mysqli_query($conn,$qu);
if (mysqli_num_rows($result)) {
    while ($mydata =mysqli_fetch_array($result)) {
$path =$mydata[8];
unlink($path);        
    }
}
$query = "DELETE FROM `users` WHERE `id`= $id";
$res = mysqli_query($conn,$query);
if ($res) {
    header('Location:index.php');
}
?>

