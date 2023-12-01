<?php
include('dbcon.php');

$id=$_GET['id'];

$del = "delete from session where session_id='$id'";
$duser = $conn ->query($del);
header('location:session_year.php');
?>


