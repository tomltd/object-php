<?php

class Task {

    // Think of this as a property. Publc so anyone outside of this class can see it.
    public $title;

    public $description;

    public $completed = false;

    // Within the context of a class this is a method. So methods on an object.
    // This is fired when you created a new instance.
    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

}


$task = new Task('Learn OOP', 'Watch all the laracasts on OOP');
$task2 = new Task('Buy some kale', 'Visit the shops and buy kale');

// Look at the content
var_dump($task->title . ' ' . $task->description);
var_dump($task2->description);

$task->complete();

var_dump($task->completed);
