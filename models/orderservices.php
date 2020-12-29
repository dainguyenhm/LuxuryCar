<?php 
	/**
	 * 
	 */
	class Orderservices
	{
		
		private $orderserviceid;
		private $customersid;
		private $namecar;
		private $yearcar;
		private $brandcar;
		private $statuscar;
		private $booktime;
		private $service;

		public function getAll(){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM `orderservices`";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}
		public function getAllDesc(){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM orderservices ORDER BY orderserviceid DESC";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}
		public function getByCusID($id){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM orderservices WHERE customersid = $id ORDER BY orderserviceid DESC";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}

		public function addOrderservices($customersid, $namecar, $yearcar, $brandcar, $statuscar, $booktime){
			$objDb = DB::getConnection();
			$sql = "INSERT INTO `orderservices`( `customersid`, `namecar`, `yearcar`, `brandcar`, `statuscar`, `booktime`,`service`) VALUES ($customersid, '".$namecar."', '".$yearcar."', '".$brandcar."', '".$statuscar."', '".$booktime."')";
			$stmt = $objDb->prepare($sql);
			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
		}
	}

 ?>