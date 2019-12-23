<?php
$server     =   "localhost";
$user       =   "root";
$password   =   "";
$db         =   "mybooru";
$mysqli     =   new mysqli($server,$user,$password,$db);

//Check Con.
if($mysqli->connect_errno){
    echo "FAILED TO CONNECT TO MYSQL: " . $mysqli -> connect_error;
    exit();
}else{
    //echo "Connection established to " . $db . " on " . $server;
}
?>