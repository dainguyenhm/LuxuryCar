<?php 
    $categorycarid = $cars['categorycarid'];
    $cat = new Categorycars();
    $name = $cat->getCategorycarsById($categorycarid);
 ?>
<?php 
    session_start();
    $_SESSION['title'] = $cars['name'];
 ?>
<script src="src/jquery.spritezoom.js"></script>
    <div id="content" class="container-fluid">
        <div class="container-fluid" style="background: #f6f6f6; margin-top: 25px;">
            
            <div class="container link-page">
                <a href="<?php echo URL_BASE;?>" class="index">Trang chủ</a>
                <span>&nbsp;&rsaquo;&nbsp;</span>
                <a href="<?php echo URL_BASE;?>?controller=product&action=get_AllProduct_by_catid&id=<?php echo $cars['categorycarid'] ?>" class="index"><?php echo "Xe ".$name['name'];?></a>
                <span>&nbsp;&rsaquo;&nbsp;</span>
                <a href="" class="title-page"><?php echo $cars['name']; ?></a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php  
                    $arrImg = explode(";", $cars['image']);
                ?>
                <div class="left-content-detail col-md-6" style="height:auto;">
                    <div class="slide-video" style="margin-bottom: 10px;">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_0"  aria-controls="tab_default_<?php echo $i+1;?>" role="tab" data-toggle="tab" aria-expanded="true">
                                <div class="row" style="padding: 0px;">
                                   <div class="col-sm-12 col-lg-12">
                                        <img style="width: 100%;height: 290px;" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0];?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php for($i=1;$i<sizeof($arrImg);$i++){ ?>
                            <div class="tab-pane" id="tab_default_<?php echo $i+1;?>"  aria-controls="tab_default_<?php echo $i+1;?>" role="tab" data-toggle="tab" aria-expanded="true">
                                <div class="row" style="padding: 0px;">
                                   <div class="col-sm-12 col-lg-12">
                                        <img style="width: 100%;height: 290px;" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[$i];?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="slide-image">
                            <div class="all-image"  style="margin-top: 10px;width: auto;">
                                <ul class="nav nav-tabs ">
                                    <li class="active" style="margin-right: 5px;">
                                            <a href="#tab_default_0" data-toggle="tab">
                                                <img class="thumbnail-vd" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0];?>" id="image" width="120px;" height="70px">
                                            </a>
                                        </li>
                                    <?php for($i=1;$i<sizeof($arrImg);$i++){ ?>
                                        <li style="margin-right: 5px;">
                                            <a href="#tab_default_<?php echo $i+1;?>" data-toggle="tab">
                                                <img class="thumbnail-vd" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[$i];?>" id="image" width="120px;" height="70px">
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-content-detail col-md-6">
                    <div class="title-footer" style="margin-bottom: 10px; ">
                        <img src="<?php echo URL_BASE;?>assets/images/vach_03.png">
                        <span><?php echo $cars['name'];?></span>
                    </div>
                    
                    <div class="inf-detail">
                        <div class="pirce-product"><?php echo number_format($cars['price']);?></div>
                        <ul class="info">
                            <li>
                                <span style="color: #212529;font-weight: bold;">Năm sản xuất</span>
                                <div class="title_info"><?php echo $cars['yearcar']; ?></div>
                            </li>
                            <li>
                                <span style="color: #212529;font-weight: bold;">Tình trạng xe</span>
                                <div class="title_info"><?php echo $cars['statuscar']; ?></div>
                            </li>
                            <li>
                                <span style="color: #212529;font-weight: bold;">Mã số xe</span>
                                <div class="title_info"><?php echo $cars['carid']; ?></div>
                            </li>
                        </ul>
                        <table class="table table-striped">
                            <tr>
                                <th scope="col">Xuất xứ </th>
                                <td><?php echo $cars['fromcar']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Model</th>
                                <td><?php echo $cars['model']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Ngoại thất</th>
                                <td><?php echo $cars['color']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Hộp số</th>
                                <td><?php echo $cars['transmission']; ?></td>
                            </tr>
                        </table>
                        <div style="width: 100%;height: auto;color: white;margin-top: 30px;margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?php echo URL_BASE;?>?controller=product&action=book_car_by_id&id=<?php echo $_GET['id']; ?>" class="btn btn-danger" role="button" title="Đặt ngay để sở hữu ngay chiếc xe này!!" style="padding-left: 20px;padding-right: 20px; padding-top: 10px;padding-bottom: 10px;">
                                         <span style="font-size: 20px;">ĐẶT XE</span><br>
                                        <span style="font-size: 15px;">(Đặt xe ngay để nhận nhiều ưu đãi)</span>
                                    </a>  
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-info" role="button" style="padding-left: 20px;padding-right: 20px; padding-top: 10px;padding-bottom: 10px;">
                                         <span style="font-size: 20px;"><i class="fas fa-phone"></i> NGHE TƯ VẤN</span><br>
                                        <span style="font-size: 15px;">Gọi ngay: 0999999999</span>
                                    </a>  
                                </div>
                            </div>
                            <div style="margin-top: 10px;">
                                <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=479519062835494&autoLogAppEvents=1"></script>
                                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dặc điểm nổi bật -->
            <div class="row" style="padding-left: 15px;" >
                <div id="inf-ighlights">Đặc điểm nổi bật</div>
            </div>
            <div class="row" style="padding-top: 20px;padding-left: 15px;padding-bottom: 20px;font-size: 15px;">
                <span>Đặc điểm nổi bật của &nbsp;</span>
                <span style="font-weight: bold;"><?php echo $cars['name']." ".$cars['yearcar']; ?></span>
            </div>
            <div style="border: 1px solid #eee;" >
                <div style="text-transform: uppercase;border-left: 3px solid #c30101; padding-left: 10px;font-size: 17px;margin-top: 15px;margin-bottom: 15px;">
                    Thông số kỹ thuật
                </div>
                <div>
                    <table class="table table-striped">
                            <tr>
                                <th scope="col">Kích thước</th>
                                <td><?php echo $cars['size']."(mm)"; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Chiều dài cơ sở</th>
                                <td><?php echo $cars['baselength']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Động cơ</th>
                                <td><?php echo $cars['engine']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Công suất cực đại</th>
                                <td><?php echo $cars['maxpower']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Dẫn động</th>
                                <td><?php echo $cars['drive']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Hộp số</th>
                                <td><?php echo $cars['transmission']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Tăng tốc</th>
                                <td><?php echo $cars['speedup']; ?></td>
                            </tr>
                            <tr>
                                <th scope="col">Vận tốc tối đa</th>
                                <td><?php echo $cars['maxspeed']; ?></td>
                            </tr>
                        </table>
                </div>
            </div>
            <div style="margin-top: 10px; margin-bottom: 20px;">
                    <a href="#boxnoidung" aria-expanded="false" data-toggle="collapse" class="btn btn-danger" style="background:#c30101; ">Đọc Thêm</a>
                    <div class="collapse mt-4" id="boxnoidung">
                        <div>
                            <!-- AAAAA -->
                            <?php echo $cars['description'] ?>
                            <a href="#boxnoidung" aria-expanded="false" data-toggle="collapse" class="btn btn-danger" style="background:#c30101; ">Rút gọn</a>
                            <!-- AAAAA -->
                        </div>
                    </div>
            </div>
            <!-- Sản phẩm tương tự -->
            <?php 
                   $carssame = Cars::getAllCarsSameByCategoryCarId($cars['categorycarid']);     
             ?>
            <div class="row" style="height: auto;margin-bottom: 30px;">
                <div id="inf-ighlights">Sản phẩm tương tự</div>
                <div style="border: 1px solid #eee;background: #F7F7F7;width: 100%;padding-top: 40px;padding: 20px;">
                    <div class="row" style="width: 100%;">
                        <?php foreach ($carssame as $key => $value) { $arrImg = explode(";", $value['image']);?>
                            <div class="col-md-3 product">
                                <div class="product-item">
                                    <div class="img-product">
                                        <a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo $value['carid']; ?>">
                                            <img class="img-product-item" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0] ?>">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo $value['carid']; ?>">
                                            <span style="font-weight: bold;color: black;margin-top:20px;margin-bottom:30px;"><?php echo $value['name'] ?></span><br>
                                        </a>
                                        <span style="color: red"><?php echo number_format($value['price']); ?> ₫</span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                
            </div>    
            <!--  -->
    </div>    
    
    <!-- end content -->