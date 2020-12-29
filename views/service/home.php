<?php 
	session_start();
	$_SESSION['title'] = 'Dịch vụ';
 ?>
<div id="content" class="container-fluid" style="margin-bottom:50px; " >
		<div class="container-fluid" style="background: #f6f6f6;">
			<div class="container link-page" style="margin-top: 25px;">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo URL_BASE;?>" class="index">Trang chủ</a>
						<span>&nbsp;&rsaquo;&nbsp;</span>
						<a href="<?php echo URL_BASE;?>?controller=service&action=home" class="title-page">Dịch vụ</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="height: auto;">
			<div id="service" style="height: auto;">
				<div class="title-content">
					<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
					<span>Dịch vụ của chúng tôi</span>
				</div>
				<div class="row" style="padding-left: 30px;">
					<?php 
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
										<a href="<?php echo URL_BASE;?>?controller=service&action=get_service_by_id&serviceid=<?php echo $value['serviceid']; ?>">
											<span class="service-title"><?php echo $value['name'] ?></span>
										</a>
									</div>
								</div>
						</div>
					<?php } ?>
					
				</div>

			</div>
		</div>
		<div class="container-fluid" style="width: 100%; height: auto;background: black;text-align: center;padding: 30px;margin-top: 20px;">
			<div style="color: white;font-size: 19px;font-weight: bold;">ĐẶT LỊCH SỬA CHỮA ĐỂ ĐƯỢC PHỤC VỤ SỚM NHẤT</div>
			<div style="color: #949191;">
				<span>Chúng tôi cam kết sẽ mang đến sự hoàn hảo cho chiếc xe của bạn với các</span><br><span>chuyên gia lâu năm được đào tạo chuyên nghiệp.</span>		
			</div>
			<div style="padding-top:10px; ">
				<a href="<?php echo URL_BASE;?>?controller=service&action=book_service_by_id" class="btn btn-danger" style="background: #E60000;text-transform: uppercase;">Hãy trải nghiệm</a>
			</div>
		</div>
		
	</div>