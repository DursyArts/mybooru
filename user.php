<?php
// MYSQL DB connection
$server     =   "localhost";
$user       =   "root";
$password   =   "";
$db         =   "mybooru";
$mysqli = new mysqli($server,$user,$password,$db);

//Check Con.
if($mysqli->connect_errno){
    echo "FAILED TO CONNECT TO MYSQL: " . $mysqli -> connect_error;
    exit();
}else{
    echo "Connection established to " . $db . " on " . $server;
}

// Submit Button
if(isset($_POST["login"])){
    
}

?>

<html>
<head>
    <title>test</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
</head>
</head>
<body>
    
<div id="content">
    <form method="get" action="index.php">
        <a href="index.php?p=login">login</a>
        <a href="index.php?p=register">register</a>
    </form>
</div>

</body>
</html>