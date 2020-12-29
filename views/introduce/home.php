<?php
	session_start();
	$_SESSION['title'] = 'Giới thiệu';
?>
<div class="container-fluid">
	<div id="path" class="container-fluid" style=" ">
		<div class="container">
			<div  class="row">
				<div id="path-title" class="col-md-12">
					<a href="<?php echo URL_BASE; ?>?controller=pages&action=home">Trang chủ</a> <span>&nbsp;&rsaquo;&nbsp;</span> <a style="color: #e60000;" href="#">Giới thiệu</a>
				</div>
			</div> 
		</div>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-9 description">
					<div class="row" style="margin-top: 30px;">
						<div class="col-md-12">
							<h2 style="font-weight: bold; font-style: italic;">Luxury Car</h2>
							<p>
								<span>Luxury Car nhà phân phối của hãng xe nổi tiếng đến từ Châu Âu như <a href="#">Mercedes – Benz</a>, <a href="#">Audi</a>, <a href="#">BMW</a>, <a href="#">Volvo</a>,... tại Việt Nam đã chính thức khai trương City Showroom mở rộng tại địa chỉ: Hà Nội. Luxury Car đã giới thiệu các dòng xe sang nhập khẩu nguyên chiếc chính hãng lần đầu có mặt tại Hà Nội.</span>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 img-introduce">
							<p style="text-align: center;"><img src="<?php echo URL_BASE;?>assets/images/mercedes.jpg" style="width:600px ; height:500px;"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p>
								<strong>Luxury Car</strong> là một trong những Showroom ô tô hàng đầu tại thành phố Hà Nội và là một trong bốn Showroom ô tô đầu tiên tại Việt Nam, <strong>Showroom Luxury</strong> Car đã đáp ứng đầy đủ điều kiện về cơ sở vật chất, trang thiết bị cũng như quy trình hoạt động tại Việt Nam, và đang khẳng định đựợc sức cạnh tranh trên thị trường ô tô Việt Nam.<span style="font-style: italic;"> Showroom  Luxury Car hoạt động từ cuối tháng 8/2006 đã thực sự trở thành địa chỉ tin cậy cho nhiều khách hàng không chỉ ở thành phốc Hà Nội mà cả các tỉnh phía Nam. Sau 10 tháng, hơn 800 xe được tiêu thụ trong đó riêng 6 tháng đầu năm 2007 đã có 530 xe được giao tới khách hàng.</span> Một trong những yếu tố quan trọng thúc đẩy doanh số bán hàng của <strong>Luxury Car</strong> chính là <span style="font-weight: bold;">dịch vụ chăm sóc khách hàng</span>. Trước hết, với đội ngũ cán bộ nhân viên kinh doanh từng được tham gia các khóa tập huấn nghiệp vụ bán hàng do Luxury Car Việt Nam tổ chức, <strong>Luxury Car</strong> đã thực hiên đúng quan điểm cung cấp <a href="#">dịch vụ</a> tốt nhất nhằm thỏa mãn khách hàng.
							</p>
						</div>
					</div>
					<div class="row img-introduce">
						<div class="col-md-12">
							<p style="text-align: center;"><img src="<?php echo URL_BASE;?>assets/images/audi.jpg" style="width:600px ; height:500px;"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p>
								Bên cạnh đó, dịch vụ sau bán hàng được <strong>Luxury Car</strong> xác định là nhiệm vụ thiết yếu ngay từ khi mới thành lập với nhiều hoạt động như tặng hoa, chụp ảnh cho các khách hàng mua xe hay thường xuyên gửi thư, gọi điện thăm hỏi tình trạng xe của khách hàng. <span style="font-style: italic;">Đại lí sẽ chủ động đặt lịch hẹn khách đến bảo hành, bảo dưỡng cho xe.</span> Số lượng khách hàng bảo hành tại đây bình quân 500 lượt xe/tháng. Showroom cũng đầu tư cơ sở vật chất cho showroom, khu chờ của khách hàng để tạo sự thoải mái cho khách hàng khi đến mua xe và làm <a href="#">dịch vụ</a>.
							</p>	
						</div>
					</div>
				</div>
				<div id="left-menu" class="col-md-3">
					<div class="nav-left-menu">
						<ul>
							<li><span><a href="#">giới thiệu</a></span></li>
							<li><span><a href="#">tuyển dụng</a></span></li>
							<li><span><a href="<?php echo URL_BASE; ?>?controller=policy&action=home">chính sách</a></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>