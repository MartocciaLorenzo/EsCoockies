<html>
    <body>
        <fieldset>
            <legend>Es Cookie</legend>
                <form method = post action = index.php>
                    <p> inserisci un numero: <input type = number id = n name = numero></br> </p>
                    <input type = submit value = invia>
                    <input type = submit value = resetta id=a name=a>
                </form>
        </fieldset>
        <h1>
            <?php
                if(!empty($_POST['numero'])){
                    $numero = $_POST['numero'];
                    $name= "numero"; 
                if(!empty($_COOKIE['numero'])){
                    $value = $numero."-".$_COOKIE['numero']; 
                }else{
                    $value= $numero;
                }
                setcookie($name, $value);

                $cookie = $_COOKIE['numero'];
                $array = explode("-", $cok);
                echo "totale: ".count($array);
                $indice=0;
                for ($i=0; $i <count($array) ; $i++) { 
                    $indice = $indice + $array[$i];
                }
                echo "somma: ".$indice;
                echo "media: ".($indice)/count($array);
                }
                if(!empty($_POST['a'])){
                    $name= "numero"; 
                    $value= "";
                    setcookie($name,$value);
                }
            ?>
        </h1>
    </body>
</html>