<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Magasság</title>
    </head>
    <body>
        <?php
            $nevek = array("Kovács Béla", "Horváth Lajos", "Takácsi Előd", "Solymár Tódor", "Latinka Alajos", "Obester János", "Fankovics Béláné", "Kultur János", "Ópusztai Jenő", "Kovács Franciska", "Félig László", "Herman Géza", "Bóczay Elemérné", "Teljes Ödön", "Deli Vitéz");
            $nemek = array("férfi", "férfi", "férfi", "férfi", "férfi", "férfi", "nő", "férfi", "férfi", "nő", "férfi", "férfi", "nő", "férfi", "férfi");
            $magassagok = array(183, 193, 176, 178, 182, 188, 167, 190, 177, 162, 179, 181, 170, 191, 182);
            
            $nokSzama = 0;
            $ferfiakSzama = 0;
            $ferfiakOsszMagassaga = 0;
            $legmagasabbNoSorszama = -1;
            $ferfiakNevei180Felett = array();
            
            foreach ($nemek as $i => $nem) {
                if ($nem === "nő") {
                    $nokSzama++;
                    if ($legmagasabbNoSorszama === -1 || $magassagok[$i] > $magassagok[$legmagasabbNoSorszama]) {
                        $legmagasabbNoSorszama = $i;
                    }
                } else {
                    $ferfiakSzama++;
                    $ferfiakOsszMagassaga += $magassagok[$i];
                    if ($magassagok[$i] > 180) {
                        array_push($ferfiakNevei180Felett, $nevek[$i]);
//                        $ferfiakNevei180Felett[] = $nevek[$i];
                    }
                }
            }
            $ferfiakAtlagosMagassaga = $ferfiakSzama > 0 ? number_format($ferfiakOsszMagassaga / $ferfiakSzama, 2) : "-";
            $legmagasabbNoNeve = $nokSzama > 0 ? $nevek[$legmagasabbNoSorszama] : "-";
            $legmagasabbNoMagassaga = $nokSzama > 0 ? $magassagok[$legmagasabbNoSorszama] : "-";
            
            echo "Nők száma: $nokSzama<br>";
            echo "Férfiak száma: $ferfiakSzama<br>";
            echo "Férfiak átlagos magassága: $ferfiakAtlagosMagassaga cm<br>";
            echo "Legmagasabb nő: $legmagasabbNoNeve - $legmagasabbNoMagassaga cm<br>";
            echo "<h4>180 cm feletti férfiak nevei</h4>";
            foreach ($ferfiakNevei180Felett as $nev) {
                echo $nev . "<br>";
            }
        ?>
    </body>
</html>
