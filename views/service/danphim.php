<?php 
	session_start();
	$_SESSION['title'] = 'Dán phim cách nhiệt';
 ?>
<div class="container-fluid">
	<div id="content" class="container-fluid" style="margin-bottom:50px;" >
		<div class="container-fluid" style="background: #f6f6f6;margin-top: 25px;">
			<div class="container link-page">
				<a href="<?php echo URL_BASE;?>" class="index">Trang chủ</a>
				<span>&nbsp;&rsaquo;&nbsp;</span>
				<a href="<?php echo URL_BASE;?>?controller=service&action=home" class="index">Dịch vụ</a>
				<span>&nbsp;&rsaquo;&nbsp;</span>
				<a href="<?php echo URL_BASE;?>?controller=service&action=danphim" class="title-page"><?php echo $service['name']; ?></a>
			</div>
		</div>
		<div class="container">
			<div class="title-footer" style="padding-top: 20px;">
				<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
				<span><?php echo $service['name']; ?></span>
			</div>
			<div>
				<strong style="font-size: 20px;margin-bottom: 8px;">Phim cách nhiệt cho xe hơi nên dùng khi nào?</strong>
				<p>Ở những thành phố lớn như vào mùa hè cũng là lúc chiếc “lò bát quái” xuất hiện. Chỉ cần xe ô tô của bạn đậu ngoài trời khoảng 15 phút là đã biến thành một “chiếc lò” di động mà mỗi khi muốn bước lên sẽ giống như một cực hình. Chính vì thế, dán phim cách nhiệt ô tô là biện pháp hiệu quả hiện đang được nhiều người tin dùng.</p>
				<strong style="font-size: 20px;margin-bottom: 8px;">Ưu điểm của phim cách nhiệt là gì?</strong>
				<p>Phim cách nhiệt sở hữu những ưu điểm chính là: Món phụ kiện mang đến tính thẩm mỹ cao, không làm mất diện tích xe hay gây bừa bộn cho cabin…Điểm đặc biệt nhất của phim tản nhiệt khiến ai cũng hài lòng đó chính là <strong>khả năng cản nhiệt</strong> và <strong>chống lại các tia gây hại</strong> của ánh nắng mặt trời rất tốt.Về cơ bản, mọi loại phim cách nhiệt đều được chế tạo với một lớp bề mặt giúp tránh hấp thụ các tia hồng ngoại và tử ngoại. Khi bạn lựa chọn những loại phim này, bạn sẽ không cần lo lắng về việc kính xe hấp thụ các tia độc hại từ bên ngoài và chiếu vào bên trong xe</p>
				<strong style="font-size: 20px;margin-bottom: 10px;">Bảng báo giá phim cách nhiệt</strong>
				<p style="margin-top: 10px;"><strong>Phim 3M liên doanh (liên doanh USA, bảo hành 5 năm)</strong></p>
				<table border="1" style="padding: 5px; width: 100%;font-size:15px;text-align: center;">
					<tr>
						<th>TT</th>
						<th>Tên hàng</th>
						<th>Kính trước</th>
						<th>Kính hậu</th>
						<th>Kính sườn</th>
						<th>Tổng cộng/xe</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Phim 3M tiêu chuẩn</td>
						<td>500.000/cánh</td>
						<td>300.000/cánh</td>
						<td>150.000/cánh</td>
						<td>Từ 1.400.000/xe 4 chỗ<br>Từ 1.700.000/xe 7 chỗ</td>
					</tr>
				</table>
				<p style="margin-top: 10px;"><strong>Phim 3M Diamond(liên doanh USA, bảo hành 5 năm)</strong></p>
				<table border="1" style="padding: 5px; width: 100%;font-size:15px;text-align: center;">
					<tr>
						<th>TT</th>
						<th>Tên hàng</th>
						<th>Kính trước</th>
						<th>Kính hậu</th>
						<th>Kính sườn</th>
						<th>Tổng cộng/xe</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Phim 3M Diamond</td>
						<td>1.200.000/cánh</td>
						<td>650.000/cánh</td>
						<td>300.000/cánh</td>
						<td>Từ 3.050.000/xe 4 chỗ<br>Từ 3.650.000/xe 7 chỗ</td>
					</tr>
				</table>
				<p style="margin-top: 10px;"><strong>Phim 3M chính hãng USA(bảo hành 10 năm)</strong></p>
				<table border="1" style="padding: 10px; width: 100%;font-size:15px;text-align: center;margin-bottom: 20px;">
					<tr>
						<th>TT</th>
						<th>Loại xe</th>
						<th>Loại phim</th>
						<th>Kính trước</th>
						<th>Kính sườn</th>
						<th>Kính hậu</th>
						<th>Toàn bộ xe</th>
						<th>Ghi chú</th>
					</tr>
					<tr>
						<td>1</td>
						<td>4 chỗ</td>
						<td rowspan="2">Tiêu chuẩn</td>
						<td>2.050.000</td>
						<td>950.000</td>
						<td>1.900.000</td>
						<td>7.750.000</td>
						<td rowspan="6" style="text-align: left;padding-left: 10px;">
							- Tem chứng nhận hàng chính hãng<br>
							- Phiếu bảo hành hàng điện tử, được cấp User, pass làm thành viên của 3M toàn cầu.<br>
							- TD: HP5,20,35,50-RE70<br>
							- TC: CS20,RE35,50,ST50-RE70<br>
							- CC: BC20,BC40,BC10-CR70
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>7 chỗ</td>
						<td>2.050.000</td>
						<td>950.000</td>
						<td>1.900.000</td>
						<td>9.650.000</td>
					</tr>
					<tr>
						<td>3</td>
						<td>4 chỗ</td>
						<td rowspan="2">Cao cấp</td>
						<td>2.050.000</td>
						<td>1.200.000</td>
						<td>2.300.000</td>
						<td>9.050.000</td>
					</tr>
					<tr>
						<td>4</td>
						<td>7 chỗ</td>
						<td>2.050.000</td>
						<td>1.200.000</td>
						<td>2.200.000</td>
						<td>11.450.000</td>
					</tr>
					<tr>
						<td>5</td>
						<td>4 chỗ</td>
						<td rowspan="2">Siêu cấp</td>
						<td>3.200.000</td>
						<td>1.400.000</td>
						<td>3.100.000</td>
						<td>11.900.000</td>
					</tr>
					<tr>
						<td>6</td>
						<td>7 chỗ</td>
						<td>3.200.000</td>
						<td>1.400.000</td>
						<td>3.100.000</td>
						<td>14.700.000</td>
					</tr>
				</table>
				<strong style="font-size: 20px;margin-bottom: 8px;">Các bước dán phim cách nhiệt trên ô tô</strong>
				<div id="list2">
				   <ol>
				      <li>
				      	<div class="list-service">
							<div>
								<span> Làm sạch bề mặt kính trên ô tô cần dán</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers1"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers1" class="collapse answers">
								<p>Bước này là một bước khá quan trọng bởi nếu kính của bạn sạch thì lớp phim cách nhiệt dán lên mới đẹp, khi dán xong sẽ không xuất hiện các lớp bong bóng bên trong và giúp phim được bền lâu hơn. Khi thi công dán phim nên chọn gara hoặc phòng kín để tránh có gió mang bụi vào giữa lớp phim và lớp kính gây ảnh hưởng đến chất lượng cũng như gây khó chịu khi quan sát. Nên nhớ tránh dùng các loại vải cotton để lau vì dễ để lại các bụi bông trên kính.</p>
								<div style="width:60%;margin-left: 20% ;background: #cccccc;text-align: center; ">
										<img src="http://localhost:82/assets/images/dp1.jpeg" style="text-align: center; width: 100%; height: auto;">
										<p style="text-align: center; padding-top:10px; ">Làm sạch kính</p>
								</div>
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span> Chuẩn bị phim dán kính và dung dịch hỗn hợp</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers2"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers2" class="collapse answers">
								<p>Công việc đòi hỏi sự tỉ mỉ trong việc đo đạc một cách chính xác diện tích phim cần dán. Tiếp đến là pha một hỗn hợp dung dịch gồm nước và xà phòng dùng loại johnson có độ ph nhỏ đổ vào một bình xịt để làm chất xúc tác giúp tạo độ trơn cho kính, dễ dịch chuyển tấm phim về đúng vị trí cần thiết.</p>
							</div>
				      	</div>
				      </li>
						<li>
				      	<div class="list-service">
							<div>
								<span>Dán phim cách nhiệt kính</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers3"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers3" class="collapse answers">
								<p>Xịt ướt lên toàn bộ bề mặt kính cần dán và cả trên phim cách nhiệt. Công đoạn tiếp theo là đặt tấm phim cách nhiệt lên mặt kính sao cho cân đối và cân chỉnh lại cho chính xác trước khi dán sau đó dùng gạt kính để gạt sạch nước.</p>
								<div style="width:60%;margin-left: 20% ;background: #cccccc;text-align: center; ">
										<img src="http://localhost:82/assets/images/dp2.jpg" style="text-align: center; width: 100%; height: auto;">
										<p style="text-align: center; padding-top:10px; ">Xịt ướt và dán phim</p>
								</div>
							</div>
				      	</div>
				      </li>
				      <li>
				      	<div class="list-service">
							<div>
								<span> Loại bỏ các bọt sau khi dán</span>
								<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers4"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
							</div>
							<div id="answers4" class="collapse answers">
								<p>Công đoạn cuối cùng bạn cần dùng tới một vật phẳng như thước nhựa hoặc tấm xốp, LLumar sử dụng gạt Blue Max gạt đều trên bề mặt phim cách nhiệt để gạt hết các bọt nước và không khí ngăn cách giữa phim và kính..</p>
								<div style="width:60%;margin-left: 20% ;background: #cccccc;text-align: center; ">
										<img src="http://localhost:82/assets/images/dp3.jpeg" style="text-align: center; width: 100%; height: auto;">
										<p style="text-align: center; padding-top:10px; ">Loại bỏ bọt khí</p>
								</div>
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
								<p> Đã hoàn thành!! Hãy dán phim cách nhiệt để bảo vệ cho chính bản thân mình và xế yêu của mình nhé. Còn chờ gì nữa mà không trải nghiệm ngay nào...</p>
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