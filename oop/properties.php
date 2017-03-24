<?php
class User{	
	public $id;
	public $username;
	public $email;
	public $password;
	
	public function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
	}
	
	
	public function register(){
		echo 'User Registered';
	}
	
	public function login(){
		
		$this->auth_user();
	}
	
	public function auth_user(){
		echo $this->username. ' is authenticated';
	}
	
	public function __destruct(){
		//echo 'Destructor Called';
	}
	
}

$User = new User('Frank', '123456');

#$User->register();
$User->login();

?>