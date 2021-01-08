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
                    <a href="#" tabindex="3">Fechas</a>
                </li>
            </ul>
        </nav>
        <div class="contenido">
            <h3>¿Que fecha es ahora?</h3>
            <?php
                // $objetoTiempo->queFechaEsAhora();
            ?>
        </div>
        <div class="contenido">
            <h3>Convertir Epoch a timestamp </h3>
            <?php
                // $objetoTiempo->convertirEpochDeTimestap();
            ?>
        </div>
        <div class="contenido">
            <h3>Convertir timestamp a Date & Time</h3>
            <?php
                // $objetoTiempo->convertirTimestapATimeDate();
            ?>
        </div>
        <div class="contenido">
            <h3>Dar formato a las fechas</h3>
            <?php
                // $objetoTiempo->darFormatoEspecificoAUnaFecha();
            ?>
        </div>
        <div class="contenido">
            <h3>Diferencia entre dos fechas</h3>
            <?php
                // $objetoTiempo->diferenciaEntreDosFechas();
            ?>
        </div>
        <div class="contenido">
            <h3>Encontrar el día en la semana, mes y año</h3>
            <?php
                // $objetoTiempo->encontrarUnDiaEnSemanaMesAno();
            ?>
        </div>
        <div class="contenido">
            <h3>Verifica que una fecha sea correcta. (Si dejas que el usuario meta info de más)</h3>
            <?php
                // $objetoTiempo->verificarUnaFecha();
            ?>
        </div>
        <div class="contenido">
            <h3>Analizar una fecha y hora desde una cadena de caracteres</h3>
            <?php
                // $objetoTiempo->analizarFechaHoraDeUnaCadena();
            ?>
        </div>
        <div class="contenido">
            <h3>Agregar o eliminar de una fecha</h3>
            <?php
                // $objetoTiempo->AgregarOEliminarDeUnaFecha();
            ?>
        </div>
        <div class="contenido">
            <h3>Calcular la fecha en diferentes zonas horarias</h3>
            <?php
                // $objetoTiempo->calcularDiferenciaEntreZonasHorarias();
            ?>
        </div>
        <div class="contenido">
            <h3>Crear IDs unicos con tiempo en alta precisión</h3>
            <?php
                // $objetoTiempo->generarTiempoDeAltaPrecision();
            ?>
        </div>
        <div class="contenido">
            <h3>Generar rangos de tiempo</h3>
            <?php
                $objetoTiempo->generarRangosDeTiempo();
            ?>
        </div>
    </body>
</html>
