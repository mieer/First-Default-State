<?php 
   
  require "KoolPHPSuite/KoolControls/KoolChart/koolchart.php";
	//include ("db_connect.php"); 
    
    
    //$link = mysqli_connect("localhost", "root", "", "WebApplication");
 
	// Check connection
	//if($link === false){
	    //die("ERROR: Could not connect. " . mysqli_connect_error());
	//}
	 
	// Attempt insert query execution
	$ds = require "KoolPHPSuite/db_connect.php"; 
	
	// Close connection
	//mysqli_close($link);

    //$ds = new MySQLDataSource($db_con);//This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
    //$ds->SelectCommand = "select customerNumber,customerName from customers";
        
    
    $chart = new KoolChart("chart");
    $chart->scriptFolder="KoolControls/KoolChart";
    $chart->Width = 1000;
    $chart->Title->Text = "Patient's Progression Week#";
    $chart->PlotArea->XAxis->Title = "Day";
    $chart->PlotArea->XAxis->Set(array("Monday","Tuesday","Wednesday","Thursday","Friday"));
    $chart->PlotArea->YAxis->Title = "Value";
    $chart->PlotArea->YAxis->Set(array("10","20","30"));
    $series = new LineSeries();
    //$series-> $ds;
    $series->ArrayData($heartrate); 
    $series->ArrayData(array(10, 20, 30));
    $chart->PlotArea->AddSeries($series); 
?>
