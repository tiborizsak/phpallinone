<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="jelszoell2.0.php" method="get">
            Add meg ide bele a peszvordot:<input type="text" name="jelszo">
            <input type="submit">
        </form>
        <br><br>
        <?php
        
        function benneVan($miben, $mi) {
                return strpos($miben, $mi) !== FALSE;
            }
        
            function jelszoellenorzes($jelszo, $minkbdb, $minnbdb, $minszdb, $minijdb) {
                $mit = array("á", "é", "í", "ó", "ö", "ő", "ú", "ü", "ű", "Á", "É", "Í", "Ó", "Ö", "Ő", "Ú", "Ü", "Ű");
                $mire = array("a", "e", "i", "o", "o", "o", "u", "u", "u", "A", "E", "I", "O", "O", "O", "U", "U", "U");
                $jelszo = str_replace($mit, $mire, $jelszo);
                
//                define("KB", "abcdefghijklmnopqrstuvwxyz");
//                $KB = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y");
                $KB = "abcdefghijklmnopqrstuvwxyz";
                define("NB", strtoupper($KB));
                define("SZ", "0123456789");
                define("IJ", "+-!?.,:;()[]{}=<>*/\"'\\\$");

                $kbdb = 0;
                $nbdb = 0;
                $szdb = 0;
                $ijdb = 0;
                
                for ($i = 0; $i < strlen($jelszo); $i++) {
                    if (benneVan($KB, $jelszo[$i])) { // kisbetű
                        $kbdb++;
                    } else
                    if (benneVan(NB, $jelszo[$i])) { // nagybetű
                        $nbdb++;
                    } else
                    if (benneVan(SZ, $jelszo[$i])) { // számjegy
                        $szdb++;
                    } else
                    if (benneVan(IJ, $jelszo[$i])) { // írásjel
                        $ijdb++;
                    }
                }
                
                return $kbdb >= $minkbdb && $nbdb >= $minnbdb && $szdb >= $minszdb && $ijdb >= $minijdb;
               
            }

            $password = filter_input(INPUT_GET, "jelszo");
            
            echo var_dump(jelszoellenorzes($password, 2, 2, 2, 2));
            
            $jelszeredmeny = jelszoellenorzes($password, 2, 2, 2, 2);
            
            function jelszouzenet($eredmeny){
                if ($eredmeny === FALSE){
                    echo "ezt elbasztad";
                } else 
                    if ($eredmeny === TRUE){
                        echo "szerencsed volt";
                    }
            }
            
            echo jelszouzenet($jelszeredmeny);
        ?>
    </body>
</html>
