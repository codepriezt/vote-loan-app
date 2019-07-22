<?php
//database_connection.php

$host = "ec2-107-20-173-2.compute-1.amazonaws.com";
$user = "lovrpbptfqrlkb";
$password = "98fc2fdc87d7aa66ee2f1d64c4f88ff1132f37d8a2e0782c862480e1b8931d38";
$dbname = "dflnqv8pdr50op";
$port = 5432;

//try intiliazing a connection

try{
    // connect to my pgsql db 

    $connect  = new PDO ("pgsql:host=" . $host . "port=" . $port  . "dbname=" . $dbname ."user=" .$user. "password=" . $password) ;



$connect = PDO::setAttribute(PDO::ATTR_ERRMODE ,PDO::EERMODE_EXCEPTION);
}
catch(PDOException $e){
    echo 'connection failed: '. $e->getmessage();
}



?>