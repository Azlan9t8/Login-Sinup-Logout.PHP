<?php

$conn = mysqli_connect("localhost","root","","contact");

$id = $_GET['myid'];
$query = "DELETE FROM `users` WHERE `id`= $id";
$res = mysqli_query($conn,$query);
if ($res) {
    header('Location:index.php');
}
?>

