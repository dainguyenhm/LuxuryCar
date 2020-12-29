<?php
require_once("controllers/base_controller.php");
require_once("models/customers.php");
require_once("models/orderservices.php");

class UsersController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "users";
	}

	public function login(){
		$this->render("login");
	}

	public function register(){
		$this->render("register");	
	}

	public function history(){
			$this->render("history");	
	}

	public function customer(){
		$this->render("customer");			
	}

	public function logout(){
		$this->render("logout");			
	}

	public function update(){
		$this->render("update");			
	}


}
?>