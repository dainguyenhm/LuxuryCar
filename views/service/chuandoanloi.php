<?php 
	session_start();
	$_SESSION['title'] = 'Chuẩn đoán lỗi';
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
						<a href="<?php echo URL_BASE;?>?controller=service&action=chuandoanloi" class="title-page">Chuẩn đoán lỗi</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row" class="all-description">
				<div class="col-md-12">
					<div class="title-content-detail" style="text-align: left;">
						<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
						<span>Chuẩn đoán lỗi ô tô</span>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-12">
					<h5>Chẩn đoán lỗi ô tô, đọc lỗi ô tô, khắc phục lỗi ô tô</h3>
					<p>Việc chuẩn đoán lỗi ô tô, nhất là những đời ô tô mới ngày nay không chỉ đơn thuần là kinh nghiệm. Có rất nhiều lỗi nếu rất khó để tìm ra nguyên nhân, và nếu có tìm ra thì cũng phải mất khá nhiều thời gian để khắc phục. Vấn đề quan trọng nhất là phải bắt đúng “bệnh” của xe thì mới có phương pháp sửa chữa đúng đắn, nhằm bảo đảm việc sửa chữa nhanh chóng, hiệu quả.</p>
					<p><img src="<?php echo URL_BASE;?>assets/images/loi_oto.jpg"></p>
					<p>Công việc chuẩn đoán lỗi bao gồm: chuẩn đoán lỗi động cơ xăng, động cơ dầu (common-rail), hệ thống lái, HT thắng ABS, HT thống ổn định chuyển động ESP/VSC, TCS (chống trượt quay khi lực kéo lớn hơn lực bám), HT SRS –Túi khí, HT treo – giảm sốc khí nén (Mercedes), HT truyền động (số tay và tự động), HT chiều sáng + chỉ thị …</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h5>Khi nào cần chuẩn đoán lỗi ô tô</h5>
					<p>Khi bạn có nhu cầu mua xe nhưng lại không yên tâm về chất lượng cũng như độ bền, mức độ hư hại nếu có của các thiết bị điện tử. Hậu quả sẽ lớn hơn khi bạn lỡ mua phải chiếc xe bị lỗi và việc bỏ ra một khoản tiền lớn để sửa chữa là điều không ai mong muốn. Hơn hết không phải lúc nào cũng thuận tiện để bạn có thể đưa xe vào hãng test. Khi đó /điều bạn cần làm chính sử dụng ngay dịch vụ chuẩn đoán lỗi ô tô.Ngoài ra, đối với những chiếc ô tô dùng lâu năm, việc xuất hiện những lỗi phần mềm trong hộp điều khiển ECU hoặc là những hỏng hóc của những cảm biến, chi tiết đơn giản trên xe là điều thường gặp. Nó không chỉ gây ra những phiền toái khó chịu cho người lái xe khi các bộ phận trong hệ thống điều khiển trên xe luôn bị làm việc sai tiêu chuẩn về thông số kỹ thuật. Từ đó gây ra những triệu chứng như tốn nhiên liệu hơn , hệ thống làm mát lỗi động cơ bị nóng bất thường , …</p>
				</div>
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
			<a href="" class="btn btn-danger" style="background: #E60000;text-transform: uppercase;">Hãy trải nghiệm</a>
		</div>
	</div>
</div>