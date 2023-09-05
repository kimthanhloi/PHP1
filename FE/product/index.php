<?php
   session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWC</title>
    
</head>

<body>
    <div class="container">
        <section>
            <div class="banner">
                <img src="../admin/img/Banner_sale_14.2_(02).jpg" alt="" />
            </div>
        </section>
        <section>
            <article>
                <div class="container">
                    <p class="container_title">Giày Cao Gót Nữ</p>
                    <div class="grid wide">
                        <div class="row" id="product_print1">
                            <?php 
                          
                            $slq ='SELECT * FROM products where category_id = 2 ';
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
                        <a href="./html/giaynu.php" class="seenall_product">XEM TẤT CẢ</a>
                    </div>
                </div>
            </article>
            <article>
                <div class="container">
                    <p class="container_title">BALO THỜI TRANG</p>
                    <div class="grid wide">
                        <div class="row" id="product_print2">
                        <?php 
                         
                            $slq ='SELECT * FROM products where category_id = 3 ';
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
            </article>
            <article>
                <div class="container">
                    <p class="container_title">GIÀY NAM</p>
                    <div class="grid wide">
                        <div class="row" id="product_print3">

                        <?php 
                     
                            $slq ='SELECT * FROM products where category_id = 1 ';
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
                                            <div class="price">  
                                                
                                            <?=    number_format($data['money'], 0, ",", ".") ?>đ</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <?php
                                } ;
                            }
                            ?>
                        </div>
                        <a href="./html/giaynam.php" class="seenall_product">XEM TẤT CẢ</a>
                    </div>
                </div>
            </article>
        </section>
      <!-- cart -->
        <section>
          <!-- ft -->
        </section>
    </div>


    <!-- mobi nav -->
  


    <script src="./js/index.js"></script>
</body>

</html>