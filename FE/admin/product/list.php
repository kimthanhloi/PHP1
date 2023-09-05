<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
   

    <div class="container main">

        <h3 style="display: inline-block;">

            Danh Sách Sản Phẩm 
        </h3>
        <div class="login_admin">
            <a href="/index.php?pages=product&action=add">
                <button type="button" class="btn btn-primary btn-login">Thêm +</button>
            </a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Hình Ảnh</th>
                    <th style="width: 30%;">Sản Phẩm</th>
                    <th>Thể Loại</th>
                    <th>Mô Tả</th>
                    <th>Đơn Giá</th>
                    <th>Số Lượng</th>
                    <th>Màu</th>
                    <th>Kích Thước</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $select = mysqli_query($conn,'SELECT  p.id as id,
                        p.name as nameP,
                        p.money as price,
                        p.quantity as quantity,
                        p.img as img,
                        c.name as nameC,
                        p.describe as describeS,
                        p.color as color,
                        p.size as size
                        from products p, category c
                        where p.category_id = c.id ') ;
                        // kiểm tra mảng lớn hơn 0
                        if(mysqli_num_rows($select)>0){                                    
                            while( $data  = mysqli_fetch_assoc($select) ){
                                ?>
                <tr>
                    <td>
                    <img style="width: 80px;" src="./admin/img/<?php echo $data['img']  ?>" alt="">

                    </td>
                    <td>
                        <?=   $data['nameP'] ?>
                    </td>
                    <td>
                    <?=  $data['nameC'] ?>
                    </td>
                    <td>
                        <?=   $data['describeS'] ?>
                    </td>
                    <td>
                        
                        <?=   number_format($data['price'], 0, ",", ".") ?>
                    </td>
                    <td>
                        <?=   $data['quantity'] ?>
                    </td>
                    <td>
                    <?php if($data['color'] ==1) {
                        echo 'Trắng';
                    }else if($data['color'] ==2){
                        echo 'Đen';
                    }else if($data['color'] ==3){
                        echo 'Xám';
                    }else if($data['color'] ==4){
                        echo 'Nâu';
                    }?>
                    </td>
                    <td>
                    <?php if($data['size'] ==1) {
                        echo '36';
                    }else if($data['size'] ==2){
                        echo '37';
                    }else if($data['size'] ==3){
                        echo '38';
                    }else if($data['size'] ==4){
                        echo '39';
                    }else if($data['size'] ==5){
                        echo '40';
                    }else if($data['size'] ==6){
                        echo '41';
                    }?>
                    </td>
                    <td>
                        <a href="/index.php?pages=product&action=edit&id=<?php echo $data["id"]?>"
                            class="btn btn-dark" ><img
                                src='./admin/img/edit-1-svgrepo-com.svg'></a>
                        <a class="btn btn-danger"
                            href="/index.php?pages=product&action=delete&id=<?php echo $data["id"]?>"
                            ><img src='./admin/img/delete-2-svgrepo-com.svg'></a>
                    </td>
                </tr>
                <?php
                            }
                        }
                        ?>       
            </tbody>
        </table>
      
     
       
    </div>

   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>