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

   public function cuadratica(int $a, int $b, int $c)
   {
     $resultado = '';
   
       if ($a == 0) {
           $resultado = "a = 0";
       } else {
           $delta = ($b * $b) - (4 * $a * $c);
   
           if ($delta < 0) {
               $resultado = "No hay soluciones reales";
           } else {
               $solucion1 = (-$b + sqrt($delta)) / (2 * $a);
               $solucion2 = (-$b - sqrt($delta)) / (2 * $a);
   
               if ($delta == 0) {
                   $resultado = "Solución: x = " . $solucion1;
               } else {
                   $resultado = "Soluciones: x1 = " . $solucion1 . " y x2 = " . $solucion2;
               }
           }
       }
   
       return view('cuadraticar', compact('resultado'));
   }
   
   public function sonamigos(int $a, int $b) {

      $resultado = '';
      $multiplo_a = 0;
      for ($n = 1; $n < $a; $n++) {
          if ($a % $n == 0) {
              $multiplo_a += $n;
          }
      }
  
      if ($multiplo_a != $a) {
          $resultado = $a . " no es perfecto";
          return view('amigos', compact('resultado'));
      }
  
      $multiplo_b = 0;
      for ($n = 1; $n < $b; $n++) {
          if ($b % $n == 0) {
              $multiplo_b += $n;
          }
      }
  
      if ($multiplo_b != $b) {
          $resultado = $b . " no es perfecto";
          return view('amigos', compact('resultado'));
      }
  
      if ($multiplo_a == $b && $multiplo_b == $a) {
          $resultado = "Son amigos";
      } else {
          $resultado = "No son amigos";
      }
  
      return view('amigos', compact('resultado'));
   }
}