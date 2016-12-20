<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Doctor Portal</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/patient_profile.css" rel="stylesheet">
		<script src="js/patient_portal.js"></script>
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
          <a href="contact.php">Contact</a>
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
			<h3>Patients</h3>

			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Client 1 </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Client 2 </a>
						</li>
						<li>
							<a href="#tab_default_3" data-toggle="tab">
							Client 3 </a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
						
<!-- Patient Profile in Tab -->
	<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
          
       <br>
<p class=" text-info"><?php echo date("Y-m-d H:i:s"); ?></p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Mrs. Doubtfire</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/p1.jpg" class="img-circle"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                        <tr>
                        <td><b>Data</b></td>
                        <td><b>Specificatie</b></td>
                        </tr>
                      <tr>
                        <td>[12-10-2016]</td>
                        <td>  Gevallen, donkere hal.</td>
                      </tr>
                       <tr>
                        <td>[22-09-2016]</td>
                        <td>  Gevallen, op weg naar het toilet 's nachts.</td>
                      </tr>
                       <tr>
                        <td>[03-08-2016]</td>
                        <td>  Bang dat ze gaat vallen.</td>
                      </tr>
                   
                    </tbody>
                  </table>
                  
                  <!--a href="canvasjs1/heart_graph1.php" class="btn btn-primary">Patient Status and History</a-->
                  <!--a href="#" class="btn btn-primary">Relatives</a-->

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>             
					<!-- End Patient Profile in Tab -->	
						
						
</div>
					<div class="tab-pane" id="tab_default_2">
							
					<!-- Patient Profile in Tab -->
	<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
         
       <br>
<p class=" text-info"><?php echo date("Y-m-d H:i:s"); ?> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Mr. Draper</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/p2.jpg" class="img-circle"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                     <tbody>
                         <tr>
                        <td><b>Data</b></td>
                        <td><b>Specificatie</b></td>
                        </tr>
                      <tr>
                        <td>[12-10-2016]</td>
                        <td>  Gevallen, donkere hal.</td>
                      </tr>
                       <tr>
                        <td>[22-09-2016]</td>
                        <td>  Gevallen, op weg naar het toilet 's nachts.</td>
                      </tr>
                       <tr>
                        <td>[03-08-2016]</td>
                        <td>  Bang dat ze gaat vallen.</td>
                      </tr>
                   
                    </tbody>
                  </table>
                  
                  <!--a href="canvasjs1/heart_graph1.php" class="btn btn-primary">Patient Status and History</a-->
                  <!--a href="#" class="btn btn-primary">Relatives</a-->

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>             		
							
							
</div>
<!-- End Patient Profile in Tab -->	
					<div class="tab-pane" id="tab_default_3">
					
						<div class="tab-pane" id="tab_default_2">
							
					<!-- Patient Profile in Tab -->
	<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           
       <br>
<p class=" text-info"><?php echo date("Y-m-d H:i:s"); ?></p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Mr. Sally's Family</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/p3.jpg" class="img-circle"> </div>
                

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                     <tbody>
                        <tr>
                        <td><b>Data</b></td>
                        <td><b>Specificatie</b></td>
                        </tr>
                      <tr>
                        <td>[12-10-2016]</td>
                        <td>  Gevallen, donkere hal.</td>
                      </tr>
                       <tr>
                        <td>[22-09-2016]</td>
                        <td>  Gevallen, op weg naar het toilet 's nachts.</td>
                      </tr>
                       <tr>
                        <td>[03-08-2016]</td>
                        <td>  Bang dat ze gaat vallen.</td>
                      </tr>
                   
                    </tbody>
                  </table>
                  
                  <!--a href="canvasjs1/heart_graph1.php" class="btn btn-primary">Patient Status and History</a-->
                  <!--a href="#" class="btn btn-primary">Relatives</a-->
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>  		
							
					</div>
					</div>
				</div>
			</div>  			
  			
  			
  			<!-- tabs -->
  			
  			 
      		  	<hr>
              	<h2 id="sec1">De verschillende stadia van vallen</h2>
              	<p>
                teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier 
                </p>
              	<div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-heading"><h3>Val Centre</h3></div>
                      <div class="panel-body">
						  	 teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier  teksts hier 
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="panel panel-default">
                      <div class="panel-heading"><h3>Tergooi Hospital</h3></div>
                      <div class="panel-body">
                      When the health of elderly people need more attention, a second opinion or even just for request. The Tergooi Hospital can be contacted:
                      
	                     Tergooi Hilversum
						Van Riebeeckweg 212
						1213 XZ Hilversum
						088 753 1 753
                      </div>
                    </div>
                  </div>  
              	</div>
              
              	<hr>
              
              	<h2 id="sec2">General Info</h2>
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