<?php
include 'header.php';





$id=$_GET['id'];
$q1="DELETE FROM `product` WHERE `id` = '$id'";

mysqli_query($con,$q1);


echo "<script>window.open('allpro.php','_self')</script>";





?>