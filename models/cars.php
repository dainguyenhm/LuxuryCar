<?php 
	/**
	 * 
	 */
	class Cars
	{
		private $carid;
		private $name;
		private $brandcar;
		private $price;
		private $yearcar;
		private $statuscar;
		private $fromcar;
		private $model;
		private $color;
		private $transmission;
		private $size;
		private $baselength;
		private $engine;
		private $maxpower;
		private $drive;
		private $speedup;
		private $maxspeed;
		private $description;
		private $image;
		private $categorycarid;

		public static function getAll(){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM `cars` ORDER BY carid DESC LIMIT 8";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}

		public static function getAllCarsHot(){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM `cars` LIMIT 4 OFFSET 1";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}

		public static function getAllCarsByCategoryCarId($categorycarid){
			$objDb = DB::getConnection();
			$sql = "SELECT * FROM `cars` WHERE categorycarid = $categorycarid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}

		public static function getAllCarsSameByCategoryCarId($categorycarid){
			$objDb = DB::getConnection();
			$sql = "SELECT * FROM `cars` WHERE categorycarid = $categorycarid LIMIT 4 OFFSET 1";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}

		public static function getCarById($carid){
			$objDb = DB::getConnection();
			$sql = "SELECT * FROM `cars` WHERE carid = $carid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
		}

		
		
		public static function getCarByName($searchValue){
			$objDb = DB::getConnection();
			$sql = "SELECT * FROM `cars` WHERE name LIKE '%".$searchValue."%'";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}

		public static function getBookCarById($carid){
			$objDb = DB::getConnection();
			$sql = "SELECT `carid`, `name`, `color` FROM `cars` WHERE carid = $carid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
		}

		

		public  function getCarLimit($currentpage, $item_per_page){
			$objDb = DB::getConnection();			
			$offsetpage = ($currentpage - 1) * $item_per_page;
			$sql = "SELECT * FROM cars ORDER BY carid ASC LIMIT $item_per_page OFFSET $offsetpage";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}

		public  function getCarLimitByCategory($currentpage, $item_per_page, $categorycarid){
			$objDb = DB::getConnection();
			$offsetpage = ($currentpage - 1) * $item_per_page;
			$sql = "SELECT * FROM `cars` WHERE categorycarid = $categorycarid ORDER BY carid ASC LIMIT $item_per_page OFFSET $offsetpage";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}

		public function getNumRows(){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM `cars`";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return sizeof($items);
		}

		public function getNumRowsByCategory($categorycarid){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM `cars` WHERE categorycarid = $categorycarid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return sizeof($items);
		}

		public static  function addCar($name,$brandcar,$price,$yearcar,$statuscar,$fromcar,$model,$color,$transmission,$size,$baselength,$engine,$maxpower,$drive,$speedup,$maxspeed,$description,$image,$categorycarid){
			$objDb = DB::getConnection();
			$sql = "INSERT INTO `cars`( `name`, `brandcar`, `price`, `yearcar`, `statuscar`, `fromcar`, `model`, `color`, `transmission`, `size`, `baselength`, `engine`, `maxpower`, `drive`, `speedup`, `maxspeed`, `description`, `image`, `categorycarid`) VALUES  ( '".$name."' , '".$brandcar."' , $price , $yearcar , '".$statuscar."' , '".$fromcar."' , '".$model." ', '".$color."' , '".$transmission."' , '".$size."' , '".$baselength."' , '".$engine."' , '".$maxpower."' , '".$drive."', '".$speedup."' , '".$maxspeed."' , '".$description."' , '".$image."' , $categorycarid ) ";

			$stmt = $objDb->prepare($sql);
				// Thực thi truy vẩn
			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
		}

		public static function editCar($carid,$name,$brandcar,$price,$yearcar,$statuscar,$fromcar,$model,$color,$transmission,$size,$baselength,$engine,$maxpower,$drive,$speedup,$maxspeed,$description,$image,$categorycarid){
			$objDb = DB::getConnection();

			$sql = "UPDATE cars SET name='".$name."',brandcar='".$brandcar."',price=$price,yearcar=$yearcar,statuscar='".$statuscar."',fromcar='".$fromcar."',model='".$model."',color='".$color."',transmission='".$transmission."',size='".$size."',baselength='".$baselength."',engine='".$engine."',maxpower= '".$maxpower."',drive='".$drive."',speedup='".$speedup."',maxspeed='".$maxspeed."',description='".$description."',image='".$image."',categorycarid=$categorycarid WHERE carid = $carid";
			$stmt = $objDb->prepare($sql);
			if($stmt->execute()==true){
				return true;
			}else{
				return false;
			}
		}

		public static function removeCar($carid){
			$objDb = DB::getConnection();
			$sql = "DELETE FROM cars WHERE carid = $carid";

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

 		