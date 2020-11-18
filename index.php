<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <!-- <link rel="shortcut icon" type="image/png" href="../imagenes/favicon.ico"/> -->
        <link rel="stylesheet" href="css/style.css">
        <title>PHP COOKBOOK</title>
        <?php
            include './clases/numero.php';
            $objetoNumero = new Numero();
         ?>
    </head>
    <body >
        <h1>PHP Cookbook</h1>
        <nav id="main_nav">
            <ul>
                <li>
                    <a href="../index.php" target="_self" tabindex="1">Inicio</a>
                </li>
                <li>
                    <a href="../paginas/cadenas.php" tabindex="2">Cadenas</a>
                </li>
                <li>
                    <!-- <a href="../paginas/numeros.php" tabindex="3">Numeros</a> -->
                    <a href="#" tabindex="3">Numeros</a>
                </li>
            </ul>
        </nav>
        <div class="contenido">
            <h3>¿Es numérico?</h3>
            <?php
                $objetoNumero->esNumerico();
            ?>
        </div>
        <div class="contenido">
            <h3>¿Son dos floats iguales?</h3>
            <?php
                $objetoNumero->sonFloatsIguales();
            ?>
        </div>
        <div class="contenido">
            <h3>round, ceil, floor - redondead flotantes.</h3>
            <?php
                $objetoNumero->redondearFlotantes();
            ?>
        </div>
        <div class="contenido">
            <h3>Iterar con una serie de números.</h3>
            <?php
                $objetoNumero->operarEnSerieConNumeros();
            ?>
        </div>
        <div class="contenido">
            <h3>Generar un número aleatorio con mt_rand().</h3>
            <?php
                $objetoNumero->generarUnNumeroRandom();
            ?>
            <hr>
            <h3>Generar un número aleatorio predecible con mt_rand().</h3>
            <?php
                $objetoNumero->generarUnNumeroAleatorioPredecible();
            ?>
        </div>
    </body>
</html>
