<?php

$host="localhost";
$user ="root";
$haslo="";
$baza="sklep";
$port= 3306;

$polaczenie= @new Mysqli($host,$user,$haslo,$baza,$port);{

    if (mysqli_connect_errno()!=0) {
        echo "error";
        # code...
    }

    else{

        echo "poloczono";
    }
}
?>