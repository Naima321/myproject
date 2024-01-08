<?php
include 'dp.php';
// $e = $_SESSION['email'];

$q = "SELECT * FROM `register` where `email` = 'admin@gmail.com'";
$run = mysqli_query($con,$q);
$data = mysqli_fetch_assoc($run);

$_SESSION['name'] = $data['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Edmin </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <!-- <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul> -->
                        <!-- <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form> -->
                        <ul class="nav pull-right">
                            <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a> -->
                                <!-- <ul class="dropdown-menu">
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don't Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul> -->
                            <!-- </li> -->
                            <!-- <li><a href="#">Support </a></li> -->
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php">Your Profile</a></li>
                                    <li><a href="setting.php">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="all_mem.php"><i class="icon-user"></i> All Membership </a>
                                </li>
                                <!-- <li><a href="add_mem.php"><i class="material-icons" style="font-size:15px;">&#xe7fe;</i>&nbsp;&nbsp;Add Members  -->
                                 </a></li>
                                <li><a href="allpro.php"><i class="menu-icon icon-tasks"></i>All Products</a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="addpro.php"><span class="material-symbols-outlined" style="font-size: 15px;">add</span> Add Products </a></li>
                                <li><a href="allev.php"><i class="menu-icon icon-book"></i>All Event </a></li>
                                <li><a href="addeve.php"><i class="menu-icon icon-paste"></i>Add events</a></li>
                                <li><a href="message.php"><i class="menu-icon icon-paste"></i>Messages</a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                            <li><a href="addmem_pac.php"><i class="menu-icon icon-paste"></i>Add Member_Packages</a></li>
                            <li><a href="allmem_pac.php"><i class="menu-icon icon-paste"></i>All Member_Packages</a></li>

                            <!-- <li><a href="register.php"><i class="icon-user"></i> Register </a> -->
                            <li><a href="login.php"><i class="icon-inbox"></i>   Login </a></li>
                            <li><a href="logout.php"><i class="menu-icon icon-signout"></i>  Logout </a></li>
                                </li>
                                <!-- <li><a  href="setting.php"><i class="menu-icon icon-cog"> -->
                                <!-- </i>Setting </a> -->
                                    <ul id="togglePages" class="collapse unstyled">
                                       
                                        <!-- <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li> -->
                                        <!-- <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li> -->
                                    </ul>
                                </li>
                               
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>