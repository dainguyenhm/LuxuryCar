// Biến dùng kiểm tra nếu đang gửi ajax thì ko thực hiện gửi thêm
var is_busy = false;
    
// Biến lưu trữ trang hiện tại
var page = 1;

// Số record trên mỗi trang
var record_per_page = 3;

// Biến lưu trữ rạng thái phân trang 
var stopped = false;

$(document).ready(function()
{
    // Khi kéo scroll thì xử lý
    $('#load_more').click(function()
    {
        // Element append nội dung
        $element = $('#list-product');

        // ELement hiển thị chữ loadding
        $button = $(this);
        
        // Nếu đang gửi ajax thì ngưng
        if (is_busy == true) {
            return false;
        }
        
        // Tăng số trang lên 1
        page++;

        // Hiển thị loadding ...
        $button.html('Đang thêm...');

        // Gửi Ajax
        $.ajax(
        {
            type: 'get',
            dataType: 'json',
            url: 'http://localhost:82/views/product/home.php',
            data: {page: page},
            success: function(listCars)
            {
                var html = '';

                // Trường hợp hết dữ liệu cho trang kết tiếp
                if (listCars.length <= record_per_page)
                {
                    // Lặp dữ liêụ
                    $.each(listCars, function (key, obj){
                        html += '<div class="col-md-4 product">'
                                '<div class="product-item">'
                                    '<div class="img-product1">'
                                        '<a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo' obj.carid';?>">'
                                            '<img class="img-product-item1" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0];?>">'
                                        '</a>'
                                    '</div>'
                                    '<div>'
                                        '<a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo' obj.carid';?>">'
                                           ' <span style="font-weight: bold;color: black;margin-top:20px;margin-bottom:30px;"><?php echo' obj.name';?></span><br>'
                                        '</a>'
                                       ' <span style="color: red"><?php echo number_format('obj.price')."đ";?></span><br>'
                                        '<span class="inf-product"><?php echo "Nơi sản xuất: ".'obj.fromcar '; ?></span><br>'
                                        '<span class="inf-product"><?php echo "Động cơ: ".'obj.engine; '?></span><br>'
                                       ' <span class="inf-product">Số KM:</span><br>'
                                        '<span class="inf-product"><?php echo "Tình trạng xe: ".'obj.statuscar'; ?></span>'
                                   '</div>'
                                '</div>'
                            '</div>' ;
                    });

                    // Thêm dữ liệu vào danh sách
                    $element.append(html);

                    // Xóa button
                    $button.remove();
                }
                else{ // Trường hợp còn dữ liệu cho trang kế tiếp
                    // Lặp dữ liêụ, trường hợp này ta lặp bỏ đi phần record cuối cùng vì ta selec với limit + 1
                    $.each(listCars, function (key, obj){
                        if (key < listCars.length - 1){
                             html += '<div class="col-md-4 product">'
                                '<div class="product-item">'
                                    '<div class="img-product1">'
                                        '<a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo' obj.carid';?>">'
                                            '<img class="img-product-item1" src="<?php echo URL_BASE;?>assets/images/<?php echo $arrImg[0];?>">'
                                        '</a>'
                                    '</div>'
                                    '<div>'
                                        '<a href="<?php echo URL_BASE;?>?controller=product&action=get_product_by_id&id=<?php echo' obj.carid';?>">'
                                           ' <span style="font-weight: bold;color: black;margin-top:20px;margin-bottom:30px;"><?php echo' obj.name';?></span><br>'
                                        '</a>'
                                       ' <span style="color: red"><?php echo number_format('obj.price')."đ";?></span><br>'
                                        '<span class="inf-product"><?php echo "Nơi sản xuất: ".'obj.fromcar '; ?></span><br>'
                                        '<span class="inf-product"><?php echo "Động cơ: ".'obj.engine; '?></span><br>'
                                       ' <span class="inf-product">Số KM:</span><br>'
                                        '<span class="inf-product"><?php echo "Tình trạng xe: ".'obj.statuscar'; ?></span>'
                                   '</div>'
                                '</div>'
                            '</div>' ;
                        }
                    });

                    // Thêm dữ liệu vào danh sách
                    $element.append(html);
                }

            }
        })
        .always(function()
        {
            // Sau khi thực hiện xong thì đổi giá trị cho button
            $button.html('Xem thêm');
            is_busy = false;
        });

    });
});

