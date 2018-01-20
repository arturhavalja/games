<?php

function navbar($active){ ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand navBarLogo" href="#">
                <img alt="Brand" class="navBarLogao" src="img/logo.png">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand navBarTitle">Games</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if($active == "home")echo 'class="active"';?>><a href="index.php">Home</a></li>
                <li <?php if($active == "login")echo 'class="active"';?>><a href="login.php">Login</a>
                <li <?php if($active == "about")echo 'class="active"';?>><a href="about.php">About Us</a></li>
            </ul>
        </div>
        </div>
    </nav>

<?php } ?>
