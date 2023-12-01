<?php
include('dbcon.php');
session_start();
if (isset($_SESSION['name'])){
    $username = $_SESSION['name'];
    $ins = "insert into logs (username, activity) values('$username', 'Logout')";
    $agdm14 = $conn ->query($ins);
}
session_destroy();
header('location:../index.php');

?>