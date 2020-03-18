<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo gethostname();?> | Server Panel</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/sidebar-1.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<?php
include "includes/sidebar.php";
?>
<!-- Content of website -->
<br/>
<div class="div-websites">
    <i id="websites-icon" class="fas fa-database"></i>
    <h1 id="websites-title">Manage Databases</h1>
    <br/>

    <div class="btn-group btn-group-toggle">
        <a href="#" target="_blank" class="btn btn-outline-light" style='color: #fff;'>
            <i class="fas fa-database"></i>
            <p style='color: #fff;'>Create Database</p>
        </a>
        <a href="#" target="_blank" class="btn btn-outline-light" style='color: #fff;'>
            <i class="fab fa-buffer"></i>
            <p style='color: #fff;'>Phpmyadmin</p>
        </a>

    </div>
    <br/>
    <br/>
    <br/>

    <div class="container text-center">
        <div class="row">

            <div class='col-6 col-md-4' style='padding-bottom: 30px;'>
                <div class='card'>
                    <div class='card-body'>
                        <i class="fas fa-database menu-websites"></i>
                        <h5 class='card-title'>caiolab-database</h5>
                        <a href='#' class='btn btn-primary' style='background-color: #4555D1;'>Modify database</a>
                        <a href='#' class='btn btn-primary' style='background-color: #4555D1;'>Delete database</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
<?php
include "includes/header.php";
?>
</body>

</html>