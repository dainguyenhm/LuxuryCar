<?php
	session_start();

	$_SESSION['title'] = 'Trang cập nhật';
?>
<div class="content">
		<?php
			if(isset($_COOKIE['userid'])){
				$user = new Customers();
				$item = $user->getCustomersById($_COOKIE['userid']);
				// echo "<pre>";
				// print_r($item1);
			}
			if(isset($_POST['btnLogin'])){
	            $n = $_POST['txtName'];
	            $p = $_POST['txtPhone'];
	            $e = $_POST['txtEmail'];
	            $a = $_POST['txtAddress'];
	            $c = $_POST['txtCity'];

	            
	            if($user->update($_COOKIE['userid'],$n,$p,$e,$a,$c)==true){
	                $_SESSION['Status_update'] = true;
	            	header('location:?controller=users&action=customer');
	            }else{
	                $_SESSION['Status_update'] = flase;
	            	header('location:?controller=users&action=customer');
	            }
    		}
		?>
		<script>
			function validate(){
				var city = document.getElementById("txtCity").value;
				var contactname = document.getElementById("txtName").value;
				var email = document.getElementById("txtEmail").value;
				var phone = document.getElementById("txtPhone").value;
				var adress = document.getElementById("txtAddress").value;
				var status = true;

				if(contactname==""){
					document.getElementById("msgName").innerHTML = "Vui lòng nhập họ tên!";
					document.getElementById("txtName").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("txtName").style.border="";
					document.getElementById("msgName").innerHTML="";
				}

				var emailPattern = /^([A-Za-z0-9_\-.+])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
				
				if(email == ""){
					document.getElementById("msgEmail").innerHTML="Vui lòng nhập Email!";
					document.getElementById("txtEmail").style.border="1px solid red";
					status = false;
				} else{
					if(emailPattern.test(email)==false){
						document.getElementById("msgEmail").innerHTML="Sai định dạng! vd: abcd@gmail.com";
						document.getElementById("txtEmail").style.border="1px solid red";
						status = false;
					}else{
						document.getElementById("txtEmail").style.border="";
						document.getElementById("msgEmail").innerHTML="";
					}
				}

				var phonePattern = /^(09|03|07|08|05)+([0-9]{8})$/;
				if(phone == ""){
					document.getElementById("msgPhone").innerHTML = "Vui lòng nhập số điện thoại!";
					document.getElementById("txtPhone").style.border= "1px solid red";
					status = false;
				} else{
					if(phonePattern.test(phone)==false){
						document.getElementById("msgPhone").innerHTML="Số điện thoại phải là số và đủ 10 ký tự!";
						document.getElementById("txtPhone").style.border="1px solid red";
						status = false;
					}else{
						document.getElementById("txtPhone").style.border="";
						document.getElementById("msgPhone").innerHTML="";
					}
				}

				if(adress==""){
					document.getElementById("msgAddress").innerHTML = "Vui lòng nhập địa chỉ!";
					document.getElementById("txtAddress").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("txtAdress").style.border="";
					document.getElementById("txtAddress").innerHTML="";
				}
				if(city==""){
					document.getElementById("msgCity").innerHTML = "Vui lòng nhập thành phố!";
					document.getElementById("txtCity").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("txtCity").style.border="";
					document.getElementById("txtCity").innerHTML="";
				}			

				return status;
			}
		</script>
		<div id="content" class="container-fluid" style="margin-bottom:50px; " >
			<div class="container-fluid" style="background: #f6f6f6;">
				<div class="container link-page" style="margin-top: 25px;">
					<a href="<?php echo URL_BASE;?>" class="index">Trang chủ</a>
					<span>&nbsp;&rsaquo;&nbsp;</span>
					<a href="<?php echo URL_BASE;?>?controller=users&action=login" class="index">Đăng nhập</a>
					<span>&nbsp;&rsaquo;&nbsp;</span>
					<a href="<?php echo URL_BASE;?>?controller=users&action=customer" class="title-page">Trang cá nhân</a>
				</div>
			</div>

			<div class="container">
				<div class="row" style="margin-top: 30px; ">
					<div id="menu-profile" class="col-md-2" style=" background-color: #f8f9fa;">
						<div id="current-login" class="row">
							<div class="col-md-12">
								<span>Xin chào, <?php echo $item['contactname'];?></span>
							</div>
						</div>
						<div id="current-login" class="row">
							<div class="col-md-12">
								<span><img src="<?php echo URL_BASE;?>assets/images/verified-account.jpg"></span>
							</div>
						</div>
						<div class="row" style="margin-top: 15px; ">
							<div class="col-md-12">
								<ul>
									<li >
										<a href="<?php echo URL_BASE;?>?controller=users&action=customer" style="color: #e60000;">Quản lý tài khoản</a>
										<ul>
											<li><a href="<?php echo URL_BASE;?>?controller=users&action=customer">Thông tin cá nhân</a></li>
											<li><a href="#">Số địa chỉ</a></li>
											<li><a href="#">Ưu đãi</a></li>
										</ul>
									</li>
									<li>
										<a href="<?php echo URL_BASE;?>?controller=users&action=history">Lịch sử của tôi</a>
									</li>
									<li><a href="#">Nhận xét của tôi</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-10">
						<div class="row">
							<div class="title-content-detail col-md-12">
								<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
								<span>CẬP NHẬT THÔNG TIN</span>
							</div>
						</div>
						<div class="container-fluid">
							<form action="<?php echo URL_BASE;?>?controller=users&action=update" method="POST"> <!-- onsubmit="return validate() -->
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-3" style="text-align: right;">
												<label>
													Họ và tên:
												</label>
												<br>
											</div>
											<div class="col-md-8">
												<input class="login-input form-control" type="text" placeholder="Họ tên" id="txtName" name="txtName" value="<?php echo $item['contactname'];?>">
												<span id="msgName" class="txtNote"></span>
											</div>				
										</div>
										<div class="row">
											<div class="col-md-3" style="text-align: right;">
												<label>
													Email:
												</label>
												<br>
											</div>
											<div class="col-md-8">
												<input class="login-input form-control" type="text" placeholder="Email" id="txtEmail" name="txtEmail" value="<?php echo $item['email'];?>">
												<span id="msgEmail" class="txtNote"></span>
											</div>				
										</div>
										<div class="row">
											<div class="col-md-3" style="text-align: right;">
												<label>
													Điện thoại:
												</label>
												<br>
											</div>
											<div class="col-md-8">
												<input class="login-input form-control" type="text" placeholder="Điện thoại" id="txtPhone" name="txtPhone" value="<?php echo $item['phone'];?>">
												<span id="msgPhone" class="txtNote"></span>
											</div>				
										</div>
										<div class="row">
											<div class="col-md-3" style="text-align: right;">
												<label>
													Địa chỉ:
												</label>
												<br>
											</div>
											<div class="col-md-8">
												<input class="login-input form-control" type="text" placeholder="Địa chỉ" id="txtAddress" name="txtAddress" value="<?php echo $item['address'];?>">
												<span id="msgAddress" class="txtNote"></span>
											</div>				
										</div>
										<div class="row">
											<div class="col-md-3" style="text-align: right;">
												<label>
													Thành phố:
												</label>
												<br>
											</div>
											<div class="col-md-8">
												<input class="login-input form-control" type="text" placeholder="Thành phố" id="txtCity" name="txtCity" value="<?php echo $item['city'];?>">
												<span id="msgCity" class="txtNote"></span>
											</div>				
										</div>
										<div class="row" style="margin-top: 15px;">
											<div class="col-md-3"></div>
											<div class="col-md-2" style="padding-right: 5px;">
												<input type="submit" name="btnLogin" class="btn btn-success form-control" value="Cập nhật">
											</div>
											<div class="col-md-2" style="padding-left: 5px;">
												<input type="reset" name="btnReset" class="btn btn-danger form-control" value="Nhập lại">
											</div>
										</div>	
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>