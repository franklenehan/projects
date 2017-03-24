<?php 


//use 'self::' if a value if static
class User{
	public $username;
	public static $minPassLength = 5;
	
	public static function validatePassword($password){
		if(strlen($password) >= self::$minPassLength){
			return true;
			}
			else
			{
				return false;
		}
	}
}

/*
$password = 'pass';

if(User::validatePassword($password)){
	echo 'Password is valid';
}
else
{
	echo 'Password is NOT valid';
}*/

echo User::$minPassLength;