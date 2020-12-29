<?php
	class Introduce{
		private $introduceid;
		private $content;
		private $image;

	public static function getAll(){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM `Introduces`";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
	}
	public static function getIntroduceById($introduceid){
			$objDb = DB::getConnection();
			$sql = "SELECT * FROM `Introduces` WHERE introduceid = $introduceid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
	}
	public function addIntroduce($content, $image){
				//Tạo kết nối với CSDL
			$objDb = DB::getConnection();
				// Tạo truy vấn theo chức năng
			$query = "INSERT INTO introduces(content,image) VALUES ('".$content."','".$image."')";
				//Prepare câu truy vấn
			$stmt = $this->db->prepare($query);
				// Thực thi truy vẩn
			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
	}

	public function editIntroduce($introduceid, $content, $image){
		$objDb = DB::getConnection();

		$sql = "UPDATE `introduces` SET `content`='".$content."',`image`='".$image."' WHERE  `introduceid`=$introduceid";

		$stmt = $this->db->prepare($query);
				// Thực thi truy vẩn
		if ($stmt->execute()) {
			return true;
		}
		else{
			return false;
		}
	}

	public function removeIntroduceById($contactid){
		$sql = "DELETE FROM Introduces WHERE introduceid = $introduceid";

		$stmt = $this->db->prepare($sql);

		if ($stmt->execute()) {
			return true;
		}
		else{
			return false;
		}
	}
}
?>