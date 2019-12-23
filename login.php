<?php
$server     =   "localhost";
$user       =   "root";
$password   =   "";
$db         =   "mybooru";
$mysqli     =   new mysqli($server,$user,$password,$db);

if(isset($_POST["login"])){
    
        $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
        $password = mysqli_real_escape_string($mysqli, $_POST["password"]);
        $query = mysqli_query($mysqli, "SELECT * FROM user WHERE password = '$password' and name = '$username'");

        $row		= mysqli_fetch_array($query);
		$num_row 	= mysqli_num_rows($query);
        echo $row;
        if($num_row > 0){       
            setcookie("Loggedin",$row[1],time()+3600);
            header("Location: index.php?p=user");
        }else{
            ?><p>Auth failed.</p><?php
            //header("Location: index.php");
        }
}

?>

<body>
    
    <form action="index.php?p=login" method="post" id="login">
        <p>Login:</p>
        Username: <input type="text" placeholder="username" name="username"></input><br><br>
        Password: <input type="password" placeholder="password" name="password"></input><br><br>
    <input type="submit" value="login" name="login"></input>
</form>