<!DOCTYPE HTML>
<html>
<head>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
<script type="text/javascript">
	
				$().ready(function () {

                $.getJSON("accmeter_data.php", function (result) {

                var dataPoints = [];

                for (var i = 0; i <= result.length - 1; i++) {
                dataPoints.push({ x: Number(result[i].x), y: Number(result[i].y) });
                }

               var chart = new CanvasJS.Chart("chartContainer", {
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

<script type="text/javascript" src="canvasjs.min.js"></script>
</head>
<body>
	<div id="chartContainer" style="height: 300px; width:100%;">
	</div>
</body>
</html>
