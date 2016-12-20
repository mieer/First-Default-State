<?php
include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bravo Portal</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
		<link href="../css/patient_profile.css" rel="stylesheet">
		<script src="../js/patient_portal.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
<script type="text/javascript">
	
				$(document).ready(function () {

                $.getJSON("arduino_data.php", function (result) {

                var dataPoints = [];

                for (var i = 0; i <= result.length - 1; i++) {
                dataPoints.push({ x: Number(result[i].x), y: Number(result[i].y) });
                }

               //CODE FOR BAR CHART:
               // var chart = new CanvasJS.Chart("chartContainer", {
               // data: [
               /// {
              //  dataPoints: dataPoints
               // }
               // ]
               // });

                var chart = new CanvasJS.Chart("chartContainer",{
			title :{
				text: "Cliënt #01"
			},			
			data: [{
				type: "line",
				dataPoints: dataPoints 
			}]
		});
                
                chart.render();
                });
                
        });
</script>

<script type="text/javascript">
	
				$(document).ready(function () {

                $.getJSON("arduino_data.php", function (result) {

                var dataPoints = [];

                for (var i = 0; i <= result.length - 1; i++) {
                dataPoints.push({ x: Number(result[i].x), y: Number(result[i].y) });
                }

               var chart = new CanvasJS.Chart("chartContainer1", {
                data: [
               {
               dataPoints: dataPoints
               }
                ]
                });
                
				//CODE FOR LINE CHART:
				//var chart = new CanvasJS.Chart("chartContainer",{
				//title :{
				//text: "Patient #01"
				//},			
				//data: [{
				//type: "line",
				//	dataPoints: dataPoints 
				//}]
				//});

                chart.render();
                });
                
        });
</script>

	<script type="text/javascript">
	window.onload = function () {
	
		var dps = []; // dataPoints

		var chart = new CanvasJS.Chart("chartContainer2",{
			title :{
				text: "Cliënt #01"
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
      <a href="#" class="navbar-brand">Bravo Portal</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="../portal.php">Home</a>
        </li>
        <li>
          <a href="../patients.php">Clients</a>
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
			<h3>Client Val Informatie</h3>

			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Lijn Diagram </a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							Staaf Diagram </a>
						</li>
						<li>
							<a href="#tab_default_3" data-toggle="tab">
							RT Lijn Diagram </a>
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

<div id="chartContainer" style="height: 300px; width:500px;"></div> 



<!-- END CHART -->		

                 
                  <a href="../history.php" class="btn btn-primary">Geschiedenis Client</a>
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
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  
                  <!-- CHART -->


<div id="chartContainer1" style="height: 300px; width:500px;"></div><br><br><br><br><br><br>


<!-- END CHART -->
                  
                  <a href="../history.php" class="btn btn-primary">Geschiedenis Cliënt</a>
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
              
                <div class=" col-md-9 col-lg-9 "> 
                 
                 
<div id="chartContainer2" style="height: 300px; width:500px;"></div>
                  
                  <a href="../history.php" class="btn btn-primary">Geschiedenis Client</a>
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
              	<h2 id="sec1">Health Tiers</h2>
              	<p>
                The Care of the Elderly can be considered in a dual tier environment. Primarily the care will be initiated in the Elderly Health Centres. If needed, a client can be treated there to a satisfactory level. However, it is not inevitable 
                that the clients care more in sense of the provided care. That is when the client and its contact information will be forwarded to the Tergooi Hospital.
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