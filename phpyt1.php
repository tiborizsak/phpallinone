<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="phpyt1.php" method="get">
            Lófasz: <input type="checkbox" name="randomarr[]" value="lófasz"/>
            <br>
            Cintányér: <input type="checkbox" name="randomarr[]" value="cintányér"/>
            <br>
            Demizson: <input type="checkbox" name="randomarr[]" value="demizson"/>
            <br>
            Sörpad: <input type="checkbox" name="randomarr[]" value="sörpad"/>
            <br>
            <input type="submit">
        </form>
        <br><br>
        <?php
        
        $fruits = filter_input(INPUT_GET, "randomarr");
        
        print_r($_GET);
        //print($fruits[1]);
        
        ?>
    </body>
</html>
