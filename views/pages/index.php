<?php 
	session_start();
	$_SESSION['title'] = 'Trang chủ';
 ?>
<div class="container-fluid">
	<div id="carouselExampleIndicators" class="carousel slide row" data-ride="carousel">
	<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo URL_BASE;?>assets/images/slide_1.jpg" style="width: 100%;">
					<span class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo URL_BASE;?>assets/images/slide_2.jpg" style="width: 100%;">
					<span class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo URL_BASE;?>assets/images/slide_3.jpg" style="width: 100%;">
					<span class="d-block w-100" alt="...">
			</div>
		</div>
		<div>
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!--end slider-->

<div id="site-info" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="site-info-item">
					
						<i class="fas fa-phone-volume" style="color: white;width: 30px;height: 30px;"></i>
						<div class="title-site-info">1. HỖ TRỢ TRẢ GÓP</div>
						<div>Chúng tôi hỗ trợ trả góp 0% cho bạn với thủ tục đơn giản</div>
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="site-info-item">
					
						<i class="fas fa-chart-line" style="color: white;width: 30px;height: 30px;"></i>
						<div class="title-site-info">2. CHẤT LƯỢNG TIÊU CHUẨN</div>
						<div>Xe đảm bảo chất lượng quốc tế mẫu mã mới nhất</div>
				
				</div>
			</div>
			<div class="col-md-3">
				<div class="site-info-item">
					
						<i class="fas fa-wrench" style="color: white;width: 30px;height: 30px;"></i>
						<div class="title-site-info">3. SỬA CHỮA & KIỂM TRA</div>
						<div>Bảo dưỡng sửa chữa miễn phí 3 tháng đầu</div>
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="site-info-item">
					
						<i class="far fa-paper-plane" style="color: white;width: 30px;height: 30px;"></i>
						<div class="title-site-info">4. TIN CẬY</div>
						<div>LuxuryCar hân hạnh là bạn đồng hành trên mỗi chuyến đi của bạn</div>
					
				</div>
			</div>
		</div>
	</div>
</div><!--end #site-info-->
<div id="content" class="container-fluid" >
		<!-- Sản phẩm mới nhất -->
		<div class="container" style="height: auto;">
			<div id="new-product" style="border: height: auto;">
				<div class="title-content row">
							<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
							<span>SẢN PHẨM MỚI NHẤT</span>
				</div>
				<?php 
					require_once("models/cars.php");
					$cars = Cars::getAll();
				 ?>
				<div class="row">

					<?php foreach ($cars as $k => $v) { $arrImg = explode(";", $v['image']); ?>
						<div class="col-md-3 product">
							<div class="product-item">
								<div class="img-product1">
									<a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo $v['carid']?>">
										<img class="img-product-item1" style="height: 160px;" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0];?>">
									</a>
								</div>
								<div>
									<a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo $v['carid']?>">
											<span style="font-weight: bold;color: black;margin-top:20px;margin-bottom:30px;"><?php echo $v['name']; ?></span><br>
									</a>
									<span style="color: red"><?php echo number_format($v['price']).'₫'; ?></span>
								</div>
							</div>
						</div>
					<?php } ?>

					<!-- <div class="col-md-3 product">
						<div class="product-item">
							<div class="img-product1">
								<a href="<?php //echo URL_BASE;?>?controller=product&action=get_product_by_id&id=#">
									<img class="img-product-item1" src="<?php //echo URL_BASE;?>assets/images/img1.jpg">
								</a>
							</div>
							<div>
								<a href="<?php //echo URL_BASE;?>?controller=product&action=get_product_by_id&id=#">
										<span style="font-weight: bold;color: black;margin-top:20px;margin-bottom:30px;">Lamborghini Huracan LP 610-4</span><br>
								</a>
								<span style="color: red">10.000.000.000 ₫</span>
							</div>
						</div>
					</div> -->
				</div>
				<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
					<div class="col-md-12" style="text-align: center; padding-bottom: 40px;">
						<a href="<?php echo URL_BASE; ?>?controller=product&action=home" class="btn btn-outline-danger" id="load_more">Xem thêm</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Câu hỏi thường gặp -->
		<div class="container-fluid" style="height: auto;">
			<div id="question" style="height: auto;padding-bottom: 30px;">
				<div class="container">
					<div class="title-content row">
						<div class="col-md-12"><span style="color: white;">Câu hỏi thường gặp</span></div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="question-content" class="row">
								<div class="col-md-12">
									<div><hr></div>
									<div class="row">
										<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers1"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span><a href="#">Tôi đã có gia đình, dự định mua ô tô</a>
									</div>
									<div id="answers1" class="row collapse answers">
										<span class="best-answers">Câu trả lời hay nhất</span><br>
										<span class="best-answers-content">Chúng ta đang sống trong thế giới phẳng, nghĩa là có sự cạnh tranh giữa các nhà sản xuất với nhau. Và theo quy luật của thị trường cạnh tranh, hãng xe nào có sản phẩm kém sẽ bị tẩy chay và phá sản. Có thể hiểu đơn giản là "tiền nào, của đó". Nhưng đó là chuyện ở thế giới, còn ở Việt Nam, nơi không phải là thị trường cạnh tranh thì vấn đề lại là sự lựa chọn thông minh của người tiêu dùng. Để chọn một chiếc xe thì bạn không nên nhìn vào thương hiệu (thực chất thì hãng xe nào đang tồn tại cũng đều là thương hiệu toàn cầu) và không nên theo tâm lý bày đàn để rồi ôm hận vì người phải trả giá là bạn chứ không phải bày đàn.</span>
									</div>
								</div>
							</div>
							<div class="question-content" class="row">
								<div class="col-md-12">
									<div><hr></div>
									<div class="row">
										<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers2"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span><a href="#">So sánh Toyota Fortuner 2018</a>
									</div>
									<div id="answers2" class="row collapse answers">
										<span class="best-answers">Câu trả lời hay nhất</span><br>
										<span class="best-answers-content">Chúng ta đang sống trong thế giới phẳng, nghĩa là có sự cạnh tranh giữa các nhà sản xuất với nhau. Và theo quy luật của thị trường cạnh tranh, hãng xe nào có sản phẩm kém sẽ bị tẩy chay và phá sản. Có thể hiểu đơn giản là "tiền nào, của đó". Nhưng đó là chuyện ở thế giới, còn ở Việt Nam, nơi không phải là thị trường cạnh tranh thì vấn đề lại là sự lựa chọn thông minh của người tiêu dùng. Để chọn một chiếc xe thì bạn không nên nhìn vào thương hiệu (thực chất thì hãng xe nào đang tồn tại cũng đều là thương hiệu toàn cầu) và không nên theo tâm lý bày đàn để rồi ôm hận vì người phải trả giá là bạn chứ không phải bày đàn.</span>
									</div>
								</div>
							</div>

							<div class="question-content" class="row">
								<div class="col-md-12">
									<div><hr></div>
									<div class="row question-content-summary">
										<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers3"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span><a href="#">Có nên mua xe Hyundai Accent MT 2018 chạy dịch vụ Grab</a>
									</div>
									<div id="answers3" class="row collapse answers">
										<span class="best-answers">Câu trả lời hay nhất</span><br>
										<span class="best-answers-content">Chúng ta đang sống trong thế giới phẳng, nghĩa là có sự cạnh tranh giữa các nhà sản xuất với nhau. Và theo quy luật của thị trường cạnh tranh, hãng xe nào có sản phẩm kém sẽ bị tẩy chay và phá sản. Có thể hiểu đơn giản là "tiền nào, của đó". Nhưng đó là chuyện ở thế giới, còn ở Việt Nam, nơi không phải là thị trường cạnh tranh thì vấn đề lại là sự lựa chọn thông minh của người tiêu dùng. Để chọn một chiếc xe thì bạn không nên nhìn vào thương hiệu (thực chất thì hãng xe nào đang tồn tại cũng đều là thương hiệu toàn cầu) và không nên theo tâm lý bày đàn để rồi ôm hận vì người phải trả giá là bạn chứ không phải bày đàn.</span>
									</div>
									<div><hr></div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12" style="text-align: right; ">
									<a href="#" style="font-style: italic; font-size: 12px; color: #e60000;">Xem tất cả ></a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row product-item" style="position: relative;">
								<div class="img-product" style="text-align: right;border: 3px solid #ddd;border-radius: 10px; margin-left: 27%;"><img class="img-product-item" src="<?php echo URL_BASE;?>assets/images/img2.jpg" style="width: 400px; height: 240px;border-radius: 10px;"></div>
								<div class="img-product" style=" width: auto;position: absolute;border: 3px solid #ddd;border-radius: 10px; margin-top: 28%;"><img class="img-product-item" src="<?php echo URL_BASE;?>assets/images/img3.jpg" style="width: 200px;border-radius: 10px;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Dịch vụ -->
		<div class="container" style="height: auto;">
			<div id="service" style="height: auto;">
				<div class="title-content">
					<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
					<span>Dịch vụ của chúng tôi</span>
				</div>
				<div class="row" style="padding-left: 30px;">
					<?php 
						require_once('models/services.php');
						$service = Services::getAll();
					 ?>
					 <?php foreach ($service as $key => $value) { $arrImg = explode(";", $value['image']); ?>
						<div data-wow-delay="0.2s" class="product wow rollIn col-md-4 service-item">
								<div class="product-item">
									<div class="img-product" style="width: 95%;">
										<a href="<?php echo URL_BASE;?>?controller=service&action=get_service_by_id&serviceid=<?php echo $value['serviceid']; ?>">
											<img class="img-product-item" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0]; ?>" height="200" style="width: 100%;">
										</a>
									</div>
									<div>
										<a href="<?php echo URL_BASE;?>?controller=service&action=danphim">
											<span class="service-title"><?php echo $value['name'] ?></span>
										</a>
									</div>
								</div>
						</div>
					<?php } ?>
					
			</div>
		</div>
		<!-- Đội ngũ nhân viên -->
		<div class="container">
			<div id="inf-employees">
				<div class="title-content">
							<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
							<span>Đội ngũ nhân viên chuyên nghiệp</span>
				</div>
				<div class="row">
					<div class="col-md-3 employees">
							<div class="employees-item">
								<div class="img-employees">
									<a href="">
										<img class="img-employees-item" src="<?php echo URL_BASE;?>assets/images/employees2.jpg">
									</a>
								</div>
								<div class="name">
									<span style="font-weight: bold;margin-top:20px;margin-bottom:30px;">Mr. Binh</span><br>
									<span style="font-size: 12px; font-style: italic; color: #9a9a9a;">Kỹ sư sơn</span>
								</div>
							</div>
					</div>
					<div class="col-md-3 employees">
							<div class="employees-item">
								<div class="img-employees">
									<a href="">
										<img class="img-employees-item" src="<?php echo URL_BASE;?>assets/images/employees4.jpg">
									</a>
								</div>
								<div class="name">
									<span style="font-weight: bold;margin-top:20px;margin-bottom:30px;">Mr. Cuong</span><br>
									<span style="font-size: 12px; font-style: italic; color: #9a9a9a;">Kỹ thuật viên</span>
								</div>
							</div>
					</div>
					<div class="col-md-3 employees">
							<div class="employees-item">
								<div class="img-employees">
									<a href="">
										<img class="img-employees-item" src="<?php echo URL_BASE;?>assets/images/employees3.jpg">
									</a>
								</div>
								<div class="name">
									<span style="font-weight: bold;margin-top:20px;margin-bottom:30px;">Mr. Duy</span><br>
									<span style="font-size: 12px; font-style: italic; color: #9a9a9a;">Kỹ thuật viên</span>
								</div>
							</div>
					</div>
					<div class="col-md-3 employees">
							<div class="employees-item">
								<div class="img-employees">
									<a href="">
										<img class="img-employees-item" src="<?php echo URL_BASE;?>assets/images/employees1.jpg">
									</a>
								</div>
								<div class="name">
									<span style="font-weight: bold;margin-top:20px;margin-bottom:30px;">Mr. Duong</span><br>
									<span style="font-size: 12px; font-style: italic; color: #9a9a9a;">Kỹ sư gò hàn</span>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Tin tức mới nhất -->
		<div class="container" style="height: auto;">
			<div id="news">
				<div class="row">
					<div class="title-content col-md-12">
						<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
						<span>Tin tức mới nhất</span>
					</div>
				</div>
				<?php 
					require_once("models/news.php");
					$news = News::getAllForPages();
				 ?>
				<div class="row">
					<?php foreach ($news as $key => $value) { $arrImg = explode(";", $value['image']); ?>
						<div class="col-md-4 employees">
							<div class="row employees-item">
								<div class="col-md-12 img-employees">
									<a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php echo $value['newsid']; ?>">
										<img class="img-employees-item" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0]; ?>" style="height:195px;">
									</a>
								</div>
							</div>
							<div style="padding-left:25px; ">
								<div class="news-title row">
									<div class="col-md-12">
										<a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php echo $value['newsid']; ?>"><?php echo $value['title']; ?></a>
									</div>
								</div>
								<div class="row">
									<div class="news-date col-md-4">
										<span class="news-icon"><i class="far fa-clock"></i></span><span style="color: #e60000"><?php echo $value['newsdate']; ?></span>
									</div>
									<div class="news-comment col-md-4">
										<span class="news-icon"><i class="far fa-comment"></i></span><span style="color: #e60000">1 Bình luận</span>
									</div>
								</div>
								<div class="news-content row">
									<div class="col-md-12">
										<a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php $value['newsid']; ?>"><?php echo $value['summary']; ?></a>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
					<div class="col-md-12" style="text-align: center; padding-bottom: 40px;">
						<a href="<?php echo URL_BASE; ?>?controller=news&action=home" class="btn btn-outline-danger">Xem thêm</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Cảm nhận của khách hàng -->
		<!-- <div class="container-fluid feedback" style="background-image: url('<?php echo URL_BASE;?>assets/images/background_car.jpg'); opacity: 0.7;" >
			<div>
				<div  class="container">
					<div class="row">
						<div class=" title-content col-md-12">
							<span style="color: black;">Cảm nhận của khách hàng</span>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
