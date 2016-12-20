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

<!-- Chart 1 -->
<script type="text/javascript">

    $(document).ready(function () {

            $.getJSON("canvasjs1/arduino_data.php", function (result) {

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
    // text: "Cliënt #01"
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

<!-- Chart 2-->

<script type="text/javascript">

    $(document).ready(function () {

            $.getJSON("canvasjs1/arduino_data.php", function (result) {

            var dataPoints = [];

            for (var i = 0; i <= result.length - 1; i++) {
            dataPoints.push({ x: Number(result[i].x), y: Number(result[i].y) });
            }

            var chart = new CanvasJS.Chart("chartContainer5",{
  title :{
    // text: "Cliënt #01"
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

<!-- Chart 3 -->


<script type="text/javascript">

    $(document).ready(function () {

            $.getJSON("canvasjs1/arduino_data.php", function (result) {

            var dataPoints = [];

            for (var i = 0; i <= result.length - 1; i++) {
            dataPoints.push({ x: Number(result[i].x), y: Number(result[i].y) });
            }

           var chart = new CanvasJS.Chart("chartContainer6", {
            data: [
           {
           dataPoints: dataPoints
           }
            ]
            });
            chart.render();
            });
            
    });
</script>

<script type="text/javascript">
window.onload = function () {

var dps = []; // dataPoints

var chart = new CanvasJS.Chart("chartContainer2",{
  title :{
    // text: ""
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

<script type="text/javascript" src="canvasjs1/canvasjs.min.js"></script>

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
     <!--  <li>
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
		<h3>Cliënten</h3>

		<div class="tabbable-panel">
			<div class="tabbable-line">
				<ul class="nav nav-tabs ">
					<li class="active">
						<a href="#tab_default_1" data-toggle="tab">
						Cliënt 1 </a>
					</li>
					<li>
						<a href="#tab_default_2" data-toggle="tab">
						Cliënt 2 </a>
					</li>
					<li>
						<a href="#tab_default_3" data-toggle="tab">
						Cliënt 3 </a>
					</li>
				</ul>



<!-- TAB 1 -->
	<div class="tab-content">
				<div class="tab-pane active" id="tab_default_1">
					
<!-- Patient Profile in Tab -->
<div class="container">
    <!-- <div class="row"> -->
<!-- <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
<p class=" text-info"><?php //echo date("Y-m-d H:i:s"); ?></p>
</div> -->
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad"  style="margin-left: 0%; " >
 
 
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Mevr. van Dalen</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/p1.jpg" style="height: 190px; width: 120px;" class="img-circle"> </div>
              
              <div class=" col-md-9 col-lg-9 "> 
                <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td>Naam:</td>
                      <td>Els van Dalen</td>
                    </tr>
                    <tr>
                      <td>Geboortedatum:</td>
                      <td>06/23/1938</td>
                    </tr>
                    <tr>
                      <td>In het systeem sinds:</td>
                      <td>12/12/2015</td>
                    </tr>
                       <tr>
                       <tr>
                      <td>Geslacht:</td>
                      <td>Vrouw</td>
                    </tr>
                      <tr>
                      <td>Adres</td>
                      <td>Damrak 22, Amsterdam</td>
                    </tr>
                    <tr>
                      <td>Email Contactpersoon</td>
                      <td><a href="#">vandalen@hotmail.com</a></td>
                    </tr>
                      <td>Telefoonnr.:</td>
                      <td>020-79591245(Thuis)</td>
                    </tr>
                    </tr>
                      <td>Status:</td>
                      <td style="color: green; font-weight: bold;" class="fa fa-circle"></td>
                    </tr>
                    </tbody>
                    </table>
                
                <a href="#" class="btn btn-primary">Cliënt Status en Geschiedenis</a>
                <a href="#" class="btn btn-primary">Familie</a>
              </div>

            </div>
          </div>
               <!-- <div class="panel-footer">
                      <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                  </div> -->
        </div>
      </div>
<!--  -->
<!-- BEGIN GRAPH -->
<!--  -->

<!-- Patient Profile in Tab -->
<div class="container">
  <!-- <div class="row"> -->
<!-- <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
<p class=" text-info"><?php //echo date("Y-m-d H:i:s"); ?></p>
</div> -->
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="margin-left: 0px;" >

      <div class="panel panel-info">
        <div class="panel-heading">
          <h4 class="panel-title">Cliënt Status</h4>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class=" col-md-9 col-lg-9 ">               
<!-- CHART -->

<div id="chartContainer" style="height: 192px; width:500px;"></div> 

<!-- END CHART -->    
              <!--a href="#" class="btn btn-primary">Relatives</a-->
            </div>
          </div>
        </div>
       <div class="panel-footer">
          <a href="meerinfo.php" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-newspaper-o"></i></a>
          <!-- <span class="pull-right">
            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
        </span> -->
      </div>
        
      </div>
    </div>
  <!-- </div> -->

<!-- Notities -->
<div class="col-md-3" style="padding-left: 1%;" >
<a style="font-weight: bold; color: #99E1D9;">Notities</a>
<textarea rows="3" cols="87">
-Afgelopen keer gevallen.                             [21-10-2016]
-Daardoor veel spanning rondom vallen.      [21-10-2016]
-Huis is opgeruimd, en val-proof gemaakt.  [01-11-2016]
</textarea>
<div>       
</div> 
</div>
<!-- einde notities -->

</div>             
      <!-- End Patient Profile in Tab --> 

<!--  -->
<!--END  GRAPH -->
<!--  -->
  </div>             
<!-- End Patient Profile in Tab 1 -->	
</div>
<!-- Einde TAB 1 Content -->



<!-- BEGIN TAB 2 -->
<div class="tab-pane" id="tab_default_2">
						
				<!-- Patient Profile in Tab -->

        <!-- TAB 2 -->
<div class="container">

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad"  style="margin-left: 0%; " >
 
 
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Mr. Hagenslag</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/p2.jpg" class="img-circle" style="height: 190px; width: 120px;"> </div>
              
              <div class=" col-md-9 col-lg-9 "> 
                <table class="table table-user-information">
                  <tbody>
                   <tr>
                      <td>Naam:</td>
                      <td>Johnny Hagenslag</td>
                    </tr>
                    <tr>
                      <td>Geboortedatum:</td>
                      <td>11/01/1942</td>
                    </tr>
                    <tr>
                      <td>In het systeem sinds:</td>
                      <td>17/09/2016</td>
                    </tr>
                 
                       <tr>
                           <tr>
                      <td>Geslacht:</td>
                      <td>Man</td>
                    </tr>
                      <tr>
                      <td>Adres</td>
                      <td>Nieuwedijk 314, Amsterdam</td>
                    </tr>
                    <tr>
                      <td>Email Contactpersoon</td>
                      <td><a href="#">hagenslag@hotmail.com</a></td>
                    </tr>
                      <td>Telefoonnr.:</td>
                      <td>020-86938172(Thuis)</td>
                    </tr>
                     </tr>
                      <td>Status:</td>
                      <td style="color: orange; font-weight: bold;" class="fa fa-circle"></td>
                    </tr>
                  </tbody>
                </table>
                
                <a href="#" class="btn btn-primary">Cliënt Status en Geschiedenis</a>
                <a href="#" class="btn btn-primary">Familie</a>
              </div>
            </div>
          </div>
             <!--   <div class="panel-footer">
                      <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                      <span class="pull-right">
                          <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                          <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                      </span>
                  </div> -->
        </div>
      </div>

<!--  -->
<!-- BEGIN GRAPH -->
<!--  -->

<!-- Patient Profile in Tab -->
<div class="container">

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="margin-left: 0px;" >

      <div class="panel panel-info">
        <div class="panel-heading">
          <h4 class="panel-title">Cliënt Status</h4>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class=" col-md-9 col-lg-9 ">               
<!-- CHART -->

<div id="chartContainer" style="height: 192px; width:500px;"></div> 

<!-- END CHART -->    
            </div>
          </div>
        </div>
       <div class="panel-footer">
          <a href="meerinfo.php" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-newspaper-o"></i></a>
          <!-- <span class="pull-right">
            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
        </span> -->
      </div>
        
      </div>
    </div>
  <!-- </div> -->
  <!-- Notities -->
<div class="col-md-3" style="padding-left: 1%;" >
<a style="font-weight: bold; color: #99E1D9;">Notities</a>
<textarea rows="3" cols="87">
-Afgelopen keer gevallen.                             [21-10-2016]
-Daardoor veel spanning rondom vallen.      [21-10-2016]
-Huis is opgeruimd, en val-proof gemaakt.  [01-11-2016]
</textarea>
<div>       
</div> 
</div>
<!-- einde notities -->
</div>             
      <!-- End Patient Profile in Tab --> 

<!--  -->
<!--END  GRAPH -->
<!--  -->
      </div>
 <!--  </div>  -->            									
</div>
<!-- End Patient Profile in Tab -->	


<!-- BEGIN TAB 3 CONTENT -->

				<div class="tab-pane" id="tab_default_3">
				
					<div class="tab-pane" id="tab_default_2">
						
				<!-- Patient Profile in Tab -->
<div class="container">

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad"  style="margin-left: 0%; " >
 
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Mevr. Draper</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/p3.jpg" class="img-circle" style="height: 190px; width: 120px;"> </div>

              <div class=" col-md-9 col-lg-9 "> 
                <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td>Naam:</td>
                      <td>Sally Draper</td>
                    </tr>
                    <tr>
                      <td>Geboortedatum:</td>
                      <td>10/03/1946</td>
                    </tr>
                    <tr>
                      <td>In het systeem sinds:</td>
                      <td>30/05/2015</td>
                    </tr>
                       <tr>
                           <tr>
                      <td>Geslacht:</td>
                      <td>Vrouw</td>
                    </tr>
                      <tr>
                      <td>Adres</td>
                      <td>Kinkersstraat 22, Amsterdam</td>
                    </tr>
                    <tr>
                      <td>Email Contactpersoon</td>
                      <td><a href="#">draper@hotmail.com</a></td>
                    </tr>
                      <td>Telefoonnr.:</td>
                      <td>020-38273948(Thuis)</td>
                    </tr>
                     </tr>
                      <td>Status:</td>
                      <td style="color: green; font-weight: bold;" class="fa fa-circle"></td>
                    </tr>
                  </tbody>
                </table>
                
                <a href="#" class="btn btn-primary">Cliënt Status en Geschiedenis</a>
                <a href="#" class="btn btn-primary">Familie</a>
              </div>
            </div>
          </div>
               <!-- <div class="panel-footer">
                      <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                      <span class="pull-right">
                          <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                          <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                      </span>
                  </div> -->
        </div>
      </div>
    <!-- </div> -->

<!--  -->
<!-- BEGIN GRAPH -->
<!--  -->

<!-- Patient Profile in Tab -->
<div class="container">

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" style="margin-left: 0px;" >

      <div class="panel panel-info">
        <div class="panel-heading">
          <h4 class="panel-title">Cliënt Status</h4>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class=" col-md-9 col-lg-9 ">               
<!-- CHART -->

<div id="chartContainer" style="height: 192px; width:500px;"></div> 

<!-- END CHART -->    
              <!--a href="#" class="btn btn-primary">Relatives</a-->
            </div>
          </div>
        </div>
       <div class="panel-footer">
          <a href="meerinfo.php" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-newspaper-o"></i></a>
          <!-- <span class="pull-right">
            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
        </span> -->
      </div>
        
      </div>
    </div>
  <!-- </div> -->
  <!-- Notities -->
<div class="col-md-3" style="padding-left: 1%;" >
<a style="font-weight: bold; color: #99E1D9;">Notities</a>
<textarea rows="3" cols="87">
-Afgelopen keer gevallen.                             [21-10-2016]
-Daardoor veel spanning rondom vallen.      [21-10-2016]
-Huis is opgeruimd, en val-proof gemaakt.  [01-11-2016]
</textarea>
<div>       
</div> 
</div>
<!-- einde notities -->
</div>             
      <!-- End Patient Profile in Tab --> 

<!--  -->
<!--END  GRAPH -->
<!--  -->
  </div>  				
  </div>
  </div>
  </div>
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