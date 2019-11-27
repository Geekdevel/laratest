<?php

class Task
{
    public $description;

    public function __construct($description)
    {
        var_dump($description);
    }
}

$task = new Task('Learn OOP');

var_dump($task->description);
