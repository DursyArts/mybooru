<body>
<div class="header">
<a href="/index.php">myBooru~</a>
    <p>Logged in as: 
    <?php 
    
    if(isset($_COOKIE["Loggedin"])){
        echo $_COOKIE["Loggedin"];
    }else{
        echo " currently not logged in.";
    }
    ?></p>
    
</div>
</body>