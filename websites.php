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
<script type="text/javascript" src="assets/js/charts.js"></script>
<script type="text/javascript" src="assets/js/display.js"></script>
<?php
    include "includes/sidebar.php";
?>

<div class="div-websites">
    <i id="websites-icon" class="fas fa-server"></i>
    <h1 id="websites-title">example.com</h1>
    <br/>

    <table class="table">
        <thead style='color: #4555D1;'>
        <tr>
            <th scope="col">Application</th>
            <th scope="col">Storage</th>
            <th scope="col">Bandwidth</th>
            <th scope="col">Memory</th>
        </tr>
        <tbody>
        <tr>
            <td>HTTP</td>
            <td>5gb SSD</td>
            <td>100gb</td>
            <td>512gb</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
        </thead>
    </table>

    <nav class="website-menu">
    <li>
        <button class="btn btn-link" >
            <i class="glyphicon glyphicon-paperclip fas fa-folder"></i>
            Files
        </button>
    </li>
    <li>
        <button class="btn btn-link" onclick="websiteAccess()">
            <i class="glyphicon glyphicon-paperclip fas fa-folder-open"></i>
            Access
        </button>
    </li>
    <li>
        <button class="btn btn-link">
            <i class="glyphicon glyphicon-paperclip fas fa-expand-alt"></i>
            Rezise
        </button>
    </li>
    <li>
        <button class="btn btn-link">
            <i class="glyphicon glyphicon-paperclip fas fa-trash"></i>
            Destroy
        </button>
    </li>
    </nav>

    <div class="website-content">
        <div class="container text-center" id="website-access">
            <div class="row">

                <br/>

                <h4>Application / FTP Access</h4>
                <table class="table table-bordered">
                    <thead class="text-white" style='background-color: #4555D1;'>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Password</th>

                    </tr>
                    <tbody>
                    <tr>
                        <td>Example342</td>
                        <td>664654654</td>

                    </tr>
                    </tbody>
                    </thead>
                </table>

                <br/>

                <h4>Database Access</h4>
                <table class="table table-bordered">
                    <thead class="text-white" style='background-color: #4555D1;'>
                    <tr>
                        <th scope="col">Mysql User</th>
                        <th scope="col">Mysql Password</th>

                    </tr>
                    <tbody>
                    <tr>
                        <td>Example435</td>
                        <td>45535435</td>

                    </tr>
                    </tbody>
                    </thead>
                </table>

            </div>
        </div>
    </div>

<!--
    <div class="btn-group btn-group-toggle">
        <a href="http://cesarleitao.com.br" target="_blank" class="btn btn-outline-light" style='color: #fff;'>
            <i class="fas fa-eye"></i>
            <p style='color: #fff;'>Visit your website</p>
        </a>
        <a href="http://cesarleitao.com.br" class="btn btn-outline-light" style='color: #fff;'>
            <i class="fas fa-users-cog"></i>
            <p style='color: #fff;'>Website Admin</p>
        </a>
        <a href="http://cesarleitao.com.br" class="btn btn-outline-light" style='color: #fff;'>
            <i class="fas fa-database"></i>
            <p style='color: #fff;'>Phpmyadmin</p>
        </a>
        <button class="btn btn-outline-light" data-toggle="modal-change-plan" data-target="#changePlan" style='color: #fff;'>
            <i class="fas fa-memory"></i>
            <p style='color: #fff;'>Change limit</p>
        </button>
        <button class="btn btn-outline-light" data-toggle="modal-change-plan" data-target="#changePlan" style='color: #fff;'>
            <i class="fas fa-power-off"></i>
            <p style='color: #fff;'>Delete website</p>
        </button>
    </div>
    <br/>
    <br/>

-->
</div>

<?php
    include "includes/header.php";
?>


<!-- pop up change plan
<div class="modal-change-plan fade" id="changePlan" tabindex="-1" role="dialog" aria-labelledby="changePlanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePlanLabel">Change Plan</h5>
            </div>
            <div class="modal-body">
                here dev for change plan
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal-change-plan">Close</button>
                <a href="https://www.paypal.com/signin" class="btn btn-primary" style='background-color: #4555D1;'>Change Plan</a>
            </div>
        </div>
    </div>
</div>
-->
</body>

</html>