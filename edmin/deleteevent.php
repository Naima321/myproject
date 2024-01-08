<?php

include 'header.php';



$id=$_GET['id'];
$q1="DELETE FROM `events` WHERE `id` = '$id'";




mysqli_query($con,$q1);

echo "<script>window.open('allev.php','_self')</script>";





?>