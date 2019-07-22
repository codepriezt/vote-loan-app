<?php
//database_connection.php   mysql://b69325712d7515:27d1a683@us-cdbr-iron-east-02.cleardb.net/heroku_077fa93d6720c55?reconnect=true

$host = "us-cdbr-iron-east-02.cleardb.net";
$user = "b69325712d7515";
$password = "527d1a683";
$dbname = "heroku_077fa93d6720c55";
$port = "3306";

//try intiliazing a connection

try{
    // connect to my pgsql db 

    $connect  = new PDO ("mysql:host=" . $host . ";port=" . $port  . ";dbname=" . $dbname .";user=" .$user. ";password=" . $password) ;



$connect = PDO::setAttribute(PDO::ATTR_ERRMODE ,PDO::EERMODE_EXCEPTION);
}
catch(PDOException $e){
    echo 'connection failed: '. $e->getmessage();
}



?>