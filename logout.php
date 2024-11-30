<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>logout</title>
    </head>
    <body>
        <?php 
            session_start();
            session_unset();
            session_destroy(); 
            echo "<meta http-equiv='refresh' content='0;url=index.php'/>";
            ?>
        <a href="index.php">if it not work click here...</a>
    </body>
</html>