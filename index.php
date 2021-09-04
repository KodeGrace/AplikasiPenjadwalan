<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login - <?php include('dist/includes/title.php');?></title>
    <link href='dist/img/labkom.png' rel='shortcut icon'>
    <!-- Code Responsive Web -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!-- Font dan Tema dengan AdminLTE -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  </head>
  <!-- Background Channel Maroon Labkom -->
  <body class="hold-transition login-page" style="background-image:url('dist/img/bg1.jpg')">
   
    <div class="login-box">
      <div class="login-logo">
        <h1 style="color:#fff">Jadwal SiMaroon</h1>
      </div><!-- class = login-logo -->
      <div class="login-box-body">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="container">
                <img src="dist/img/bg2.png" alt="Avatar" class="image">
                <div class="overlay">
                <a href="#" class="icon" title="Maroon">
                    <i class="fa fa-user"></i>
                </a>
                </div>
                <style>
                    /* Container needed to position the overlay. Adjust the width as needed */
                    .container {
                    position: relative;
                    width: 100%;
                    max-width: 400px;
                    }

                    /* Make the image to responsive */
                    .image {
                    width: 100%;
                    height: auto;
                    }

                    /* The overlay effect (full height and width) - lays on top of the container and over the image */
                    .overlay {
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    height: 100%;
                    width: 100%;
                    opacity: 0;
                    transition: .3s ease;
                    background-color: red;
                    }

                    /* When you mouse over the container, fade in the overlay icon*/
                    .container:hover .overlay {
                    opacity: 1;
                    }

                    /* The icon inside the overlay is positioned in the middle vertically and horizontally */
                    .icon {
                    color: white;
                    font-size: 100px;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    text-align: center;
                    }

                    /* When you move the mouse over the icon, change color */
                    .fa-user:hover {
                    color: #eee;
                    }
                </style>
            </div>
        <p class="login-box-msg">L O G I N
        </p>
        <form action="login.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
			<div class="col-xs-6 pull-right">
			  <button type="reset" class="btn btn-block btn-flat">Clear</button>
            </div><!-- /.col -->
			<div class="col-xs-6 pull-right">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" default>Log In</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
      
           
   
<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>