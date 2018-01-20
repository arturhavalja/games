<?php
session_start();

function sidebar($active){ ?>
    <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" style="height:100vh">
                <div class="sidebar-header">
                    <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
                    <strong><h4>Hello</h4></strong>
                </div>

                <ul class="list-unstyled components">
                    <!-- Home -->
                    <li <?php if($active == "home")echo 'class="active"'?>>
                        <a href="dashboard.php">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>

                    

                    <!-- Highscore -->
                    </li <?php if($active == "highscores")echo 'class="active"'?>>
                    <li>
                        <a href="#highScoresSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Highscores
                        </a>
                        <ul class="collapse list-unstyled" id="highScoresSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>

                    <!-- Portofolio -->
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            Portfolio
                        </a>
                    </li>

                    

                    <!-- Profile -->
                    <li <?php if($active == "profile")echo 'class="active"'?>>
                        <a href="#">
                            <i class="glyphicon glyphicon-briefcase"></i>
                            Profile
                        </a>
                    </li>

                    <!-- Contact -->
                    <li <?php if($active == "contact")echo 'class="active"'?>>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Contact
                        </a>
                    </li>

                <!-- Terms and Conditions -->
                    <li <?php if($active == "terms")echo 'class="active"'?>>
                        <a href="#">
                            <i class="glyphicon glyphicon-paperclip"></i>
                            Terms And Conditions
                        </a>
                    </li>

                    <li <?php if($active == "invite")echo 'class="active"'?>>
                        <a href="invite.php">
                            <i class="glyphicon glyphicon-paperclip"></i>
                            Invite User
                        </a>
                    </li>
                </ul>

                <!-- Back to Games -->
                <ul class="list-unstyled CTAs">
                    <li><a href="index.php" class="article">Back to Games</a></li>
                </ul>
            </nav>

<?php } ?>
