<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Stringek kezelése Php-ban</title>
    </head>
    <body>
        <?php
            $szoveg1 = "alma";
            $szoveg2 = "fa";
            echo $szoveg1 . $szoveg2 . "<br>"; // almafa
            echo $szoveg1[2] . "<br>"; // m
            
            // stringkezelő függvények
            echo strlen($szoveg1) . "<br>"; // 4
            $szoveg = "Árvíztűrő tükörfúrógép";
            echo strlen($szoveg) . "<br>"; // 31
            echo mb_strlen($szoveg) . "<br>"; // 22
            
            $szoveg = "   alma   ";
            echo $szoveg . "<br>";
            echo mb_strlen($szoveg) . "<br>"; // 10
            echo trim($szoveg) . "<br>";
            echo mb_strlen(trim($szoveg)) . "<br>"; // 4
            
            $madar = "szarka";
            $modositando = "szar";
            $mire = "csó";
            echo str_replace($modositando, $mire, $madar) . "<br>"; // csere: mit, mire, miben
            
            $cserelendo = "fehér";
            $mire = "f***r";
            $mondat = "Télen Hófehérke issza a fehér tejet, miközben az ablakon át nézi, hogy milyen szép a fehér táj.";
            echo str_replace($cserelendo, $mire, $mondat) . "<br>"; // csere: mit, mire, miben
            
            $cserelendo = array("fekete", "fehér", "igen", "nem");
            $mire = array("f****e", "f***r", "i**n", "n*m");
            $mondat = "Nem igen értem, hogy télen miért fehér a nem fekete hó.";
            echo str_replace($cserelendo, $mire, $mondat) . "<br>"; // csere: mit, mire, miben
            echo str_ireplace($cserelendo, $mire, $mondat) . "<br>"; // csere: mit, mire, miben
            $mondat = "Télen Hófehérke issza a tejet.";
            echo var_dump(mb_strpos($mondat, "Hófehérke")) . "<br>"; // pozíció: miben, mit
            echo var_dump(mb_strpos($mondat, "farkas")) . "<br>"; // false
            
            echo mb_substr($mondat, 6, 9) . "<br>"; // részstring: miből, hányadiktól, hányat (pl. Hófehérke)
            $szoveg = "abcdefgh";
            echo mb_substr($szoveg, 5) . "<br>"; // fgh
            echo mb_substr($szoveg, 2, 4) . "<br>"; // cdef
            echo mb_substr($szoveg, -3) . "<br>"; // fgh
            echo mb_substr($szoveg, -5, 3) . "<br>"; // def
            
            echo mb_strtoupper($mondat) . "<br>"; // csupa nagybetűsre alakítás
            echo mb_strtolower($mondat) . "<br>"; // csupa kisbetűsre alakítás
            
            $mondat = "a mondat kezdőbetűje mindig nagybetű.";
            echo ucfirst($mondat) . "<br>"; // A mondat...
            echo ucwords($mondat) . "<br>"; // A Mondat...
            $mondat = "öreg néne őzikéje";
            echo ucfirst($mondat) . "<br>"; // öreg...
            echo ucwords($mondat) . "<br>"; // A Mondat...
            
            $szoveg = "Ahhoz, hogy jövőre végre letaszítsák a trónról a Mercedest, nem hibázhatnak, ezzel tisztában van Maurizio Arrivabene is. Amíg a csapat többször is stratégiai bakikat követett el a szezon során, addig Vettel már-már megszámlálhatatlanul halmozta a hibákat a szezon második felében, és csak egyetlen versenyt tudott megnyerni a nyári szünetet követően.";
            echo wordwrap($szoveg, "30", "<br>") . "<br>";
            
            $forraskod = '<script>alert("Helló!")</script>';
            echo strip_tags($forraskod) . "<br>"; // tageket törli: alert("Helló!")
            
            $forraskod = '<a href="https://google.com"><b><i>Kattints ide!</i></b></a>';
            echo htmlspecialchars($forraskod) . "<br>";
            echo strip_tags($forraskod, "<b><i>") . "<br>";
            
            $szoveg = explode(" ", $szoveg); // szövegből -> tömb
            print_r($szoveg);
            
            $nevek = array("Kiss Bubu", "Nagy Manci", "Hü Jenő", "Hát Izsák", "Vincs Eszter");
            $nevek = implode(", ", $nevek); // Kiss Bubu, Nagy Manci, Hü Jenő, Hát Izsák, Vincs Eszter
            echo "<br>$nevek<br>"; 
            
            print_r(pathinfo("http://localhost/12/stringkezeles/index.php"));
            echo "<br>";
            echo pathinfo("http://localhost/12/stringkezeles/index.php")["dirname"] . "<br>";
            echo pathinfo("http://localhost/12/stringkezeles/index.php")["basename"] . "<br>";
            echo pathinfo("http://localhost/12/stringkezeles/index.php")["extension"] . "<br>";
            echo pathinfo("http://localhost/12/stringkezeles/index.php")["filename"] . "<br>";
            
            echo pathinfo("http://localhost/12/stringkezeles/index.php", PATHINFO_DIRNAME) . "<br>";
            echo pathinfo("http://localhost/12/stringkezeles/index.php", PATHINFO_BASENAME) . "<br>";
            echo pathinfo("http://localhost/12/stringkezeles/index.php", PATHINFO_EXTENSION) . "<br>";
            echo pathinfo("http://localhost/12/stringkezeles/index.php", PATHINFO_FILENAME) . "<br>";
            
            
        ?>
    </body>
</html>
