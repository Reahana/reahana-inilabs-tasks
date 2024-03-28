<?php

require_once './vendor/autoload.php';

use App\classes\Dog;
use App\classes\Tiger;
use App\classes\Cat;


$animals = array(new Dog(), new Cat(), new Tiger());

foreach ($animals as $animal) {
    echo $animal->makeSound() .'<br>' ;
}


