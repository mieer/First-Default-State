<?php
include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Doctor Portal</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
		<link href="../css/patient_profile.css" rel="stylesheet">
		<script src="../js/patient_portal.js"></script>

	<script type="text/javascript">
	window.onload = function () {
	
		var dps = []; // dataPoints

		var chart = new CanvasJS.Chart("chartContainer3",{
			title :{
				text: "Patient #01"
			},			
			data: [{
				type: "line",
				dataPoints: dps 
			}]
		});

		var xVal = 0;
		var yVal = 100;	
		var updateInterval = 20;
		var dataLength = 500; // number of dataPoints visible at any point

		var updateChart = function (count) {
			count = count || 1;
			// count is number of times loop runs to generate random dataPoints.
			
			for (var j = 0; j < count; j++) {	
				yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
				dps.push({
					x: xVal,
					y: yVal
				});
				xVal++;
			};
			if (dps.length > dataLength)
			{
				dps.shift();				
			}
			
			chart.render();		

		};

		// generates first set of dataPoints
		updateChart(dataLength); 

		// update chart after specified time. 
		setInterval(function(){updateChart()}, updateInterval); 

	}

</script>



<script type="text/javascript" src="canvasjs.min.js"></script>

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
      <a href="#" class="navbar-brand">Doctor Portal</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="../portal.php">Home</a>
        </li>
        <li>
          <a href="../patients.php">Patients</a>
        </li>
        <li>
          <a href="../tools.php">Tools</a>
        </li>
        <li>
          <a href="../contact.php">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
  <div align="right">
<b id="welcome">Welcome: <i style="color: #ADADFF;"><?php echo $login_session; ?></i></b>
<b id="logout"><a href="../../logout.php">Log Out</a></b>
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
							Patient 1 </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Patient 2 </a>
						</li>
						<li>
							<a href="#tab_default_3" data-toggle="tab">
							Patient 3 </a>
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
                <div class=" col-md-9 col-lg-9 "> 
                
               
                
<!-- CHART -->

<div id="chartContainer" style="height: 300px; width:500px;">
	</div>

<!-- END CHART -->		

                 
                  <a href="#" class="btn btn-primary">History Patient</a>
                  <a href="#" class="btn btn-primary">Relatives</a>
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
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td>Elderly Care</td>
                      </tr>
                      <tr>
                        <td>Date of Birth:</td>
                        <td>06/23/1931</td>
                      </tr>
                      <tr>
                        <td>In care since</td>
                        <td>12/12/2012</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Zuckerstr 22, Amsterdam</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="#">draper@hotmail.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>033-79354745(Landline)<br><br>555-6789-240(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">History Patient</a>
                  <a href="#" class="btn btn-primary">Relatives</a>
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
              <h3 class="panel-title">Mr. Sally</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/p3.jpg" class="img-circle"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td>Elderly Care</td>
                      </tr>
                      <tr>
                        <td>Date of Birth:</td>
                        <td>04/22/1941</td>
                      </tr>
                      <tr>
                        <td>In care since</td>
                        <td>08/12/2008</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Female</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Landsmark 57, Amsterdam</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="#">Sally@hotmail.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>033-79335767(Landline)<br><br>555-6699-246(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">History Patient</a>
                  <a href="#" class="btn btn-primary">Relatives</a>
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
              	<h2 id="sec1">Health Tiers</h2>
              	<p>
                The Care of the Elderly can be considered in a dual tier environment. Primarily the care will be initiated in the Elderly Health Centres. If needed, a patient can be treated there to a satisfactory level. However, it is not inevitable 
                that the patients care more in sense of the provided care. That is when the Patient and its contact information will be forwarded to the Tergooi Hospital.
                </p>
              	<div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-heading"><h3>WVO Elderly Health Centre</h3></div>
                      <div class="panel-body">
						  	Even if independent living is not possible, please contact WVO care. 
						  	in our care centers, we offer a pleasant living environment for people with (starting) dementia or chronic physical complaints.
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
              		<div class="col-md-4"><img src="../img/1.jpg" class="img-responsive"></div>
                  	<div class="col-md-4"><img src="../img/2.jpg" class="img-responsive"></div>
                  	<div class="col-md-4"><img src="../img/3.jpg" class="img-responsive"></div>
              	</div>
              
              	<hr>
              
              
              	
              	
      		</div> 
  	</div>
</div>



	<!-- script references -->
		<script src="..///ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>
	</body>
</html>