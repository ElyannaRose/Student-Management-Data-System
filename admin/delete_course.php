<?php
include('dbcon.php');

$id=$_GET['id'];

$del = "delete from course where course_id='$id'";
$duser = $conn ->query($del);
header('location:course.php');
?>


