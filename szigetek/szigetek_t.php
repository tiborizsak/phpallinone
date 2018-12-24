<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Szigetek</title>
    </head>
    <body>
        <?php
            $adatok = array(0,0,0,0,0,0,0,3,4,5,6,7,7,7,8,8,6,5,5,4,3,2,0,-1,-2,-5,-5,-5,-4,-3,-2,-1,0,1,3,4,5,5,0,0,0,0,0,0,0,1,5,0,0,0,0,-3,-12,-34,-21,-3,0,3,6,8,9,21,54,65,24,7,0,-10,-4,-5,-10,-34,-10,0,0,0,0,0,0,0);
            $nbOfSziget = 0;
            $nbOfVolgy = 0;
            
            for ($i=1; $i < count($adatok); $i++){
                if ($adatok[$i-1] === 0 && $adatok[$i] > 0){
                    $nbOfSziget++;
                }
                if ($adatok[$i] > 0)
            }
            
            echo $nbOfSziget;
            
        ?>
    </body>
</html>
