<?php
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Регистрация </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<h1 align="center"> ВЫ не зарегистрированы!!! </h1>

<form method="post" action="../View/Registrathion.php" class="login">
    <p>
        <label for="login">Логин:</label>
        <input type="text" name="login" id="login" value="">
    </p>

    <p>
        <label for="password">Пароль:</label>
        <input type="password" name="pass" id="pass" value="">
    </p>

    <p class="login-submit">
        <button type="submit" class="login-button">Войти</button>
    </p>

   <!-- <p class="forgot-password"><a href="index.html">Забыл пароль?</a></p> -->
</form>
<?php
 include_once __DIR__ . "/../Controls/RegistrationControl.php";
    $reg = new RegistrationControl();
    $check = $reg->CheckAutorize();
//var_dump($check);


       if($check)
        {
            echo ' <script type="text/javascript">
            location.replace("../View/HelloPage.php");</script>';
            //<meta http-equiv="refresh" content=0; url=../View/HelloPage.php">

        }
?>


</body>

</html>
