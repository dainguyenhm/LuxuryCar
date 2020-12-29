<?php
	class Contact{
		private $contactid;
		private $fullname;
		private $phone;
		private $email;
		private $address;
		private $content;

	public static function getAll(){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM `Contact`";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
	}
	public static function getContactById($contactid){
			$objDb = DB::getConnection();
			$sql = "SELECT * FROM `Contact` WHERE contactid = $contactid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
	}
	public function addContact($fullname, $phone, $email, $address, $content){
		$objDb = DB::getConnection();
		$sql = "INSERT INTO contact(fullname,phone,email,address,content) VALUES ('".$fullname."','".$phone."','".$email."','".$address."','".$content."')";
		$stmt = $objDb->prepare($sql);
		if ($stmt->execute()) {
			return true;
		}
		else{
			return false;
		}
	}

	public function editContact($contactid,$fullname, $phone, $email, $address, $content){
		$objDb = DB::getConnection();
		$sql = "UPDATE `contact` SET ,`fullname`='".$fullname."',`phone`='".$phone."',`email`='".$email."',`address`='".$address."',`content`='".$content."' WHERE `contactid`=$contactid";
		$stmt = $objDb->prepare($sql);
		if ($stmt->execute()) {
			return true;
		}
		else{
			return false;
		}
	}

	public function removeContactById($contactid){
		$sql = "DELETE FROM Contact WHERE contactid = $contactid";

		$stmt =$objDb->prepare($sql);

		if ($stmt->execute()) {
			return true;
		}
		else{
			return false;
		}
	}
}
?>