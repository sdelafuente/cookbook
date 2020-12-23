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

}
