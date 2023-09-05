<?php ob_start() ?>
<?php 
    if(!empty($_GET['id'])){
        $userid = $_GET['id'] ; 
        $spl = "SELECT * FROM products where id= '$userid' " ; 
        $result =  mysqli_query($conn, $spl) ;
         $row =  mysqli_fetch_assoc($result) ;
    }
?>
<?php 
   if(isset($_POST["updateproduct"])){
         $userid = $_GET['id'] ;   
        $name = $_POST["uname"] ;
        $category_id = $_POST["category_id"] ;
        $price = $_POST["price"] ;
        $quanlity = $_POST["quanlity"] ;
        $color = $_POST["color"] ;
        $img = $_POST["img"] ;
        $size = $_POST["size"] ;
        $describe = $_POST["describe"] ;
        if(!empty($name) && !empty($category_id)  && !empty($price)&&
        !empty($quanlity) && !empty($color)  && !empty($img) &&!empty($size)  
        ){
            $sql = "UPDATE products SET `name` = '$name' , `money` = '$price', quantity = '$quanlity',
            color = '$color' , size = '$size', category_id = '$category_id' , `describe` = '$describe' ,img = '$img' where id  = '$userid'";
          
            if(mysqli_query($conn,$sql)){
                Header('Location: /index.php?pages=product&action=list');
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }else{
            echo '<div class="alert alert-danger" role="alert">
                Thêm mới không thành công!
            </div>';
        }
    }
?>  

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
    <div class="main_login ">
        <form class="row g-3 was-validated" method="post">

            <div class="form-group">
                <label for="uname"> Tên Sản Phẩm:</label>
                <input type="text" class="form-control"
                value="<?= $row['name'] ?>"
                id="uname" placeholder="Enter username" name="uname" required />
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="img"> Ảnh :</label>
                <input type="file" class="form-control" id="img"
              
                placeholder="Enter username" name="img" required />
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="category_id">Loại:</label>
                <select class="form-select" name="category_id" required aria-label=".form-select-sm example">
                    <?php 
                    $query = mysqli_query($conn,'SELECT * FROM category');
                    if(mysqli_num_rows($query)>0){
                        while($data  = mysqli_fetch_assoc($query)){
                            $selected = ($data['id'] == $row['category_id']) ? 'selected' : '';
                                ?>
                            <option value="<?= $data['id']  ?>"  <?= $selected ?>>
                            <?= $data['name']  ?>
                            </option>
                            <?php 
                        }
                    }

                    ?>
                    <option value="1"></option>
                    
                </select>
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="price">Đơn Giá:</label>
                <input type="number" class="form-control"
                value="<?= $row['money'] ?>"
                id="price" placeholder="Enter price" name="price"
                    required  
                    min="1"/>
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="quanlity">Số Lượng:</label>
                <input type="text"
                value="<?= $row['quantity'] ?>"
                class="form-control" id="quanlity" placeholder="Enter password" name="quanlity" required />
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="color">Màu:</label>
                <select name="color" class="form-control">
                    <option value="1" <?php if($row['color'] == 1) {
                        echo 'selected';
                    }?> >Trắng</option>
                    <option value="2"  <?php if($row['color'] == 2) {
                        echo 'selected';
                    }?>>Đen </option>
                    <option value="3"  <?php if($row['color'] == 3) {
                        echo 'selected';
                    }?>>Xám </option>
                    <option value="4"  <?php if($row['color'] == 4) {
                        echo 'selected';
                    }?>>Nâu </option>

                </select>
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Số.</div>
            </div>
            <div class="form-group">
                <label for="size">Kích Thước:</label>
                <select name="size" class="form-control">
                    <option value="1" <?php if($row['size'] == 1) {
                        echo 'selected';
                    }?> >36</option>
                    <option value="2" <?php if($row['size'] == 2) {
                        echo 'selected';
                    }?> >37 </option>
                    <option value="3"<?php if($row['size'] == 3) {
                        echo 'selected';
                    }?> >38 </option>
                    <option value="4"<?php if($row['size'] == 4) {
                        echo 'selected';
                    }?> >39 </option>
                    <option value="5"<?php if($row['size'] == 5) {
                        echo 'selected';
                    }?> >40</option>
                    <option value="6"<?php if($row['size'] == 6) {
                        echo 'selected';
                    }?> >41 </option>

                </select>
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Số.</div>
            </div>
            <div class="form-group">
                <label for="describe">mô Tả:</label>
                <input type="text" class="form-control"
                value="<?= $row['describe'] ?>"
                id="describe" placeholder="Enter describe" name="describe" required />
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required />
                    tôi đồng ý với điều khoản trên
                    <div class="valid-feedback">Hợp Lệ.</div>
                    <div class="invalid-feedback">
                        check vào box để tiếp tục
                    </div>
                </label>
            </div>
          
            <button type="submit" class="btn btn-primary" name="updateproduct">Sửa Sản Phẩm</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>