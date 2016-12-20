<?php
$count = 0;
$myFile = "../data_arduino/test.txt";
$myTempFile = "../data_arduino/temp_data.txt";


$string = fopen($myFile, "r");
$fh = fopen($myTempFile, 'w') or die("Could not open: " . mysql_error());
 
while ($line = fgets($string)) {
     $count++;
 
     $line = preg_replace('/\t+/', '|', $line);
 
     $line = $count . '|' . $line ;
     fwrite($fh, $line);
}
 
fclose($fh);
 
$sql = mysql_connect("localhost", "root");
if (!$sql) {
    die("Could not connect: " . mysql_error());
}
mysql_select_db("patientdb");
$result = mysql_query("LOAD DATA LOCAL INFILE '$myTempFile' REPLACE" .
                      "INTO TABLE table_per_patient FIELDS TERMINATED BY '|' LINES TERMINATED BY '\r\n'");
if (!$result) {
    die("Could not load. " . mysql_error());
}
 

$f = @fopen($myTempFile, "r+");
if ($f !== false) {
    ftruncate($f, 0);
    fclose($f);
}
 
?>
