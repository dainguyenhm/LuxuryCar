<?php
	session_start();
	$_SESSION['title'] = 'Tin tức';
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
			<div  class="row">
				<div class="title-content-detail col-md-12">
					<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
					<span>TIN TỨC</span>
				</div>
			</div>
			<div class="row" >
				<?php 
					$newsLast = News::getNewsLast();
					$arrImg = explode(";", $newsLast['image']);
				 ?>
				<div class="col-md-8">
					<span><a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php echo $newsLast['newsid']; ?>" title="<?php echo $newsLast['title']; ?>"><img src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0]; ?>" width="730" height="400"></a></span>
					<p><h2><a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php echo $newsLast['newsid']; ?>" style="font-size: 26px; font-weight: bold;"><?php echo $newsLast['title']; ?></a></h2></p>
					<p><?php echo $newsLast['summary']; ?></p>
				</div>
				<?php 
					$newsSecond = News::getNewsSecond();
				 ?>
				<div class="col-md-4">
					<?php foreach ($newsSecond as $key => $value) { $arrImg = explode(";", $value['image']);?>
						<div class="row">
							<div class="col-md-12">
								<span><a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php echo $value['newsid']; ?>"><img src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0]; ?>" width="352" height="180"></a></span>
								<p><span><a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php echo $value['newsid']; ?>" style="font-size: 16px; font-weight: bold;"><?php echo $value['title']; ?></a></span></p>
								<p><?php echo $value['summary']; ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="row" style="margin-top: 15px; margin-bottom: 30px;">
				<div class="col-md-12" style="border-bottom: 5px solid #e60000;"></div>
			</div>
		</div>
	</div>
	<?php 
		
	 ?>
	<div class="container">
		<div class="row">
			<?php 
				$currentpage = !empty($_GET['page'])?$_GET['page']:1;
			 	$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:6;
				$totalRecords = News::getNumRowsNewsThird();
				$totalPage = ceil($totalRecords/$item_per_page);
				$newsThird = News::getNewsThird($currentpage , $item_per_page);
			 ?>
			<?php foreach ($newsThird as $key => $value) { $arrImg = explode(";", $value['image']);?>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-5 employees">
							<div class="employees-item">
								<div class="img-employees">
									<a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php echo $value['newsid']; ?>" title="<?php echo $value['title']; ?>">
										<img class="img-employees-item" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0]; ?>" style="height:180px; width: 200px;">
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-7" style="padding-left: 0px;">
							<div class="news-title row">
								<div class="col-md-12">
									<a href="<?php echo URL_BASE;?>?controller=news&action=get_news_by_newsid&id=<?php echo $value['newsid']; ?>" style="font-size: 17px;"><?php echo $value['title']; ?></a>
								</div>
							</div>
							<div class="row">
								<div class="news-date col-md-7">
									<span class="news-icon"><i class="far fa-clock"></i></span><span style="color: #e60000"><?php echo date("d/m/Y", strtotime($value['newsdate'])); ?></span>
									<span class="news-icon" style="padding-left: 5px;"><i class="far fa-comment"></i></span><span style="color: #e60000">1 Bình luận</span>
								</div>
								<div class="col-md-1">
						    		<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
						    	</div>
							</div>
							<div class="news-content row">
								<div class="col-md-12">
									<p><?php echo $value['summary']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
			

		<div class="row" style="margin-bottom: 20px;">
			<div class="col-md-12" style="text-align: center; padding-bottom: 40px;">
				<div id="pagination" class="col-md-12" style="text-align: right;">
					<?php if ($currentpage > 2) {  
						$firstpage = 1;
						?>
						<a class="btn-sm btn-outline-danger" href="<?php echo URL_BASE; ?>?controller=news&action=home&per_page=<?php echo $item_per_page ?>&page=<?php echo $firstpage; ?>">First</a>
					<?php } ?>

					<?php for ($i=1; $i <= $totalPage; $i++) { 
						if ($i != $currentpage) { 
							if ($i > $currentpage - 2 && $i < $currentpage + 3) { ?>
								<a class="btn-sm btn-outline-danger" href="<?php echo URL_BASE; ?>?controller=news&action=home&per_page=<?php echo $item_per_page ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
							<?php } 
						} else{ ?>
							<span class="btn-sm btn-danger"><?php echo $i; ?></span>
						<?php } ?>
					<?php } ?>

					<?php if ($currentpage < $totalPage - 2) {  
						$endpage = $totalPage;
						?>
						<a class="btn-sm btn-outline-danger" href="<?php echo URL_BASE; ?>?controller=news&action=home&per_page=<?php echo $item_per_page ?>&page=<?php echo $endpage; ?>">Last</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>