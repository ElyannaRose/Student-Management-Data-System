<?php
include('dbcon.php');

$id=$_GET['id'];

$del = "delete from year where year_id='$id'";
$duser = $conn ->query($del);
header('location:year.php');
?>


