<?php

//require 'vendor/autoload.php';
//namespace Src;

use Src\Users\Person;
use Src\Staff;
use Src\Business;

//require 'src/Person.php';
//require 'src/Business.php';
//require 'src/Staff.php';

$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

//$laracasts->hire($jeffrey);

$laracasts->hire(new Person('Jane Doe'));

//var_dump($staff);
//var_dump($laracasts);
var_dump($laracasts->getStaffMembers());
