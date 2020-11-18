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
            include '../clases/cadena.php';
            $objetoCadena = new Cadena();
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
            <?php
                $objetoCadena->cadenasComillasSimples();
            ?>
        </div>
        <div class="contenido">
            <?php
                $objetoCadena->cadenasComillasDobles();
            ?>
        </div>
        <div class="contenido">
            <?php
                $objetoCadena->cadenasHeredocDobles();
            ?>
        </div>
        <div class="contenido">
            <?php
                $objetoCadena->buscarUnCaracter();
            ?>
        </div>
        <div class="contenido">
            <h3>substr</h3>
            <?php
                $email = "santiago@enviopack.com";
                echo "$email";
                echo "<br />";
                echo $objetoCadena->obtenerSubstring($email, 0, 10);
                echo "<br />";
                echo $objetoCadena->obtenerSubstring($email, 4, -5);
                echo "<br />";
                echo $objetoCadena->obtenerSubstring($email, -14, 7);
            ?>
        </div>
        <div class="contenido">
            <?php
                echo $objetoCadena->reemplazarSubstring();
            ?>
        </div>
        <div class="contenido">
            <h3>Cantidad de Vocales - Byte a la vez</h3>
            <?php
                $frase = "La calabaza pasa, el este en peste.";
                $cantidadVocales = $objetoCadena->verCuantasVocalesHay($frase);
                echo $frase;
                echo "<br />";
                echo "La cantidad de vocales es de: $cantidadVocales";
            ?>
        </div>
        <div class="contenido">
            <h3>Revertir una frase:</h3>
            <?php
                echo $objetoCadena->revertirCadena("Linux es un sistema operativo");
                echo "<br />";
                echo $objetoCadena->revertirCadena("Reconocer");
                echo "<br />";
                echo $objetoCadena->revertirFrase("A caballo regalado no se le miran los dientes.");
                echo "<br />";
            ?>
        </div>
        <div class="contenido">
            <h3>Cadena aleatoria(str_rand()):</h3>
            <?php
                echo $objetoCadena->cadenaAleatoria();
                echo "<br />";
                echo $objetoCadena->cadenaAleatoria(64, '.-');
                echo "<br />";
            ?>
        </div>
        <div class="contenido">
            <h3>Reemplazar espacios o otros:</h3>
            <?php
                $objetoCadena->reemplazarEspacios();
            ?>
        </div>
        <div class="contenido">
            <h3>Mayusculas en primera letra o todas:</h3>
            <?php
                $objetoCadena->capitalizarPrimetaLetra();
            ?>
        </div>
        <div class="contenido">
            <h3>Concatenar contenido: </h3>
            <?php
                $objetoCadena->concatenarContenido();
            ?>
        </div>
        <div class="contenido">
            <h3>Concatenar contenido: </h3>
            <?php
                $objetoCadena->quitarEspaciosEnBlaco();
            ?>
        </div>
        <div class="contenido">
            <h3>Concatenar contenido: </h3>
            <?php
                $objetoCadena->generarCsv();
            ?>
        </div>
        <div class="contenido">
            <h3>Leer CSV: </h3>
            <?php
                $objetoCadena->leerArchivoCsv('autos.csv');
            ?>
        </div>
        <div class="contenido">
            <h3>Mostrar contenidos con pack: </h3>
            <?php
                $objetoCadena->mostrarLibros('autos.csv');
            ?>
        </div>
        <div class="contenido">
            <h3>preg_split, explode: </h3>
            <?php
                $objetoCadena->separandoUnaCadena('Las filtraciones de Snowden hicieron un mundo distinto');
            ?>
        </div>
        <div class="contenido">
            <h3>wordwrap:  </h3>
            <?php
                $objetoCadena->usandoWrapping('Las filtraciones de Snowden hicieron un mundo distinto');
            ?>
        </div>
        <div class="contenido">
            <h3>Descargar un CSV:  </h3>
            <a href="../descargar.php" target="_blank">Descargar un CSV por Link</a>
        </div>
    </body>
</html>
