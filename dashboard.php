<?php 
    session_start();

    if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }

    include 'scripts/functions.php';

    $notifications = getAllNotifications();
    $number = count($notifications);

    $history = getAllHistory();

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/sidebar_style.css">
    </head>
    <body>

        <?php
            include "scripts/sidebar.php";
            sidebar("home");
        ?>
        

            <!-- Page Content Holder -->
            <div id="content" style="width: 100%">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li style="line-height: 50px;">
                                    <div class="dropdown">
                                      <div class="pointer dropdown-toggle"  data-toggle="dropdown">
                                      <button type="button" class="btn btn-primary">Invites <span class="badge"><?php echo $number ?></span></button></div>
                                      <ul class="dropdown-menu">
                                        
                                        <?php 
                                            foreach ($notifications as $key => $value) {
                                                ?>
                                                    <li><a href="<?php echo 'game.php?id='.$value['user_id']; ?>">
                                                        <?php echo $value['username']; ?> invited you to play <?php echo $value['name'] ?>
                                                    </a></li>
                                                <?php
                                            }
                                         ?>
                                      </ul>
                                    </div>

                                </li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <h3>You gamming history</h3>
                <?php foreach ($history as $key => $value) {
                    ?>
                    <div class="panel-group">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1"><?php echo $key ?> <span class="pull-right"><?php echo count($value); ?></span></a>
                          </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                          <ul class="list-group">
                            <?php foreach ($value as $id => $game) { ?>
                                <li class="list-group-item">You played this game at <?php echo date('H:i d M Y', time($game['created_at']))  ?> 
                                    <span class="pull-right">Your score was : <span class="badge" style="background-color: #5cb85c;"><?php echo $game['score'] ?></span></span>
                                </li>
                            <?php } ?>
                           
                          </ul>
                          
                        </div>
                      </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="jquery/jquery.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
