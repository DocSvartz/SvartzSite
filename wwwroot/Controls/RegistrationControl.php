<?php

class RegistrationControl
{

   // private $nameUser;
    //private $passUser;

    public function CheckAutorize()
    {
        var_dump($_POST);
        if(isset($_POST['login'])|| isset($_POST['pass']))
        {
            $nameUser = $_POST['login'];
            $passUser = $_POST['pass'];

           // var_dump($nameUser);
            //var_dump($passUser);
           // require_once __DIR__ . "/../View/HelloPage.php";

            return true;


        }
        else
        {
            echo "error";

            return false;
        }
    }

}
?>