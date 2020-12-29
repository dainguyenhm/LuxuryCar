<?php
	session_start();
	$_SESSION['title'] = 'Trang đăng ký';
	$user = new Customers();
	$item = $user->getAll();
	// echo "<pre>";
	// print_r($item);
	//echo $item[0]['username'];
	echo "<script>\n";
	echo "var js_array = new Array();\n";
	foreach($item as $key => $value)
	{
		echo "js_array[".$key."] =". json_encode($value['username']).";\n";
	}
	echo "</script>\n";
	if(isset($_POST['btnLogin'])){
            $tk = $_POST['txtUsername'];
            $mk = $_POST['txtPassword'];
            $n = $_POST['txtName'];
            $p = $_POST['txtPhone'];
            $e = $_POST['txtEmail'];
            $a = $_POST['txtAddress'];

            
            if($user->add($n,$tk,$mk,$p,$e,$a)==true){
                $_SESSION['Status_Register'] = true;
            	header('location:?controller=users&action=login');
            }else{
                $_SESSION['Status_Register'] = flase;
            	header('location:?controller=users&action=login');
            }
    }
?>
<div class="container-fluid">
	<div class="content">
		<script>
			// for (var i = 0; i < js_array.length; i++){
   //  				document.write(js_array[i]);
			// }
			function validate(js_array){
				var name = document.getElementById("txtUsername").value;
				var contactname = document.getElementById("txtName").value;
				var pass = document.getElementById("txtPassword").value;
				var email = document.getElementById("txtEmail").value;
				var phone = document.getElementById("txtPhone").value;
				var adress = document.getElementById("txtAddress").value;
				var status = true;
				var checkusername = true;

				if(name==""){
					document.getElementById("msgUsername").innerHTML = "Vui lòng nhập tên tài khoản!";
					document.getElementById("txtUsername").style.border= "1px solid red";
					status = false;
				}else{
					// for (var i = 0; i < js_array.length; i++){
   		// 				if(name == js_array[i]){
   		// 					checkusername = false;
   		// 					break;
   		// 				}
   		// 			}
   		// 			if(checkusername==false){
					// 	document.getElementById("msgEmail").innerHTML="Tên tài khoản đã tồn tại!";
					// 	document.getElementById("txtEmail").style.border="1px solid red";
					// 	status = false;
					// }else{
					// 	document.getElementById("txtUsername").style.border="";
					// 	document.getElementById("msgUsername").innerHTML="";
					// }
					document.getElementById("txtUsername").style.border="";
					document.getElementById("msgUsername").innerHTML="";
				}

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

				var passPattern =/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]){8,}/;
					// . trùng khớp với 1 ký tự đơn bất kỳ ngoại trừ ký tự ngắt dòng (line-break) và cũng không lấy được ký tự có dấu (unicode).
					// ? Trùng khớp với 0 hoặc 1 lần ký tự đứng trước nó
					// * số lần lặp bất kì
					// ?= tìm trong chuỗi những đoạn cần đã có chưa
					if(pass == ""){
						//alert("Tên đăng nhập không được để trống.");
						document.getElementById("msgPassword").innerHTML="Vui lòng nhập mật khẩu";
						document.getElementById("txtPassword").style.border="1px solid red";
						status = false;
					} else{
						if(passPattern.test(pass)==false){
							document.getElementById("msgPassword").innerHTML="Mật khẩu phải có ít nhất 8 ký tự";
							document.getElementById("txtPassword").style.border="1px solid red";
							status = false;
						}else{
							//document.getElementById("msgUser").style.display = "none";
							document.getElementById("txtPassword").style.border="";
							document.getElementById("msgPassword").innerHTML="";
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

				return status;
			}
		</script>
		
		<div id="content" class="container-fluid" style="margin-bottom:50px; " >
			<div class="container-fluid" style="background: #f6f6f6;">
				<div class="container link-page" style="margin-top: 25px;">
					<a href="<?php echo URL_BASE;?>" class="index">Trang chủ</a>
					<span>&nbsp;&rsaquo;&nbsp;</span>
					<a href="<?php echo URL_BASE;?>?controller=users&action=register" class="title-page">Đăng ký</a>
				</div>
			</div>
			<div class="container" style="margin-top: 10px;">
				<div class="row">
					<div class="col-md-12">	
						<form action="<?php echo URL_BASE;?>?controller=users&action=register" method="POST" class="form-control" onsubmit="return validate()">
							<div class="row" style="margin-top: 30px; margin-bottom: 30px;">
								<div class="col-md-12" style="text-align: center;"><h2>Chào mừng đến với Luxury Car</h2></div>
							</div>
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-3" style="text-align: right;">
											<label>
												Tên đăng nhập:
											</label>
										</div>
										<div class="col-md-8">
											<input class="login-input form-control" type="text" placeholder="Tài khoản" id="txtUsername" name="txtUsername">
											<span id="msgUsername" class="txtNote"></span>			
										</div>
									</div>
									<div class="row">
										<div class="col-md-3" style="text-align: right;">
											<label>
												Mật khẩu:
											</label>
											<br>
										</div>
										<div class="col-md-8">
											<input class="login-input form-control" type="password" placeholder="Mật khẩu" id="txtPassword" name="txtPassword">
											<span id="msgPassword" class="txtNote"></span>
										</div>				
									</div>
									<div class="row">
										<div class="col-md-3" style="text-align: right;">
											<label>
												Họ và tên:
											</label>
											<br>
										</div>
										<div class="col-md-8">
											<input class="login-input form-control" type="text" placeholder="Họ tên" id="txtName" name="txtName">
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
											<input class="login-input form-control" type="text" placeholder="Email" id="txtEmail" name="txtEmail">
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
											<input class="login-input form-control" type="text" placeholder="Điện thoại" id="txtPhone" name="txtPhone">
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
											<input class="login-input form-control" type="text" placeholder="Địa chỉ" id="txtAddress" name="txtAddress">
											<span id="msgAddress" class="txtNote"></span>
										</div>				
									</div>
									<div class="row" style="margin-top: 15px;">
										<div class="col-md-3"></div>
										<div class="col-md-2" style="padding-right: 5px;">
											<input type="submit" name="btnLogin" class="btn btn-success form-control" value="Đăng ký">
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