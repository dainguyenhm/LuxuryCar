<?php 
/**
 * 
 */
class News
{
	private $newsid;
	private $title;
	private $content;
	private $image;
	private $newsdate;

	public static function getAll(){
		$objDb = DB::getConnection(); // tạo kết nối với csdl
		$sql = "SELECT * FROM `news` ORDER BY `news`.`newsid` DESC";
		$stmt = $objDb->prepare($sql);
		$stmt -> execute();
		$items = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$items[] = $row;
		}
		return $items;
	}

	public static function getNewsLast(){
		$objDb = DB::getConnection();
		$sql = "SELECT * FROM `news` ORDER BY `news`.`newsid` DESC LIMIT 1";
		$stmt = $objDb->prepare($sql);
		$stmt -> execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

	public static function getNewsSecond(){
		$objDb = DB::getConnection();
		$sql = "SELECT * FROM `news` ORDER BY `news`.`newsid` DESC LIMIT 2 OFFSET 1";
		$stmt = $objDb->prepare($sql);
		$stmt -> execute();
		$items = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$items[] = $row;
		}
		return $items;
	}

	public static function getNewsThird($currentpage, $item_per_page){
		$objDb = DB::getConnection();
		$offsetpage = ($currentpage - 1) * $item_per_page;
		$sql = "SELECT * FROM `news` ORDER BY `news`.`newsid` DESC LIMIT $item_per_page OFFSET $offsetpage";
		$stmt = $objDb->prepare($sql);
		$stmt -> execute();
		$items = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$items[] = $row;
		}
		return $items;
	}

	public static function getNumRowsNewsThird(){
		$objDb = DB::getConnection();
		$sql = "SELECT * FROM `news` ORDER BY `news`.`newsid` DESC";
		$stmt = $objDb->prepare($sql);
		$stmt -> execute();
		$items = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$items[] = $row;
		}
		return sizeof($items);
	}

	public static function getAllForPages(){
		$objDb = DB::getConnection(); // tạo kết nối với csdl
		$sql = "SELECT * FROM `news` ORDER BY newsid DESC LIMIT 6";
		$stmt = $objDb->prepare($sql);
		$stmt -> execute();
		$items = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$items[] = $row;
		}
		return $items;
	}

	public static function getNewsById($newsid){
		$objDb = DB::getConnection();
		$sql = "SELECT * FROM `news` WHERE newsid = $newsid";
		$stmt = $objDb->prepare($sql);
		$stmt -> execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		return $row;
	}

	public static function getNewsHighlights(){
		$objDb = DB::getConnection();
		$sql = $sql = "SELECT * FROM `news` ORDER BY `news`.`newsid` DESC LIMIT 2";
		$stmt = $objDb->prepare($sql);
		$stmt -> execute();
		$items = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$items[] = $row;
		}
		return $items;
	}

	public static function addNews($title, $summary, $content, $image, $newsdate){
		$objDb = DB::getConnection();
		$sql = "INSERT INTO `news` ( `title`, `summary`, `content`, `image`, `newsdate`) VALUES ('".$title."','".$summary."','".$content."','".$image."','".$newsdate."')";
		$stmt = $objDb->prepare($sql);
			// Thực thi truy vẩn
		if ($stmt->execute()) {
			return true;
		}
		else{
			return false;
		}
	}

	public static function editNews($newsid, $title, $summary, $content, $image, $newsdate){
		$objDb = DB:: getConnection();
		$sql = "UPDATE `news` SET `title`='".$title."',`summary`='".$summary."',`content`='".$content."',`image`='".$image."',`newsdate`='".$newsdate."' WHERE `newsid` = $newsid" ;
		$stmt = $objDb->prepare($sql);
			// Thực thi truy vẩn
		if ($stmt->execute()) {
			return true;
		}
		else{
			return false;
		}
	}

	public static function removeNews($newsid){
		$objDb = DB:: getConnection();
		$sql = "DELETE FROM `news` WHERE newsid = $newsid";
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