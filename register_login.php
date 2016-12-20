<?php
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('WebApplication');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

// If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        // create an sha1(); hash of the password
		$password = sha1($password);
 
        $query = "INSERT INTO `account` (username, password) VALUES ('$username', '$password')";
        $result = mysql_query($query);
        if($result){
            header('location:index.php');
        }
    }
?>