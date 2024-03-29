<?php
    session_start();
    include('dbconnect.php');
 
    if (isset($_SESSION['id']))
    {
        header('location:masterhome.php');
    }
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title>Login - Gokulolsavam</title>

<link rel="shortcut icon" type="image/png" href="">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!-- font icons-->
<link rel="stylesheet" type="text/css" href="fonts/icomoon.css">
<link rel="stylesheet" type="text/css" href="fonts/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" type="text/css" href="css/pace.css">
<!-- END VENDOR CSS-->
<!-- BEGIN ROBUST CSS-->
<link rel="stylesheet" type="text/css" href="css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="css/app.css">
<link rel="stylesheet" type="text/css" href="css/colors.css">
<!-- END ROBUST CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="css/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="css/vertical-overlay-menu.css">
<!-- <link rel="stylesheet" type="text/css" href="assets/css/login-register.css"> -->
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content container-fluid">
<div class="content-wrapper">
<div class="content-header row">
</div>
<div class="content-body">
<section class="flexbox-container">
<div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-1 p-0">
<div class="card border-grey border-lighten-3 m-0">
<div class="card-header no-border">
<div class="card-title text-xs-center">
<div class="p-1"><h1>Master Login</h1></div>
</div>
</div>
<div class="card-body collapse in">
<div class="card-block">
<form class="form-horizontal form-simple" action="masterlogin.php" method="post">
<fieldset class="form-group position-relative has-icon-left mb-1">
<input type="text" class="form-control form-control-lg input-lg" id="user-name" placeholder="Your Username"  name="user" required>
<div class="form-control-position">
<i class="icon-head"></i>
</div>
</fieldset>
<fieldset class="form-group position-relative has-icon-left">
<input type="password" class="form-control form-control-lg input-lg" id="user-password" name="pswd" placeholder="Enter Password" required>
<div class="form-control-position">
<i class="icon-key3"></i>
</div>
</fieldset>
<fieldset class="form-group row">
<div class="col-md-6 col-xs-12 text-xs-center text-md-left">
<fieldset>
<a href="index.php"><u style="color: blue;">Go To Home</u></a>
</fieldset>
</div>
<!-- <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div> -->
</fieldset>
<button type="submit" class="btn btn-primary btn-lg btn-block ae_login"><i class="icon-unlock2"></i> Login</button>

 <?php
 
            if (isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
</form>
</div>
</div>
</div>
</div>
</section>

</div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- BEGIN VENDOR JS-->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/tether.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="js/unison.min.js" type="text/javascript"></script>
<script src="js/blockUI.min.js" type="text/javascript"></script>
<script src="js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="js/screenfull.min.js" type="text/javascript"></script>
<script src="js/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="assets/js/app-menu.js" type="text/javascript"></script>
<script src="assets/js/app.js" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->

</body>
</html>
