<?php include("database.php"); include("header.php"); include("footer.php"); ?>
<html>
<head>
    <title>test</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
</head>
</head>
<body>

<?php
if(isset($_GET["p"])){
    if($_GET["p"] == "user"){
        include("userpage.php");
    }else if($_GET["p"] == "posts"){
        include("posts.php");
    }else if($_GET["p"] == "faq"){
        include("faq.php");
    }else if($_GET["p"] == "login"){
        include("login.php");
    }else if($_GET["p"] == "register"){
        include("register.php");
    }else if($_GET["p"] == "logout"){
        include("logout.php");
    }
} else {
    include("search.php");  
}


?>
</body>
</html>