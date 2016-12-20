<?php
include('login/login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<style>#bg{background-image: url("login/portal/img/bg.jpg"); background-repeat: no-repeat;}</style>

	</head>
	<body id="bg";>
<!--login modal-->
<div style="" id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center">Welcome Doctor, please register</h2>
      </div>  
      
<div class="modal-body">
			<form class="form col-md-12 center-block" action="register_login.php" method="POST">
		    <div class="form-group">
			<input type="text" id="username" name="username" class="form-control input-lg" placeholder="Your new username"/>
			</div>
			<div class="form-group">
			 <input id="password" type="password" name="password" class="form-control input-lg" placeholder="Your new password"/>		 
			</div>
		   <div class="form-group">
              <button  class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Register</button>
              <span><i style="color: #CC4040;"><?php echo $error; ?></i></span>
              <span class="pull-right"><a href="index.php">Login</a></span>
            </div>
          </form>
      </div>
      
 <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
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