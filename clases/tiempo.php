<?php
/**
 *
 */
class Tiempo
{

    // ASCII strings
    function __construct()
    {
    }

    public function queFechaEsAhora()
    {
        $dateTime = new DateTime();

        // A getdate se le puse pasar como parámetro un epoch timestamp
        // para generar una fecha especifica, ej: 163727100 -> 10 de Marzo de 1975
        $getDate  = getdate();
        // var_dump($getDate);

        // Localtime tambien recibe como primer parámetro un timestamp y como segundo un valor booleano
        // que si es true, devuelve un array asociativo en vez de uno numérico. Los indices se corresponden
        // a la función tm_sctruc de C.
        $localtime = localtime();
        // var_dump($localtime);

        echo date('r');
        echo "<br />";
        echo "Objeto DateTime: " . $dateTime->format('r');
        echo "<br />";
        echo "getdate:  {$getDate['hours']}:{$getDate['minutes']}:{$getDate['seconds']}";
        echo "<br />";
        printf("%d/%s/%d", $getDate['mday'], $getDate['mon'], $getDate['year']);
        echo "<br />";
        echo "localtie:  {$localtime[2]}:{$localtime[1]}:{$localtime[0]}";
        // echo "localtime:  {$localtime['tm_hour']}:{$localtime['tm_min']}:{$localtime['tm_sec']}";
        echo "<br />";
        echo "Objeto DateTime: " . $dateTime->format('r');
        echo "<br />";
    }

    public function convertirEpochDeTimestap()
    {
        $entonces = mktime(19,45,3,3,10,1976);
        echo $entonces;
        echo "<br />";
        $entonces =gmmktime(19,45,3,3,10,1976);
        echo $entonces;
        echo "<br />";
        $entonces =DateTime::createFromFormat(DateTime::ATOM, "1983-06-22T09:20:03-03:00");
        echo $entonces->format('Y-m-d h:i:s');
        echo "<br />";
    }

    public function convertirTimestapATimeDate()
    {
        $entonces = new DateTime("@195335103");
        $entonces->setTimezone(new DateTimeZone('America/Sao_Paulo'));
        $partes = explode('/', $entonces->format('Y/m/d/h/i/s'));
        echo "<pre>";
        var_dump($partes);
        echo "</pre>";
    }

    public function darFormatoEspecificoAUnaFecha()
    {
        echo date('d/M/Y h:i A');
        echo "<br />";
        $entonces = new DateTime();
        echo $entonces->format('d/M/Y H:i P e');
        echo "<br />";
    }

    public function diferenciaEntreDosFechas()
    {
        $primera = new DateTime("2014-03-15 08:30:56am", new DateTimeZone("America/Sao_Paulo"));
        $segunda = new DateTime("2020-02-18 20:15:23", new DateTimeZone("America/Sao_Paulo"));

        $diferencia = $segunda->diff($primera);
        printf(
            "Las dos fechas tienen %d semanas, %s días, %d horas, %d minutos y %d segundos de diferencia",
            floor($diferencia->format('%a') / 7),
            $diferencia->format('%a') % 7,
            $diferencia->format('%h'),
            $diferencia->format('%i'),
            $diferencia->format('%s')
        );
        echo "<br />";

        $primera_local = new DateTime("2014-03-15 08:30:56am", new DateTimeZone("America/Sao_Paulo"));
        $segunda_local = new DateTime("2020-02-18 20:15:23", new DateTimeZone("America/Sao_Paulo"));
        $primera = new DateTime("@" . $primera_local->getTimestamp());
        $segunda = new DateTime("@" . $segunda_local->getTimestamp());

        $diferencia = $segunda->diff($primera);
        printf(
            "Las dos fechas tienen %d semanas, %s días, %d horas, %d minutos y %d segundos de diferencia",
            floor($diferencia->format('%a') / 7),
            $diferencia->format('%a') % 7,
            $diferencia->format('%h'),
            $diferencia->format('%i'),
            $diferencia->format('%s')
        );
        echo "<br />";
    }

    public function encontrarUnDiaEnSemanaMesAno()
    {
        echo "Hoy es es " . date('d') . " del mes y " . date('z') . " del año.";
        echo "<br />";

        $miCumpleaños = new DateTime('June 22, 1983', new DateTimeZone('America/Sao_Paulo'));

        echo "Mi nacimiento fue un " . $miCumpleaños->format('l') . ", día " . $miCumpleaños->format('N') . " de la semana.";
        echo "<br />";
    }

    public function verificarUnaFecha()
    {
        echo (int)checkdate(6, 22, 1983);
        echo "<br />";
        echo (int)checkdate(7, 32, 1988);
        echo "<br />";
    }

    public function analizarFechaHoraDeUnaCadena()
    {
        $a = strtotime('june 22');
        $b = strtotime('last thursday');
        $c = strtotime('now + two months');
        echo date(DATE_RFC850, $a);
        echo "<br />";
        echo date(DATE_RFC850, $b);
        echo "<br />";
        echo date(DATE_RFC850, $c);
        echo "<br />";
        echo "<br />";

        echo date(DATE_RFC850, strtotime('now'));
        echo "<br />";
        echo date(DATE_RFC850, strtotime('today'));
        echo "<br />";

    }

    public function AgregarOEliminarDeUnaFecha($value='')
    {
        $miCumpleaños = new DateTime('June 22, 1983', new DateTimeZone('America/Sao_Paulo'));
        $gestación = new DateInterval('P40W');
        $miCumpleaños->sub($gestación);
        echo $miCumpleaños->format(DateTime::RFC850);
        echo "<br />";
        echo "<br />";

        $gestación = new DateInterval('P616D');
        $miCumpleaños->add($gestación);
        echo $miCumpleaños->format(DateTime::RFC850);
        echo "<br />";

        echo "<hr />";

        $año = 2020;
        $cuando = new DateTime("November 1, $año");
        if ($cuando->format('N') != 1) {
            $cuando->modify("next Monday");
        }
        $cuando->modify("next Tuesday");

        echo "En el año $año, Las elecciones de los Yankees fue el " . $cuando->format('jS') . " día de Noviembre";
        echo "<br />";

    }

    public function calcularDiferenciaEntreZonasHorarias()
    {
        $ahoraEnBuenosAires = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
        $ahoraEnCalifornia  = new DateTime('now', new DateTimeZone('America/Los_Angeles'));
        printf("Buenos Aires: %s; California: %s.",
            $ahoraEnBuenosAires->format(DateTime::RFC850),
            $ahoraEnCalifornia->format(DateTime::RFC850)
        );
        echo "<br />";

        $ahora = time();
        date_default_timezone_set('Europe/Dublin');
        echo 'Dublin: ' . date(DATE_RFC850, $ahora);
        echo "<br />";
    }

    public function generarTiempoDeAltaPrecision()
    {
        $comienzo = microtime(true);
        for ($inicio = 0; $inicio < 1000; $inicio++) {
            preg_match('/age=\d{1,5}/', $_SERVER['QUERY_STRING']);
        }
        $final = microtime(true);

        echo $final - $comienzo;
        echo "<br />";

        list($microsegundos, $segundos) = explode(' ', microtime());

        $id = $segundos.$microsegundos.getmygid();
        echo $id;
        echo "<br />";
    }

    public function generarRangosDeTiempo()
    {
        $inicio    = new DateTime('August 1, 2016', new DateTimeZone('America/Sao_Paulo'));
        $final     = new DateTime('September 1, 2016', new DateTimeZone('America/Sao_Paulo'));
        $intervalo = new DateInterval('P1D');

        $rango = new DatePeriod($inicio, $intervalo, $final);
        foreach ($rango as $dia) {
            echo "Un día en Agosto es " . $dia->format('d') . "<br />";
        }


    }
}
