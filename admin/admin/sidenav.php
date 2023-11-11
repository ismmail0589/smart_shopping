<?php

  if (!isset($_SESSION['admin_name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: .././login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['admin_name']);
    header("location: .././login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Smart Shopping Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>
<style>
    .b1{
        background-color:white;
    }
</style>
<body class="b1">
    <div class="dark-edition">
    <div>
        <div class="sidebar" data-color="azure" data-background-color="white" >
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    -->
           
            <div class="sidebar-wrapper">
                <ul class="nav">
                
                <li class="nav-item active  ">
                        <a class="nav-link" href="index.php">
                        <h3 style="font-style:italic; font-family: Fantasy;">Admin-Panel</h3>

                            <h3 style="font-style:italic; font-family: Fantasy;">SMART SHOPPING</h3>

                            <p style="font-style:italic;">All you want is here!</P>

                        </a>
                    </li>
                    <li class="nav-item active  ">
                        <a class="nav-link" href="index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="addusers.php">
                            <i class="material-icons">person</i>
                            <p style=" color:white;font-size:14px;">Add users</p>
                        </a>
                        
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="add_products.php">
                        <i class="material-icons">add</i>
                        <p style=" color:white;font-size:14px;">Add Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products_list.php">
                        <i class="material-icons">list</i>
                        <p style=" color:white;font-size:14px;">Product List</p>
                        </a>
                        
                    </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="manageuser.php">
                            <i class="material-icons">person</i>
                            <p style=" color:white;font-size:14px;">Manage users</p>
                        </a>
                    </li>
                    
                   
                    <li class="nav-item ">
                        <a class="nav-link" href="profile.php">
                            <icons-image _ngcontent-aye-c22="" _nghost-aye-c19=""><i _ngcontent-aye-c19="" class="material-icons icon-image-preview">settings</i></icons-image>
                            <p style=" color:white;font-size:14px;">setting</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="salesofday.php">
                            <i class="material-icons">library_books</i>
                            <p style=" color:white;font-size:14px;">sales</p>
                        </a>
                    </li>

                    
                    
                </ul>
            </div>
</div>
        </div>