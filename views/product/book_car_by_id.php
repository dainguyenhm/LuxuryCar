<?php 
	session_start();
	$_SESSION['title'] = 'Đặt xe';
 ?>
<div id="content" class="container-fluid" >
		<script type="text/javascript">
			function formBookCar(){
				var name = document.getElementById("txtName").value;
				var email = document.getElementById("txtEmail").value;
				var phone = document.getElementById("txtPhone").value;
				var adress = document.getElementById("txtAdress").value;
				var xacnhan = document.getElementsByName('xacnhan');
				var status = true;

				// if(xacnhan!=1){
				// 	status = false;
				// }

				if(name==""){
					document.getElementById("msgName").innerHTML = "Vui lòng nhập tên!";
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
					document.getElementById("msgAdress").innerHTML = "Vui lòng nhập địa chỉ!";
					document.getElementById("txtAdress").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("txtAdress").style.border="";
					document.getElementById("msgAdress").innerHTML="";
				}				

				return status;
			}
		</script>
		<?php if (!isset($_COOKIE['userid'])) { ?>
				<script type="text/javascript">
					if (confirm('Vui lòng đăng nhập để đặt xe!')) {
						location.replace("http://localhost:82/?controller=users&action=login&pages=bookcar&id=<?php echo $_GET['id']; ?>");
					}else{
						location.replace("http://localhost:82/?controller=product&action=home")
					}
				</script>		 
		<?php } ?>
		<?php
			if(isset($_COOKIE['userid'])){
				$user = new Customers();
				$item = $user->getCustomersById($_COOKIE['userid']);
			}
		?>
		
		<div id="book-car" class="book-car container-fluid">
			<div id="book-car-form" class="container">
				<div id="title-book-car">
					Đặt trước xe
				</div>
				<?php 
					if (isset($_COOKIE['userid'])) {
						if (isset($_POST['submitBookCar'])) {
							$customerid = $_COOKIE['userid'];
							$carid = $_POST['carid'];
							$note = $_POST['txtComment'];
							$date = $_POST['booktime'];
							$status = "Chưa lái thử";
							$datetime = DateTime::createFromFormat('d/m/Y H:i:s', $date);
							$ordercars = new Ordercars();
							if ($ordercars->addOrdercars($customerid,$carid,$note,$datetime->format('Y-m-d H:i:s'),$status) == true) {
								echo "<div class='alert alert-success'>Đặt xe thành công!</div>";
							}else{
								echo "<div class='alert alert-danger'>Đặt xe thất bại!</div>";
							}
						}
					}
				 ?>
				<div>
					<form action="<?php echo URL_BASE;?>?controller=product&action=book_car_by_id&id=<?php echo $cars['carid']; ?>" method="post" onsubmit="return formBookCar()";>
						<ul>
							<li style="color: #cc0000;font-size: 17px;margin: 10px 0px 10px 0px;">(*) Thông tin người đặt:</li>
							<li class="row" style="width: 90%;">
							    <div class="col-md-6">
							    	<input class="input-book input-book-car" type="text" name="txtName" id="txtName" placeholder="Họ và Tên" value="<?php if(isset($_COOKIE['userid'])){echo $item['contactname'];}?>" />
							    	<br><span id="msgName" style="color: #cc0000;"></span>
							    </div>
							    <div class="col-md-6">
							    	<input class="input-book input-book-car" type="text" name="txtEmail" id="txtEmail"  placeholder="Email" value="<?php if(isset($_COOKIE['userid'])){echo $item['email'];}?>" />
							    	<br><span id="msgEmail" style="color: #cc0000;"></span>
							    </div>
							</li>
							<li class="row" style="width: 90%;">
								<div class="col-md-6">
							    	<input class="input-book input-book-car" type="text" name="txtPhone" id="txtPhone" placeholder="Điện thoại" value="<?php if(isset($_COOKIE['userid'])){echo $item['phone'];}?>" />
							    	<br><span id="msgPhone" style="color:#cc0000; "></span>
							    </div>
							    <div class="col-md-6">
							    	<input class="input-book input-book-car" type="text" name="txtAdress" id="txtAdress" placeholder="Địa chỉ" value="<?php if(isset($_COOKIE['userid'])){echo $item['address'];}?>" />
							    	<br><span id="msgAdress" style="color:#cc0000;"></span>
							    </div>
							</li>
							<li style="color: #cc0000;font-size: 17px;margin: 10px 0px 10px 0px;">(*) Thông tin xe bạn đã chọn:</li>
							<li class="row" style="width: 90%;">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<span style="color: white;">Tên xe:</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input class="input-book input-book-car" type="text" name="namecar" value="<?php echo $cars['name'] ?>" placeholder="" />	
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<span style="color: white;">Mã xe:</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input class="input-book input-book-car" type="text" name="carid" value="<?php echo $cars['carid'] ?>" placeholder="" />	
										</div>
									</div>
								</div>
							</li>
							<li>
								
							</li>
							<li class="row" style="width: 90%;">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<span style="color: white;">Màu xe:</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input class="input-book input-book-car" type="text" name="color" value="<?php echo $cars['color'] ?>"  placeholder="" />
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<span style="color: white;">Thời gian đến thử xe:</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input id="input" type="text" name="booktime" class="form-control" style="background-color: #ffffff;">
								            <br><span id="msginput" style="color: #cc0000;"></span>
											 <script>
										        $('#input').datetimepicker({ 
										        	footer: true,
										        	modal: true,
										        	format: 'dd/mm/yyyy HH:mm:ss',
													minDate: new Date()
										        });
										    </script>
										</div>
									</div>	
								</div>
							</li>
							<li class="row" style="width: 90%;">
								<div class="col-md-6">
									<textarea class="textarea-comment textarea-comment-car" name="txtComment" placeholder="Ghi chú"></textarea>
								</div>
							</li>
							<li style="padding-bottom: 10px;padding-top: 10px">
								<input type="checkbox" name="xacnhan" id="xacnhan" value="1"><span style="color: white;">&nbsp;Bạn đã chắc chắn đặt chiếc xe này?</span>
							</li>
							<li>
								<input style="padding-left: 20px;padding-right:20px;background: #b30000; " class="btn btn-danger check" type="submit" name="submitBookCar" value="ĐẶT XE" />
							</li>
						</ul>
					</form>	
				</div>
			</div>
		</div>
	</div>