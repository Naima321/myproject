<?php

include 'header.php';



$id=$_GET['package_id'];
$q1="DELETE FROM `membership` WHERE `package_id` = '$id'";
$q2="DELETE FROM `members_package` WHERE `package_id` = '$id'";


mysqli_query($con,$q2);
mysqli_query($con,$q1);

echo "<script>window.open('allmem_pac.php','_self')</script>";





?>