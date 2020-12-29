<?php 
	/**
	 * 
	 */
	class Orderservicedetail
	{
		private $orderserviceid;
		private $serviceid;
		private $discount;

		public function addOrderservicedetail($orderserviceid, $serviceid, $discount)
		{
			$objDb = DB::getConnection();
			$sql = "INSERT INTO `orderservicedetail`(`orderserviceid`, `serviceid`, `discount`) VALUES ($orderserviceid, $serviceid, $discount)";
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