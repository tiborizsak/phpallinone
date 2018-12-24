<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Olajos</title>
        <style>
            .red {
                color: red;
            }
            .black {
                color: black;
            }
        </style>
    </head>
    <body>
        <?php
        /*
            $orszagok = array("Oroszország", "Szaúd-Arábia", "USA", "Irán", "Venezuela", "Irak", "Kuvait");
            $szazalekok = array(27.4, 22.4, 21.1, 11.1, 6.2, 5.9, 5.7);
            $osszesen = 1894;
            
            foreach ($orszagok as $i => $egyOrszagnev) {
                $termeles = $osszesen / 100 * $szazalekok[$i];
                $class = $termeles > 300 ? "red" : "black";
                echo '<span class="'.$class.'">' . $egyOrszagnev . ': ' . number_format($termeles, 2) . ' mHl</span><br>';
            }
        
            $adatok = array( // kétdimenziós tömb
                array("Oroszország", 27.4),
                array("Szaúd-Arábia", 22.4),
                array("USA", 21.1),
                array("Irán", 11.1),
                array("Venezuela", 6.2),
                array("Irak", 5.9),
                array("Kuvait", 5.7)
            );
            $osszesen = 1894;
//            echo $adatok[4][0] . ": " . $adatok[4][1] . "%<br>"; // pl. Így hivatkozunk Venezuela adataira
            
            foreach ($adatok as $egyOrszag) { // $egyOrszag[0] = országnév, $egyOrszag[1] = százalék
                $termeles = $osszesen / 100 * $egyOrszag[1];
                $class = $termeles > 300 ? "red" : "black";
                echo '<span class="'.$class.'">' . $egyOrszag[0] . ': ' . number_format($termeles, 2) . ' mHl</span><br>';
            }
            
            foreach ($adatok as $i => $egyElem) {
                echo 'A $adatok tömb '.$i.". eleme egy ".count($egyElem)." elemű tömb<br>";
            }
            
            foreach ($adatok as $egyElem) {
                if ($egyElem[0] === "Irak") {
                    echo $egyElem[0]." termelése: ".$egyElem[1]." %<br>";
                }
            }
            
            // szekvenciális keresés programozói tétele
            $i = 0;
            while ($i < count($adatok) && $adatok[$i][0] !== "USA") { // amíg van a tömbben i. elem ÉS az i. elem NEM a keresett érték
                $i++; // lépünk a köv. elemre
            }
            if ($i < count($adatok)) { // nem értünk a tömb végére, tehát megtaláltuk a keresett országot
                echo $adatok[$i][0]." termelése: ".$adatok[$i][1]." %<br>";
            } else {
                echo "Nincs ilyen ország a tömbben.<br>";
            }

            $adatok = array(
                array("Oroszország", "Szaúd-Arábia", "USA", "Irán", "Venezuela", "Irak", "Kuvait"), // $adatok[0]
                array(27.4, 22.4, 21.1, 11.1, 6.2, 5.9, 5.7) // $adatok[1]
            );
            $osszesen = 1894;
//            echo $adatok[0][4] . ": " . $adatok[1][4] . "%<br>"; // pl. Így hivatkozunk Venezuela adataira
            
            foreach ($adatok[0] as $i => $orszagnev) {
                $termeles = $osszesen / 100 * $adatok[1][$i];
                $class = $termeles > 300 ? "red" : "black";
                echo '<span class="'.$class.'">' . $orszagnev . ': ' . number_format($termeles, 2) . ' mHl</span><br>';
            }
            
            // megoldás asszociatív tömbbel
//            $adatok["orszagok"] = array("Oroszország", "Szaúd-Arábia", "USA", "Irán", "Venezuela", "Irak", "Kuvait");
//            $adatok["szazalekok"] = array(27.4, 22.4, 21.1, 11.1, 6.2, 5.9, 5.7);
            $adatok = array( // ugyanaz, mint az előző két sor
                "orszagok" => array("Oroszország", "Szaúd-Arábia", "USA", "Irán", "Venezuela", "Irak", "Kuvait"),
                "szazalekok" => array(27.4, 22.4, 21.1, 11.1, 6.2, 5.9, 5.7)
            );
            $osszesen = 1894;
//            echo $adatok["orszagok"][4] . ": " . $adatok["szazalekok"][4] . "%<br>"; // pl. Így hivatkozunk Venezuela adataira
            
            foreach ($adatok["orszagok"] as $i => $orszagnev) {
                $termeles = $osszesen / 100 * $adatok["szazalekok"][$i];
                $class = $termeles > 300 ? "red" : "black";
                echo '<span class="'.$class.'">' . $orszagnev . ': ' . number_format($termeles, 2) . ' mHl</span><br>';
            }
            
            $adatok = array(
                array(
                    "orszag" => "Oroszország",
                    "szazalek" => 27.4
                ),
                array(
                    "orszag" => "Szaúd-Arábia",
                    "szazalek" => 22.4
                ),
                array(
                    "orszag" => "USA",
                    "szazalek" => 21.1
                ),
                array(
                    "orszag" => "Irán",
                    "szazalek" => 11.1
                ),
                array(
                    "orszag" => "Venezuela",
                    "szazalek" => 6.2
                ),
                array(
                    "orszag" => "Irak",
                    "szazalek" => 5.9
                ),
                array(
                    "orszag" => "Kuvait",
                    "szazalek" => 5.7
                )
            );
            $osszesen = 1894;
//            echo $adatok[4]["orszag"] . ": " . $adatok[4]["szazalek"] . "%<br>"; // pl. Így hivatkozunk Venezuela adataira
            
            foreach ($adatok as $egyOrszag) { // $egyOrszag["orszag"] = országnév, $egyOrszag["szazalek"] = százalék
                $termeles = $osszesen / 100 * $egyOrszag["szazalek"];
                $class = $termeles > 300 ? "red" : "black";
                echo '<span class="'.$class.'">' . $egyOrszag["orszag"] . ': ' . number_format($termeles, 2) . ' mHl</span><br>';
            }
        */
            define("ORSZAG", "orszagnev");
            define("SZAZALEK", "szazalek");
            $adatok = array(
                array(
                    ORSZAG => "Oroszország",
                    SZAZALEK => 27.4
                ),
                array(
                    ORSZAG => "Szaúd-Arábia",
                    SZAZALEK => 22.4
                ),
                array(
                    ORSZAG => "USA",
                    SZAZALEK => 21.1
                ),
                array(
                    ORSZAG => "Irán",
                    SZAZALEK => 11.1
                ),
                array(
                    ORSZAG => "Venezuela",
                    SZAZALEK => 6.2
                ),
                array(
                    ORSZAG => "Irak",
                    SZAZALEK => 5.9
                ),
                array(
                    ORSZAG => "Kuvait",
                    SZAZALEK => 5.7
                )
            );
            $osszesen = 1894;
            echo $adatok[4][ORSZAG] . ": " . $adatok[4][SZAZALEK] . "%<br>"; // pl. Így hivatkozunk Venezuela adataira
            echo $adatok[4]["orszagnev"] . ": " . $adatok[4]["szazalek"] . "%<br>"; // pl. Így hivatkozunk Venezuela adataira
            
            foreach ($adatok as $egyOrszag) { // $egyOrszag[ORSZAG] = országnév, $egyOrszag[SZAZALEK] = százalék
                $termeles = $osszesen / 100 * $egyOrszag[SZAZALEK];
                $class = $termeles > 300 ? "red" : "black";
                echo '<span class="'.$class.'">' . $egyOrszag[ORSZAG] . ': ' . number_format($termeles, 2) . ' mHl</span><br>';
            }
            

        ?>
    </body>
</html>
