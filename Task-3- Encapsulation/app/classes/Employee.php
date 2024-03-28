<?php

namespace App\classes;


class Employee
{
    private $name;
    private $dept;
    private $salary;

    public function __construct($name, $dept, $salary) {
        $this->name = $name;
        $this->dept = $dept;
        $this->setSalary($salary);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDept()
    {
        return $this->dept;
    }
     public function  getSalary()
     {
         return $this->salary;
     }

     private function setSalary($salary)
     {
        if($salary>=0){
            $this->salary = $salary;
        }
        else {
            echo 'salary cannot be negative <br>';
            $this->salary = 0;
        }
     }
}