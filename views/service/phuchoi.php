<?php 
	session_start();
	$_SESSION['title'] = 'Phục hồi thân vỏ';
 ?>
<div class="container-fluid">
	<div id="content" class="container-fluid" style="margin-bottom:50px;" >
		<div class="container-fluid" style="background: #f6f6f6;margin-top: 25px;">
			<div class="container link-page">
				<a href="<?php echo URL_BASE;?>" class="index">Trang chủ</a>
				<span>&nbsp;&rsaquo;&nbsp;</span>
				<a href="<?php echo URL_BASE;?>?controller=service&action=home" class="index">Dịch vụ</a>
				<span>&nbsp;&rsaquo;&nbsp;</span>
				<a href="<?php echo URL_BASE;?>?controller=service&action=phuchoi" class="title-page">Phục hồi thân vỏ</a>
			</div>
		</div>
		<div class="container">
			<div class="title-footer" style="padding-top: 20px;">
				<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
				<span>KHÔI PHỤC THÂN VỎ</span>
			</div>
			<div>
				<strong style="font-size: 20px;margin-bottom: 8px;">QUY TRÌNH TỔNG QUAN VỀ SỬA CHỮA THÂN XE VÀ SƠN XE</strong>
				<p>Trong quá trình khai thác và sử dụng ô tô thì việc bảo dưỡng, sửa chữa ô tô là rất quan trọng nhằm duy trì trạng thái làm việc tốt nhất của xe. Tuy nhiên trong thực tế vẫn có trường hợp ô tô bị hư hỏng, tai nạn khi vận hành. Các tai nạn này làm hư hỏng phần sơn xe, vỏ xe ô tô là rất phổ biến. Do dó quá trình sửa chữa để phục hồi các hư hỏng liên quan đến thân xe và sơn xe ô tô ngày nay là nhu cầu rất lớn của xã hội. Sau đây xin trình bày quy trình tổng quan về sửa chữa thân xe và sơn xe.</p>
				<div id="list2">
				   <ol>
				      <li>
				      	<div class="list-service">
							<div>
								<span> Đánh giá tình trạng hư hỏng</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers1"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers1" class="collapse answers">
								<p>Đây là công việc chuẩn bị bề mặt trước khi tiến hành sơn xe. Công việc này nhằm đánh giá xem khu vực hưng hỏng có chi tiết nào cần phải thay thế không.</p>
								<div style="width:60%;margin-left: 20% ;background: #cccccc;text-align: center; ">
										<img src="<?php echo URL_BASE;?>assets/images/kp1.png" style="text-align: center; width: 100%; height: auto;">
										<p style="text-align: center; padding-top:10px; ">Hình ảnh chiếc xe bị hư hỏng</p>
								</div>
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span> Tháo các chi tiết</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers2"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers2" class="collapse answers">
								<p>Tháo các chi tiết đã bị hư hỏng và tháo các chi tiết cần thiết để sửa chữa thân xe và vỏ.</p>
							</div>
				      	</div>
				      </li>
						<li>
				      	<div class="list-service">
							<div>
								<span>Nắn khung (chỉ khi khung xe bị biến dạng)</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers3"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers3" class="collapse answers">
								<p>Công đoạn này nhằm phục hồi các giá trị kích thước khung xe tiêu chuẩn của chiếc xe đó. Gá các chi tiết và thay thế bằng cách hàn.</p> 	
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span>Thay thế các tấm vỏ xe (chỉ khi khó sữa chữa được)</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers4"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers4" class="collapse answers">
								<p>Gắn các chi tiết thay thế bằng phương pháp hàn.</p>
								<div style="width:60%;margin-left: 20% ;background: #cccccc;text-align: center; ">
										<img src="<?php echo URL_BASE;?>assets/images/kp3.png" style="text-align: center; width: 100%; height: auto;">
										<p style="text-align: center; padding-top:10px; ">Gá tấm chắn trước xe</p>
								</div>
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span>Sửa chữa tấm vỏ xe</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers5"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers5" class="collapse answers">
								<p>Khôi phục lại hình dáng của các tấm đã bị hư hỏng bằng búa, có thể sử dụng phương pháp nắn khung vỏ bằng máy hàn rút tôn, sử dụng bộ nắn khung.</p>
								<div style="width:60%;margin-left: 20% ;background: #cccccc;text-align: center; ">
										<img src="<?php echo URL_BASE;?>assets/images/kp4.png" style="text-align: center; width: 100%; height: auto;">
										<p style="text-align: center; padding-top:10px; ">Sửa chữa tấm vỏ xe</p>
								</div>
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span>Chống gỉ</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers6"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers6" class="collapse answers">
								<p><strong>Vệ sinh bề mặt chi tiết:</strong> Xịt xăng, dùng khăn sạch lau đều lại bề mặt, phun chất chống rỉ vào mặt sau của các khu vực bị hư hỏng để bảo vệ bề mặt kim loại bị ăn mòn.</p>
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span>Lắp các chi tiết</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers7"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers7" class="collapse answers">
								<p>Lắp các chi tiết vào xe.</p>
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span>Kiểm tra lần cuối</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers8"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers8" class="collapse answers">
								<p>Kiểm tra chất lượng sửa chữa bề mặt, thân vỏ xe để chuẩn bị cho bước làm matit.</p>
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span>Bả ma tít</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers9"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers9" class="collapse answers">
								<p>Bả ma tít lên các vết lõm để tạo độ nhẵn cho bề mặt.</p>
								<div style="width:60%;margin-left: 20% ;background: #cccccc;text-align: center; ">
										<img src="<?php echo URL_BASE;?>assets/images/kp5.jpeg" style="text-align: center; width: 100%; height: auto;">
										<p style="text-align: center; padding-top:10px; ">Bả ma tít cho ô tô</p>
								</div>
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span>Sơn lại và đánh bóng</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers10"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers10" class="collapse answers">
								<p>Sau khi bả ma tít xong chúng tôi sẽ sơn lại và hoàn thiện bề mặt cho chiếc xe.</p>
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span>Bước bất ngờ nhất (hãy bấm để xem tiếp) =></span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers11"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers11" class="collapse answers">
								<p>Bạn đã hiểu quy trình sửa chữa và khôi phục thân vỏ của chúng tôi rồi chứ?? Còn chờ gì nữa mà không trải nghiệm ngay nào...</p>
								<a href="<?php echo URL_BASE;?>?controller=service&action=book_service_by_id" class="btn btn-danger" style="background: #e60000;">TRẢI NGHIỆM NGAY</a>
							</div>
				      	</div>
				      </li>
				   </ol>
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
</div>