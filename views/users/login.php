
<?php
	session_start();
	$_SESSION['title'] = 'Trang đăng nhập';
?>
<div class="container-fluid">
	<div class="content">
		<script>
			function validate(){
				var name = document.getElementById("txtUsername").value;
				var pass = document.getElementById("txtPassword").value;
				var status = true;

				if(name==""){
					document.getElementById("msgUsername").innerHTML = "Vui lòng nhập tên tài khoản!";
					document.getElementById("txtUsername").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("txtUsername").style.border="";
					document.getElementById("msgUsername").innerHTML="";
				}

				if(pass==""){
					document.getElementById("msgPassword").innerHTML = "Vui lòng nhập mật khẩu!";
					document.getElementById("txtPassword").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("txtPassword").style.border="";
					document.getElementById("msgPassword").innerHTML="";
				}				

				return status;
			}
		</script>
		<div id="content" class="container-fluid" style="margin-bottom:50px; " >
			<div class="container-fluid" style="background: #f6f6f6;">
				<div class="container link-page" style="margin-top: 25px;">
					<a href="<?php echo URL_BASE;?>" class="index">Trang chủ</a>
					<span>&nbsp;&rsaquo;&nbsp;</span>
					<a href="<?php echo URL_BASE;?>?controller=users&action=login" class="title-page">Đăng nhập</a>
				</div>
			</div>
			<div class="container" style="margin-top: 5px;">
				<?php

					if(isset($_SESSION['Status_Register'])){
		                if($_SESSION['Status_Register']==true){
		                    echo "<div class='alert alert-success'>Đăng ký thành công, bạn hãy đăng nhập để tiếp tục!</div>";
		                    unset($_SESSION['Status_Register']);
		                }else{
		                    echo "<div class='alert alert-success'>Đăng ký thất bại thất bại</div>";
		                    unset($_SESSION['Status_Register']);
		                }
            		}

            		$user = new Customers();
				    $item = $user->getALL();
				    // echo "<pre>";
				    // print_r($item);
				    if(isset($_POST['btnLogin']) && isset($_GET['pages'])){
				    	if ($_GET['pages'] == 'bookservice') {
					        $tk = $_POST['txtUsername'];
					        $mk = $_POST['txtPassword'];
					        foreach ($item as $key => $value) {
					            if($tk==$value['username'] && $mk==$value['password']){
					                $_SESSION['s_user'] = $value['contactname'];
					                setcookie('s_user', $value['contactname'], time() + 86400);
					                setcookie('userid', $value['customersid'], time() + 86400);
					                echo '<script type="text/javascript">';
									echo 	"if (confirm('Tiếp tục trải nghiệm dịch vụ?')) {";
									echo 		'location.replace("http://localhost:82/?controller=service&action=book_service_by_id");}';
									echo 	'else{location.replace("http://localhost:82/?controller=pages");}';
									echo "</script>";
					                //header("location:?controller=pages");
					                break;
					            }else{
					                header("location:?controller=users&action=login");
					            }
					        }
						}		
				    }
				    if(isset($_POST['btnLogin']) && isset($_GET['pages'])){
				    	if ($_GET['pages'] == 'bookcar') {
					        $tk = $_POST['txtUsername'];
					        $mk = $_POST['txtPassword'];
					        foreach ($item as $key => $value) {
					            if($tk==$value['username'] && $mk==$value['password']){
					                $_SESSION['s_user'] = $value['contactname'];
					                setcookie('s_user', $value['contactname'], time() + 86400);
					                setcookie('userid', $value['customersid'], time() + 86400);
									header("location:?controller=product&action=book_car_by_id&id=".$_GET['id']);
					                break;
					            }else{
					                header("location:?controller=users&action=login");
					            }
					        }		
						}
					}

					if(isset($_POST['btnLogin']) && !isset($_GET['pages'])){
					 	$tk = $_POST['txtUsername'];
				        $mk = $_POST['txtPassword'];
				        foreach ($item as $key => $value) {
				            if($tk==$value['username'] && $mk==$value['password']){
				                $_SESSION['s_user'] = $value['contactname'];
				                setcookie('s_user', $value['contactname'], time() + 86400);
				                setcookie('userid', $value['customersid'], time() + 86400);
				                header("location:?controller=pages");
				                break;
				            }else{
				                header("location:?controller=users&action=login");
				            }
				        }
					 }

				?>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div>
							<div class="login-title">
								<h2>Chào mừng đến với Luxury Car</h2>
							</div>
							<div class="login-other">
								<span>Thành viên mới? <a href="<?php echo URL_BASE;?>?controller=users&action=register">Đăng ký</a> tại đây</span>
							</div>
						</div>
				<?php 	
				 if (isset($_GET['pages'])) {
				    	if ($_GET['pages'] == 'bookcar') {
				 ?>
						<form method="POST" action="<?php echo URL_BASE;?>?controller=users&action=login&pages=bookcar&id=<?php echo $_GET['id']; ?>" onsubmit="return validate()">
				<?php }else{ ?>
						<?php 
				    			if ($_GET['pages'] == 'bookservice') {
						 ?>
						 	<form method="POST" action="<?php echo URL_BASE;?>?controller=users&action=login&pages=bookservice" onsubmit="return validate()">
						<?php }else{?>
							<form method="POST" action="<?php echo URL_BASE;?>?controller=users&action=login" onsubmit="return validate()">
						<?php } ?>
				<?php }} ?>
							<div class="row">
								<div class="col-md-6" class="login-col1">
									<div>
										<label>
											Tên đăng nhập
										</label>
										<br>
										<input class="login-input form-control" type="text" placeholder="Vui lòng nhập tài khoản của bạn" id="txtUsername" name="txtUsername">
										<span id="msgUsername" style="color: red;"></span>
									</div>
									<div style="margin-top: 5px;">
										<label>
											Mật khẩu
										</label>
										<br>
										<input class="login-input form-control" type="password" placeholder="Vui lòng nhập mật khẩu của bạn" id="txtPassword" name="txtPassword">
										<span id="msgPassword" style="color: red;"></span>
									</div>
									<div class="login-forget">
										<a href="">Quên mật khẩu?</a>
									</div>
									
								</div>
								<div class="col-md-6" class="login-col2">
									<div class="row mod-login-btn" style="padding-top: 15px;">
										<input type="submit" name="btnLogin" class="btn btn-success form-control" value="Đăng nhập">
									</div>
									<div class="row mod-login-btn"><span>Hoặc đăng nhập bằng</span></div>
									<div class="row mod-login-btn">
										<button class="btn btn-primary form-control">FACEBOOK</button>	
									</div>
									<div class="row mod-login-btn">
										<button class="btn btn-danger form-control">GOOGLE</button>
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