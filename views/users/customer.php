<?php
	session_start();
	$_SESSION['title'] = 'Trang cá nhân';
?>
<div class="content">
		<?php
			if(isset($_COOKIE['userid'])){
				$user = new Customers();
				$item = $user->getCustomersById($_COOKIE['userid']);
				$item1 = $user->getHistoryById($_COOKIE['userid']);
				// echo "<pre>";
				// print_r($item1);
			}else{
				header("location:?controller=users&action=login");
			}
		?>
		<div id="content" class="container-fluid" style="margin-bottom:50px; " >
			<div class="container-fluid" style="background: #f6f6f6;">
				<div class="container link-page" style="margin-top: 25px;">
					<a href="<?php echo URL_BASE;?>" class="index">Trang chủ</a>
					<span>&nbsp;&rsaquo;&nbsp;</span>
					<a href="<?php echo URL_BASE;?>?controller=users&action=login" class="index">Đăng nhập</a>
					<span>&nbsp;&rsaquo;&nbsp;</span>
					<a href="<?php echo URL_BASE;?>?controller=users&action=customer" class="title-page">Trang cá nhân</a>
				</div>
			</div>

			<div class="container">
				<div style="margin-top: 5px;">
					<?php
					if(isset($_SESSION['Status_update'])){
		                if($_SESSION['Status_update']==true){
		                    echo "<div class='alert alert-success'>Cập nhật thông tin thành công!</div>";
		                    unset($_SESSION['Status_update']);
		                }else{
		                    echo "<div class='alert alert-success'>Cập nhật thông tin thất bại!</div>";
		                    unset($_SESSION['Status_update']);
		                }
            		}
            		?>
				</div>
				<div class="row" style="margin-top: 30px; ">
					<div id="menu-profile" class="col-md-2" style=" background-color: #f8f9fa;">
						<div id="current-login" class="row">
							<div class="col-md-12">
								<span>Xin chào, <?php echo $item['contactname'];?></span>
							</div>
						</div>
						<div id="current-login" class="row">
							<div class="col-md-12">
								<span><img src="<?php echo URL_BASE;?>assets/images/verified-account.jpg"></span>
							</div>
						</div>
						<div class="row" style="margin-top: 15px; ">
							<div class="col-md-12">
								<ul>
									<li >
										<a href="<?php echo URL_BASE;?>?controller=users&action=customer" style="color: #e60000;">Quản lý tài khoản</a>
									</li>
									<li>
										<a href="<?php echo URL_BASE;?>?controller=users&action=history">Lịch sử của tôi</a>
									</li>
									<li><a href="#">Nhận xét của tôi</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-10">
						<div class="row">
							<div class="title-content-detail col-md-12">
								<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
								<span>QUẢN LÝ TÀI KHOẢN</span>
							</div>
						</div>
						<div class="row">
							<div class=" manage-account col-md-6">
								<div class="row">
									<div class="col-md-12">
										<span class="title-profile">Thông tin cá nhân</span>
										<span style="border-left: 1px solid #828282; padding-left: 5px;"><a href="<?php echo URL_BASE;?>?controller=users&action=update" style="font-size: 12px; color: #0056b3" title="Cập nhật thông tin">Chỉnh sửa</a></span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<ul style="padding-left: 30px;">
											<li><span><?php echo $item['contactname'];?></span></li>
											<li><span><?php echo $item['email'];?></span></li>
											<li><span>(+84) <?php echo $item['phone'];?></span></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="manage-account col-md-6">
								<div class="row">
									<div class="col-md-12" style="margin: 0px; padding: 0px;">
										<span class="title-profile">Số địa chỉ</span>
										<span style="border-left: 1px solid #828282; padding-left: 5px;"><a href="<?php echo URL_BASE;?>?controller=users&action=update" style="font-size: 12px; color: #0056b3" title="Cập nhật thông tin">Chỉnh sửa</a></span>
									</div>
									<div class="row">
										<div class="col-md-12">
											<ul style="padding-left: 30px;">
												<li><span style="font-size: 14px; color: #d0d2d4;">Địa chỉ đặt lịch mặc định</span></li>
												<li><span style="font-weight: bold;"><?php echo $item['contactname'];?></span></li>
												<li><span><?php echo $item['address'];?></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
							<div class="col-md-12">
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<span class="title-profile">Dịch vụ gần đây</span>
							</div>
						</div>
						<div class="row" style="margin-top: 15px;">
							<div class="col-md-12">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Mã đơn đặt</th>
											<th>Ngày đặt</th>
											<th>Tên xe</th>
											<th>Năm sản xuất</th>
											<th>Tình trạng xe</th>
											<th>Dịch vụ</th>
										</tr>
									</thead>
									<tbody class="thead-light">
										<?php
										$orderservices = Orderservices::getByCusID($_COOKIE['userid']);
										$lastkey = 0;
										$count = 1;
										foreach ($orderservices as $key => $value){
											$history = Customers::getHistoryById($value['customersid']);
											if($count==4){break;}
										?>
										<tr>
											<td style="text-align: center;"><?php echo $value['orderserviceid'];?></td>
											<td><?php echo date('d/m/Y H:i:s',strtotime($value['booktime']));?></td>
											<td><?php echo $value['namecar'];?></td>
											<td style="text-align: center;"><?php echo $value['yearcar'];?></td>
											<td><?php echo $value['statuscar'];?></td>
											<td style="margin: 0px auto;"><ul><?php 
												foreach ($item1 as $k => $v) {
													if($v['orderserviceid']==$value['orderserviceid']){
														echo '<li>'.$v['name'].'</li>';
													}
												}
											?></ul></td>
										</tr>
										<?php
										$count = $count+1;}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>