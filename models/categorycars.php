<?php 
	/**
	 * 
	 */
	class Categorycars
	{	
		private $categorycarid;
		private $name;

		public function getAll(){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM categorycars";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}

		public function getNameCategorycarsById($categorycarid){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT name FROM categorycars WHERE categorycarid = $categorycarid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
		}

		public function getCategorycarsById($categorycarid){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM categorycars WHERE categorycarid = $categorycarid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
		}

		public static function addCategorycars($name){
			$objDb = DB::getConnection();
			$sql = "INSERT INTO `categorycars`(`name`) VALUES ( '".$name."')";
			$stmt = $objDb->prepare($sql);
			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
		}

		public static function editCategorycars($categorycarid,$name){
			$objDb = DB::getConnection();
			$sql ="UPDATE `categorycars` SET `name`=$name WHERE categorycarid = $categorycarid";
			$stmt = $objDb->prepare($sql);
			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
		}

		public static function removeCategorycars($categorycarid){
			$objDb = DB::getConnection();
			
			$sql = "DELETE FROM categorycars WHERE categorycarid = $categorycarid";

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