<?php

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        //add $person to the staff collection
        $this->staff->add($person);
    }
}

class Staff
{
    protected $members = [];

    public function add(Person $person)
    {
        $this->members[] = $person;
    }
}

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff;

$laracasts = new Business($staff);

$laracasts->hire($jeffrey);

var_dump($staff);
