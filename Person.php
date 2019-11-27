<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age*365;
    }

    public function setAge($age)
    {
        if ($age<18){
            throw new Exception("Person is not old enough.");
        }
        $this->age = $age;
    }
}

$john = new Person('John Doe');
//$john->age = 30;
//$john->setAge(30);
//$john->age = 3;
$john->setAge(3); //public


var_dump($john->getAge());
