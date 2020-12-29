<?php
	class Admin
	{
		private $username;
		private $password;
		private $displayname;

		public function checkAccount($_u, $_p){
			$objDb = DB::getConnection();
			$sql = "SELECT * FROM users WHERE username = '".$_u."' AND password = '".$_p."'";
			$stmt = $objDb->prepare($sql);
			$stmt -> execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $row;
		}
	}
?>