<?php
	session_start();
	$_SESSION['title'] = 'Trang lịch sửs';
?>
<div class="container-fluid">
	<div class="content">
		<?php
			if(isset($_COOKIE['userid'])){
				$user = new Customers();
				$item = $user->getCustomersById($_COOKIE['userid']);
				$item1 = $user->getHistoryById($_COOKIE['userid']);
				// echo "<pre>";
				// print_r($item1);
				$countservices = count($item1);
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
										<a href="<?php echo URL_BASE;?>?controller=users&action=customer">Quản lý tài khoản</a>
									</li>
									<li><a href="<?php echo URL_BASE;?>?controller=users&action=history" style="color: #e60000;">Lịch sử của tôi</a></li>
									<li><a href="#">Nhận xét của tôi</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-10">
						<div class="row">
							<div class="title-content-detail col-md-12">
								<img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
								<span>Lịch sử của tôi</span>
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-12">
								<hr>
							</div>
						</div>
						<div class="row" >
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<span>Đã trải nghiệm</span>
									</div>
								</div>
								<div class="row" style="margin-top: 10px;">	
									<table class="table table-hover">
									<thead>
										<tr>
											<th>Thứ tự</th>
											<th>Mã đơn đặt</th>
											<th>Ngày đặt</th>
											<th>Tên xe</th>
											<th>Năm sản xuất</th>
											<th>Tình trạng xe</th>
											<th style="text-align: center;">Dịch vụ</th>
										</tr>
									</thead>
									<tbody class="thead-light">
										<?php
										$orderservices = Orderservices::getByCusID($_COOKIE['userid']);
										$count = count($orderservices);
										foreach ($orderservices as $key => $value){
										?>
										<tr>
											<td style="text-align: center;"><?php echo $count;?></td>
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
										$count = $count-1;}
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
	</div>
</div>