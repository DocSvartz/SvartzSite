<?php

if(isset($_COOKIE['login']))
    {
        echo "Куки";

    }
else
    {
        //echo " нет Куки";
        include_once __DIR__ . "./View/Registrathion.php";
        die;
    }
//var_dump($_COOKIE);

?>

