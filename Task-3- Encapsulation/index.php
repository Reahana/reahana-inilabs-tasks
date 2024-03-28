<?php

require_once './vendor/autoload.php';

use App\classes\Employee;

$employee = new Employee('Mina','Web',20000);
echo "Name: " . $employee->getName() . "<br> Dept: " . $employee->getDept() . "<br> Salary: $ " . $employee->getSalary() . "\n";



