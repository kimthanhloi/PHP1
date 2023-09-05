<?php 
    if(!empty($_GET['id'])){
        $userid = $_GET['id'] ; 
        $spl = "SELECT * FROM user_order where id= '$userid' " ; 
        $result =  mysqli_query($conn, $spl) ;
         $row =  mysqli_fetch_assoc($result) ;
    }
?>
<?php 
    if(isset($_POST['updateUser'])){
        $userid = $_GET['id'] ;    
        $usernmae = $_POST["usernmae"] ;
        $phone = $_POST["phone"] ;
        $address = $_POST["address"] ;
        $tinh = $_POST["tinh"] ;
        $quan = $_POST["quan"] ;
        $phuong = $_POST["phuong"] ;
        $user_id = $_POST["user_id"] ;
        $total = $_POST["total"] ;
        
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $update_at = date('Y-m-d H:i:s');

        $spl = "UPDATE user_order SET username = '$usernmae',phone= '$phone', `address` = '$address',total='$total'
        ,quan = '$quan' , updated_at='$update_at' , tinh='$tinh' , phuong='$phuong', user_id = '$user_id' where id = '$userid'" ; 
       
        $result =  mysqli_query($conn, $spl) ;
       if($result){
        Header('Location: /index.php?pages=user_order&action=list');
       }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
            <div class="col-md-12 col-m-12">
                <label for="validationServer01" class="form-label">Họ Tên:</label>
                <input type="text" name="usernmae" value="<?php echo $row['username'] ?>" class="form-control is-valid"
                    id="validationServer01" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">tổng tiền: </label>
                <input type="text" value="<?php echo $row['total'] ?>"
                readonly
                name="total" class="form-control is-valid"
                    id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">SĐT: </label>
                <input type="text" value="<?php echo $row['phone'] ?>" name="phone" class="form-control is-valid"
                    id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <labe for="validationServer02" class="form-label">Địa Chỉ: </labe>
                <input type="text" name="address" value="<?php echo $row['address'] ?>" class="form-control is-valid"
                    id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">Tỉnh: </label>
                <select class="form-select" id="provinceOptions" name="tinh">
                    <option value=""> <?php if ($row['tinh'] == 0) {
                        echo 'selected';
                    } ?>-- Chọn tỉnh --</option>
                    <option value="70" <?php if ($row['tinh'] == 70) {
                        echo 'selected';
                    } ?>>TP Hồ Chí Minh</option>
                    <option value="90" <?php if ($row['tinh'] == 90) {
                        echo 'selected';
                    } ?>>TP Cần Thơ</option>
                    <option value="81" <?php if ($row['tinh'] == 81) {
                        echo 'selected';
                    } ?>>Đồng Nai</option>
                    <option value="82" <?php if ($row['tinh'] == 82) {
                        echo 'selected';
                    } ?>>Bình Dương</option>
                    <option value="83" <?php if ($row['tinh'] == 83) {
                        echo 'selected';
                    } ?>>Bình Phước</option>
                    <option value="84" <?php if ($row['tinh'] == 84) {
                        echo 'selected';
                    } ?>>Tây Ninh</option>
                    <option value="85" <?php if ($row['tinh'] == 85) {
                        echo 'selected';
                    } ?>>Long An</option>
                    <option value="86" <?php if ($row['tinh'] == 86) {
                        echo 'selected';
                    } ?>>Tiền Giang</option>
                    <option value="87" <?php if ($row['tinh'] == 87) {
                        echo 'selected';
                    } ?>>Đồng Tháp</option>
                    <option value="79" <?php if ($row['tinh'] == 79) {
                        echo 'selected';
                    } ?>>Bà Rịa Vũng Tàu</option>
                    <option value="80" <?php if ($row['tinh'] == 80) {
                        echo 'selected';
                    } ?>>Bình Thuận</option>
                    <option value="88" <?php if ($row['tinh'] == 88) {
                        echo 'selected';
                    } ?>>An Giang</option>
                    <option value="89" <?php if ($row['tinh'] == 89) {
                        echo 'selected';
                    } ?>>Vĩnh Long</option>
                    <option value="91" <?php if ($row['tinh'] ==91) {
                        echo 'selected';
                    } ?>>Hậu Giang</option>
                    <option value="92" <?php if ($row['tinh'] == 92) {
                        echo 'selected';
                    } ?>>Kiên Giang</option>
                    <option value="93" <?php if ($row['tinh'] == 93) {
                        echo 'selected';
                    } ?>>Bến Tre</option>
                    <option value="94" <?php if ($row['tinh'] == 94) {
                        echo 'selected';
                    } ?>>Trà Vinh</option>
                    <option value="95" <?php if ($row['tinh'] == 95) {
                        echo 'selected';
                    } ?>>Sóc Trăng</option>
                    <option value="96" <?php if ($row['tinh'] == 96) {
                        echo 'selected';
                    } ?>>Bạc Liêu</option>
                    <option value="97" <?php if ($row['tinh'] == 97) {
                        echo 'selected';
                    } ?>>Cà Mau</option>
                    <option value="67" <?php if ($row['tinh'] == 67) {
                        echo 'selected';
                    } ?>>Lâm Đồng</option>
                    <option value="66" <?php if ($row['tinh'] == 66) {
                        echo 'selected';
                    } ?>>Ninh Thuận</option>
                    <option value="65" <?php if ($row['tinh'] == 65) {
                        echo 'selected';
                    } ?>>Khánh Hoà</option>
                    <option value="64" <?php if ($row['tinh'] == 64) {
                        echo 'selected';
                    } ?>>Đắk Nông</option>
                    <option value="63" <?php if ($row['tinh'] == 63) {
                        echo 'selected';
                    } ?>>Đắk Lăk</option>
                    <option value="62" <?php if ($row['tinh'] == 62) {
                        echo 'selected';
                    } ?>>Phú Yên</option>
                    <option value="60" <?php if ($row['tinh'] == 60) {
                        echo 'selected';
                    } ?>>Gia Lai</option>
                    <option value="59" <?php if ($row['tinh'] == 59) {
                        echo 'selected';
                    } ?>>Bình Định</option>
                    <option value="58" <?php if ($row['tinh'] == 58) {
                        echo 'selected';
                    } ?>>Kon Tum</option>
                    <option value="10" <?php if ($row['tinh'] == 10) {
                        echo 'selected';
                    } ?>> TP Hà Nội</option>
                    <option value="16" <?php if ($row['tinh'] == 16) {
                        echo 'selected';
                    } ?>>Hưng Yên</option>
                    <option value="17" <?php if ($row['tinh'] == 17) {
                        echo 'selected';
                    } ?>>Hải Dương</option>
                    <option value="18" <?php if ($row['tinh'] == 18) {
                        echo 'selected';
                    } ?>> TP Hải Phòng</option>
                    <option value="20" <?php if ($row['tinh'] == 20) {
                        echo 'selected';
                    } ?>>Quảng Ninh</option>
                    <option value="22" <?php if ($row['tinh'] == 22) {
                        echo 'selected';
                    } ?>>Bắc Ninh</option>
                    <option value="23" <?php if ($row['tinh'] == 23) {
                        echo 'selected';
                    } ?>>Bắc Giang</option>
                    <option value="24" <?php if ($row['tinh'] == 24) {
                        echo 'selected';
                    } ?>>Lạng Sơn</option>
                    <option value="25" <?php if ($row['tinh'] == 25) {
                        echo 'selected';
                    } ?>>Thái Nguyên</option>
                    <option value="26" <?php if ($row['tinh'] == 26) {
                        echo 'selected';
                    } ?>>Bắc Kạn</option>
                    <option value="27" <?php if ($row['tinh'] == 26) {
                        echo 'selected';
                    } ?>>Cao Bằng</option>
                    <option value="28" <?php if ($row['tinh'] == 28) {
                        echo 'selected';
                    } ?>>Vĩnh Phúc</option>
                    <option value="29" <?php if ($row['tinh'] == 29) {
                        echo 'selected';
                    } ?>>Phú Thọ</option>
                    <option value="30" <?php if ($row['tinh'] == 30) {
                        echo 'selected';
                    } ?>>Tuyên Quang</option>
                    <option value="31" <?php if ($row['tinh'] == 31) {
                        echo 'selected';
                    } ?>>Hà Giang</option>
                    <option value="32" <?php if ($row['tinh'] == 32) {
                        echo 'selected';
                    } ?>>Yên Bái</option>
                    <option value="33" <?php if ($row['tinh'] == 33) {
                        echo 'selected';
                    } ?>>Lào Cai</option>
                    <option value="35" <?php if ($row['tinh'] == 35) {
                        echo 'selected';
                    } ?>>Hoà Bình</option>
                    <option value="36" <?php if ($row['tinh'] == 36) {
                        echo 'selected';
                    } ?>>Sơn La</option>
                    <option value="38" <?php if ($row['tinh'] == 38) {
                        echo 'selected';
                    } ?>>Điện Biên</option>
                    <option value="39" <?php if ($row['tinh'] == 39) {
                        echo 'selected';
                    } ?>>Lai Châu</option>
                    <option value="40" <?php if ($row['tinh'] == 40) {
                        echo 'selected';
                    } ?>>Hà Nam</option>
                    <option value="41" <?php if ($row['tinh'] == 41) {
                        echo 'selected';
                    } ?>>Thái Bình</option>
                    <option value="42" <?php if ($row['tinh'] == 42) {
                        echo 'selected';
                    } ?>>Nam Định</option>
                    <option value="43" <?php if ($row['tinh'] == 43) {
                        echo 'selected';
                    } ?>>Ninh Bình</option>
                    <option value="44" <?php if ($row['tinh'] == 44) {
                        echo 'selected';
                    } ?>>Thanh Hoá</option>
                    <option value="46" <?php if ($row['tinh'] == 46) {
                        echo 'selected';
                    } ?>>Nghệ An</option>
                    <option value="48" <?php if ($row['tinh'] == 48) {
                        echo 'selected';
                    } ?>>Hà Tĩnh</option>
                    <option value="51" <?php if ($row['tinh'] == 51) {
                        echo 'selected';
                    } ?>>Quảng Bình</option>
                    <option value="52" <?php if ($row['tinh'] == 52) {
                        echo 'selected';
                    } ?>>Quảng Trị</option>
                    <option value="53" <?php if ($row['tinh'] == 53) {
                        echo 'selected';
                    } ?>>Thừa Thiên Huế</option>
                    <option value="55" <?php if ($row['tinh'] == 55) {
                        echo 'selected';
                    } ?>>TP Đà Nẵng</option>
                    <option value="56" <?php if ($row['tinh'] == 56) {
                        echo 'selected';
                    } ?>>Quảng Nam</option>
                    <option value="57" <?php if ($row['tinh'] == 57) {
                        echo 'selected';
                    } ?>>Quảng Ngãi</option>
                </select>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">Quận: </label>
                <select class="form-select" id="districtSelect" name="quan">
                    <option <?php if ($row['quan'] == 0) {
                        echo 'selected';
                    } ?> value="">--Chọn Quận/huyện--</option>
                    <option <?php if ($row['quan'] == 1) {
                        echo 'selected';
                    } ?> value="1">Quận 1</option>
                    <option <?php if ($row['quan'] == 2) {
                        echo 'selected';
                    } ?> value="2">Quận 2</option>
                    <option <?php if ($row['quan'] == 3) {
                        echo 'selected';
                    } ?> value="3">Quận 3</option>
                    <option <?php if ($row['quan'] == 4) {
                        echo 'selected';
                    } ?> value="4">Quận 4</option>
                    <option <?php if ($row['quan'] == 5) {
                        echo 'selected';
                    } ?> value="5">Quận 5</option>
                    <option <?php if ($row['quan'] == 6) {
                        echo 'selected';
                    } ?> value="6">Quận 6</option>
                    <option <?php if ($row['quan'] == 7) {
                        echo 'selected';
                    } ?> value="7">Quận 7</option>
                    <option <?php if ($row['quan'] == 8) {
                        echo 'selected';
                    } ?> value="8">Quận 8</option>
                    <option <?php if ($row['quan'] == 9) {
                        echo 'selected';
                    } ?> value="9">Quận 9</option>
                    <option <?php if ($row['quan'] == 10) {
                        echo 'selected';
                    } ?> value="10">Quận 10</option>
                </select>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">Phường: </label>
                <select class="form-select" id="ward" name="phuong">
                    <option <?php if ($row['phuong'] == 0) {
                        echo 'selected';
                    } ?> value="">--Chọn Phường--</option>
                    <option <?php if ($row['phuong'] == 1) {
                        echo 'selected';
                    } ?> value="1">phường 1</option>
                    <option <?php if ($row['phuong'] == 2) {
                        echo 'selected';
                    } ?> value="2">phường 2</option>
                    <option <?php if ($row['phuong'] == 3) {
                        echo 'selected';
                    } ?> value="3">phường 3</option>
                    <option <?php if ($row['phuong'] == 4) {
                        echo 'selected';
                    } ?> value="4">phường 4</option>
                    <option <?php if ($row['phuong'] == 5) {
                        echo 'selected';
                    } ?> value="5">phường 5</option>
                    <option <?php if ($row['phuong'] == 6) {
                        echo 'selected';
                    } ?> value="6">phường 6</option>
                    <option <?php if ($row['phuong'] == 7) {
                        echo 'selected';
                    } ?> value="7">phường 7</option>
                    <option <?php if ($row['phuong'] == 8) {
                        echo 'selected';
                    } ?> value="8">phường 8</option>
                    <option <?php if ($row['phuong'] == 9) {
                        echo 'selected';
                    } ?> value="9">phường 9</option>
                    <option <?php if ($row['phuong'] == 10) {
                        echo 'selected';
                    } ?> value="10">phường 10</option>
                </select>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label"> danh sách người dùng : </label>
                <select class="form-select" id="ward"  name="user_id">
                <?php 
                    $query = mysqli_query($conn,'SELECT * FROM users');
                    if(mysqli_num_rows($query)>0){
                        while($data  = mysqli_fetch_assoc($query)){
                            $selected = ($data['id'] == $row['user_id']) ? 'selected' : '';    
                                ?>
                            <option value="<?= $data['id']  ?>" <?= $selected ?>>
                            <?= $data['username']  ?>
                            </option>
                            <?php 
                        }
                    }

                    ?>
                        </select>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" name="updateUser" type="submit">Sửa</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>