<?php

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        //var_dump($description);
        $this->description = $description;
    }
    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP', 'The teacher bla bla bla ...');

$task->complete();

var_dump($task->completed);
