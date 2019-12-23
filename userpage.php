<?php
// fetching rows
/*if ($result = $mysqli -> query($sql)) {
    while ($row = $result -> fetch_row()) {
      //printf ("id: %s name: %s email: %s password: %s ip: %s", $row[0], $row[1], $row[2], $row[3], $row[4]);
      ?> <h1>Welcome <?php echo $row[1] ?> </h1><?php
    }
    $result -> free_result();
  }
  */


//$cookie_name = "loggedin";
//setcookie("Loggedin", $row[1], time()+3600);

//checks if cookie Loggedin was set



if(isset($_COOKIE["Loggedin"])){
    $ip = $_SERVER["REMOTE_ADDR"];
    $username = $_COOKIE["Loggedin"];
    
    mysqli_query($mysqli, "UPDATE user SET ip='$ip' WHERE id='$username'");

    // id|name|email|password|ip|avatar|coins
    // 0 |1   |2    |3       |4 |5     |6
    $query = mysqli_query($mysqli, "SELECT * FROM user WHERE name = '$username'");
    $row_user = mysqli_fetch_array($query);
    $id = $row_user[0];
    $email = $row_user[2];
    $avatar = $row_user[5];
    $coins = $row_user[6];
    
    
    ?> 
    <div id="userpage-content">
        <div id="userpage">
            <img src=" <?php echo $avatar;?>"id="avatar"></img>
            <p>logged in as: <?php echo $username; ?></p>
            <p>email: <?php echo $email; ?></p>
            <p>ID: <?php echo $id; ?></p>
            <p><img src="/res/coin.gif" id="coin">: <?php echo $coins; ?></img> ₵</p>
        </div>
        <div id="posts">
            <a href="index.php?p=upload">Upload</div></a>
            <table id="images">
            <?php
            $query = mysqli_query($mysqli, "SELECT * FROM images WHERE user = '$username'");   
            $i = 0;
            while($row_img = mysqli_fetch_assoc($query)){
                if($i%5 == 0){
                    echo "<tr>";
                }
                echo "<td><img src='images/{$row_img['name']}' alt='{$row_img['name']}' id='user_gallery'></td>";
                if($i%1 == 2){
                    echo "</tr>";
                }
                $i++;
            }
            ?>
            </table>
        </div>
    </div>
    <?php
}else{
    ?>
        <body>
            <div id="userpage">
                    <h1>Welcome</h1>
                    <p>seems like you're not logged in</p>
                <form method="get" action="index.php">
                    <a href="index.php?p=login">login</a>
                    <a href="index.php?p=register">register</a>
                </form>
            </div>
        </body>
        <?php
}
?>

