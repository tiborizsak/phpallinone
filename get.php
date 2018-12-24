<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>get</title>
    </head>
    <body>
        
        <form action="get.php" method="get">
            Put pw here: <input type="text" name="szoveg"><br>
            <input type="submit">
        </form>
        <br><br>
        
        <?php
            echo filter_input(INPUT_GET, "szoveg");
        ?>
    </body>
</html>
