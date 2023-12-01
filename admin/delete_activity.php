<?php
include('dbcon.php');
$id=$_GET['id'];
$del = "delete from activity where activity_id='$id'";
$dc = $conn ->query($del);

header('location:activity.php');
?>