<?php
require_once("controllers/base_controller.php");
require_once("models/introduces.php");
class IntroduceController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "introduce";
	}

	public function home(){
		$introduce = Introduce::getAll();
		$data = array('introduce' => $introduce);
		$this->render("home",$data);
	}
}
?>