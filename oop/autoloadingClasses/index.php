<?php
#include 'foo.php';
#include 'bar.php';

//use this function if you dont want an include for each other class
spl_autoload_register(function($class_name){
	include $class_name . '.php';
});

$foo = new Foo;
$bar = new Bar;

$foo->sayHello();
echo "<br>";
$bar->sayHello();