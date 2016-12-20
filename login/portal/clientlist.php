<?php

   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT id, naam, datum FROM clients';
   mysql_select_db('patientdb');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "id :{$row['id']}"."naam : {$row['naam']}"."datum: {$row['datum']}".
         "--------------------------------";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);

?>