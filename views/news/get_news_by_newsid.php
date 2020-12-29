<?php
	session_start();
	$_SESSION['title'] = 'Chi tiết tin tức';
?>
<div class="container-fluid">
	<div id="path" class="container-fluid" style=" ">
		<div class="container">
			<div  class="row">
				<div id="path-title" class="col-md-12">
					<a href="<?php echo URL_BASE;?>">Trang chủ</a> <span>&nbsp;&rsaquo;&nbsp;</span> <a href="<?php echo URL_BASE;?>?controller=news&action=home" style="color: #e60000;">Tin tức</a>
				</div>
			</div> 
		</div>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12 news-item-title">
					<?php echo $news['title']; ?>
				</div>
			</div>
			<div class="row" style="margin-top: 10px; margin-bottom: 10px;">
				<div class="news-date col-md-3"> 
					<span class="news-icon"><i class="far fa-clock"></i></span><span style="color: #e60000"><?php echo date("d/m/Y", strtotime($news['newsdate'])); ?></span>&nbsp;&rsaquo;&nbsp;
					<span class="news-icon"><i class="far fa-comment"></i></span><span style="color: #e60000">1 Bình luận</span>
				</div>
			</div>
			<div class="dropdown-divider row"></div>
			<div class="row">
				<div class="col-md-12 news-item-summary">
					<?php echo $news['summary']; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 news-item-content">
					<?php echo $news['content']; ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row news-item-tags">
				<div class="col-md-12">
					<span class="tags" ><i class="fas fa-tags"></i>TAGS</span>
					<span>
						<a href="#">Tin mới nhất</a>
						<a href="#">tin hot</a>
						<a href="#">tin nổi bật</a>
						<a href="#">đọc nhiều nhất</a>
					</span>
				</div>
			</div>
			<!-- tags -->

			<div class="row share">
				<div class="col-md-12">	
					<ul>
						<li><span>chia sẻ ngay</span></li>
						<li class="share-link-fb"><span><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></span></li>
						<li class="share-link-gl"><span><a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a></span></li>
					</ul>					
				</div>
			</div>
			<!-- share -->
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
		<!-- comment -->
	</div>
</div>