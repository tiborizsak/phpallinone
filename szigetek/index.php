<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Szigetek</title>
    </head>
    <body>
        <?php
            $adatok = array(0, 0, 0, 5, 12, 7, 0, 0, 0, 8, 15, 22, 5, 3, 0, 0, 0, 5, 13, 25, 10, 0, 0, 0, 4, 8, 2, 0, 0, 0);
            $szigetDB = 0;
            $legmagasabbHegycsucs = 0;
            $legmagasabbHegySzigete = 0;
            $leghosszabbSzigetHossz = 0;
            $leghosszabbSzigetSzama = 0;
            for ($i = 1; $i < count($adatok); $i++) {
                if ($adatok[$i-1] === 0 && $adatok[$i] > 0) { // sziget kezdete
                    $szigetDB++; // eggyel több sziget van
                    $aktSzigetHossz = 0;
                }
                if ($adatok[$i] > $legmagasabbHegycsucs) { // ha az aktuális mérési pont nagyobb, mint az eddigi legmagasabb érték...
                    $legmagasabbHegycsucs = $adatok[$i]; // ...akkor ez az aktuális mérési pont legyen a legmagasabbként tárolva
                    $legmagasabbHegySzigete = $szigetDB;
                }
                if ($adatok[$i] > 0) { // sziget felett vagyunk
                    $aktSzigetHossz++;
                }
                if ($adatok[$i-1] > 0 && $adatok[$i] === 0) { // sziget vége
                    if ($aktSzigetHossz > $leghosszabbSzigetHossz) {
                        $leghosszabbSzigetHossz = $aktSzigetHossz;
                        $leghosszabbSzigetSzama = $szigetDB;
                    }
                }
            }
            echo "A szigetek száma: $szigetDB<br>";
            echo "A legmagasabb hegycsúcs: $legmagasabbHegycsucs m<br>";
            echo "A legmagasabb hegy szigetének sorszáma: $legmagasabbHegySzigete.<br>";
            echo "A leghosszabb sziget hossza: $leghosszabbSzigetHossz km<br>";
            echo "A leghosszabb sziget a $leghosszabbSzigetSzama. sziget.<br>";
        ?>
    </body>
</html>
