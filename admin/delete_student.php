<?php
include('dbcon.php');
$id=$_GET['id'];
$del = "delete from students where student_id='$id'";
$ds = $conn ->query($del);

header('location:students.php');
?>