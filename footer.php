<body>
<div id="footer">
    <?php 
    if(isset($_COOKIE["Loggedin"])){
        ?>
            <a href="index.php?p=logout">logout</a>
        <?php
    }else{
        ?>
            <a href="index.php?p=login">login</a>
        <?php
    }
    ?>
    - <a href="index.php">home</a>
</div>
</body>