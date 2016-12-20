<!DOCTYPE HTML>
<html>
<head>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
<script type="text/javascript">
	
				$().ready(function () {

					 var dataPoints = [];
					
				var chart = new CanvasJS.Chart("chartContainer",{
				title :{
				text: "Patient #01"
				},			
				data: [{
				type: "line",
				dataPoints: dataPoints 
				}]
				});	
			
			function updateChart( result ) { // move it here!!!
			$.getJSON("arduino_data.php", function( result ){
           
            var dataLength = 40; // number of dataPoints visible at any point
            var updateInterval = 1000;
            var chart = new CanvasJS.Chart("chartContainer",{ // new chart Object
                title :{
                    text: "Patient #01"
                },          
                data: [{
                    type: "line",
                    dataPoints: dataPoints 
                }]
            });
            for (var i = 0; i <= result.length - 1; i++) {
                dataPoints.push({ x: Number(result[i].x), y: Number(result[i].y) });
            }
            if (dataPoints.length > dataLength){
                dataPoints.shift();             
            }        
            chart.render();   
        }); 
    }


    // First read - Start
    updateChart(); 
    // Update chart after specified time. 
    setInterval(updateChart, updateInterval); 

});
		
		
	
	
</script>
<script type="text/javascript" src="canvasjs.min.js"></script>
</head>
<body>
	<div id="chartContainer" style="height: 300px; width:100%;">
	</div>
</body>
</html>
