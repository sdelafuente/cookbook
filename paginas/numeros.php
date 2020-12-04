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
        <link rel="stylesheet" href="../css/style.css">
        <title>PHP COOKBOOK</title>
        <?php
            include '../clases/numero.php';
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
                // $objetoNumero->operarEnSerieConNumeros();
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
        <div class="contenido">
            <h3>Logaritmo Natural, Exponente & Potencia</h3>
            <?php
                // $objetoNumero->logaritmoNatural(343, 7);
                $objetoNumero->exponentePotencia();
            ?>
            <hr>

        </div>
        <div class="contenido">
            <h3>Formateo de Números</h3>
            <?php
                $objetoNumero->formateoDeNumeros();
                // $objetoNumero->formateoDeNumeros(12345.3445, 2);
                // $objetoNumero->formateoDeNumeros(18765.984, 2, ",", ".");
            ?>
            <hr>

        </div>
        <div class="contenido">
            <h3>Funciones trigonometricas; cos(), sen(), tan()</h3>
            <?php
                // $objetoNumero->funcionesTrigonometricas();
            ?>
            <hr>
        </div>
        <!-- <div class="contenido">
            <h3>Sumando números muy grandes o muy chicos</h3>
            <?php
                // $objetoNumero->sumandoNumerosExtremos();
            ?>
            <hr>

        </div> -->
        <div class="contenido">
            <h3>Convertir números entre bases(2,8,10,16)</h3>
            <?php
                $objetoNumero->convertirNumerosEntreBases(1983);
                $objetoNumero->convertirNumerosEntreBases(22, 2);
                $objetoNumero->convertirNumerosEntreBases(37, 8);
                $objetoNumero->convertirNumerosEntreBases(236, 16);
            ?>
        </div>
        <div class="contenido">
            <h3>Calcular numeros de diferente base</h3>
            <?php
                $objetoNumero->calculosConNumerosDeDistintaBase();
            ?>
        </div>
        <div class="contenido">
            <h3>Distancia entre dos puntos de una esfera</h3>
            <?php
                $objetoNumero->dinstanciaEnUnaEsfera();
            ?>
        </div>
    </body>
</html>
