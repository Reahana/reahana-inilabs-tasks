<?php

require_once './vendor/autoload.php';

use App\classes\Parentheses;

$string = new Parentheses();




$input1 = "(){}[]"; 
$input2 = "([)]";   

echo $string->isValidParentheses($input1) ? "true" : "false"; 
echo  '<br>';  
echo $string->isValidParentheses($input2) ? "true" : "false"; 



