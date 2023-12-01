<?php
include('dbcon.php');

$id=$_GET['id'];

$del = "delete from term where term_id='$id'";
$duser = $conn ->query($del);
header('location:term.php');
?>


