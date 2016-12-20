<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Bravo Portal</title>
	<meta name="generator" content="Bootply" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	 <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<style>
    #map_canvas {

	width: 500px;
	height: 400px;
  				}
  				
  	#map_canvas1 {

	width: 500px;
	height: 400px;
  				}
    
</style>
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/patient_profile.css" rel="stylesheet">
	<script src="js/patient_portal.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>


<script src="http://www.google.com/jsapi?key=ABQIAAAAlJFc1lrstqhgTl3ZYo38bBQcfCcww1WgMTxEFsdaTsnOXOVOUhTplLhHcmgnaY0u87hQyd-n-kiOqQ"></script>


<!-- Webmaster Web Google Maps script --> 
												<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
											<script>
											  function initialize() {
												var map_canvas = document.getElementById('map_canvas');
												var map_options = {
												  center: new google.maps.LatLng(52.3762022, 5.1475599),
												  zoom: 10,
												  mapTypeId: google.maps.MapTypeId.ROADMAP
												}
												var map = new google.maps.Map(map_canvas, map_options)
											  }
											  google.maps.event.addDomListener(window, 'load', initialize);
											</script>
											<script>
											function initialize() {
												var map_canvas = document.getElementById('map_canvas1');
												var map_options = {
												  center: new google.maps.LatLng(52.3762022, 5.1475599),
												  zoom: 10,
												  mapTypeId: google.maps.MapTypeId.ROADMAP
												}
												var map = new google.maps.Map(map_canvas1, map_options)
											  }
											  google.maps.event.addDomListener(window, 'load', initialize);
											</script>
											


<!-- EINDE Webmaster Web Google Maps script --> 

</head>
<body>

<header class="navbar navbar-default navbar-static-top" role="banner">
<div class="container">
<div class="navbar-header">
  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a href="#" class="navbar-brand">Bravo Portal</a>
</div>
<nav class="collapse navbar-collapse" role="navigation">
  <ul class="nav navbar-nav">
    <li>
      <a href="portal.php">Home</a>
    </li>
    <li>
      <a href="patients.php">Clients</a>
    </li>
    <li>
      <a href="tools.php">Tools</a>
    </li>
    <li>
      <a href="#">Contact</a>
    </li>
  </ul>
</nav>
</div>
<div align="right">
<b id="welcome">Welcome: <i style="color: #ADADFF;"><?php echo $login_session; ?></i></b>
<b id="logout"><a href="../logout.php">Log Out</a></b>
</div>
</header>



<!-- Begin Body -->
<div class="container">
<div class="row">

<!-- tabs -->
<div class="container">
<div class="row">
	<div class="col-md-12">
		<h3>Neem Contact Op!</h3>
		
		<div class="tabbable-panel">
			<div class="tabbable-line">
				<div class="tab-content">
					<div class="tab-pane active" id="tab_default_1">
					
<!-- Contact information -->

						<!-- -->


													
													<div class="container">
													    <div class="row">
													        <div class="col-md-12">
													            <div class="well well-sm">
													                <form class="form-horizontal" method="post" action="mail.php">
													                    <fieldset>
													                        <legend class="text-center header">Neem contact op</legend>
													
													                        <div class="form-group">
													                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
													                            <div class="col-md-8">
													                                <input id="fname" name="Name" type="text" placeholder="Uw Naam" class="form-control">
													                            </div>
													                        </div>														
													                        <div class="form-group">
													                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
													                            <div class="col-md-8">
													                                <input id="Email" name="Email" type="text" placeholder="Email" class="form-control">
													                            </div>
													                        </div>
																			<div class="form-group">
													                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
													                            <div class="col-md-8">
													                                <textarea class="form-control" id="Message" name="Message" placeholder="Uw Bericht." rows="7"></textarea>
													                            </div>
													                        </div>
													
													                        <div class="form-group">
													                            <div class="col-md-12 text-center">
													                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
													                            </div>
													                        </div>
													                    </fieldset>
													                </form>
													            </div>
													        </div>
													    </div>
													</div>
													
													<style>
													    .header {
													        color: #36A0FF;
													        font-size: 27px;
													        padding: 10px;
													    }
													
													    .bigicon {
													        font-size: 35px;
													        color: #36A0FF;
													    }
													</style>
						
						
						
						
						<!-- -->



<!-- End Contact Information -->
							
				</div>
				</div>
			</div>
		</div>  			
			
			
			<!-- tabs -->
			<hr>
          	<h2 align="center" id="sec1">De locaties</h2>
          	<p align="center">
           
            </p>
					<!--div class="row"-->
					<div class="col-md-6">
					<div class="panel panel-default">
					<div class="panel-heading"><h3>Locatie</h3></div>
					<div class="panel-body">
					
							<div id="map_canvas"></div>
							
								<ul class="info">
								<li>
								<h3>Address</h3>
								<p>
								Nederland<br />
								Almere<br />
								Flevoland
								</p>
								</li>
								<li>
								<h3>Mail</h3>
								<p><a href="#">mail@panicbutton.com</a></p>
								<p><a href="nursery.nl">Nursery</a></p>
								</li>
								<li>
								</li>
								</ul>
							</div>
							</div>
					</div>
					<div class="col-md-6">
					<div class="panel panel-default">
					<div class="panel-heading"><h3>Locatie</h3></div>
					<div class="panel-body">
					
					
					<div id="map_canvas1"></div>
					
					
					<ul class="info">
					<li>
					<h3>Address</h3>
					<p>
					
					Tergooi Hilversum<br />
					Van Riebeeckweg 212<br />
					1213 XZ Hilversum<br />
					088 753 1 753
					</p>
					</li>
					<li>
					<h3>Mail</h3>
					<p><a href="#">mail@panicbutton.com</a></p>
					<p><a href="tergooiziekehuis.nl">Tergooi Ziekenhuis</a></p>
					</li>
					<li>
					</li>
					</ul>
					</div>
					</div>
					</div>
					</div>  
					</div>
          <hr>
          
          	<h2 id="sec2">Algemene Info</h2>
          	<p>
            Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
            eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut!
          	</p>
          	<div class="row">
          		<div class="col-md-4"><img src="img/1.jpg" class="img-responsive"></div>
              	<div class="col-md-4"><img src="img/2.jpg" class="img-responsive"></div>
              	<div class="col-md-4"><img src="img/3.jpg" class="img-responsive"></div>
          	</div>
          
          	<hr>
          
          
          	
          	
  		</div> 
	</div>
</div>



<!-- script references -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>