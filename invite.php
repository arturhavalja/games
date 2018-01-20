<?php 

  require __DIR__.'/scripts/functions.php';
  $notifications = getAllNotifications();
  $number = count($notifications);
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Games</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <link href="css/my_styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sidebar_style.css">
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>

    <script src="js/my_scripts.js"></script>

    <script src="js/bootstrap.min.js"></script>

  </head>

  <body>

    <!-- Navigation -->
    	<?php
            include "scripts/sidebar.php";
            sidebar("invite");
    	?>

    <!-- Page Content -->
    <div style="width: 100%">
      <div >
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
      </div>
      <h1 class="my-4 text-center">Invite A fried</h1>
      <br><br><br>
      <div class="col-md-3">
        <h3>Choose game</h3>

        <ul class="games nav nav-pills nav-stacked">
          <?php 
              $games = getAllGames();

              foreach ($games as $key => $value) {
                ?>
                  <li role="presentation" class="game" game-id="<?php echo $value['id'] ?>"> <a href="#"> <?php echo $value['name']; ?></a> </li>
                <?php
              }
           ?>
        </ul>
      </div>

      <div class="col-md-9">
        
        <div class="row text-center text-lg-left">
          
          <?php 
            
            $users = getAllUsers();
            
            foreach ($users as $key => $value) {
              
              ?>
                <div>
                  <div class="well clearfix"> <span class="pull-left"><?php echo $value['username']; ?> </span><button user-id="<?php echo $value['id']; ?>" class="btn invite btn-success pull-right">Invite</button></div>
                </div>
              <?php  
            }

           ?>
          
             
             
        </div>
      </div>

      <?php
            include "scripts/footer.php";
            footer("footer");
      ?>
    <!-- </footer> -->
    <script>
      $('.invite').click(function () {
        var id = $(this).attr('user-id');
        var game_id = $('.games .active').attr('game-id');
        var my_this = this;
        $.post('scripts/invite-requests.php',{user_id: id,game_id : game_id},function(d){
            
              $(my_this).text('User invited succesfully').addClass('disabled');
            
        });
      });


      $('.games li').click(function () {
        $('.games li').removeClass('active');
        $(this).addClass('active');
      });

    </script>
  </body>

</html>
