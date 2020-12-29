<?php session_start(); ?>
<style type="text/css">
	label{
		font-weight: bold;
	}
</style>
<div class="container">
	
	 <div class="row">
	  	<div class="col-md-12" style="text-align: center; padding-top: 30px;"><img style="width: 200px; height: 180px;" src="<?php echo URL_BASE;?>assets/images/logo.jpg"></div>
	 </div>
	 <div class="row">
		<div class="col-md-12 " style="text-align: center; padding-top: 20px; padding-bottom: 15px;">
			<span style="font-family: time; font-weight: bold; font-size: 40px; color: #727272;">Đăng nhập tài khoản</span>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-6 form-control">
			<?php 
				$admin = new Admin();
				if (isset($_POST['submitLogin'])) {
					$user = $_POST['txtUser'];
					$pass = $_POST['txtPass'];
					if(!empty($admin->checkAccount($user,$pass))){
						$row = $admin->checkAccount($user,$pass);
						$_SESSION['admin'] = $user;
						$location = "location:?controller=admin&action=home";
						header($location);
					}else{
						echo "<div><label class='alert alert-danger'>Sai tài khoản hoặc mật khẩu! </label></div>";
					}
				}	
			 ?>
			 <?php 
			 	if (isset($_GET['logout'])) {
			 		if ($_GET['logout'] == 'true') {
			 			unset($_SESSION['admin']);
			 		}
			 	}
			  ?>
			 
			<form action="<?php echo URL_BASE;?>?controller=admin&action=login" method="post">
				<div class="row" style="margin-top: 50px;">
					<div class="col-md-4"><label>Tên đăng nhập: </label></div>
					<div class="col-md-8"><input type="text" name="txtUser" class="form-control"></div>
				</div>
				<div class="row" style="margin-top: 10px;">
					<div class="col-md-4"><label>Mật khẩu: </label></div>
					<div class="col-md-8"><input type="password" name="txtPass" class="form-control"></div>
				</div>
				<div class="row" style="margin-top: 10px; margin-bottom: 50px;">
					<div class="col-md-4"></div>
					<div class="col-md-8"><input type="submit" name="submitLogin" value="Đăng nhập" class="btn btn-success"></div>
				</div>
			</form>
		</div>
	</div>
</div>