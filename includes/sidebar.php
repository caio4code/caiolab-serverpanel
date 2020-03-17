<div class="wrapper">
    <!-- Sidebar Holder -->


    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="index.php"><h3>CaioLab Cloud</h3></a>
            <strong>CL</strong>
        </div>

        <ul class="list-unstyled components">
            <li>

                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="">
                    <i class="fas fa-user"></i>
                    Account
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Change e-mail</a></li>
                    <li><a href="#">Change password</a></li>
                    <li><a href="#">Change registration information</a></li>

                </ul>
            </li>
            <li class="">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="">
                    <i class="glyphicon glyphicon-home fas fa-server"></i>
                    Websites
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="websites.php">example.com</a></li>

                </ul>
            </li>
            <li>

                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="">
                    <i class="glyphicon glyphicon-duplicate fas fa-cubes"></i>
                    Products
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Web Hosting</a></li>
                    <li><a href="#">Cloud Server</a></li>

                </ul>
            </li>
            <li>

            <li>
                <a href="" data-toggle="modal" data-target="#exampleModal">
                    <i class="glyphicon glyphicon-paperclip fas fa-money-check-alt"></i>
                    Billing
                </a>
            </li>
            <li>
                <a href="" data-toggle="modal2" data-target="#exampleModal2">
                    <i class="glyphicon glyphicon-paperclip fas fa-chart-pie"></i>
                    Analytics
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-paperclip"></i>
                    FAQ
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-send"></i>
                    Support
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-send"></i>
                    Help us to improve!
                </a>
            </li>
        </ul>
        <p id="beta">BETA VERSION</p>
    </nav>


    <!-- Page Content Holder -->

</div>

<!-- pop up paypal billing-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Billing on PayPal</h5>
            </div>
            <div class="modal-body">
                Payment for the caiolab cloud services is only available through paypal, our team will send the paypal payment invoice by the same email address as the caiolab cloud
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="https://www.paypal.com/signin" class="btn btn-primary" style='background-color: #4555D1;'>Open PayPal</a>
            </div>
        </div>
    </div>
</div>

<!-- pop up google analytics-->
<div class="modal2 fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal1 aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal2">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">