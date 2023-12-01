<?php
include('dbcon.php');

$id=$_GET['id'];

$del = "delete from curiculum where curiculum_id='$id'";
$duser = $conn ->query($del);
header('location:curiculum.php');
?>


