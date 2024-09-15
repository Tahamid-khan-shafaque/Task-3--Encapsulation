<?php

class Employee{
    private $id;
    private $name;
    private $position;
    private $salary;

    public function __construct($id, $name, $position, $salary){
        $this->id = $id;
        $this->name = $name;
        $this->position = $position;
        $this->salary = 0;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name = $name;
    }

    public function getPosition(){
        return $this->position;
    }

    public function setPosition($position){
        $this->position = $position;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function setSalary($salary){
        if($this->isValidSalary($salary)){
            $this->salary = $salary;
            return true;
        }
        return false;
    }

    private function isValidSalary($salary){
        return is_numeric($salary) && $salary > 0 && $salary < 1000000;
    }

    public function getAnnualSalary(){
        return $this->salary*12;
    }

    public function displayInfo(){
        return "Employee ID: {$this->id}, Name: {$this->name}, Position: {$this->position}, Salary: $" . number_format($this->salary, 2);
    }
    }
