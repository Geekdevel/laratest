<?php

class Person
{
    public static $age = 1;

    public function haveBirthdey()
    {
        static::$age += 1;
    }
}

$joe = new Person;
$joe->haveBirthdey();
$joe->haveBirthdey();

$jane = new Person;
$jane->haveBirthdey();

//echo $joe->age; //errors

echo Person::$age;
