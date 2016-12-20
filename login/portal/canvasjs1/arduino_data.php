    <?php
    //header('Content-Type: application/json');
    
    $con = mysqli_connect("localhost","root","","patientdb");

    // Check connection
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to DataBase: " . mysqli_connect_error();
    } 
    else
    {
    $data_points = array();

    $result = mysqli_query($con, "SELECT * FROM table_per_patient");

    while($row = mysqli_fetch_array($result))
    {        
        $point = array("x" => $row['id'] , "y" => $row['Heartrate']);

       
        array_push($data_points, $point);        
    }

        $json =  json_encode($data_points, 32); //define('JSON_NUMERIC_CHECK',32);   // Since PHP 5.3.3
        //$json = str_replace("\"", "", $json); //replace all the "" with nothing
         echo $json;
        
    }
    mysqli_close($con);
    
    ?>