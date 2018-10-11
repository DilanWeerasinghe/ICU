<html>
    <head>
        <title>welcome</title>
    </head>
    <body>
        <?php 
        session_start();
        $_SESSION["name"]=$_POST["name"];
        $_SESSION["color"]=$_POST["color"];
        $_SESSION["dob"]=$_POST["dob"];
        ?>
        <a href="one.php" target="_blank">page1</a>
        <a href="two.php" target="_blank">page2</a>
        <a href="three.php" target="_blank">page3</a>
    </body>
</html>

