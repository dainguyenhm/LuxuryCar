<?php
require_once("controllers/base_controller.php");
require_once("models/contacts.php");

class ContactController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "contact";
	}

	public function home(){

		$this->render("home");
	}
}
?>