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
}

 ?>
