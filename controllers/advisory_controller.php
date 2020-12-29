<?php
require_once("controllers/base_controller.php");

class AdvisoryController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "advisory";
	}

	public function home(){
		$this->render("home");
	}
}
?>