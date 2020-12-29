<?php 
	ob_start();
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<?php if(isset($_SESSION['title'])) { ?>
		<title><?php echo $_SESSION['title']; ?></title>
	<?php 
		unset($_SESSION['title']);
	}else{ 
	?>
		<title>Trang chủ</title>
	<?php } ?>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

	<link rel="shortcut icon" type="image/png" href="<?php echo URL_BASE;?>assets/images/logo.jpg"/>

	<link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>

	<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>

	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>assets/css/layout.css">

	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>assets/css/customer.css">

	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


	<script>
		new WOW().init();
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    document.getElementById("myBtn").style.display = "block";
		  } else {
		    document.getElementById("myBtn").style.display = "none";
		  }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	<!-- <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/> -->
</head>
<body>
	<div id="header">
		<div id="top-nav">
			<div id="top-nav-content" class="container">
				<div>
					<div id="left-head">
						<a href="#" title="chi nhánh">
							<span><i class="fa fa-map-marker"></i></span>
							<span>Chi nhánh rộng khắp</span>
						</a>
						<a href="#" style="padding-left: 10px;" title="điểm nổi bật">
							<span><i class="fa fa-star"></i></span>
							<span>Điểm nổi bật</span>
						</a>
						<a href="<?php echo URL_BASE;?>?controller=service&action=home" style="padding-left: 10px;" title="dịch vụ">
							<span><i class="fa fa-users"></i></span>
							<span>Dịch vụ chuyên nghiệp</span>
						</a>
					</div>

					<div id="right-head">
						<a href="#" ><span ><i class="fab fa-facebook"></i></span></a>
						<a href="#" ><span ><i class="fab fa-google-plus"></i></span></a>
						<a href="#" ><span ><i class="fab fa-twitter-square"></i></i></span></a>
						<?php
							if(isset($_COOKIE['s_user'])){
								echo '<a href="'.URL_BASE.'?controller=users&action=logout">'.'Đăng xuất'.'</a>';
								echo '<a href="'.URL_BASE.'?controller=users&action=customer" title="Trang cá nhân">' . 'Tài khoản &nbsp;' . $_COOKIE['s_user'] .'</a>';
							}else{
								echo '<a href="'.URL_BASE.'?controller=users&action=register">'.'Đăng ký'.'</a>';
								echo '<a href="'.URL_BASE.'?controller=users&action=login">'.'Đăng nhập'.'</a>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="top-nav-logo" class="container-fluid">
		<div class="row">
			<div class="col-md-3" style="text-align: center;width: 100%;">
					<a href="<?php echo URL_BASE;?>"><img src="<?php echo URL_BASE;?>assets/images/logo.jpg" style="height: 90px; width: 150px;"></a>
			</div>
			<div class="col-md-9" style="background-color: black;border-radius: 0px 0px 0px 80px;">
				<div class="container">
					<div class="row" style="margin-top: 25px; ">
						<div class="col-md-6">
						</div>
						<div class="col-md-3">
							<div class="row">
								<img src="<?php echo URL_BASE;?>assets/images/gio.png">
								<span style="color: white; font-size: 14px;padding-left: 7px;">
									Giờ làm việc<br>
									<span class="time-text" title="giờ">8:00 - 17:00</span>
								</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<img src="<?php echo URL_BASE;?>assets/images/hotline.png">
								<span style="color: white; font-size: 14px;padding-left: 7px;">
									Hotline<br>
									<span class="time-text" title="hotline">0436 369 898</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<div id="top-nav-menu">
		<nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
	  		<div class="container">
	  			<div class="row">
	  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			   		 	<span class="navbar-toggler-icon"></span>
			 		</button>
			 		<?php 
			 			require_once('models/categorycars.php') ;
			 			$cat = new Categorycars();
			 			$data = $cat->getAll();
			 		?>
				  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
				   		<ul class="navbar-nav mr-auto">
				      		<li class="nav-item active">
				        		<a class="nav-link" href="<?php echo URL_BASE;?>" title="trang chủ">TRANG CHỦ</a>
				      		</li>
				      		<li class="nav-item dropdown">
				        		<a class="nav-link dropdown-toggle" href="<?php echo URL_BASE;?>?controller=product&action=home" title="tìm mua ô tô">
				          			TÌM MUA Ô TÔ
				        		</a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						        <?php foreach ($data as $key => $value) { ?>
						          	<a class="dropdown-item" href="<?php echo URL_BASE;?>?controller=product&action=get_AllProduct_by_catid&id=<?php echo $value['categorycarid'] ?>" title="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></a>
						          	<div class="dropdown-divider"></div>
						         <?php } ?>
						       		<div class="dropdown-divider"></div>
						        </div>
				     		 </li>
				      		<li class="nav-item">
				        		<a class="nav-link" href="<?php echo URL_BASE;?>?controller=policy&action=home" title="chính sách">CHÍNH SÁCH</a>
				      		</li>
				      		<li class="nav-item ">
				        		<a class="nav-link" href="<?php echo URL_BASE;?>?controller=service&action=home" title="dịch vụ">DỊCH VỤ</a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="nav-link" href="<?php echo URL_BASE;?>?controller=advisory&action=home" title="tư vấn">TƯ VẤN</a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="nav-link" href="<?php echo URL_BASE;?>?controller=news&action=home" title="tin tức">
				          			TIN TỨC
				        		</a>
				     		</li>
				      		<li class="nav-item">
				        		<a class="nav-link" href="<?php echo URL_BASE;?>?controller=introduce&action=home" title="giới thiệu">GIỚI THIỆU</a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="nav-link" href="<?php echo URL_BASE;?>?controller=contact&action=home">LIÊN HỆ</a>
				      		</li>
				    	</ul>
				    	<?php 
				    		if (isset($_GET['submitsearch'])) {
				    			$search = $_GET['search'];
				    			if ($search != "") {
				    				header("location:?controller=product&action=home&search=".$search);
				    			}else{
				    				header("location:?controller=".$_GET['controller']."&action=".$_GET['action']);
				    			}
				    		}
				    	 ?>

				    	<form action="<?php echo URL_BASE;?>?controller=product&action=home" method="get" class="search-box">
				    		<input type="text" class="search-txt" name="search" placeholder="Tìm kiếm theo tên sản phẩm"/>
				    		<button type="submit" name="submitsearch" class="search-btn"><i class="fas fa-search"></i></button>
				    	</form>
					 </div>
	  			</div>
			  </div>
	  		</div>
		</nav>
	</div>
	<!-- end nav-menu -->

	<div>
		<?= @$content ?>
	</div>

	<!-- end content -->

	<div id="footer" class="container-fluid">
		<div class="container-fluid" id="footer-link">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="title-footer">
							<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
							<span>LUXURY CAR</span>
						</div>
						<ul id="top-botton">
							<li class="icon">
								<img class="item-icon" src="<?php echo URL_BASE;?>assets/images/home.png">
								<span class="title-icon">VĂN PHÒNG</span>
								<div style="padding-left:30px; ">
									Add: Số 17 Trung Yên 12-Cầu Giấy-Hà Nội
									<div id="hotline">
										<a class="hotline-item" href="tel:0436 396 898" title="Call now">Hotline: 0436 396 898 - </a>
										<a class="hotline-item" href="tel:01269 688 688" title="Call now">01269 688 688</a>
									</div>
								</div>
							</li>
							<li class="icon">
								<img class="item-icon" src="<?php echo URL_BASE;?>assets/images/place.png">
								<span class="title-icon">CHI NHÁNH</span>
								<div style="padding-left: 30px">Chúng tôi đang mở thêm chi nhánh ở TP Hồ Chí Minh và Đà Nẵng</div>
							</li>
						</ul>
					</div>
					<!-- luxury car -->
					<?php 
						require_once('models/news.php') ;
						$data = News::getNewsHighlights();
					 ?>
					<div class="col-md-5">
						<div class="title-footer">
							<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
							<span>TIN NỔI BẬT</span>
						</div>
						<div class="news-item row">
							<?php foreach ($data as $key => $value) { $arrImg = explode(";", $value['image']);?>
								<div class="col-md-4 library-item" style="height: 100px; width: 90%;padding: 0px;">
									<a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php echo $value['newsid']; ?>" title="Lexus LC Convertible Concept: Còn chờ gì nữa hỡi Lexus?">
										<img class="news-img" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0] ?>" alt="<?php echo $value['title']; ?>">
									</a>
								</div>
								<div class="col-md-6 library-item" style="height: 100px; width: 100%;padding: 0px;">
									<a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php echo $value['newsid']; ?>" class="title-news"><?php echo $value['title']; ?><br></a>
									<span class="date">
										<span style="color: red;">
											<img class="news-icon" src="<?php echo URL_BASE;?>assets/images/clock.png"><?php echo date("d/m/Y", strtotime($value['newsdate'])); ?>
										</span>
										<span style="color: red;">
											<img class="news-icon" src="<?php echo URL_BASE;?>assets/images/chat.png">1 Bình luận
										</span>
									</span>
								</div>
							<?php } ?>
						</div>
					</div>
					<!-- tin nổi bật -->

					<div class="col-md-3">
						<div class="title-footer">
							<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
							<span>THƯ VIỆN ẢNH</span>
						</div>
							<div class="row">
								<div class="library-item col-md-4" style="height: 100px; width: 90px;padding: 0px;">
									<img class="img-library" src="<?php echo URL_BASE;?>assets/images/Volvo-XC90_1.jpg">
								</div>
								<div class="library-item col-md-4" style="height: 100px; width: 90px;padding: 0px;">
									<img class="img-library" src="<?php echo URL_BASE;?>assets/images/huracan1.jpg">
								</div>
								<div class="library-item col-md-4" style="height: 100px; width: 90px;padding: 0px;">
									<img class="img-library" src="<?php echo URL_BASE;?>assets/images/bmw-x7_3.jpg">
								</div>
								<div class="library-item col-md-4" style="height: 100px; width: 90px;padding: 0px;">
									<img class="img-library" src="<?php echo URL_BASE;?>assets/images/Ferrari_F8_Tributo_zing_3.jpg">
								</div>
								<div class="library-item col-md-4" style="height: 100px; width: 90px;padding: 0px;">
									<img class="img-library" src="<?php echo URL_BASE;?>assets/images/img_news3.jpg">
								</div>
								<div class="library-item col-md-4" style="height: 100px; width: 90px;padding: 0px;">
									<img class="img-library" src="<?php echo URL_BASE;?>assets/images/img1.jpg">
								</div>
							</div>
						</div>
					</div>
					<!-- thư viện ảnh -->
				</div>
			</div>
		</div>
		<div id="booton-footer" class="container-fluid">
			<ul id="quick-nav-footer">
				<li><a href="<?php echo URL_BASE;?>" title="Trang chủ">TRANG CHỦ</a></li>
				<li><a href="<?php echo URL_BASE;?>?controller=product&action=home" title="Tìm mua ô tô">TÌM MUA Ô TÔ</a></li>
				<li><a href="<?php echo URL_BASE;?>?controller=policy&action=home" title="Chính sách">CHÍNH SÁCH</a></li>
				<li><a href="<?php echo URL_BASE;?>?controller=advisory&action=home" title="Tư vấn">TƯ VẤN</a></li>
				<li><a href="<?php echo URL_BASE;?>?controller=service&action=home" title="Dịch vụ">DỊCH VỤ</a></li>
				<li><a href="<?php echo URL_BASE;?>?controller=contact&action=home" title="Liên hệ">LIÊN HỆ</a></li>
			</ul>
		</div>
		<!-- bootom-nav-menu -->
	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><img style="width: 20px;height:20px;top: 5px;" src="<?php echo URL_BASE;?>assets/images/chevron-up.png"></button>
	<!-- end footer -->
</body>
</html>
<?php ob_flush(); ?>