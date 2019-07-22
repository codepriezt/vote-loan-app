<?php
//database_connection.php

$host = "ec2-174-129-29-101.compute-1.amazonaws.com";
$user = "cxbklitodqfgxy";
$password = "5d8b5f3d1253eeb1802f84e1e723af0a6ba2a0f79fe417bf647ab05b03a5c4fc";
$dbname = "d9bghlen9a6p2o";
$port = "5432";

//try intiliazing a connection

try{
    // connect to my pgsql db 

    $connect  = new PDO ("pgsql:host=" . $host . ";port=" . $port  . ";dbname=" . $dbname .";user=" .$user. ";password=" . $password) ;



$connect = PDO::setAttribute(PDO::ATTR_ERRMODE ,PDO::EERMODE_EXCEPTION);
}
catch(PDOException $e){
    echo 'connection failed: '. $e->getmessage();
}



?>