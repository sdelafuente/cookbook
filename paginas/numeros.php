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
    </body>
</html>
