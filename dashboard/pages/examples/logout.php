<?php
session_start();
session_destroy();
session_unset();


header('location:../golf_club/login.php');


?>