<?php

namespace App\classes;


class Area extends GeometricShapes
{
 public function area()
 {
     echo 'Area of circle is ' . $this->circle(2) . '<br> Area of rectangle is ' . $this->rectangle(5,3) ;

 }
}