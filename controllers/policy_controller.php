<?php
require_once("controllers/base_controller.php");

class PolicyController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "policy";
	}

	public function home(){
		$this->render("home");
	}
}
?>