<?php
require_once("controllers/base_controller.php");
require_once("models/admin.php");
require_once("models/categorycars.php");
require_once("models/cars.php");
require_once("models/customers.php");
require_once("models/news.php");
require_once("models/ordercars.php");
require_once("models/services.php");
require_once("models/contacts.php");
require_once("models/introduces.php");
require_once("models/orderservices.php");
class AdminController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "admin";
	}

	public function home()
	{
		$this->renderadmin("index");
	}

	public function login(){
		
		$this->renderadmin("login");
	}

	

}
?>