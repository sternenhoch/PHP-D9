<?php
define("ERROR_LOG_FILE", "./error_log_file.log");

function connect_db($username, $host, $password, $port, $db){
try{
    $dsn = "mysql:dbname=$db;host=$host;port=$port";
    $dbh= new PDO($dsn, $username, $password);
    return $dbh;
}
catch(PDOException $error){
   echo "PDO ERROR: " .$error->getMessage() . " storage in <error_log_file>\n";
}
}

connect_db("razmo", "razmot", "localhost", "3306", "coding");

