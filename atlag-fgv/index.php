<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Átlagszámoló fgv.</title>
    </head>
    <body>
        <?php
            function array_avg($t, $tort) {
                if (is_array($t) && count($t) > 0 && is_int($tort) && $tort >= 0) {
                    return number_format(array_sum($t) / count($t), $tort);
                } else {
                    return "Hiba!<br>";
                }
            }
            
            $szamok = array(6, 3, 9.4, -1, 5, 5, 2);
            echo array_avg($szamok, 2);
        ?>
    </body>
</html>
