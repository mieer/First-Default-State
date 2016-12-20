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
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="css/styles.css" rel="stylesheet">
		<link href="css/patient_profile.css" rel="stylesheet">
    
		<script src="js/patient_portal.js"></script>

<!--  -->
<!-- Chart Code -->
<!--  -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>


<!--  -->
<!--  -->
<!--  -->

	</head>
	<body style="background-color: #70ABAF;">

<header class="navbar navbar-default navbar-static-top" role="banner" style="background-color: #32292F; color: #99E1D9;">
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
          <a href="patients.php">Cliënten</a>
        </li>
        <!-- <li>
          <a href="tools.php">Tools</a>
        </li>
        <li>
          <a href="contact.php">Contact</a>
        </li> -->
      </ul>
    </nav>
  </div>
<div align="right">
<b id="welcome">Welkom: <i style="color: #ADADFF;"><?php echo $login_session; ?></i></b>
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
			<h3>Cliënt Valpreventie Informatie</h3>

			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Voortgang Categorie </a>
						</li>
					</ul>



<!-- TAB 1 -->
		<div class="tab-content">
					<div class="tab-pane active" id="tab_default_1">

<!--  -->
<!-- BEGIN GRAPH -->
<!--  -->

<!-- Patient Profile in Tab -->
  <div class="container">

      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="margin-left: 0px;" >

        <div class="panel panel-info">
          <div class="panel-heading">
            <h4 class="panel-title">Kracht Video</h4>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class=" col-md-9 col-lg-9 ">               
  <!-- CHART -->

  <iframe src="https://www.youtube.com/watch?v=TTYZXqgmawQ" width="500" height="352" frameborder="0" allowfullscreen></iframe>

  <!-- END CHART -->    
               <!--  <a href="meerinfo.php" class="btn btn-primary">Meer Informatie</a> -->
              </div>
            </div>
          </div>
      <!--    <div class="panel-footer">
            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-print"></i></a>
            <span class="pull-right">
              <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="fa fa-info-circle"></i></a>
              <a href="patients.php" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="fa fa-id-card"></i></a>
          </span>
        </div> -->
          
        </div>
      </div>
    <!-- </div> -->


<!-- Patient Profile in Tab -->
  <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad"  style="margin-left: 0%; " >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Uitleg</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <!-- <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/p1.jpg" style="height: 190px; width: 120px;" class="img-circle"> </div> -->
                <div class=" col-md-9 col-lg-9 "> 
                 
                <p style="font-weight: bold;">Kracht</p>
                <p>lkajshdflkajhsdlfkajhsdlkfjahsdlf</p>
                <p>ljahsdlkjahlskdjfhalksjdhflakjsdh</p>
                <p>lkajshdflkajhsdlfkajhsdlkfjahsdlf</p>
                <p>ljahsdlkjahlskdjfhalksjdhflakjsdh</p>
                <p>lkajshdflkajhsdlfkajhsdlkfjahsdlf</p>
                <p>ljahsdlkjahlskdjfhalksjdhflakjsdh</p>


                 <!--  <a href="canvasjs1/heart_graph1.php" class="btn btn-primary">Cliënt Status en Geschiedenis</a>
                  <a href="relatives.php" class="btn btn-primary">Familie</a> -->
                </div>

               <!--  <div class="col-md-4">
                 <p style="padding-top: 3%;"> Geeft blijk van de stabiliteit.</p>
                 <p style="padding-top: 3%;"> Geeft blijk van hoe goed de beweging is.</p>
                 <p style="padding-top: 2%;"> Geeft blijk van de ondersteunende vermogen.</p>
                 <p style="padding-top: 0%;"> Geeft blijk van de hoeveelheid beweging.</p>
                 </div> -->

              </div>
            </div>
                 <div class="panel-footer">
                       <a href="meerinfo.php" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-left"></i></a>
                        <span class="pull-right">
                            <a href="info.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="fa fa-info-circle"></i></a>
              <a href="portal.php" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="fa fa-id-card"></i></a>
                        </span>
                    </div>
          </div>
        </div>

 <div class="col-md-3" style="padding-left: 2%;" >
<a style="font-weight: bold; color: #99E1D9;">Notities</a>
<textarea rows="3" cols="84">
-Afgelopen keer gevallen.                             [21-10-2016]
-Daardoor veel spanning rondom vallen.      [21-10-2016]
-Huis is opgeruimd, en val-proof gemaakt.  [01-11-2016]
</textarea>

<div>
              
        </div> 
  </div>

    </div>             
  <!-- End Patient Profile in Tab 1 --> 



  </div>             
        <!-- End Patient Profile in Tab --> 


<!--  -->
<!--END  GRAPH -->
<!--  -->
</div>
<!-- Einde TAB 1 Content -->

<!-- BEGIN TAB 2 -->

							
					</div>

					</div>
				
        </div>
			</div>  			
  			
  			<!-- tabs -->
    <!-- <hr> -->
              
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