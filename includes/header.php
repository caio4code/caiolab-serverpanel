 <nav class="navbar navbar-default navbar-fixed-top">

        <div class="dropdown">
            <button type="button" id="menuLogin" class="btn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v"></i>
                <span></span>
            </button>
            <div class="dropdown-menu" aria-labelledby="menuLogin">
                <a class="dropdown-item" href="#">Log out</a>
            </div>

            <!--
            <button type="button" id="sidebarCollapse" class="btn">
                <i class="fas fa-ellipsis-v"></i>
                <span></span>
            </button>
-->
            <a href="index.php?namepage=Manage Websites">
                <i class="fas fa-home"></i>
            </a>

        </div>
        <h4 id="page-name"><?php echo $_GET["namepage"]?></h4>

    </nav>
