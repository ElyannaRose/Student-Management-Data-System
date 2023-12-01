<?php
include('dbcon.php');

$id=$_GET['id'];

$del = "delete from users where user_id='$id'";
$duser = $conn ->query($del);


header('location:users.php');
?>