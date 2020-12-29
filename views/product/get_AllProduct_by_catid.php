<?php 
	session_start();
	$_SESSION['title'] = 'Tất cả sản phẩm';
 ?>
<div id="content" class="container-fluid" style="margin-bottom:50px; " >
		<div class="container-fluid" style="background: #f6f6f6;">
			<?php 
				$id = isset($_GET['id']) ? $_GET['id'] : "";
				if (!empty($id)) {
					$category = new Categorycars();
					$name = $category -> getNameCategorycarsById($id);
					array('name' => $name);
				}
			 ?>
			<div class="container link-page">
				<a href="<?php echo URL_BASE;?>" class="index">Trang chủ</a>
				<span>&nbsp;&rsaquo;&nbsp;</span>
				<a href="" class="title-page"><?php echo "Xe ".$name['name'];?></a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-9 left-category">
					<div class="row title-content" style="font-size: 20px;margin-bottom:10px; ">
							<div class="col-md-12" style="text-align: center;">
								<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
								<span style="text-transform: uppercase;"><?php echo "xe ".$name['name'];?></span>
							</div>
					</div>
					<div class="row ">
							<?php 
								$cars = new Cars();
								$currentpage = !empty($_GET['page'])?$_GET['page']:1;
							 	$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:6;
								$totalRecords = $cars->getNumRowsByCategory($_GET['id']);
								$totalPage = ceil($totalRecords/$item_per_page);
								$listCars = $cars->getCarLimitByCategory($currentpage, $item_per_page,$_GET['id']);
							 ?>
							<?php foreach ($listCars as $k => $v) { $arrImg = explode(";", $v['image']);   ?>
								<div class="col-md-4 product">
									<div class="product-item">
										<div class="img-product1">
											<a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo $v['carid'];?>">
												<img class="img-product-item1" style="height: 160px;" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0]; ?>">
											</a>
										</div>
										<div>
											<a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo $v['carid'];?>">
													<span style="font-weight: bold;color: black;margin-top:20px;margin-bottom:30px;"><?php echo $v['name'];?></span><br>
											</a>
											<span style="color: red"><?php echo number_format($v['price'])."đ";?></span><br>
											<span class="inf-product"><?php echo "Nơi sản xuất: ".$v['fromcar']; ?></span><br>
											<span class="inf-product"><?php echo "Động cơ: ".$v['engine']; ?></span><br>
											<span class="inf-product">Số KM:</span><br>
											<span class="inf-product"><?php echo "Tình trạng xe: ".$v['statuscar']; ?></span>
										</div>
									</div>
								</div>
							<?php } ?>
						<!-- </div> -->
					</div>
					<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
						<div class="col-md-12" style="text-align: center;">
							<div id="pagination" class="col-md-12" style="text-align: right;">
								<?php if ($currentpage > 2) {  
									$firstpage = 1;
									?>
									<a class="btn-sm btn-outline-danger" href="<?php echo URL_BASE; ?>?controller=product&action=get_AllProduct_by_catid&id=<?php echo $_GET['id']; ?>&per_page=<?php echo $item_per_page ?>&page=<?php echo $firstpage; ?>">First</a>
								<?php } ?>

								<?php for ($i=1; $i <= $totalPage; $i++) { 
									if ($i != $currentpage) { 
										if ($i > $currentpage - 2 && $i < $currentpage + 3) { ?>
											<a class="btn-sm btn-outline-danger" href="<?php echo URL_BASE; ?>?controller=product&action=get_AllProduct_by_catid&id=<?php echo $_GET['id']; ?>&per_page=<?php echo $item_per_page ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
										<?php } 
									} else{ ?>
										<span class="btn-sm btn-danger"><?php echo $i; ?></span>
									<?php } ?>
								<?php } ?>

								<?php if ($currentpage < $totalPage - 2) {  
									$endpage = $totalPage;
									?>
									<a class="btn-sm btn-outline-danger" href="<?php echo URL_BASE; ?>?controller=product&action=get_AllProduct_by_catid&id=<?php echo $_GET['id']; ?>&per_page=<?php echo $item_per_page ?>&page=<?php echo $endpage; ?>">Last</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 right-category">
					<div id="filter">
						<div id="title-filter">lọc sản phẩm</div>
						<div class="question-content" class="row">
								<div class="col-md-12">
									<div><hr></div>
									<div class="row">
										<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers2"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
										<a href="#">GIÁ</a>
									</div>
									<div id="answers2" class="row collapse answers">
										<form style="color: white;">
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Dưới 5 tỉ</label>
										    </div>
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Từ 5 tỉ -> 10 tỉ</label>
										    </div>
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Trên 10 tỉ</label>
										    </div>
										  </form>
									</div>			
								</div>
								<div class="col-md-12">
									<div><hr></div>
									<div class="row">
										<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers3"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
										<a href="#">LOẠI XE</a>
									</div>
									<div id="answers3" class="row collapse answers">
										<form style="color: white;">
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Xe sang</label>
										    </div>
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Xe thể thao</label>
										    </div>
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Xe điện</label>
										    </div>
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Xe Sedan</label>
										    </div>
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Xe SUV</label>
										    </div>
										  </form>
									</div>			
								</div>
								<div class="col-md-12" style="border-top: 1px solid black;">
									<div><hr></div>
									<div class="row">
										<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers5"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
										<a href="#">TÌNH TRẠNG XE</a>
									</div>
									<div id="answers5" class="row collapse answers">
										<form style="color: white;">
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Mới</label>
										    </div>
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Cũ</label>
										    </div>
										  </form>
									</div>		
								</div>
								<div class="col-md-12" style="border-bottom: 1px solid black">
									<div><hr></div>
									<div class="row">
										<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#answers6"><i class="fas fa-caret-square-down" style="font-size: 20px; color: #e60000;"></i></span>
										<a href="#">NĂM SẢN XUẤT</a>
									</div>
									<div id="answers6" class="row collapse answers">
										<form style="color: white;">
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Năm 2017</label>
										    </div>
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Năm 2018</label>
										    </div>
										    <div class="checkbox">
										      <label><input type="checkbox" value=""> Năm 2019</label>
										    </div>
										  </form>
									</div>
									<div><br></div>			
								</div>
							</div>
					</div>
					<?php 
						$carshot = Cars::getAllCarsHot();
						//print_r($carshot);
					 ?>
					<div id="product-topical">
						<div id="title-product-topical">Sản phẩm tiêu biểu</div>
						<div class="col-md-12 product" style="width: 100%;">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							  	<div class="carousel-inner">
							  		<?php foreach ($carshot as $key => $value) { $arrImg = explode(";", $value['image']);?>
							  			<?php if ($key == 0) { ?>
									    	<div class="carousel-item active">
									    <?php }else{ ?>
									    	<div class="carousel-item">
									    <?php } ?>
									      		<div class="product-item d-block w-100" alt="First slide" style="padding-right: 10px;">
													<div class="img-product">
														<a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo $value['carid'] ?>">
															<img class="img-product-item" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0]; ?>">
														</a>
													</div>
													<div style="margin-bottom:10px; ">
														<a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo $value['carid']; ?>">
																<span style="font-weight: bold;color: black;margin-top:20px;margin-bottom:30px;"><?php echo $value['name']; ?></span><br>
														</a>
														<span style="color: red"><?php echo number_format($value['price']); ?> ₫</span><br>
													</div>
													<a class="btn-topical-product" href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo $value['carid']; ?>" title="<?php echo $value['name']; ?>">
															CHI TIẾT
													</a>
												</div>
									    	</div>
									    	
								    <?php } ?>
							    	
							  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    	<span class="sr-only">Previous</span>
							  	</a>
							  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
							    	<span class="sr-only">Next</span>
							  	</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>