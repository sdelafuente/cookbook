<?php
/**
 *
 */
class Cadena
{
    private $cadena;

    // ASCII strings
    function __construct($frase = '')
    {
        $this->cadena = $frase;
    }

    public function cadenasComillasSimples()
    {
        print 'Tengo que ir a la ferretería.';
        echo  "<br />";
        print 'Mañana voy a ver a O\'connor en el teatro de Flores.' . PHP_EOL;
        echo  "<br />";
        print 'Con HTML, PHP_EOL concatenado no funciona.';
        echo  "<br />";
        echo "Final";
    }

    public function cadenasComillasDobles()
    {
        $costo = 20;
        print "El Sabado voy a ver a O'Connor en el Teatro de Flores.";
        echo "<br />";
        print "La entrada me costó \$100 y el viaje en tren \$$costo";
        echo "<br />";
    }

    public function cadenasHeredocDobles()
    {
$hola = <<< HTML
    <p>Hola, esto es un párrago HEREDOC. Malísimo.</p>
HTML;
        print $hola;
    }

    public function buscarUnCaracter($email = 'santiago#enviopack.com')
    {
        // $email = "santiago#enviopack.com";
        if (strpos($email, '@') === false) {
            print 'No se encontró un @ en la dirección de email!';
        }
    }

    public function obtenerSubstring($cadena, $inicio, $fin)
    {
        return substr($cadena, $inicio, $fin);
    }

    public function reemplazarSubstring($cadena = 'Mi vieja mula ya no es lo que pera!')
    {
        return substr_replace($cadena, 'era', 30, 4);
    }

    public function verCuantasVocalesHay($cadena)
    {
        $vocales = 0;
        for ($i = 0, $j = strlen($cadena); $i < $j; $i++) {
            if (strstr('aeiouAEIOU', $cadena[$i])) {
                $vocales++;
            }
        }

        return $vocales;
    }

    // Funcional para los palíndromos
    public function revertirCadena($cadena)
    {
        return strtolower(strrev($cadena));
    }

    public function revertirFrase($frase)
    {
        // $palabras = explode(' ', $frase);
        // $palabras = array_reverse($palabras);
        // return implode(' ', $palabras);

        return implode(' ', array_reverse(explode(' ', $frase)));
    }

    public function cadenaAleatoria($largo = 32, $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        if (!is_int($largo) || $largo < 0) {
            return false;
        }

        $largoCaracteres = strlen($caracteres) -1;
        $cadena = '';

        for ($i = $largo; $i > 0; $i--) {
            $cadena .= $caracteres[mt_rand(0, $largoCaracteres)];
        }

        return $cadena;
    }

    public function reemplazarEspacios($mensaje = 'Entonces, esto es una cadena con estacios ')
    {
        $tabulado  = str_replace(' ', "\t", $mensaje);
        $espaciado = str_replace("\t", ' ', $tabulado);

        echo "Con tabulación: <pre>$tabulado</pre>";
        echo "Con espacios: <pre>$espaciado</pre>";
    }

    public function capitalizarPrimetaLetra($frase = 'pasamos más tiempo trabaJando que haciendo cualquier otra cosa.')
    {
        echo ucfirst($frase);
        echo "<br />";
        echo ucwords($frase);
        echo "<br />";
        echo strtolower($frase);
        echo "<br />";
        // No modifica los acentros, solo el abecedario
        echo strtoupper($frase);
        echo "<br />";
        // Modifica con acentos
        echo mb_strtoupper($frase);
        echo "<br />";
    }

    public function concatenarContenido($cadena = 'No debería ser lógico que el trabajo resultara una experiencia desmotivadora')
    {
        $persona['nombre'] = "Santiago Daniel";
        $persona['apellido'] = "de la Fuente Cortizo";

        echo $cadena . $this->getAutor() . ".";
        echo "<br />";
        echo "Mi nombre es <em>$persona[nombre]</em>" . " y mi apellido es <em>{$persona['apellido']}</em>";
        echo "<br />";
    }

    protected function getAutor()
    {
        return "Autor: Laszlo Bock";
    }

    public function quitarEspaciosEnBlaco($frase = '  ...entonces, capaces de transofrmar radicalmente cualquier tipo de negocio  ')
    {
        echo "Sin espacio a la izquierda: " . ltrim($frase) . "." ;
        echo "<br />";
        echo "Sin espacios a la derecha: " . rtrim($frase) . ".";
        echo "<br />";
        echo "Sin espacios: ". trim($frase) . ".";
        echo "<br />";
    }

    public function generarCsv()
    {
        $arreglo = [['Santiago ','DelaFuente ',37], ["Luciana","Surace", 32]];
        $archivo = './csv/adjunto.csv';
        // $fh = fopen($archivo, 'w+') or die('No se puede abrir el archivo!');
        $fh = fopen('php://output', 'w') or die('No se puede abrir el archivo!');

        foreach ($arreglo as $persona) {
            if (fputcsv($fh, $persona) === false) {
                die('Error!');
            }
        }
        fclose($fh) or die("ErrorII!");
        echo "Fin de la carga de CSV.";
    }

    public function leerArchivoCsv($nombreArchivo)
    {
        $archivo = fopen('../csv/' . $nombreArchivo, 'r') or die('No se encontró el archivo!!');
        $titulo = false;
        echo "<table>";
        while ($renglon = fgetcsv($archivo)) {
            echo "<tr>";
            for ($i = 0, $j = count($renglon); $i < $j; $i++) {
                $ta = (!$titulo) ? "<th>" : "<td>";
                $tb = (!$titulo) ? "</th>" : "</td>";
                echo $ta . htmlentities($renglon[$i]) . $tb;
            }
            $titulo = true;
            echo "</tr>";
        }
        echo "</table>";
        fclose($archivo) or die("ErrorII!");
    }

    public function mostrarLibros()
    {
        $libros = [
            ['¿Quien controla el futuro?', 'Jaron Lanier', 2013],
            ['Humanos', 'Tom Philips', 2018],
            ['Supernovas', 'Gloria Dubner', 2020],
        ];

        foreach ($libros as $libro) {
            echo " - " . pack('A30A20A4', $libro[0], $libro[1], $libro[2]) . "<br>";
        }
    }

    public function separandoUnaCadena($frase)
    {
        $palabras      = explode(' ', $frase);
        $enanos        = explode(',', 'tonto,soñoliento,feliz,gruñón,estornudo,tímido,doctor');
        $enanos        = explode(',', 'tonto,soñoliento,feliz,gruñón,estornudo,tímido,doctor', 4);
        print_r($enanos);
        $palabrasSplit = preg_split('/ x /i', '31 centimetros x 25 centimetros x 10 centimetros');

        $cuenta = "3 + 2 / 7 - 9";
        $pila = preg_split('/ *([+\-\/*]) */', $cuenta, -1, PREG_SPLIT_DELIM_CAPTURE);
        echo "<pre>";
        var_dump($pila);
        echo "</pre>";
    }

    public function usandoWrapping($supernova = '')
    {
        $supernova = "Cuando explotan, las supernovas arrojan material al espacio a 15.000-40.000 kilómetros por segundo. Estas explosiones producen gran parte del material del universo, incluyendo elementos como el hierro, que conforma nuestro planeta e incluso a nosotros mismos. Los elementos pesados sólo se producen en las supernovas, por lo que todos nosotros llevamos en nuestros cuerpos remanentes de estas explosiones.";

        echo "<pre>" . wordwrap($supernova, 120) . "</pre>";
        echo "<pre>" . wordwrap($supernova, 90, "<hr />") . "</pre>";
    }

    public function descargarUnCsv()
    {
        $libros = [
            ['¿Quien controla el futuro?', 'Jaron Lanier', 2013],
            ['Humanos', 'Tom Philips', 2018],
            ['Supernovas', 'Gloria Dubner', 2020],
        ];

        $salida = fopen('php://output', 'w') or die('Error al tratar de expulsar información!');
        $total  = 0;

        header('Content-Type: application/csv');
        header('Content-Disposition: attatchment; filename="libros.csv"');

        fputcsv($salida, ['Título', 'Escritor', 'Año']);

        foreach ($libros as $libro) {
            // code...
            fputcsv($salida, $libro);
            $total++;
        }

        fputcsv($salida, ['Total', '--', $total]);
        fclose($salida) or die("ErrorII!");
    }
}
