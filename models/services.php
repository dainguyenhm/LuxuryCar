<?php
class Services
{
	private $serviceid;
	private $name;
	private $title;
	private $image;
	private $content;
	public static function add($name,$title,$image,$content)
    {
        	$objDb = DB::getConnection();
            $sql = "INSERT INTO `services`( `name`, `title`, `image`, `content`) VALUES ('".$name."','".$title."','".$image."','".$content."')";
            //Prepare cau truy van
			$stmt = $objDb->prepare($sql);
			// Thực thi truy vẩn
			if ($stmt->execute()) {
				return true;
			}
			else{
				return false;
			}
    }
	public static function getAll(){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM services";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
		}

	public static function getServiceById($serviceid){
			$objDb = DB::getConnection();
			$sql = "SELECT * FROM services WHERE serviceid = $serviceid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
	}
	
	public function update($serviceid,$n, $t, $im, $c){
		//Tạo kết nối CSDL
		$objDb = DB::getConnection();
		//Tạo truy vấn theo chức năng
		$sql = "UPDATE services SET name='".$n."',title='".$t."',image='".$im."',content='".$c."' WHERE serviceid=".$serviceid."";
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
    public function delete($serviceid){
		//Tạo kết nối CSDL
    	$objDb = DB::getConnection();
		//Tạo truy vấn theo chức năng
		$sql = "DELETE FROM services WHERE serviceid=".$serviceid."";
		
		//Prepare cau truy van
		$stmt = $objDb->prepare($sql);
		//Thực thi truy vấn
		if($stmt->execute()==true){
			return true;
		}else{
			return false;
		}
    }

    public function orderservicesdetail($oid,$svid)
    {
        	$objDb = DB::getConnection();
            $sql = "INSERT INTO orderservicedetail(orderserviceid,serviceid) VALUES (N'".$oid."','".$svid."')";
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

    public function getlastid(){
			$objDb = DB::getConnection();
			$sql = "SELECT Max(orderserviceid) FROM orderservices";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$row = $stmt->fetch(PDO::FETCH_NUM);
			return $row;
	}

    public function orderservices($cid,$nc,$yc,$sttc,$tb,$dv)
    {
        	$objDb = DB::getConnection();
            $sql = "INSERT INTO orderservices(customersid,namecar,yearcar,statuscar,booktime) VALUES (N'".$cid."','".$nc."','".$yc."','".$sttc."','".$tb."')";
			$stmt = $objDb->prepare($sql);
            //Thực thi truy vấn
            if($stmt->execute()==true){
				$lastID = $this->getlastid();
				//echo $lastID[0];
				//Prepare cau truy van
				for ($i = 0; $i < count($dv); $i++) {
					$this->orderservicesdetail($lastID[0],$dv[$i]);	
				}
                return true;
            }else{
                return false;
			}
			
    }
    public static function getOderService($cid){
			$objDb = DB::getConnection(); // tạo kết nối với csdl
			$sql = "SELECT * FROM orderservices WHERE customersid = $cid";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$items = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$items[] = $row;
			}
			return $items;
	}

}
?>