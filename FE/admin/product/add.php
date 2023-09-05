<?php ob_start() ?>
<?php 
   if(isset($_POST["addUser"])){
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
            $sql = "INSERT INTO products(name,money,quantity,color,size,category_id,`describe`,img  ) VALUES 
            ('$name', '$price','$quanlity','$color','$size','$category_id','$describe','$img')";
            echo $sql;
          
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
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required />
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="img"> Ảnh :</label>
                <input type="file" class="form-control" id="img" placeholder="Enter username" name="img" required />
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
                                ?>
                            <option value="<?= $data['id']  ?>">
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
                <input type="number" class="form-control" id="price" placeholder="Enter price" name="price"
                min="1"   
                required />
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="quanlity">Số Lượng:</label>
                <input type="text" class="form-control" id="quanlity" placeholder="Enter số lượng" name="quanlity" required />
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="color">Màu:</label>
                <select name="color" class="form-control">
                    <option value="1">Trắng</option>
                    <option value="2">Đen </option>
                    <option value="3">Xám </option>
                    <option value="4">Nâu </option>

                </select>
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Số.</div>
            </div>
            <div class="form-group">
                <label for="size">Kích Thước:</label>
                <select name="size" class="form-control">
                    <option value="1">36</option>
                    <option value="2">37 </option>
                    <option value="3">38 </option>
                    <option value="4">39 </option>
                    <option value="5"> 40</option>
                    <option value="6">41 </option>

                </select>
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Số.</div>
            </div>
            <div class="form-group">
                <label for="describe">mô Tả:</label>
                <input type="text" class="form-control" id="describe" placeholder="Enter describe" name="describe" required />
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
          
            <button type="submit" class="btn btn-primary" name="addUser">Thêm Sản Phẩm</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>