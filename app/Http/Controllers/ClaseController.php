<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClaseController extends Controller
{
   public function suma(int $num1, int $num2)
   {
      $suma = $num1 + $num2;
      echo $suma;
   }

   public function cuadratica(int $a, int $b, int $c){
      if ($a == 0) {
         return "a = 0";
      }

      $delta = ($b * $b) - (4 * $a * $c);

      if ($delta < 0) {
         return "No hay soluciones reales";
      }

      $solucion1 = (-$b + sqrt($delta)) / (2 * $a);
      $solucion2 = (-$b - sqrt($delta)) / (2 * $a);

      if ($delta == 0) {
         return "Solución única: x = " + $solucion1;
      }

      return "Soluciones: x1 = " + $solucion1 + " y x2 = " + $solucion2;
   }

   public function sonamigos(int $a, int $b)
{

      $multiplo_a = 0;
      for ($n = 1; $n < $a; $n++) {
         if ($a % $n == 0) {
            $multiplo_a += $n;
         }
      }
      if ($multiplo_a != $a) {
         return $a + " No es perfecto";
      }

      $multiplo_b = 0;
      for ($n = 1; $n < $b; $n++) {
         if ($b % $n == 0) {
            $multiplo_b += $n;
         }
      }
      if ($multiplo_b != $b) {
         return $b + " No es perfecto";
      }


      if ($multiplo_a == $b && $multiplo_b == $a) {
         return "Son amigos";
      } else {
         return "No son amigos";
      }

   }
}