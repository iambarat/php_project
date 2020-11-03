<?php

// class Task {
// 	public $desc;
// 	public $stat = false;

// 	public function __construct($desc)
// 	{
// 		$this->desc= $desc;
// 	}

// 	public function completed()
// 	{
// 		$this->stat = true;
// 	}

// 	public function isCom()
// 	{
// 		return $this->stat;
// 	}
// }
// $task= [
// 	new Task('Go to store'),
// 	new Task('Clean the room'),
// 	new Task('Complete project')
// ];

// $task[0]->completed();

// die(var_dump($task->isCom()));

// dd($task);





class Task {

	public $description;
	public $completed;
}