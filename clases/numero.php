<?php

/**
 *
 */
class Numero
{

    function __construct()
    {

    }

     public function esNumerico($numeros = [5, '6', '09', 1.34, '30.8', '1,450.25', 'eight', 0xDDECAFBAD, '10e200'])
     {
         foreach ($numeros as $posibleNumero) {
             $tipoReal = gettype($posibleNumero);

             echo "¿Es el $tipoReal $posibleNumero un número?";
             echo (is_numeric(str_replace(',', '', $posibleNumero))) ? " Si" : " No";
             echo "<br />";
         }
     }

     public function sonFloatsIguales()
     {
         $delta = 0.00001;

         $alpha = 1.0000001;
         $beta  = 1.0000000;

         if (abs($alpha - $beta) < $delta) {
             echo '$alpha y $beta son relativamente iguales.';
             echo "<br />";
         }
     }

     public function redondearFlotantes($numero = 23.45678)
     {
         $redondo = round($numero);
         printf("$numero redondea al flotante %s con round.", $redondo);
         echo "<br />";

         $redondo = ceil($numero);
         printf("$numero redondea al flotante %s con ceil.", $redondo);
         echo "<br />";

         $redondo = floor($numero);
         printf("$numero redondea al flotante %s con floor.", $redondo);
         echo "<br />";

         $carrito  = 54.34;
         $impuesto = $carrito * 0.21;
         $total    = $carrito + $impuesto;
         $final    = round($total, 2);

         print("El cálculo  de impuesto usa todo los digitos que necesita: \$$total, pero");
         echo "<br />";
         print("round() recorta el resto a dos decimales: \$$final.");
         echo "<br />";
     }

     public function operarEnSerieConNumeros()
     {
         $principio = 2;
         $fin = 9;

         for ($i = $principio; $i <= $fin; $i++) {
             printf("%d al cuadrado es: %d.", $i, $i * $i);
             echo "<br />";
         }
         echo "<hr />";

         for ($i = $principio; $i <= $fin; $i += 2) {
             printf("%d al cuadrado es: %d.", $i, $i * $i);
             echo "<br />";
         }
         echo "<hr />";

         echo "Usando range()<br />";
         $numeros = range(3, 9);
         foreach ($numeros as $n) {
             printf("%d al cuadrado es: %d.", $n, $n * $n);
             echo "<br />";
         }
         echo "<br />";
         foreach ($numeros as $n) {
             printf("%d al cubo es: %d.", $n, $n * $n * $n);
             echo "<br />";
         }
         echo "<hr />";

         echo "Usando yield<br />";
         foreach ($this->cuadrados(3, 8) as $n => $cuadrado) {
             printf("%d al cuadrado es: %d.", $n, $cuadrado);
             echo "<br />";
         }
         echo "<hr />";
     }

     private function cuadrados($principio, $fin)
     {
         if ($principio < $fin) {
             for ($i = $principio; $i <= $fin; $i++) {
                 yield $i => $i * $i;
             }
         } else {
             for ($i = $fin; $i >= $principio; $i--) {
                 yield $i => $i * $i;
             }
         }
     }

     public function generarUnNumeroRandom()
     {
         $inferior = 10;
         $superior = 77;
         // MT => Mersenne Twister. Marin Mersenne, matemático frances
         echo "Número aleatorio: " . mt_rand($inferior, $superior);
         echo "<br />";
     }

     public function generarUnNumeroAleatorioPredecible()
     {
         /**
          * [mt_srand Esta prueba, revisala cuando puedas de nuevo en el libro.
          * Página 44 del capitulo 2.]
          * @var [type]
          */
         mt_srand(34534);
         $primero = $this->elegirColor();
         $segundo = $this->elegirColor();
         echo "$primero es rojo y $segundo es amarillo.";
         echo "<br />";
     }

     private function elegirColor()
     {
         $colores = ['rojo', 'azul', 'amarillo', 'verde', 'naranja', 'violeta', 'indigo'];
         $index   = mt_rand(0, count($colores) -1);

         return $colores[$index];
     }

     /**
      * [logaritmoNatural El logaritmo natural es el numero exponente por lo cual se potencia un numero natural n]
      * @param  integer $value [description]
      * @param  integer $b     [description]
      * @return [type]         [description]
      */
     public function logaritmoNatural($value = 1000000, $b = 10)
     {
         // $val2 = floor(log($value, $b)); // gives a value of 5 for $val2 and not 6 as expected.
         // echo $val2;
         // echo "<br />";
         // $val2 = (log($value, $b)); // gives a value of 5 for $val2 and not 6 as expected.
         // echo $val2;
         // echo "<br />";
         // $val2 = floor(log10($value));
         // echo $val2;
         // echo "<br />";
         // $val2 = log10($value);
         // echo $val2;
         // echo "<br />";
         // $val2 = log10(100000);
         // echo $val2;
         // echo "<br />";
     }

     public function exponentePotencia($n = 2, $b = M_E)
     {
         // Elevar el numero e a un exponente n
         $exponente = exp($b);
         echo $exponente;
         echo "<br />";
         $potencia = pow(2, M_E);
         echo "2^" . M_E . " = " . $potencia;
         echo "<br />";
         $potencia = gmp_pow(2, 10);
         echo "2^10 usando GMP = " . $potencia;
         echo "<br />";
         $potencia = pow(2, $n);
         echo "2^$n = " . $potencia;
         echo "<br />";
         $potencia = pow(-2, $n);
         echo "-2^$n = " . $potencia;
         echo "<br />";
         $potencia = pow(-2, -2.5);
         echo "-2^-2.5 = " . $potencia;
         echo "<br />";
     }

     public function formateoDeNumeros($n = 1234556.345, $d = null, $c1 = null, $c2 = null)
     {
         // echo number_format($n, $d, $c1, $c2);
         // echo "<br />";

         // ➜  ~ sudo apt-get install php5.6-intl
         // Hacer eso, te resuele el formateo a mano de crear una función en cargada
         // Formato de Moneda
         $formatearParaMoneda = new NumberFormatter("es-AR", NumberFormatter::CURRENCY);
         echo $formatearParaMoneda->format($n);
         echo "<br />";

         // Formato por escrito
         $formatearEnPalabra = new NumberFormatter("es-AR", NumberFormatter::SPELLOUT);
         echo ucfirst($formatearEnPalabra->format($n));
         echo "<br />";
     }

     public function funcionesTrigonometricas()
     {
         // Las funciones estan en radianes
         echo "Coseno de 5 * PI = ";
         $resultado = cos(10 * M_PI);
         echo $resultado;
         echo "<br />";

         echo "Arcotangente de PI/4 = ";
         $resultado = atan(M_PI/4);
         echo $resultado;
         echo "<br />";
         /**
          * $secante = 1 / sen($n)
          * $cosecante = 1 / cos($n)
          * $cotangente = 1 / tan($n)
          */
     }

     public function sumandoNumerosExtremos()
     {
         // Suma es9999999999999999
         // $suma  = bcadd('1234567812345678', '8765432187654321');
         $sum = gmp_add("123456789012345", "76543210987655");
         echo gmp_strval($sum) . "\n";
     }

     public function convertirNumerosEntreBases($numero = 11, $base = 10)
     {
         switch ($base) {
             case 2:
                 echo decbin($numero);
                 break;
             case 8:
                 echo decoct($numero);
                 break;
             case 16:
                 echo dechex($numero);
                 break;

             default:
                 echo $numero;
                 break;
         }

         echo "<br />";
     }

     public function calculosConNumerosDeDistintaBase()
     {
         $a = 100;
         $b = 0144;
         $c = 0x64;
         $d = 0b101;

         for ($i=0x0; $i < 0x10; $i++) {
             echo dechex($i) . ' - ';
         }
         echo "<br />";

     }

     public function dinstanciaEnUnaEsfera()
     {
        // //Jujuy
        // $lat1 = -24.2053236;
        // $lon1 = -65.3755957;
        //
        // // usuhaia
        // $lat2 = -54.8068581;
        // $lon2 = -68.3378226;
        //Jujuy
        $lat1 = -24.2053236;
        $lon1 = -65.3755957;

        // usuhaia
        $lat2 = -54.8068581;
        $lon2 = -68.3378226;

        $radio = doubleval(M_PI/180.0);

        $a = doubleval($lat1) * $radio;
        $b = doubleval($lon1) * $radio;
        $c = doubleval($lat2) * $radio;
        $d = doubleval($lon2) * $radio;

        $theta = $lon2 - $lon1;

        $distancia = acos( sin($a) * sin($c) + cos($a) * cos($c) * cos($theta));

        if ($distancia < 0) {
            $distancia += M_PI;
        } else {
            $distancia = $distancia * 6378.135;
        }

        echo $distancia;
        echo "<br />";

     }
}

 ?>
