<?php
include('login/login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: login/portal/portal.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Bravo</title>
	<meta name="generator" content="Bootply" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="login/portal/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="css/styles.css" rel="stylesheet">
	<style>#bg{background-color: #70ABAF; background-repeat: no-repeat;}</style>

</head>
<body id="bg";>

<header class="navbar navbar-default navbar-static-top" role="banner" style="background-color: #32292F; color: #99E1D9;">
<div class="container">
  <div class="navbar-header">
    <div align="center"><i class="fa fa-id-card-o fa-2x" style="margin-top: 5%;"> BRAVO PORTAL</i></div>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="/" class="navbar-brand" style="color: #32292F;">Bravo Portal</a>
  </div>
</div>
</header>

<br>
<!--login modal-->
<div style="" id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top: 3%;">
<div class="modal-dialog" style="padding-top: 5%;">
<div class="modal-content">
  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <!-- <h2 class="text-center" style="color: #32292F;">Bravo Portal</h2> -->
  </div>
 
  <div class="modal-body">
      <form class="form col-md-12 center-block" action="" method="post">
        <div class="form-group">
          <input type="text" id="username" name="username" class="form-control input-lg" placeholder="username">
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control input-lg" placeholder="password">
        </div>
        <div class="form-group">
          <button  class="btn btn-primary btn-lg btn-block" type="submit" name="submit" style="background-color: #705D56;">Sign In</button>
          <span><i style="color: #CC4040;"><?php echo $error; ?></i></span>
          <!-- <span class="pull-right"><a href="register.php">Register</a></span> -->
        </div>
      </form>
  </div>
 
  <div class="modal-footer">
      <div class="col-md-12">
      <button class="btn" data-dismiss="modal" aria-hidden="true" style="background-color: #705D56; color: white;">Cancel</button>
	  </div>	
  </div>
</div>
</div>
</div>
<!-- script references -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>