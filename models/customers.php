<?php
class Customers
{
	private $customersid;
	private $contactname;
	private $username;
	private $password;
	private $phone;
	private $email;
	private $address;
	private $city;
	private $country;
	private $type;


	public function add($n,$tk,$mk,$p,$e,$a)
        {
        	$objDb = DB::getConnection();
            $sql = "INSERT INTO customers(contactname,username,password,phone,email,address) VALUES (N'".$n."','".$tk."','".$mk."','".$p."','".$e."','".$a."')";
            //Prepare cau truy van
			$stmt = $objDb->prepare($sql);
            //Thực thi truy vấn
            if($stmt->execute()==true){
                return true;
            }else{
                return false;
            }
    }

	public static function getAll(){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM customers";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}


	public static function getCustomersById($customersid){
			$sql = "SELECT * FROM customers WHERE customersid = $customersid";
			$objDb = DB::getConnection();
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
	}

	public static function getHistoryById($customersid){
			$objDb = DB::getConnection();
			$sql = "SELECT orderservices.orderserviceid,orderservices.customersid,orderservices.booktime,orderservices.namecar,orderservices.yearcar,orderservices.statuscar,orderservicedetail.serviceid,name
					FROM orderservices,orderservicedetail
						LEFT OUTER JOIN services
						ON  (services.serviceid = orderservicedetail.serviceid)
					WHERE orderservices.orderserviceid = orderservicedetail.orderserviceid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
	}

	public function update($uid,$n, $p, $e, $a, $c){
		//Tạo kết nối CSDL
		$objDb = DB::getConnection();
		//Tạo truy vấn theo chức năng
		$sql = "UPDATE customers SET contactname='".$n."',phone='".$p."',email='".$e."',address='".$a."',city='".$c."' WHERE customersid=".$uid."";
		//echo $sql;
		//Prepare cau truy van
		$stmt = $objDb->prepare($sql);

		//Thực thi truy vấn
		if($stmt->execute()==true){
			return true;
		}else{
			return false;
		}
    }

}
?>