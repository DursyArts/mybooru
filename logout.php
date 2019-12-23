<?php
include("userpage.php");
setcookie("Loggedin", row[1], time()-3600);
header("Location: index.php");
?>