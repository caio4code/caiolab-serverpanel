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
<div class="container text-center">
    <div class="row">

<div class='col-6 col-md-4' style='padding-bottom: 30px;'>
    <div class='card'>
        <div class='card-body'>
            <i class="fas fa-server menu-websites"></i>
            <h5 class='card-title'>example.com</h5>
            <a href='websites.php' class='btn btn-primary' style='background-color: #4555D1;'>View settings</a>
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