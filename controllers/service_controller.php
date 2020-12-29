<?php
require_once("controllers/base_controller.php");
require_once("models/services.php");
require_once("models/customers.php");
class ServiceController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "service";
	}

	public function home(){
		$this->render("home");
	}

	public function get_AllProduct_by_catid(){
		$this->render("get_AllProduct_by_catid");
	}

	public function get_service_by_id(){
		$id = isset($_GET['serviceid']) ? $_GET['serviceid'] : "";
		if (!empty($id)) {
			$service = Services::getServiceById($id);
			$data = array('service' => $service);
			$this->render("get_service_by_id", $data);
		}else{
			header("location:".URL_BASE);
		}
	}

	// public function danhbong(){
	// 	$id = isset($_GET['serviceid']) ? $_GET['serviceid'] : "";
	// 	if (!empty($id)) {
	// 		$service = Services::getServiceById($id);
	// 		$data = array('service' => $service);
	// 		$this->render('danhbong',$data);
	// 	}else{
	// 		header("location:".URL_BASE);
	// 	}
	// }

	// public function chuandoanloi(){
	// 	$id = isset($_GET['serviceid']) ? $_GET['serviceid'] : "";
	// 	if (!empty($id)) {
	// 		$service = Services::getServiceById($id);
	// 		$data = array('service' => $service);
	// 		$this->render('chuandoanloi',$data);
	// 	}else{
	// 		header("location:".URL_BASE);
	// 	}
	// }
	// public function baoduong(){
	// 	$id = isset($_GET['serviceid']) ? $_GET['serviceid'] : "";
	// 	if (!empty($id)) {
	// 		$service = Services::getServiceById($id);
	// 		$data = array('service' => $service);
	// 		$this->render('baoduong',$data);
	// 	}else{
	// 		header("location:".URL_BASE);
	// 	}
	// }
	// public function phuchoi(){
	// 	$id = isset($_GET['serviceid']) ? $_GET['serviceid'] : "";
	// 	if (!empty($id)) {
	// 		$service = Services::getServiceById($id);
	// 		$data = array('service' => $service);
	// 		$this->render('phuchoi',$data);
	// 	}else{
	// 		header("location:".URL_BASE);
	// 	}
	// }
	// public function son(){
	// 	$id = isset($_GET['serviceid']) ? $_GET['serviceid'] : "";
	// 	if (!empty($id)) {
	// 		$service = Services::getServiceById($id);
	// 		$data = array('service' => $service);
	// 		$this->render('son',$data);
	// 	}else{
	// 		header("location:".URL_BASE);
	// 	}
	// }
	// public function danphim(){
	// 	$id = isset($_GET['serviceid']) ? $_GET['serviceid'] : "";
	// 	if (!empty($id)) {
	// 		$service = Services::getServiceById($id);
	// 		$data = array('service' => $service);
	// 		$this->render('danphim',$data);
	// 	}else{
	// 		header("location:".URL_BASE);
	// 	}
	// }	

	public function book_service_by_id(){
		$this->render("book_service_by_id");
	}
}
?>