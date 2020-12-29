<?php 
	session_start();
	$_SESSION['title'] = 'Đặt dịch vụ';
 ?>
<div class="container-fluid">
	<div id="content" class="container-fluid" >
		<script type="text/javascript">
			function formBookCar(){
				var name = document.getElementById("txtName").value;
				var email = document.getElementById("txtEmail").value;
				var phone = document.getElementById("txtPhone").value;
				var adress = document.getElementById("txtAdress").value;
				var namecar = document.getElementById("txtNameCar").value;
				var hang = document.getElementById("txtCarCompany").value;
				var stt = document.getElementById("txtSttCar").value;
				var yearcar = document.getElementById("txtYearManufacture").value;
				var date = document.getElementById("input").value;
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
				if(namecar==""){
					document.getElementById("msgNameCar").innerHTML = "Vui lòng nhập tên xe!";
					document.getElementById("txtNameCar").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("txtNameCar").style.border="";
					document.getElementById("msgNameCar").innerHTML="";
				}
				if(hang==""){
					document.getElementById("msgCarCompany").innerHTML = "Vui lòng nhập hãng xe!";
					document.getElementById("txtCarCompany").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("txtCarCompany").style.border="";
					document.getElementById("msgCarCompany").innerHTML="";
				}

				if(yearcar==""){
					document.getElementById("msgYearManufacture").innerHTML = "Vui lòng nhập năm sản xuất!";
					document.getElementById("txtYearManufacture").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("txtYearManufacture").style.border="";
					document.getElementById("msgYearManufacture").innerHTML="";
				}

				if(stt==""){
					document.getElementById("msgSttCar").innerHTML = "Vui lòng nhập tình trạng xe!";
					document.getElementById("txtSttCar").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("txtSttCar").style.border="";
					document.getElementById("msgSttCar").innerHTML="";
				}

				if(date==""){
					document.getElementById("msginput").innerHTML = "Vui lòng nhập thời gian bạn đến!";
					document.getElementById("input").style.border= "1px solid red";
					status = false;
				}else{
					document.getElementById("input").style.border="";
					document.getElementById("msginput").innerHTML="";
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
		<?php
			
			if(isset($_COOKIE['userid'])){
				$user = new Customers();
				$item = $user->getCustomersById($_COOKIE['userid']);
			}
			$user = new Services();
			$services = $user->getAll();
			// echo "<pre>";
			// print_r($item);
			//echo $item[0]['username'];
			if(isset($_POST['btnOrderServices'])){
		            $nc = $_POST['txtNameCar'];
		            $yc = $_POST['txtYearManufacture'];
		            $hang = $_POST['txtCarCompany'];
		            $stt = $_POST['txtSttCar'];		            
		            $date = $_POST['input'];
		            $service = $_POST['service']; 
					$datetime = DateTime::createFromFormat('d/m/Y H:i:s', $date);
                                                                     
		            if($user->orderservices($_COOKIE['userid'],$nc,$yc,$stt,$datetime->format('Y-m-d H:i:s'),$service)==true){
		            	header('location:?controller=users&action=customer');
		            }
		    }
		?>
		<div id="book-car" class="book-car container-fluid">
			<div id="book-car-form" class="container">
				<div id="title-book-car">
					Đặt lịch dịch vụ
				</div>
				<?php if (!isset($_COOKIE['userid'])) {
						echo '<script type="text/javascript">';
						echo 	"if (confirm('Vui lòng đăng nhập để trải nghiệm dịch vụ!')) {";
						echo 	'location.replace("http://localhost:82/?controller=users&action=login&pages=bookservice");}';
						echo "</script>";
				} ?>
				<div>
					<form action="<?php echo URL_BASE;?>?controller=service&action=book_service_by_id" method="POST" onsubmit="return formBookCar()";>
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
							<li style="color: #cc0000;font-size: 17px;margin: 10px 0px 10px 0px;">(*) Thông tin yêu cầu:</li>
							<li class="row" style="width: 90%;">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<span style="color: white;">Tên xe của bạn:</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">	
											<input class="input-book input-book-car" type="text" name="txtNameCar" id="txtNameCar" placeholder="" />
											<br><span id="msgNameCar" style="color: #cc0000;"></span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<span style="color: white;">Hãng xe:</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">	
											<input class="input-book input-book-car" type="text" name="txtCarCompany" id="txtCarCompany" placeholder="" />
											<br><span id="msgCarCompany" style="color: #cc0000;"></span>
										</div>
									</div>
								</div>
							</li>
							<li class="row" style="width: 90%;">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<span style="color: white;">Năm sản xuất:</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">	
											<input class="input-book input-book-car" type="text" name="txtYearManufacture" id="txtYearManufacture" placeholder="" />
											<br><span id="msgYearManufacture" style="color: #cc0000;"></span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<span style="color: white;">Thời gian:</span>
										</div>
									</div>
									<div class="row">
										<div class='col-md-12'>
								            <input id="input" type="text" name="input" class="form-control" style="background-color: #ffffff;">
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
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<span style="color: white;">Tình trạng xe:</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<textarea class="input-book input-book-car" name="txtSttCar" id="txtSttCar" placeholder="VD: Số km đi được..."></textarea>	
											<br><span id="msgSttCar" style="color: #cc0000;"></span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<span style="color: white;">Mời bạn chọn dịch vụ:</span>
							</li>
							<li style="padding-left: 30px;">
							<?php
								foreach ($services as $key => $value) {
									echo '<input type="checkbox" name="service[]" id="service" value="'.$value['serviceid'].'"><span style="color: white;margin-left:5px;font-size: 15px;">'.$value['name'].'</span><br>';
								}
							?>
							</li>
							<li style="padding-bottom: 10px;padding-top: 20px;">
								<input type="checkbox" name="xacnhan" id="xacnhan" value="1"><span style="color: white;">&nbsp;Bạn đã chắc chắn chọn dịch vụ như trên?<span style="color: #cc0000;">&nbsp;(*)</span></span>
							</li>
							<li>
								<input style="margin-top: 20px; padding-left: 20px;padding-right:20px;background: #b30000; " name="btnOrderServices" class="btn btn-danger check" type="submit" value="ĐẶT DỊCH VỤ" />
							</li>
						</ul>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>