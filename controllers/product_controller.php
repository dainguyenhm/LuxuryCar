<?php
require_once("controllers/base_controller.php");
require_once("models/cars.php");
require_once("models/categorycars.php");
require_once("models/customers.php");
require_once("models/ordercars.php");

class ProductController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "product";
	}

	public function home(){
		$cars = Cars::getAll();
		$data = array('cars' => $cars);
		$this->render('home',$data);
	}

	public function get_AllProduct_by_catid(){
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		if (!empty($id)) {
			$cars = Cars::getAllCarsByCategoryCarId($id);
			$data = array('cars' => $cars);
		}else{
			header("location:".URL_BASE);
		}
			$this->render('get_AllProduct_by_catid',$data);
	}

	public function get_product_by_id(){
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		if (!empty($id)) {
			$cars = Cars::getCarById($id);
			$data = array('cars' => $cars);
			$this->render('get_product_by_id',$data);
		}else{
			header("location:".URL_BASE);
		}
	}

	
	public function get_product_by_name(){
		if (isset($_POST['btnSearch'])) {
	 		// Lấy dữ liệu trong Form Search
	 		$searchValue = $_POST['search'];
	 		if ($searchValue != "") {
	 			$item = Cars::getCarByName($searchValue);
	 		}
	 		else{
		 		$item =Cars::getAll();
	 		}
	 	}else{
	 		$item = Cars::getAll();
	 	}
	 	$data = array('cars' =>$cars);
	 	$this->render('get_product_by_name', $data);
	}

	public function book_car_by_id(){
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		if (!empty($id)) {
			$cars = Cars::getBookCarById($id);
			$data = array('cars' => $cars);
			$this->render("book_car_by_id",$data);
		}else{
			header("location:".URL_BASE);
		}
	}
}
?>