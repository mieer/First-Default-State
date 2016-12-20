<?php
//assign all files we are going to use
$myFile = "data_arduino/test.txt";
$myTempFile = "data_arduino/tempdata.txt";
$myPanicData = "data_arduino/panicdata.txt";
$pastPanic2 = "data_arduino/pastpanic2.txt";

// create the counting variables
$count = 0;
$panicCount = 0;
$matched = 3;


// load the the texts into var and open files for editing
$string = fopen($myFile, "r");
$fh = fopen($myTempFile, 'w') or die("Could not open: " . mysql_error());
// check each line in the text
while ($line = fgets($string)) {
     //if we detect the word panic in a line
	 if (strpos($line, 'panic01') !== false)
	 {
		 // i check if this is the first panic 01
		 if ($panicCount == 0)
		 {
			 // if yes we wipe the panic data and start over
			 $fh2 = fopen($myPanicData, 'w') or die("Could not open: " . mysql_error());
		 }else{
			 // if not we continue the existing file
			 $fh2 = fopen($myPanicData, 'a+') or die("Could not open: " . mysql_error());
			}
			// we set +1 to panic counter. give the line the correct format and push into panicdata
		 $panicCount += 1;
		 $line = preg_replace('/\t+/', '|', $line);
		 $line = $panicCount . '|' . $line ;
		 fwrite($fh2, $line);
		 fclose($fh2);
		 
	 }else{
		 // if the line contains panic2 we need to alarm immediatly and not store data
		 if (strpos($line, 'panic02') !== false)
		 {
			//the line from original data that contained panic02 gets stored
			$panicLine = $line;
			
			// check if the line already was added before
			$string3 = fopen($pastPanic2, "r");
			while ($line3 = fgets($string3)) {
		
			
				if (strpos($line3, $panicLine) !== false){
					// if it was we end here
					$matched = 1;
					break 1;
				}else{
					// if it wasnt we alarm and add it to the used ones later
					$matched = 0;
				}
				
			}
			// we add it to the used ones
			if ($matched == 0){
			$fh5 = fopen($pastPanic2, 'a+') or die("Could not open: " . mysql_error());
			fwrite($fh5, $panicLine);
			fclose($fh5);
			$matched = 0;
			
			// ACTIVATE JAVA ALERT HERE
			
			}
			
			
		 }else{
			 // if it doesnt contain panic it's heartrate data and gets added to the heartrate tempfile to be sent to database
			 $count++;
			$line = preg_replace('/\t+/', '|', $line);

			$line = $count . '|' . $line ;
			fwrite($fh, $line);
		 }
	 }
	 
	 
}

fclose($fh);

echo $matched ;

//echo '<div><h3><a class="panic01">ALERT</a></h3></div>';



//$matched ;
//echo '<div><h3><a class="panic01">ALERT</a></h3></div>';


// we connect to the database

$sql = mysql_connect("localhost", "root");
if (!$sql) {
    die("Could not connect: " . mysql_error());
}
mysql_select_db("patientdb");
// we send the heartrate to the database
$result = mysql_query("LOAD DATA LOCAL INFILE '$myTempFile' REPLACE" .
					  " INTO TABLE table_per_patient FIELDS TERMINATED BY '|' LINES TERMINATED BY '\r\n'");
if (!$result) {
   die("Could not load. " . mysql_error());

}
mysql_select_db("patientdb");
// we send the accelero data to the database
$result2 = mysql_query("LOAD DATA LOCAL INFILE '$myPanicData' REPLACE" .
					  " INTO TABLE acmeter FIELDS TERMINATED BY '|' LINES TERMINATED BY '\r\n'");
if (!$result2) {
	die("Could not load. " . mysql_error());
}
 //we empty the temp heartrate file
$f = @fopen($myTempFile, "r+");
if ($f !== false) {
    ftruncate($f, 0);
    fclose($f);
}

?>