<?php 
	session_start();
 ?>
<style type="text/css">
	span{
		font-size: 16px;
	}
	a:hover{
		color: #e60000;
	}
	th{
		text-align: center;
	}
	h3{
		font-family: Helvetica;
	}
</style>
<div class="container-fluid" style="background-color: #ece5e5; height: 40px; line-height: 40px;">
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="text-align: left;">
				<?php if (!isset($_SESSION['admin'])) {
					header("location:?controller=admin&action=login");
				} ?>
				<span>Xin chào <span style="color: #e60000; font-weight: bold;"><?php echo $_SESSION['admin']; ?></span></span>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<a href="<?php echo URL_BASE;?>?controller=pages" style="padding-right: 10px;"><i class="fas fa-home"></i> Trang chủ</a>
				<a href="<?php echo URL_BASE;?>?controller=admin&action=login&logout=true"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row" style="margin-top: 15px;">
		<div class="col-md-2">
			<div class="row" style=" border-radius: 25px;background-color: #e60000;">
				<div class="col-md-12" ><a href="<?php echo URL_BASE;?>?controller=admin&action=home" style="font-size: 18px; color: #ffffff;">Admin Menu</a></div>
			</div>
<!-- Hiển thị sản phẩm theo danh mục -->
			<div class="row">
				<div class="col-md-12">
					<?php 
						$categorycars = new Categorycars();
						$cat = $categorycars->getAll();
					 ?>
					<div class="row form-control" style="margin-top: 15px; border-radius: 25px;color: #000000;">
						<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#categorycars"><i class="fas fa-caret-square-down" style="font-size: 16px;"></i> <span style="padding-left: 5px; font-weight: bold; ">Danh mục hãng xe</span></span>
					</div>
					<div id="categorycars" class="row collapse answers">
					    <div class="col-md-12">
					    	<?php foreach ($cat as $key => $value) { ?>
					      		<div class="row form-control" style="border-radius: 25px;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&categorycarid=<?php echo $value['categorycarid']; ?>"><?php echo $value['name']; ?></a></div>
					      	<?php } ?>
					      	<div class="row form-control" style="border-radius: 25px;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=addcategory"><i class="fas fa-plus"></i>  Thêm danh mục</a></div>
					    </div>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
						<?php 
							$services = new Services();
							$items = $services->getAll();
						 ?>
						<div class="row form-control" style="margin-top: 15px; border-radius: 25px;color: #000000;">
							<span class="btn" aria-expanded="false" data-toggle="collapse" data-target="#services"><i class="fas fa-caret-square-down" style="font-size: 16px;"></i> <span style="padding-left: 5px; font-weight: bold;">Dịch vụ</span></span>
						</div>
						<div id="services" class="row collapse answers">
						    <div class="col-md-12">
						    	<?php foreach ($items as $key => $value) { ?>
						      		<div class="row form-control" style="border-radius: 25px;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=services&id=<?php echo $value['serviceid']; ?>"><?php echo $value['name']; ?></a></div>
						      	<?php } ?>
						      	<div class="row form-control" style="border-radius: 25px;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=addService"><i class="fas fa-plus"></i>&nbsp;Thêm dịch vụ mới</a></div>
						    </div>
						</div>	
					</div>
			</div>
			<div class="row">
					<div class="col-md-12">
						<div class="row form-control" style="margin-top: 15px; border-radius: 25px;">
							<span style="padding-left: 35px; font-weight: bold;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=customer">Quản lí khách hàng</a></span></span>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row form-control" style="margin-top: 15px; border-radius: 25px;">
						<span style="padding-left: 35px; font-weight: bold;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=orderservices">Quản lí đặt dịch vụ</a></span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row form-control" style="margin-top: 15px; border-radius: 25px;">
						<span style="padding-left: 35px; font-weight: bold;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=news">Tin tức</a></span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row form-control" style="margin-top: 15px; border-radius: 25px;">
						<span style="padding-left: 35px; font-weight: bold;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=contacts">Liên hệ</a></span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row form-control" style="margin-top: 15px; border-radius: 25px;">
						<span style="padding-left: 35px; font-weight: bold;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=introduces">Giới thiệu</a></span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row form-control" style="margin-top: 15px; border-radius: 25px;">
						<span style="padding-left: 35px; font-weight: bold;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=comments">Đánh giá - Bình luận</a></span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row form-control" style="margin-top: 15px; border-radius: 25px;">
						<span style="padding-left: 35px; font-weight: bold;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=ordercars">Đặt xe</a></span></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row form-control" style="margin-top: 15px; border-radius: 25px;">
						<span style="padding-left: 35px; font-weight: bold;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=orderservices">Đặt lịch dịch vụ</a></span></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-10">

<!-- Hiển thị tất cả sản phẩm -->


			<?php if (isset($_GET['categorycarid']) && !isset($_GET['pages'])) { ?>
				<?php 
					$categorycars = new Categorycars();
					$data = $categorycars->getCategorycarsById($_GET['categorycarid']);
				 ?>
				<div class="row" style="margin-bottom: 10px;">
					<div class="col-md-6" style="text-align: left;">
						 <h3><?php echo $data['name']; ?></h3>
					</div>
					
					<div class="col-md-6" style="text-align: right;">
						<a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=addcar&categorycarid=<?php echo $_GET['categorycarid']; ?>"  class="btn btn-outline-info" style="margin-right: 10px;">Thêm sản phẩm</a><a  href="<?php echo URL_BASE;?>?controller=admin&action=home&categorycarid=<?php echo $_GET['categorycarid']; ?>&pages=removecategory" class="btn btn-outline-info" >Xóa danh mục</a>
					</div>
				</div>
				
				<div class="row">
					<table class="table table-striped table-borderd">
						<tr>
							<th>Mã xe</th>
							<th>Ảnh</th>
							<th>Tên xe</th>
							<th>Hãng</th>
							<th>Giá xe</th>
							<th>Năm sx</th>
							<th>Tình trạng</th>
							<th>Xuất xứ</th>
							<th>Model</th>
							<th colspan="1">Chức năng</th>
						</tr>
						<?php 
							$cars = Cars::getAllCarsByCategoryCarId($_GET['categorycarid']);
							foreach ($cars as $key => $value) { $arrImg = explode(";", $value['image']);
						 ?>
							<tr>
								<td><?php echo $value['carid']; ?></td>
								<td>
									<?php for ($i=0; $i < sizeof($arrImg); $i++) { ?>
										<img style="width: 100px;height: 70px;" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[$i];?>">
									<?php } ?>
								</td>
								<td><?php echo $value['name']; ?></td>
								<td><?php echo $value['brandcar']; ?></td>
								<td><?php echo $value['price']; ?></td>
								<td><?php echo $value['yearcar']; ?></td>
								<td><?php echo $value['statuscar']; ?></td>
								<td><?php echo $value['fromcar']; ?></td>
								<td><?php echo $value['model']; ?></td>
								<td style="text-align: center; "><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=editcar&categorycarid=<?php echo $_GET['categorycarid'] ?>&carid=<?php echo $value['carid']; ?>" class="btn btn-outline-info"><i class="far fa-edit"></i></a><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=removecar&categorycarid=<?php echo $_GET['categorycarid'] ?>&carid=<?php echo $value['carid']; ?>" style="margin-left: 10px;" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a></td>
							</tr>
						<?php } ?>
					</table>
				</div>
			<?php } ?>
<!-- Thêm danh mục -->
			<?php if (isset($_GET['pages'])) { if($_GET['pages'] == 'addcategory'){ ?>
				<?php 
					if (isset($_POST['submitAddCategory'])) {
						$nameCategory = $_POST['nameCategory'];
						if ($nameCategory != "") {
							$categorycars = new Categorycars();
							if (Categorycars::addCategorycars($nameCategory)) {
								header("location:?controller=admin&action=home&pages=addcategory");
							}else{
								header("location:?controller=admin&action=home&pages=addcategory");
							}
						}
					}
				 ?>
				<div class="row">
					<div class="col-md-8">
						<div class="row"><div class="col-md-12"><h3>Thêm danh mục</h3></div></div>
						<div class="row">
							<div class="col-md-12">
								<form action="<?php echo URL_BASE;?>?controller=admin&action=home&pages=addcategory" method="post" >
									<div class="row">
										<div class="col-md-3" style="text-align: right;"><span>Tên danh mục(*)</span></div>
										<div class="col-md-4"><input type="text" name="nameCategory" class="form-control"></div>
									</div>
									<div class="row" style="margin-top: 13px;">
										<div class="col-md-3"></div>
										<div class="col-md-2"><input type="submit" name="submitAddCategory" class="btn btn-success" value="Thêm"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php }} ?>
<!-- Xóa danh mục -->

			
			<?php if (isset($_GET['pages']) && !isset($_GET['accept'])) { if($_GET['pages'] == 'removecategory'){ ?>
					
					 <script type="text/javascript">
						if (confirm('Bạn chắc chắn muốn xóa danh mục này?')) {
							location.replace("<?php echo URL_BASE;?>?controller=admin&action=home&categorycarid=<?php echo $_GET['categorycarid']; ?>&pages=removecategory&accept=true");
						}else{
							location.replace("<?php echo URL_BASE;?>?controller=admin&action=home&categorycarid=<?php echo $_GET['categorycarid']; ?>");
						}
					</script>
			<?php }} ?>
			
			<?php if (isset($_GET['accept'])) { if($_GET['pages'] == 'removecategory'){ ?>
				<?php 
					if (isset($_GET['categorycarid'])) {
						if (Categorycars::removeCategorycars($_GET['categorycarid'])) {

							header("location:?controller=admin&action=home");
						}else{
							header("location:?controller=admin&action=home");
						}
					}else {
						header("location:?controller=admin&action=home");
					}
				?>
			<?php }} ?>


<!-- thêm sản phẩm -->
			<?php if (isset($_GET['pages'])) { if($_GET['pages'] == 'addcar'){?>
				<div class="row">
					<div class="col-md-12"><h2>Thêm sản phẩm</h2></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form  action="<?php echo URL_BASE;?>?controller=admin&action=home&pages=addcar&categorycarid=<?php echo $_GET['categorycarid']; ?>"  method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-5">
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Tên xe(*)</span></div>
										<div class="col-md-5"><input type="text" name="name" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Hãng xe(*)</span></div>
										<div class="col-md-5">
											<select name="brandcar" class="custom-select">
												    <option selected>Hãng xe</option>
												<?php foreach ($cat as $key => $value) { ?>
													<option value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Giá(*)</span></div>
										<div class="col-md-4"><input type="text" name="price" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Năm sản xuất(*)</span></div>
										<div class="col-md-3"><input type="text" name="yearcar" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Trang thái(*)</span></div>
										<div class="col-md-3">

											<input type="radio" name="status" value="Mới">&nbsp;Mới&nbsp;&nbsp;&nbsp;
											<input type="radio" name="status" value="Cũ">&nbsp;Cũ
										</div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Xuất xứ(*)</span></div>
										<div class="col-md-3"><input type="text" name="fromcar" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Model(*)</span></div>
										<div class="col-md-5"><input type="text" name="model" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Color(*)</span></div>
										<div class="col-md-3"><input type="text" name="color" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Hộp số(*)</span></div>
										<div class="col-md-5"><input type="text" name="transmission" class="form-control"></div>
									</div>
									
								</div>
								<div class="col-md-7">
									
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Kích thước(*)</span></div>
										<div class="col-md-5"><input type="text" name="size" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Chiều dài cơ sở(*)</span></div>
										<div class="col-md-5"><input type="text" name="baselength" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Động cơ(*)</span></div>
										<div class="col-md-5"><input type="text" name="engine" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Công suất cực đại(*)</span></div>
										<div class="col-md-5"><input type="text" name="maxpower" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Dẫn động(*)</span></div>
										<div class="col-md-5"><input type="text" name="drive" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Tăng tốc(*)</span></div>
										<div class="col-md-5"><input type="text" name="speedup" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Tốc độ cực đại(*)</span></div>
										<div class="col-md-5"><input type="text" name="maxspeed" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Ảnh(*)</span></div>
										<div class="col-md-1"><input type="file" name="imgFile[]" multiple="true"></div>
									</div>							
								</div>
							</div>
							<div class="row" style="margin-left: 47px;">
								<div class="col-md-12">
									<div class="row" style="margin-bottom: 15px; ">
										<div class="col-md-2"><span>Giới thiệu(*)</span></div>
										<div class="col-md-8">
											<textarea type="text" id="description" name="description" class="form-control"></textarea>
										</div>
									</div>
								<script type="text/javascript">
									CKEDITOR.replace("description");
								</script>
								</div>
							</div>
							<div class="row" style="margin-left: 50px;"><div class="col-md-12"><input type="submit" name="submitAddCar" class="btn btn-success" value="Thêm mới"></div></div>
						</form>
					</div>
				</div>
			<?php }} ?>

			<?php 
				if (isset($_GET['pages'])) {
					if ($_GET['pages'] == 'addcar') {
						if (isset($_POST['submitAddCar'])) {
							$imgFile = $_FILES['imgFile'];
							$fName = $imgFile['name'];
							$fType = $imgFile['type'];
							$fSize = $imgFile['size'];
							$fTmpname = $imgFile['tmp_name'];
							$fError = $imgFile['error'];
							for ($i=0; $i < count($imgFile['name']) ; $i++){
								move_uploaded_file($fTmpname[$i],"assets/images/".$fName[$i]);
							}
							$namecar = $_POST['name'];
							$brandcar = $_POST['brandcar'];
							$price = $_POST['price'];
							$yearcar = $_POST['yearcar'];
							$status = $_POST['status'];
							$fromcar = $_POST['fromcar'];
							$model = $_POST['model'];
							$color = $_POST['color'];
							$transmission = $_POST['transmission'];
							$size = $_POST['size'];
							$baselength = $_POST['baselength'];
							$engine = $_POST['engine'];
							$maxpower = $_POST['maxpower'];
							$drive = $_POST['drive'];
							$speedup = $_POST['speedup'];
							$maxspeed = $_POST['maxspeed'];
							$description = $_POST['description'];
							$images = implode(';',$fName);
							$categorycarid = $_GET['categorycarid'];
							if (Cars::addCar($namecar,$brandcar,$price,$yearcar,$status,$fromcar,$model,$color,$transmission,$size,$baselength,$engine,$maxpower,$drive,$speedup,$maxspeed,$description,$images,$categorycarid)) {
								header("location:?controller=admin&action=home&categorycarid=".$categorycarid);
							}
						}
					}
				}
			 ?>

		 	<!-- Sửa sản phẩm -->
		 	<?php 
		 		if (isset($_GET['pages']) && isset($_GET['carid'])) {
		 				if ($_GET['pages'] == 'editcar' && $_GET['carid'] !="") {
		 					$carid = $_GET['carid'];
		 					$car = Cars::getCarById($carid);
		 					//print_r($car);
		 					$imgitem = explode(';', $car['image']);
		 				}
		 					

		 			}	
		 	 ?>
		 	 <?php
		 	 if (isset($_GET['pages']) && isset($_GET['carid'])) {
		 	 	if ($_GET['pages'] == 'editcar'){
			 	  if (isset($_POST['submitEditCar'])) {
			 	  		$carid = $_GET['carid'];
						$imgFile = $_FILES['imgFile'];
						$fName = $imgFile['name'];
						$fType = $imgFile['type'];
						$fSize = $imgFile['size'];
						$fTmpname = $imgFile['tmp_name'];
						$fError = $imgFile['error'];
						for ($i=0; $i < count($imgFile['name']) ; $i++){
							move_uploaded_file($fTmpname[$i],"assets/images/".$fName[$i]);
						}
						$namecar = $_POST['name'];
						$brandcar = $_POST['brandcar'];
						$price = $_POST['price'];
						$yearcar = $_POST['yearcar'];
						$status = $_POST['status'];
						$fromcar = $_POST['fromcar'];
						$model = $_POST['model'];
						$color = $_POST['color'];
						$transmission = $_POST['transmission'];
						$size = $_POST['size'];
						$baselength = $_POST['baselength'];
						$engine = $_POST['engine'];
						$maxpower = $_POST['maxpower'];
						$drive = $_POST['drive'];
						$speedup = $_POST['speedup'];
						$maxspeed = $_POST['maxspeed'];
						$description = $_POST['description'];
						$images = implode(';',$fName);
						//$cars = new Cars();
						if (empty($images)) {
							$images = $car['image'];
						}
						if (Cars::editCar($carid,$namecar,$brandcar,$price,$yearcar,$status,$fromcar,$model,$color,$transmission,$size,$baselength,$engine,$maxpower,$drive,$speedup,$maxspeed,$description,$images,$_GET['categorycarid'])) {

							header("location:?controller=admin&action=home&categorycarid=".$_GET['categorycarid']);

						}
					}
				}
			}
		 	 ?>

			<?php if (isset($_GET['pages'])) { if($_GET['pages'] == 'editcar'){?>
				<div class="row">
					<h2>Chức năng sửa sản phẩm</h2>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form  action="<?php echo URL_BASE;?>?controller=admin&action=home&pages=editcar&categorycarid=<?php echo $_GET['categorycarid']; ?>&carid=<?php echo $car['carid']; ?>"  method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-5">
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Tên xe(*)</span></div>
										<div class="col-md-5"><input type="text" name="name" value="<?php echo $car['name']; ?>" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Hãng xe(*)</span></div>
										<div class="col-md-5">
											<select name="brandcar" class="custom-select">
												<option selected="1" value="<?php echo $car['brandcar'] ?>"><?php echo $car['brandcar']; ?></option>
											</select>
										</div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Giá(*)</span></div>
										<div class="col-md-4"><input type="text" name="price" value="<?php echo $car['price']; ?>" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Năm sản xuất(*)</span></div>
										<div class="col-md-3"><input type="text" name="yearcar" value="<?php echo $car['yearcar']; ?>" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Trang thái(*)</span></div>
										<div class="col-md-3">
											<?php if($car['statuscar'] == "Mới"){ ?>
												<input type="radio" name="status" value="Mới" checked="checked">&nbsp;Mới&nbsp;&nbsp;&nbsp;
											<?php }else{ ?>
												<input type="radio" name="status" value="Mới">&nbsp;Mới&nbsp;&nbsp;&nbsp;
											<?php } ?>
											<?php if($car['statuscar'] == "Cũ"){ ?>
												<input type="radio" name="status" value="Cũ" checked="checked">&nbsp;Cũ
											<?php }else{ ?>
												<input type="radio" name="status" value="Cũ">&nbsp;Cũ
											<?php } ?>
											
										</div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Xuất xứ(*)</span></div>
										<div class="col-md-3"><input type="text" name="fromcar" value="<?php echo $car['fromcar']; ?>" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Model(*)</span></div>
										<div class="col-md-5"><input type="text" name="model" value="<?php echo $car['model']; ?>" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Color(*)</span></div>
										<div class="col-md-3"><input type="text" name="color" value="<?php echo $car['color']; ?>" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-4" style="text-align: right;"><span>Hộp số(*)</span></div>
										<div class="col-md-5"><input type="text" name="transmission" value="<?php echo $car['transmission']; ?>" class="form-control"></div>
									</div>
									
								</div>
								<div class="col-md-7">
									
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Kích thước(*)</span></div>
										<div class="col-md-5"><input type="text" name="size" value="<?php echo $car['size']; ?>" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Chiều dài cơ sở(*)</span></div>
										<div class="col-md-5"><input type="text" name="baselength" value="<?php echo $car['baselength']; ?>"  class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Động cơ(*)</span></div>
										<div class="col-md-5"><input type="text" name="engine" value="<?php echo $car['engine']; ?>"  class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Công suất cực đại(*)</span></div>
										<div class="col-md-5"><input type="text" name="maxpower" value="<?php echo $car['maxpower']; ?>"  class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Dẫn động(*)</span></div>
										<div class="col-md-5"><input type="text" name="drive" value="<?php echo $car['drive']; ?>"  class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Tăng tốc(*)</span></div>
										<div class="col-md-5"><input type="text" name="speedup" value="<?php echo $car['speedup']; ?>"  class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Tốc độ cực đại(*)</span></div>
										<div class="col-md-5"><input type="text" name="maxspeed" value="<?php echo $car['maxspeed']; ?>"  class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-3" style="text-align: right;"><span>Ảnh(*)</span></div>
										<div class="col-md-1"><input type="file" name="imgFile[]" multiple="true"></div>
									</div>
									<div class="row">
										<?php
											if(count($imgitem)>0){	
												foreach ($imgitem as $key => $value) {
													echo '<div class="col-md-3">';
													echo '<img src="'.URL_BASE.'assets/images/'.$value.'" style="height: 90px; width: 150px;">';
													echo '</div>';
											}}
										?>
									</div>							
								</div>
							</div>
							<div class="row" style="margin-left: 47px; margin-top: 20px;">
								<div class="col-md-12">
									<div class="row" style="margin-bottom: 15px; ">
										<div class="col-md-2"><span>Giới thiệu(*)</span></div>
										<div class="col-md-8">
											<textarea type="text" id="description" name="description" class="form-control"><?php echo $car['description']; ?></textarea>
										</div>
									</div>
								<script type="text/javascript">
									CKEDITOR.replace("description");
								</script>
								</div>
							</div>
							<div class="row" style="margin-left: 50px;"><div class="col-md-12"><input type="submit" name="submitEditCar" class="btn btn-success" value="Cập nhật"></div></div>
						</form>
					</div>
				</div>
			<?php }} ?>



			<!-- Xóa sản phẩm -->

			<?php if (isset($_GET['pages']) && !isset($_GET['accept'])) { if($_GET['pages'] == 'removecar'){ ?>
					
					 <script type="text/javascript">
						if (confirm('Bạn chắc chắn muốn xóa sản phẩm này này?')) {
							location.replace("<?php echo URL_BASE;?>?controller=admin&action=home&pages=removecar&categorycarid=<?php echo $_GET['categorycarid']; ?>&carid=<?php echo $_GET['carid']; ?>&accept=true");
						}else{
							location.replace("<?php echo URL_BASE;?>?controller=admin&action=home&categorycarid=<?php echo $_GET['categorycarid']; ?>");
						}
					</script>
			<?php }} ?>
			
			<?php if (isset($_GET['accept'])) { if($_GET['pages'] == 'removecar' && $_GET['accept'] == 'true'){ ?>
				<?php 
					if (isset($_GET['carid'])) {
						if (Cars::removeCar($_GET['carid'])) {

							header("location:?controller=admin&action=home&categorycarid=".$_GET['categorycarid']);
						}else{
							header("location:?controller=admin&action=home&categorycarid=".$_GET['categorycarid']);
						}
					}else {
						header("location:?controller=admin&action=home&categorycarid=".$_GET['categorycarid']);
					}
				?>
			<?php }} ?>

			<!-- Dịch vụ mới -->
			<?php if(isset($_GET['pages'])){ if($_GET['pages'] == 'addService'){ ?>
				<div class="row">
					<div class="col-md-12"><h2>Thêm dịch vụ</h2></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form  action="<?php echo URL_BASE;?>?controller=admin&action=home&pages=addService"  method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Tên dịch vụ(*)</span></div>
										<div class="col-md-5"><input type="text" name="txtNameService" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Tiêu đề dịch vụ(*)</span></div>
										<div class="col-md-9"><input type="text" name="txtTitle" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Ảnh(*)</span></div>
										<div class="col-md-1"><input type="file" name="imgfile[]" multiple="true"></div>
									</div>	
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Nội dung(*)</span></div>
										<div class="col-md-9"><textarea type="text" id="contentService" name="contentService" class="form-control"></textarea></div>
										<script type="text/javascript">
											CKEDITOR.replace("contentService");
										</script>
									</div>						
								</div>
							</div>	
								
								</div>
							<div class="row" style="margin-left: 50px;"><div class="col-md-12"><input type="submit" name="submitAddService" class="btn btn-success" value="Thêm mới"></div></div>
						</form>
					</div>
				</div>
					
				<?php }} ?>
				
				<?php 
					if(isset($_GET['pages'])){
						if($_GET['pages']=='addService'){
							if(isset($_POST['submitAddService'])){
								$imgFile = $_FILES['imgfile'];
								$fName = $imgFile['name'];
								$fType = $imgFile['type'];
								$fSize = $imgFile['size'];
								$fTmpname = $imgFile['tmp_name'];
								$fError = $imgFile['error'];
								for ($i=0; $i < count($imgFile['name']) ; $i++){
									move_uploaded_file($fTmpname[$i],"assets/images/".$fName[$i]);
								}
								$name = $_POST['txtNameService'];
								$tt = $_POST['txtTitle'];
								$ct = $_POST['contentService'];
								$img = implode(';',$fName);

								if (Services::add($name,$tt,$img,$ct)) {
									header("location:?controller=admin&action=home&pages=addService");
								}else{
									header("location:?controller=admin&action=home&pages=addService");
								}
							}
						}
					}
				 ?>

				 <!-- Dịch vụ theo id -->
			<?php
					$user = new Services();
					if(isset($_GET['pages'])&&isset($_GET['id'])){
						$item = $user->getServiceById($_GET['id']);
						$imgitem = explode(';', $item['image']);
						// echo "<pre>";
						// print_r($imgitem);
						if($_GET['pages']=='services'){
							if(isset($_POST['btnNewservice'])){
									$imgFile = $_FILES['imgfile'];
									$fName = $imgFile['name'];
									$fType = $imgFile['type'];
									$fSize = $imgFile['size'];
									$fTmpname = $imgFile['tmp_name'];
									$fError = $imgFile['error'];
									for ($i=0; $i < count($imgFile['name']) ; $i++){
										move_uploaded_file($fTmpname[$i],"assets/images/".$fName[$i]);
									}
									$img = implode(';',$fName);
									$id = $_POST['txtNewid'];
									$name = $_POST['txtNameService'];
									$tt = $_POST['txtTitle'];
									$ct = $_POST['txtContent'];
									if(empty($img)){
										$img = $item['image'];
									}
									if($user->update($id,$name,$tt,$img,$ct)==true){
										header("location:?controller=admin&action=home&pages=services&id=".$item['serviceid']);
									}else{
										header("location:?controller=admin&action=home&pages=services&id=".$item['serviceid']);
									}

							}

				?>
					<h4>Dịch vụ <?php echo $item['name']?> </h4>
					<form style="padding-left:60px;" action="<?php echo URL_BASE;?>?controller=admin&action=home&pages=services&id=<?php echo $item['serviceid']; ?>" method="post" enctype="multipart/form-data">
						<table>
							<tr>
								<td>Mã dịch vụ</td>
								<td>
									<input style="width:520px;padding:5px;margin-top:10px;" type="text" name="txtNewid" id="txtNewid" value="<?php echo $item['serviceid'];?>">
								</td>
							</tr>
							<tr>
								<td>Tên dịch vụ</td>
								<td>
									<input style="width:520px;padding:5px;margin-top:10px;" type="text" name="txtNameService" id="txtNameService" value="<?php echo $item['name'];?>">
								</td>
							</tr>
							<tr>
								<td>Tiêu đề</td>
								<td>
									<input style="width:520px;padding:5px;margin-top:10px;" type="text" name="txtTitle" id="txtTitle" value="<?php echo $item['title'];?>">
								</td>
							</tr>
							<tr>
								<td>Ảnh</td>
								<td class="row">
									<input style="width:520px;padding:5px;margin-top:10px;padding-left: 15px;" type="file" name="imgfile[]" id="imgfile" multiple="true" >
								</td>
							</tr>
							<tr>
								<td></td>
								<td class="row">
									<?php
									if(count($imgitem)>0){	
										foreach ($imgitem as $key => $value) {
											echo '<div class="col-md-4">';
											echo '<img src="'.URL_BASE.'assets/images/'. $value.'" style="height: 90px; width: 150px;">';
											echo '</div>';
									}}
									?>
								</td>
							</tr>
							<tr>
								<td><span>Nội dung:</span></td>
								<td>
									<textarea type="text" id="txtContent" name="txtContent" class="form-control"><?php echo $item['content'];?></textarea>
									<script type="text/javascript">
									CKEDITOR.replace("txtContent");
								</script>
								</td>
							</tr>
							<tr>
								<td style="width:120px;"></td>
								<td>
									<input style="margin-top:10px;" class="btn btn-info" type="submit" name="btnNewservice" value="Chỉnh sửa">
									<button style="margin-top:10px;" class="btn btn-danger"><a style="color: white;" href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=RemoveService&id=<?php echo $item['serviceid']; ?>">Xóa Dịch vụ</a></button>
								</td>
							</tr>
						</table>
					</form>
					
				<?php
				}
				}
				?>
<!-- Xóa dịch vụ -->
			<?php if (isset($_GET['pages']) && !isset($_GET['accept'])) { if($_GET['pages'] == 'RemoveService'){ ?>
					
					 <script type="text/javascript">
						if (confirm('Bạn chắc chắn muốn xóa dịch vụ này?')) {
							location.replace("<?php echo URL_BASE;?>?controller=admin&action=home&pages=RemoveService&id=<?php echo $_GET['id']; ?>&pages=RemoveService&accept=true");
						}else{
							location.replace("<?php echo URL_BASE;?>?controller=admin&action=home&pages=RemoveService&id=<?php echo $_GET['id']; ?>");
						}
					</script>
			<?php }} ?>
			
			<?php if (isset($_GET['accept'])) { if($_GET['pages'] == 'RemoveService'){ ?>
				<?php 
					if (isset($_GET['id'])) {
						if (Services::delete($_GET['id'])) {

							header("location:?controller=admin&action=home");
						}else{
							header("location:?controller=admin&action=home");
						}
					}else {
						header("location:?controller=admin&action=home");
					}
				?>
			<?php }} ?>
<!-- Hiển thị thong tin khách hàng -->
			<?php if (isset($_GET['pages'])&&$_GET['pages']=='customer') { ?>
				<div class="row">
					<h4 style="padding-top: 40px;">Danh sách khách hàng</h4>
					<table class="table table-striped table-borderd">
						<tr>
							<th>Mã khách hàng</th>
							<th>Họ & Tên</th>
							<th>Điện thoại</th>
							<th>Email</th>
							<th>Địa chỉ</th>
							<th>Thành phố</th>
							<th>Kiểu tài khoản</th>
							<th>Tình trạng khách hàng</th>
							<th>Lịch sử dùng dịch vụ</th>
						</tr>
						<?php 
							$customer = Customers::getAll();
							foreach ($customer as $key => $value) {
						 ?>
							<tr>
								<td style="text-align: center;"><?php echo $value['customersid']; ?></td>
								<td style="text-align: center;"><?php echo $value['contactname']; ?></td>
								<td><?php echo $value['phone']; ?></td>
								<td><?php echo $value['email']; ?></td>
								<td><?php echo $value['address']; ?></td>
								<td style="text-align: center;"><?php echo $value['city']; ?></td>
								<td><?php echo $value['type']; ?></td>
								<td style="text-align: center;">
									<?php
										$coutServices = Services::getOderService($value['customersid']);
										// echo '<pre>';
										// print_r($coutServices);
										if(count($coutServices)>=3){
											echo '<button class="btn btn-danger" style="background:red;color:white;">Thân Thiết</button>';
										}
									?>
								</td>
								<td style="text-align: center;"><a class="btn btn-danger" style="background:red;color:white;" href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=history&cusid=<?php echo $value['customersid']; ?>">Lịch sử</a></td>
							</tr>
						<?php } ?>
					</table>
					<div><b>Chú ý:</b> Tình trạng <span style="color: red; font-family: italic;font-weight: bold;">Khách Hàng Thân Thiết</span> sử dụng dịch vụ từ 3 lần trở lên</div>
				</div>
			<?php } ?>
<!-- lịch sử khách hàng -->
			<?php if (isset($_GET['pages'])&&$_GET['pages']=='history') { ?>
				<div class="row">
					<?php 
						$customer = Customers::getCustomersById($_GET['cusid']);
						$history = Customers::getHistoryById($_GET['cusid']);
						// echo '<pre>';
						// print_r($history);
					 ?> 
					<h5 style="padding-top: 40px;line-height: 30px;"><b style="padding: 20px;">Lịch Sử Dụng Dịch Vụ</b> <br> Khách hàng: <?php echo $customer['contactname']; ?></h5>
					<table class="table table-striped table-borderd">
						<tr>
							<th>Thứ tự</th>
							<th>Mã đơn</th>
							<th>Ngày tháng</th>
							<th>Thông tin xe</th>
							<th>Chi tiết dịch vụ</th>
						</tr>
						<?php 
							$orderservices = Orderservices::getByCusID($customer['customersid']);
							$tt = count($orderservices);
							foreach ($orderservices as $key => $value) {
								$namecustomer = Customers::getCustomersById($value['customersid']);
								$history = Customers::getHistoryById($value['customersid']);
						 ?>
							<tr>
								<td style="text-align: center;"><?php echo $tt; ?></td>
								<td style="text-align: center;"><?php echo $value['orderserviceid']; ?></td>
								<td style="text-align: center;"><?php echo date('d/m/Y H:i:s',strtotime($value['booktime'])); ?></td>
								<td style="text-align: center;"><?php echo $value['namecar']; ?></td>
								<td style="margin: 0px auto;"><ul><?php 
									foreach ($history as $k => $v) {
										if($v['orderserviceid']==$value['orderserviceid']){
											echo '<li>'.$v['name'].'</li>';
										}
									}
								?></ul></td>
							</tr>
						<?php 
						$tt = $tt-1;
						} 
						?>
					</table>
				</div>
			<?php } ?>
<!-- Hiển thị thong tin đơn đặt dịch vụ -->
			<?php if (isset($_GET['pages'])&&$_GET['pages']=='orderservices') { ?>
				<div class="row">
					<?php 
						$orderservices = Orderservices::getAllDesc();
					 ?>
					<h4 style="padding-top: 40px;">Danh Sách Đặt Dịch Vụ</h4>
					<table class="table table-striped table-borderd">
						<tr>
							<th>Thứ tự</th>
							<th>Mã đơn</th>
							<th>Ngày</th>
							<th>Tên khách hàng</th>
							<th>Thông tin xe</th>
							<th>Chi tiết dịch vụ</th>
							<th>Ghi chú</th>
						</tr>
						<?php 
							// echo '<pre>';
							// print_r($orderservices);
							$neworder = 1;
							$tt = count($orderservices);
							foreach ($orderservices as $key => $value) {
								$namecustomer = Customers::getCustomersById($value['customersid']);
								$history = Customers::getHistoryById($value['customersid']);
						 ?>
							<tr>
								<td style="text-align: center;"><?php echo $tt; ?></td>
								<td style="text-align: center;"><?php echo $value['orderserviceid'];
									if($neworder<4){
										echo '<span style="color:red;">(Mới)</span>';
									}
								 ?></td>
								<td style="text-align: center;"><?php echo date('d/m/Y H:i:s',strtotime($value['booktime'])); ?></td>
								<td style="text-align: center;"><?php echo $namecustomer['contactname']; ?></td>
								<td style="text-align: center;"><?php echo $value['namecar']; ?></td>
								<td style="margin: 0px auto;"><ul><?php 
									foreach ($history as $k => $v) {
										if($v['orderserviceid']==$value['orderserviceid']){
											echo '<li>'.$v['name'].'</li>';
										}
									}
								?></ul></td>
								<td><?php echo $value['statuscar']; ?></td>
							</tr>
						<?php $tt = $tt-1;$neworder = $neworder + 1;} ?>
					</table>
				</div>
			<?php } ?>
<!-- Tin tức -->
			<?php 
				if (isset($_GET['pages'])) { if ($_GET['pages'] == 'news') {
			 ?>
			 	<div class="row" style="margin-bottom: 10px;">
					<div class="col-md-6" style="text-align: left;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=addnews"  class="btn btn-outline-info">Thêm tin tức</a></div>
				</div>
				
				<div class="row">
					<table class="table table-striped table-borderd">
						<tr>
							<th>Mã tin tức</th>
							<th>Ảnh</th>
							<th>Tiêu đề</th>
							<th>Tóm tắt</th>
							<th>Nội dung</th>
							<th>Ngày tháng năm</th>
							<th colspan="1">Chức năng</th>
						</tr>
						<?php 
							$news = News::getAll();
							foreach ($news as $key => $value) { $arrImg = explode(";", $value['image']);
						 ?>
							<tr>
								<td><?php echo $value['newsid']; ?></td>
								<td>
									<?php for ($i=0; $i < sizeof($arrImg); $i++) { ?>
										<img style="width: 100px;height: 70px;" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[$i];?>">
									<?php } ?>
								</td>
								<td><?php echo $value['title']; ?></td>
								<td><?php echo $value['summary']; ?></td>
								<td><?php echo $value['content']; ?></td>
								<td><?php echo date("d/m/Y", strtotime($value['newsdate'])); ?></td>
								<td><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=editnews&newsid=<?php echo $value['newsid']; ?>" class="btn btn-outline-info"><i class="far fa-edit"></i></a><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=removenews&newsid=<?php echo $value['newsid']; ?>" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a></td>
								
							</tr>
						<?php } ?>
					</table>
				</div>
			<?php }} ?>
<!-- Thêm tin tức -->
			<?php 
				if (isset($_GET['pages']) ) { if ($_GET['pages'] == 'addnews') {
			 ?>
			 	<div class="row" style="margin-bottom: 30px;">
					<div class="col-md-12"><h4>Thêm tin tức</h4></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form  action="<?php echo URL_BASE;?>?controller=admin&action=home&pages=addnews"  method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Tiêu đề(*)</span></div>
										<div class="col-md-9"><input type="text" name="title" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Tóm tắt(*)</span></div>
										<div class="col-md-9"><input type="text" name="summary" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Ảnh(*)</span></div>
										<div class="col-md-9"><input type="file" name="imgFile[]" multiple="true"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Ngày tháng năm(*)</span></div>
										<div class="col-md-4">
											<input id="datepicker1" type="text" name="newsdate" class="form-control">
											<script>
										        $('#datepicker1').datepicker({
										            uiLibrary: 'bootstrap4'
										        });
										    </script>
										</div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Nội dung(*)</span></div>
										<div class="col-md-9">
											<textarea type="text" name="contentNews" class="form-control" placeholder="Nội dung tin tức..."></textarea>
										</div>
										<script type="text/javascript">
											CKEDITOR.replace("contentNews");
										</script>
									</div>
															
								</div>
							</div>
							<div class="row" style="margin-left: 50px;"><div class="col-md-12"><input type="submit" name="submitAddNews" class="btn btn-success" value="Thêm mới"></div></div>
						</form>
					</div>
				</div>
			<?php }} ?>
			<?php 
				if (isset($_GET['pages'])) {
					if ($_GET['pages'] == 'addnews') {
						if (isset($_POST['submitAddNews'])) {
							$imgFile = $_FILES['imgFile'];
							$fName = $imgFile['name'];
							$fType = $imgFile['type'];
							$fSize = $imgFile['size'];
							$fTmpname = $imgFile['tmp_name'];
							$fError = $imgFile['error'];
							for ($i=0; $i < count($imgFile['name']) ; $i++){
								move_uploaded_file($fTmpname[$i],"assets/images/".$fName[$i]);
							}

							$title = $_POST['title'];
							$summary = $_POST['summary'];
							$newsdate = date("Y-m-d", strtotime( $_POST['newsdate']));
							$content = $_POST['contentNews'];
							$images = implode(';',$fName);
							if (News::addNews($title,$summary,$content,$images,$newsdate)) {
								header("location:?controller=admin&action=home&pages=news");
							}
						}
					}
				}
			 ?>
<!-- Sửa tin tức -->

			<?php 
		 		if (isset($_GET['pages']) && isset($_GET['newsid'])) {
		 				if ($_GET['pages'] == 'editnews' && $_GET['newsid'] !="") {
		 					$newsid = $_GET['newsid'];
		 					$new = News::getNewsById($newsid);
		 					$imgitem = explode(';', $new['image']);
		 				}
		 					

		 			}	
		 	 ?>
		 	 <?php
		 	 if (isset($_GET['pages']) && isset($_GET['newsid'])) {
		 	 	if ($_GET['pages'] == 'editnews'){
			 	  if (isset($_POST['submitEditNews'])) {
			 	  			$newsid = $_GET['newsid'];
			 	  			$imgFile = $_FILES['imgFile'];
							$fName = $imgFile['name'];
							$fType = $imgFile['type'];
							$fSize = $imgFile['size'];
							$fTmpname = $imgFile['tmp_name'];
							$fError = $imgFile['error'];
							for ($i=0; $i < count($imgFile['name']) ; $i++){
								move_uploaded_file($fTmpname[$i],"assets/images/".$fName[$i]);
							}

							$title = $_POST['title'];
							$summary = $_POST['summary'];
							$newsdate = date("Y-m-d", strtotime( $_POST['newsdate']));
							$content = $_POST['contentNews'];
							$images = implode(';',$fName);
						if (empty($images)) {
							$images = $new['image'];
						}
						if (News::editNews($newsid,$title,$summary,$content,$images,$newsdate)) {

							header("location:?controller=admin&action=home&pages=news");
						}
					}
				}
			}
		 	 ?>

			<?php 
				if (isset($_GET['pages'])) { if ($_GET['pages'] == 'editnews') {
			 ?>
			 	<div class="row" style="margin-bottom: 30px;">
					<div class="col-md-12"><h4>Sửa tin tức</h4></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form  action="<?php echo URL_BASE;?>?controller=admin&action=home&pages=editnews&newsid=<?php echo $new['newsid']; ?>"  method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Tiêu đề(*)</span></div>
										<div class="col-md-9"><input type="text" name="title" value="<?php echo $new['title']; ?>" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Tóm tắt(*)</span></div>
										<div class="col-md-9"><input type="text" name="summary" value="<?php echo $new['summary']; ?>" class="form-control"></div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Ảnh(*)</span></div>
										<div class="col-md-9"><input type="file" name="imgFile[]" multiple="true"></div>				
									</div>
									<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-9">
											<div class="row">
												<?php
													if(count($imgitem)>0){	
														foreach ($imgitem as $key => $value) {
															echo '<div class="col-md-2">';
															echo '<img src="'.URL_BASE.'assets/images/'.$value.'" style="height: 90px; width: 150px;">';
															echo '</div>';
													}}
												?>
											</div>
										</div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Ngày tháng năm(*)</span></div>
										<div class="col-md-4">
											<input id="datepicker1" type="text" name="newsdate" value="<?php echo date("d/m/Y", strtotime($new['newsdate'])); ?>" class="form-control">
											<script>
										        $('#datepicker1').datepicker({
										            uiLibrary: 'bootstrap4'
										        });
										    </script>
										</div>
									</div>
									<div class="row" style="margin-bottom: 15px;">
										<div class="col-md-2" style="text-align: right;"><span>Nội dung(*)</span></div>
										<div class="col-md-9">
											<textarea type="text" name="contentNews" class="form-control" placeholder="Nội dung tin tức..."><?php echo $new['content']; ?></textarea>
										</div>
										<script type="text/javascript">
											CKEDITOR.replace("contentNews");
										</script>
									</div>
															
								</div>
							</div>
							<div class="row" style="margin-left: 50px;"><div class="col-md-12"><input type="submit" name="submitEditNews" class="btn btn-success" value="Cập nhật"></div></div>
						</form>
					</div>
				</div>
			<?php }} ?>
<!-- Xóa tin tức -->
			<?php if (isset($_GET['pages']) && !isset($_GET['accept'])) { if($_GET['pages'] == 'removenews'){ ?>
					 <script type="text/javascript">
						if (confirm('Bạn chắc chắn muốn xóa dịch vụ này?')) {
							location.replace("<?php echo URL_BASE;?>?controller=admin&action=home&pages=removenews&newsid=<?php echo $_GET['newsid']; ?>&pages=removenews&accept=true");
						}else{
							location.replace("<?php echo URL_BASE;?>?controller=admin&action=home&pages=news");
						}
					</script>
			<?php }} ?>
			
			<?php if (isset($_GET['accept'])) { if($_GET['pages'] == 'removenews'){ ?>
				<?php 
					if (isset($_GET['newsid'])) {
						if (News::removeNews($_GET['newsid'])) {

							header("location:?controller=admin&action=home&pages=news");
						}else{
							header("location:?controller=admin&action=home&pages=news");
						}
					}else {
						header("location:?controller=admin&action=home&pages=news");
					}
				?>
			<?php }} ?>

<!-- Hiển thị danh sách liên hệ -->
			<?php 
				if (isset($_GET['pages'])) { if ($_GET['pages'] == 'contacts') {
			 ?>
			 	<div class="row" style="margin-bottom: 30px;">
					<div class="col-md-12"><h4>Danh sách liên hệ</h4></div>
				</div>
				<?php 
					$contacts = new Contact();
					$listcontacts = $contacts->getAll();
					$thutu = 0;
				 ?>
				<div class="row">
					<table class="table table-striped table-borderd">
						<tr>
							<th>Thứ tự</th>
							<th>Mã liên hệ</th>
							<th>Họ và tên</th>
							<th>Điện thoại</th>
							<th>Email</th>
							<th>Địa chỉ</th>
							<th>Nội dung</th>
							<th>Thời gian gửi</th>
						</tr>
						<?php foreach ($listcontacts as $key => $value) { ?>
							<tr>
								<td style="text-align: center;"><?php echo $thutu + 1; ?></td>
								<td style="text-align: center;"><?php echo $value['contactid']; ?></td>
								<td style="text-align: center;"><?php echo $value['fullname']; ?></td>
								<td style="text-align: center;"><?php echo $value['phone']; ?></td>
								<td style="text-align: center;"><?php echo $value['email']; ?></td>
								<td style="text-align: center;"><?php echo $value['address']; ?></td>
								<td ><?php echo $value['content']; ?></td>
								<td style="text-align: center;"><?php echo date('d/m/Y H:i:s',strtotime($value['datetime'])); ?></td>
							</tr>
						<?php $thutu++;} ?>
					</table>
				</div>
			<?php }} ?>
<!-- Giới thiệu -->
			<?php 
				if (isset($_GET['pages'])) { if ($_GET['pages'] == 'introduces') {
			 ?>

			<?php }} ?>
<!-- Thêm giới thiệu -->
			<?php 
				if (isset($_GET['pages'])) { if ($_GET['pages'] == 'addintroduces') {
			 ?>

			<?php }} ?>
<!-- Sửa giới thiệu -->
			<?php 
				if (isset($_GET['pages'])) { if ($_GET['pages'] == 'editintroduce') {
			 ?>

			<?php }} ?>
<!-- Đặt xe -->
			<?php 
				if (isset($_GET['pages'])) { if ($_GET['pages'] == 'ordercars') {
			 ?>
			 	<div class="row" style="margin-bottom: 30px;">
					<div class="col-md-12"><h4>Danh sách đặt lái thử xe</h4></div>
				</div>
				<?php 
					$ordercars = new Ordercars();
					$listorder = $ordercars->getAll();
					$thutu = 0;
				 ?>
				<div class="row">
					<table class="table table-striped table-borderd">
						<tr>
							<th>Thứ tự</th>
							<th>Mã đơn đặt</th>
							<th>Ngày lãi thử</th>
							<th>Tên khách hàng</th>
							<th>Thông tin xe</th>
							<th>Ghi chú</th>
							<th>Trạng thái đơn</th>
							<th>Chuyển trạng thái</th>
						</tr>
						<?php 
							foreach ($listorder as $key => $value) { 
								$customer = Customers::getCustomersById($value['customersid']);
								$car = Cars::getCarById($value['carid']);
						?>
							<tr>
								<td style="text-align: center;"><?php echo $thutu + 1; ?></td>
								<td style="text-align: center;"><?php echo $value['ordercarid']; ?></td>
								<td style="text-align: center;"><?php echo date('d/m/Y H:i:s',strtotime($value['booktime'])); ?></td>
								<td style="text-align: center;"><?php echo $customer['contactname']; ?></td>
								<td ><?php echo $car['name']; ?></td>
								<td ><?php echo $value['note']; ?></td>
								<?php if ($value['status'] == "Chưa lái thử") { ?>
									<td style="color: #e60000;"><?php echo $value['status']; ?></td>
								<?php }else{ ?>
									<td style="color: green;"><?php echo $value['status']; ?></td>
								<?php } ?>
								<td style="text-align: center;"><a href="<?php echo URL_BASE;?>?controller=admin&action=home&pages=editstatus&ordercarid=<?php echo $value['ordercarid']; ?>" class="btn btn-outline-info"><i class="far fa-edit"></i></a></td>
							</tr>
						<?php $thutu++;} ?>
					</table>
				</div>
				<div class="row">
					<div class="col-md-12">
						<span >Chú ý: </span><span style="color: #e60000;">Chức năng chuyển trang thái sử dụng khi khách hàng đã lái thử xe ("Chưa lái thừ" -> "Đã lái thử")</span>
					</div>
				</div>
			<?php }} ?>
<!-- Chuyển trạng thái đơn đặt xe -->
			 <?php 
			 	if (isset($_GET['pages']) && isset($_GET['ordercarid'])) {
		 	 		if ($_GET['pages'] == 'editstatus'){
			  ?>
			  <?php 
			  	if (isset($_POST['submiteditstatus'])) {
			  		$status = $_POST['status'];
			  		$ordercarid = $_GET['ordercarid'];
			  		if (Ordercars::editStatus($ordercarid,$status)) {
			  			header("location:http://localhost:82/?controller=admin&action=home&pages=ordercars");
			  		}else{
			  			echo "<div class='alert alert-danger'>Chuyển trạng thái thất bại!</div>";
			  		}
			  	}
			   ?>
			<?php }} ?>

			<?php 
				if (isset($_GET['pages'])) { if ($_GET['pages'] == 'editstatus') {
					if (isset($_GET['ordercarid'])) {
						$ordercar = Ordercars::getOrdercarById($_GET['ordercarid']);
					}
			 ?>
			  <div class="row">
			  	<div class="col-md-12"><h4>Chuyển trạng thái - mã đơn: <?php echo $_GET['ordercarid']; ?></h4></div>
			  </div>
			  <div class="row">
			  	<div class="col-md-12">
			  		<form action="<?php echo URL_BASE;?>?controller=admin&action=home&pages=editstatus&ordercarid=<?php echo $ordercar['ordercarid']; ?>" method="post"> 
			  			<div class="row" style="margin-top: 10px;">
			  				<div class="col-md-12">
			  					<?php if ($ordercar['status'] == "Chưa lái thử") { ?>
			  						<input type="radio" name="status" id="status" value="Chưa lái thử" checked="checked">&nbsp;Chưa lái thử&nbsp;&nbsp;&nbsp;
			  						<input type="radio" name="status" id="status" value="Đã lái thử" >&nbsp;Đã lái thử
			  					<?php }else{ ?>
			  						<input type="radio" name="status" id="status" value="Chưa lái thử">&nbsp;Chưa lái thử&nbsp;&nbsp;&nbsp;
									<input type="radio" name="status" id="status" value="Đã lái thử" checked="checked">&nbsp;Đã lái thử
								<?php } ?>
			  				</div>
			  			</div>
			  			<div class="row" style="margin-top: 15px;">
			  				<div class="col-md-12">
			  					<input type="submit" name="submiteditstatus" value="Lưu lại" class="btn btn-success">
			  				</div>
			  			</div>
			  		</form>
			  	</div>
			  </div>
			 <?php }} ?>
			
		</div>
	</div>
</div>