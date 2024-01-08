<?php
include 'header.php';





$id=$_GET['member_id'];

$q1="DELETE FROM `membership` WHERE `member_id` = '$id'";
$q2="DELETE FROM `register` WHERE `member_id` = '$id'";


mysqli_query($con,$q1);
mysqli_query($con,$q2);


echo "<script>window.open('register.php','_self')</script>";





?>