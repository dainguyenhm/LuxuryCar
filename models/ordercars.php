<?php 
/**
 * 
 */
class Ordercars 
{
	
	private $ordercarid;
	private $customersid;
	private $carid;
	private $note;
	private $booktime;
	private $status;

	public function getAll(){
		$objDb = DB::getConnection(); // tạo kết nối với csdl
		$sql = "SELECT * FROM `ordercars`";
		$stmt = $objDb->prepare($sql);
		$stmt -> execute();
		$items = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$items[] = $row;
		}
		return $items;
	}

	public static function getOrdercarById($ordercarid){
		$objDb = DB::getConnection(); // tạo kết nối với csdl
		$sql = "SELECT * FROM `ordercars` WHERE ordercarid = $ordercarid ";
		$stmt = $objDb->prepare($sql);
		$stmt -> execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

	public function addOrdercars($customersid, $carid, $note, $booktime,$status){
		$objDb = DB::getConnection();

		$sql = "INSERT INTO `ordercars` (`customersid`, `carid`, `note`,`booktime`,`status`) VALUES ($customersid, $carid, '".$note."', '".$booktime."', '".$status."')";

		$stmt = $objDb->prepare($sql);

		if ($stmt->execute()) {
			return true;
		}
		else{
			return false;
		}
	}

	public static function editStatus($ordercarid, $status){
		$objDb = DB::getConnection();
		$sql = "UPDATE `ordercars` SET `status` = '".$status."' WHERE `ordercars`.`ordercarid` = $ordercarid";
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