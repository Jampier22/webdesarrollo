<?php
    //phpinfo();
    echo "<h1>"."Aprendiendo PHP"."</h1><br>";
    //Variables en PHP
    $nombre = "Jampier";
    $edad = 22;
    echo "Mi nombre es: ".$nombre." y mi edad es: ".$edad." años"."<br>";

    if ($edad >= 18)
        echo "Mayor de Edad"."<br>";
    else
        echo "Menor de Edad"."<br>";

    $a = 1;
    while ($a <= 5)
    {
        echo $a."<br>";
        $a++;
    }


?>