<?php
	session_start();
	$_SESSION['title'] = 'Liện hệ';
?>
<script type="text/javascript">
	function validateContact() {
		var name = document.getElementById("txtFullName").value;
		var phone = document.getElementById("txtPhone").value;
		var email = document.getElementById("txtEmail").value;
		var address = document.getElementById("txtAddress").value;
		var content = document.getElementById("txtContent").value;
		
		var reEmail = /^([a-zA-z0-9])+\@+([a-zA-z])+\.+([a-z]{2,3})$/;
		var rePhone = /^([0-9]{10,11})$/;

		var status = true;

		if (name == "") {
			document.getElementById("msgNote").innerHTML ="Yêu cầu không được để trống!";
			document.getElementById("txtFullName").style.borderColor = "red";
			status = false;
		} else {
			document.getElementById("msgNote").innerHTML ="";
			document.getElementById("txtFullName").style.borderColor = "#ced4da";
		}

		if (phone == "") {
			status = false;
			document.getElementById("msgNote").innerHTML ="Yêu cầu không được để trống!";
			document.getElementById("txtPhone").style.borderColor = "red";
		} else {
			if (rePhone.test(phone) == false) {
				status = false;
				document.getElementById("msgNote").innerHTML ="không đúng định dạnh số điện thoại!";
				document.getElementById("txtPhone").style.borderColor = "red";
			} else {
				document.getElementById("msgNote").innerHTML ="";
				document.getElementById("txtPhone").style.borderColor = "#ced4da";
			}
		}

		if (email == "") {
			status = false;
			document.getElementById("msgNote").innerHTML ="Yêu cầu không được để trống!";
			document.getElementById("txtEmail").style.borderColor = "red";
		} else {
			if (reEmail.test(email) == false) {
				status = false;
				document.getElementById("msgNote").innerHTML ="Email không đúng định dạng!";
				document.getElementById("txtEmail").style.borderColor = "red";
			} else {
				document.getElementById("msgNote").innerHTML ="";
				document.getElementById("txtEmail").style.borderColor = "#ced4da";
			}	
		}

		if (address == "") {
			status = false;
			document.getElementById("msgNote").innerHTML ="Yêu cầu không được để trống!";
			document.getElementById("txtAddress").style.borderColor = "red";
		} else {
			document.getElementById("msgNote").innerHTML ="";
			document.getElementById("txtAddress").style.borderColor = "#ced4da";
		}
		if (content == "") {
			status = false;
			document.getElementById("msgNote").innerHTML ="Yêu cầu không được để trống!";
			document.getElementById("txtContent").style.borderColor = "red";
		} else {
			document.getElementById("msgNote").innerHTML ="";
			document.getElementById("txtContent").style.borderColor = "#ced4da";
		}
		return status;
	}
</script>

<div class="container-fluid">
	<div id="path" class="container-fluid" style=" ">
		<div class="container">
			<div  class="row">
				<div id="path-title" class="col-md-12">
					<a href="<?php echo URL_BASE;?>">Trang chủ</a> <span>&nbsp;&rsaquo;&nbsp;</span> <a style="color: #e60000;" href="<?php echo URL_BASE;?>?controller=contact&action=home">Liên hệ</a>
				</div>
			</div> 
		</div>
	</div>

	<div class="container-fluid">
		<div id="contact" class="container">
			<div class="row">
				<div class="title-content-detail col-md-12">
					<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
					<span>LIÊN HỆ VỚI CHÚNG TÔI</span>
				</div>
			</div>
			<?php 
				if (isset($_POST['btnSubmitContact'])) {
					$fullname = $_POST['txtFullName'];
					$phone = $_POST['txtPhone'];
					$email = $_POST['txtEmail'];
					$address = $_POST['txtAddress'];
					$content = $_POST['txtContent'];
					$contact = new Contact();
					if ($contact->addContact($fullname, $phone, $email, $address, $content)) {
						echo "<div class='alert alert-success'>Gửi liên hệ thành công!</div>";
					}else{
						echo "<div class='alert alert-danger'>Gửi liên hệ thất bại!</div>";
					}
				}
			 ?>
			<form action="<?php echo URL_BASE;?>?controller=contact&action=home" method="post" class="form-control" style="margin-bottom: 30px;" onsubmit="return validateContact();">
				<div class="row">
					<div class="col-md-12">
						<span class="txtNote" id="msgNote"></span>
					</div>
				</div>
				<div class="row contact-form">	
					<div class="col-md-4">
						<div class="row" style="margin-top: 15px;"><div class="col-md-12"><label>Họ và tên *</label></div></div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" id="txtFullName" name="txtFullName" placeholder="Họ và tên" class="form-control">
							</div>
						</div>

						<div class="row" style="margin-top: 15px;"><div class="col-md-12"><label>Điện thoại *</label></div></div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" id="txtPhone" name="txtPhone" placeholder="Điện thoại" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row" style="margin-top: 15px;"><div class="col-md-12"><label>Email *</label></div></div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" id="txtEmail" name="txtEmail" placeholder="Email" class="form-control">
							</div>
						</div>

						<div class="row" style="margin-top: 15px;"><div class="col-md-12"><label>Địa chỉ *</label></div></div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" id="txtAddress" name="txtAddress" placeholder="Địa chỉ" class="form-control">
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row" style="margin-top: 15px;"><div class="col-md-12"><label>Nội dung *	</label></div></div>
						<div class="row">
							<div class="col-md-12">
								<textarea id="txtContent" name="txtContent" rows="5" placeholder="Nội dung" class="form-control"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 20px; margin-bottom: 30px; text-align: center;">
					<div class="col-md-12">
						<input type="submit" name="btnSubmitContact" id="btnSubmitContact" class="btn btn-danger" value="Gửi liên hệ">
					</div>
				</div>
			</form>
		</div>

		<div id="address" class="container">
			<div class="row" style="margin-bottom: 30px;">
				<div class="col-md-5">
					<div class="row"><div class="col-md-12">
						<span class="block-address">Hệ thống Showroom</span>
					</div></div>
					<div class="row" style="margin-top: 10px;">
						<div class="col-md-3">
							<span style="font-weight: bold; color: #888888">Chọn khu vực:</span>
						</div>
						<div class="col-md-4">
							<select id="regions-address" class="form-control">
								<option value="15">Hà Nội</option>
								<option value="16">TP Hồ Chí Mính</option>
								<option value="17">Đà Nẵng</option>
							</select>
						</div>
					</div>
					<div class="row" style="margin-top: 15px;">
						<div class="col-md-6" style="text-align: center;"><span class="title-content-detail">Luxury Car</span></div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul style="display: block; list-style-type: none;">
								<li><span class="icon-address"><i class="fas fa-map-marker-alt"></i></span><a href="https://goo.gl/maps/QdRMwntkdXuuRKs28"> Số nhà 100 - Duy Tân - Cầu Giấy - Hà Nội</a></li>
								<li><span class="icon-address"><i class="fas fa-phone"></i></span> 0914337155</li>
								<li><span class="icon-address"><i class="fas fa-envelope"></i></span> luxurycar@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="col-md-12 form-control">
						<div id="map" style="width: auto; height: 300px; text-align: center;">
							<a href="https://goo.gl/maps/QdRMwntkdXuuRKs28">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0312146052584!2d105.7798387143783!3d21.031436993064048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3554bc10d%3A0x4f64524060839888!2zMTAwIFBo4buRIER1eSBUw6JuLCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1564842833362!5m2!1sen!2s" width="600" height="300" frameborder="0" style="border: 2px solid #888888; border-radius: 5px;" allowfullscreen></iframe>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>