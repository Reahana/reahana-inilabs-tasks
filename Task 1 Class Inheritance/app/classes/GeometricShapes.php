<?php

namespace App\classes;


class GeometricShapes
{
 public function circle($r)
 {
     return pi() * $r *$r ;
 }

 public  function  rectangle($l, $w){
     return $l * $w;
 }
}