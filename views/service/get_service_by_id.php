<?php 
	session_start();
	$_SESSION['title'] = 'Chi tiết dịch vụ';
 ?>
<div class="container-fluid">
	<div id="content" class="container-fluid" style="margin-bottom:50px; " >
		<div class="container-fluid" style="background: #f6f6f6;">
			<div class="container link-page" style="margin-top: 25px;">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo URL_BASE;?>" class="index">Trang chủ</a>
						<span>&nbsp;&rsaquo;&nbsp;</span>
						<a href="<?php echo URL_BASE;?>?controller=service&action=home" class="index">Dịch vụ</a>
						<span>&nbsp;&rsaquo;&nbsp;</span>
						<a href="<?php echo URL_BASE;?>?controller=service&action=get_service_by_id&serviceid=<?php echo $_GET['serviceid'] ?>" class="title-page"><?php echo $service['name']; ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<?php  $arrImg = explode(";", $service['image']); ?>
			<div class="row" class="all-description">
				<div class="col-md-12">
					<div class="title-content-detail" style="text-align: left;">
						<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
						<span><?php echo $service['name']; ?></span>
					</div>
				</div>
			</div>	
			<div>
				<?php echo $service['content']; ?>
			</div>
		</div>
	</div>
	
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=2326460500955252&autoLogAppEvents=1"></script>
	<div class="container">
		<div class="row comment">
			<div class="col-md-4">
				<span class="block-comment">đánh giá - bình luận</span>
			</div>
		</div>
	</div>
	<div class="container" style="background-color: #f7f7f7;">
		<form action="send_comment_process.php" method="post">
			<div class="row" style="padding-top: 30px;">
				<div class="col-md-2">
					<span class="block-comment-1">Nhận xét và đánh giá:</span>		
		    	</div>
		    	<div class="col-md-1">
		    		<div class="starrating risingstar d-flex  flex-row-reverse">
			            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
			            <input type="radio" id="star4" name="rating" value="4" checked="true" /><label for="star4" title="4 star"></label>
			            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
			            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
			            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
			        </div>
		    	</div>
		    	<div class="col-md-1">
		    		<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
		    	</div>
			</div>
			<div class="row send-comment">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12"><textarea name="txtContent" rows="5" class="form-control" placeholder="Viết bình luận của bạn..."></textarea></div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-12">
							<input type="submit" name="btnSubmitComment" class="btn btn-danger" value="Gửi nhận xét">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="container">
		<div class="row plugins-comment">
			<div class="col-md-12">
				<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="1000" data-numposts="5"></div>			
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