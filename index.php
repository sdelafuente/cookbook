<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP COOKBOOK</title>
        <?php
            include './clases/numero.php';
            $objetoNumero = new Numero();
         ?>
    </head>
    <body >
        <h1 >PHP Cookbook</h1>
        <nav id="main_nav">
            <ul>
                <li>
                    <a href="../index.php" target="_self" tabindex="1">Inicio</a>
                </li>
                <li>
                    <a href="../paginas/cadenas.php" tabindex="2">Cadenas</a>
                </li>
                <li>
                    <a href="../paginas/numeros.php" tabindex="3">Numeros</a>
                </li>
            </ul>
        </nav>

    </body>
</html>
