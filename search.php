<form action="index.php" method="get">
    <div id="content">
        <h1>mybooru</h1>
        <p>Literally my own booru soft</p>
            <div id="links">
                <a href="/index.php?p=faq">faq</a> -
                <a href="/index.php?p=posts">posts</a> -
                <a href="/index.php?p=user">user</a> - 
                <a href="/index.php?p=casino">casino</a>
            </div>
        <input type="text" placeholder="example: loli" name="p=posts&s"></input>
        <input type="submit" value="search"></input>
    </div>
</form>

<?php
if(isset($_GET["p"])){
    if($_GET["p=posts&s="] . $_GET["p=posts&s"]){
        include("posts.php");
    }
}
?>
