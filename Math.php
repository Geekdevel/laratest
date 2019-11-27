<?php

class Person
{
    public $age = 1;

    public function haveBirthdey()
    {
        $this->age += 1;
    }
    public function age()
    {
        return $this->age;
    }
}

$joe = new Person;
$joe->haveBirthdey();
$joe->haveBirthdey();

echo $joe->age();

echo ' | ';

$jane = new Person;
$jane->haveBirthdey();

//echo $joe->age; //errors

//echo Person::$age;
echo $jane->age();
