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
            include './clases/tiempo.php';
            $objetoTiempo = new Tiempo();
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
                <li>
                    <a href="../paginas/tiempo.php" tabindex="4">Fechas</a>
                </li>
            </ul>
        </nav>
        <div class="contenido">
            <h3>¿?</h3>
            <?php
            ?>
        </div>
    </body>
</html>
