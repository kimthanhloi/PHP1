<?php

    session_start();

    $userid = $_GET['id'] ; 
    $spl = "SELECT * FROM products where id= '$userid' " ; 
    $result =  mysqli_query($conn, $spl) ;
     $row =  mysqli_fetch_assoc($result) ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MWC</title>

    <!-- link css -->
</head>

<body>
    <div class="container">

      
        <section class="main_product_details">
            <article class="grid ">
                <div class="row">
                   
                    <?php 
                          
                          $id = $_GET['id'];
                          $slq ="SELECT * FROM products where id = '$id' ";
                          $select = mysqli_query($conn,  $slq);
                          if (mysqli_num_rows($select) > 0) {
                              
                              while ($data = mysqli_fetch_assoc($select)){
                                  ?>
              <form class="form_chitiet"  action="/index.php?pages=product_detail&action=giohang&id=<?= $data['id'] ?>" method="post" style="display: flex;">
                    <div class="col l-6 m-6 c-12">
                        <div class="img">
                            <div class="product_details product_details-box-img">

                                <img class="product_details_img" src="../../admin/img/<?= $data['img'] ?>" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="col l-6 m-6 c-12 border_bt">
                        <div class="product_details">

                            <div class="product_details-item" style="  text-align: none !important;">
                                <h1>
                                    <?= $data['name'] ?>

                                </h1>
                                <div class="product_details-feedback">
                                    <div class="icon">
                                        <i class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <div class="feedback">
                                        <span>1014</span>
                                        <span>Đánh Giá</span>
                                    </div>
                                    <div class="feedbacklike">
                                        <span>890</span>
                                        <span>số lượng Thích</span>
                                    </div>
                                </div>
                                <div class="product_details-price">
                                    <span><?= 
                                     number_format($data['money'], 0, ",", ".")
                                    ?>đ</span>

                                </div>
                                <div class="product_details-color">
                                    <span>Màu</span>

                                    <img   class="product_details-color-white active_item_size"
                                        src="./product/img/whitenau.jpg" alt="">
                                    <img class="product_details-color-white " src="./product/img/black.jpg" alt="">
                                </div>
                                <div class="product_details-size">
                                    <span>Kích Thước</span>
                                    <div class="product_details-size-item">
                                        <span class="item_size active_item_size">34</span>
                                        <span class="item_size ">35</span>
                                        <span class="item_size ">36</span>
                                        <span class="item_size ">37</span>
                                        <span class="item_size ">38</span>
                                    </div>
                                </div>
                                <div class="product_details-buy">
                                    <button type="submit" 
                                    name="addgiohang"
                                    style="border: none; cursor: pointer; color:white;"> 
                                    <div class="product_details-btn-buy">
                                            Giỏ Hàng
                                        </div>
                                    </button>
                                    <!-- hidden value -->
                                    <input type="hidden" name="img" value="<?= $data['img'] ?>">
                                    <input type="hidden" name="name" value="<?= $data['name'] ?>">
                                    <input type="hidden" name="money" value="<?= $data['money'] ?>">
                                    <input type="hidden" id="size" name="size" value="<?= $data['size'] ?>">
                                    <input type="hidden" id="color" name="color" value="<?= $data['color'] ?>">

                                    <div class="product_details-btn-buycard">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        Xem Thông Tin Chi Tiết Sản Phẩm
                                    </div>
                                </div>
                                <div class="product_details-contact">
                                    <div class="product_details-contact-item">
                                        <img src="https://img.mwc.com.vn/files/Icon/icon3.jpg" alt="">
                                        <p>Bảo hành keo vĩnh viễn
                                        </p>
                                    </div>
                                    <div class="product_details-contact-item">
                                        <img src="https://img.mwc.com.vn/files/Icon/icon4.jpg" alt="">
                                        <p>Miễn phí vận chuyển toàn quốc
                                            cho đơn hàng từ 150k</p>
                                    </div>
                                    <div class="product_details-contact-item">
                                        <img src="https://img.mwc.com.vn/files/Icon/icon5.jpg" alt="">
                                        <p>Đổi trả dễ dàng
                                            (trong vòng 7 ngày nếu lỗi nhà sản xuất)</p>
                                    </div>
                                </div>
                                <div class="product_details-contact">
                                    <div class="product_details-contact-item">
                                        <img src="https://img.mwc.com.vn/files/Icon/icon2.jpg" alt="">
                                        <p>Hotline 1900.633.349
                                            hỗ trợ từ 8h30-21h30
                                        </p>
                                    </div>
                                    <div class="product_details-contact-item">
                                        <img src="https://img.mwc.com.vn/files/Icon/icon1.jpg" alt="">
                                        <p>Giao hàng tận nơi,
                                            nhận hàng xong thanh toán</p>
                                    </div>
                                    <div class="product_details-contact-item">
                                        <img src="https://img.mwc.com.vn/files/Icon/icon3.jpg" alt="">
                                        <p>Ưu đãi tích điểm và
                                            hưởng quyền lợi thành viên từ MWC</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <?php
                                } ;
                            }
                            ?>
                       </form>     
                </div>
            </article>
        </section>

        <!-- sp liên quan  -->
        <section>
        <div class="container">
                    <p class="container_title">Sản Phẩm Liên Quan</p>
                    <div class="grid wide">
                        <div class="row" id="product_print2">
                        <?php 
                            
                            $slq ="SELECT * FROM products where category_id = ".$row['category_id'];
                            $select = mysqli_query($conn,  $slq);
                            if (mysqli_num_rows($select) > 0) {
                                
                                while ($data = mysqli_fetch_assoc($select)){
                                    ?>
                            <div class="col l-3 m-6 c-12">
                                <div class="item_product">
                                    <a href="/index.php?pages=product_detail&action=chitiet&id=<?= $data['id'] ?>" class="item_product_img">
                                        <img src="../admin/img/<?= $data['img'] ?>" alt="" />
                                    </a>
                                    <a href="/index.php?pages=product_detail&action=chitiet" class="item_product_content">
                                        <div class="item_product_detail">
                                            <p class="title">
                                            <?= $data['name'] ?>
                                            </p>
                                            <div class="price">  <?=    number_format($data['money'], 0, ",", ".") ?>đ</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <?php
                                } ;
                            }
                            ?>


                        </div>
                        <a href="./html/balo.php" class="seenall_product">XEM TẤT CẢ</a>
                    </div>
                </div>
        </section>
        
    </div>
    <section>
        <!-- ft -->
    </section>
    </div>
    <script type="text/javascript" src="../js/chitietsanpham.js" defer></script>




</body>

</html>