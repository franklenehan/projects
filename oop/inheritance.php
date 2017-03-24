<?php

class First{
	public $id = 23;
	public $name = 'John Doe';
	
	public function saySomething($word){
		echo $word;
	}	
	
}

class Second extends First{
	
}


$second = new Second;

echo $second->saySomething('Hello World');