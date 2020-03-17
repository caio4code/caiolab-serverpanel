<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header shadow">
            <a href="account.php"><h3>CaioLab Cloud</h3></a>
            <strong>CL</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="">
                    <i class="glyphicon glyphicon-home fas fa-server"></i>
                    My Websites
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
                <a href="#">
                    <i class="glyphicon glyphicon-paperclip fas fa-money-check-alt"></i>
                    Billing
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
    <div id="content">

        <nav class="navbar navbar-default navbar-fixed-top">


            <div class="navbar-brand">
                <button type="button" id="sidebarCollapse" class="btn">
                    <i class="fas fa-ellipsis-v"></i>
                    <span></span>
                </button>

            </div>
            <h4 id="page-name">My Websites</h4>

            <img id="profile" src="assets/img/af052655-00d2-4ef0-b562-10bd73577186.jpeg" />
            <h5 id="profile-name">Caio César</h5>
            <div class="dropdown dropleft">
            <button type="button" id="sidebarCollapse" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-chevron-circle-down"></i>
            </button>
                <div class="dropdown-menu" aria-labelledby="sidebarCollapse">
                    <a class="dropdown-item" href="#">Log out</a>
                </div>
            </div>
        </nav>
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