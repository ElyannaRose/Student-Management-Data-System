<?php
include('dbcon.php');
session_start();
    if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $ins = "insert into logs (username, activity) values('$username', 'Logout')";
        $agdm14 = $conn ->query($ins);
    }
session_destroy();
header('location:../index.php');

?>