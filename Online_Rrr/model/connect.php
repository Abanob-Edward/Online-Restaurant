<?php
$dsn = "mysql:host=localhost;dbname=onlinerestaurantsystem1"; //data source name '
$user = 'root'; //user to connect  
$pass = '';
try {
    $con = new PDO($dsn, $user, $pass); // start anew connection with pdo class

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



} catch (PDOException $e) {
    echo "Failed " . $e->getMessage();
}


?>