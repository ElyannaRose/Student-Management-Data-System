<?php
include('dbcon.php');

$id=$_GET['id'];

$del = "delete from section where section_id='$id'";
$duser = $conn ->query($del);
header('location:section.php');
?>


