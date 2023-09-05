<?php 
   if(isset($_POST["addUser"])){
        $usernmae = $_POST["usernmae"] ;
        $phone = $_POST["phone"] ;
        $address = $_POST["address"] ;
        $tinh = $_POST["tinh"] ;
        $quan = $_POST["quan"] ;
        $total = $_POST["total"] ;
        $phuong = $_POST["phuong"] ;
        $user_id = $_POST["user_id"] ;
       
        if(!empty($usernmae) && !empty($phone)  && !empty($address)
        && !empty($tinh)&& !empty($quan) && !empty($phuong)){
            $sql = "INSERT INTO user_order(username,phone,address,tinh,quan,phuong,total,user_id) VALUES 
            ('$usernmae', '$phone','$address','$tinh','$quan','$phuong','$total','$user_id')";
            if(mysqli_query($conn,$sql)){
                Header('Location: /index.php?pages=user_order&action=list');
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
            <div class="col-md-12 col-m-12">
                <label for="validationServer01" class="form-label">Họ Tên:</label>
                <input type="text" name="usernmae" class="form-control is-valid" id="validationServer01" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer01" class="form-label">Tổng Tiền:</label>
                <input type="text" name="total" class="form-control is-valid" id="validationServer01" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">SĐT: </label>
                <input type="text" name="phone" class="form-control is-valid" id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <labe for="validationServer02" class="form-label">Địa Chỉ: </labe>
                <input type="text" name="address" class="form-control is-valid" id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">Tỉnh: </label>
                <select class="form-select" id="provinceOptions" name="tinh">
                    <option value="">-- Chọn tỉnh --</option>
                    <option value="70">TP Hồ Chí Minh</option>
                    <option value="90">TP Cần Thơ</option>
                    <option value="81">Đồng Nai</option>
                    <option value="82">Bình Dương</option>
                    <option value="83">Bình Phước</option>
                    <option value="84">Tây Ninh</option>
                    <option value="85">Long An</option>
                    <option value="86">Tiền Giang</option>
                    <option value="87">Đồng Tháp</option>
                    <option value="79">Bà Rịa Vũng Tàu</option>
                    <option value="80">Bình Thuận</option>
                    <option value="88">An Giang</option>
                    <option value="89">Vĩnh Long</option>
                    <option value="91">Hậu Giang</option>
                    <option value="92">Kiên Giang</option>
                    <option value="93">Bến Tre</option>
                    <option value="94">Trà Vinh</option>
                    <option value="95">Sóc Trăng</option>
                    <option value="96">Bạc Liêu</option>
                    <option value="97">Cà Mau</option>
                    <option value="67">Lâm Đồng</option>
                    <option value="66">Ninh Thuận</option>
                    <option value="65">Khánh Hoà</option>
                    <option value="64">Đắk Nông</option>
                    <option value="63">Đắk Lăk</option>
                    <option value="62">Phú Yên</option>
                    <option value="60">Gia Lai</option>
                    <option value="59">Bình Định</option>
                    <option value="58">Kon Tum</option>
                    <option value="10"> TP Hà Nội</option>
                    <option value="16">Hưng Yên</option>
                    <option value="17">Hải Dương</option>
                    <option value="18"> TP Hải Phòng</option>
                    <option value="20">Quảng Ninh</option>
                    <option value="22">Bắc Ninh</option>
                    <option value="23">Bắc Giang</option>
                    <option value="24">Lạng Sơn</option>
                    <option value="25">Thái Nguyên</option>
                    <option value="26">Bắc Kạn</option>
                    <option value="27">Cao Bằng</option>
                    <option value="28">Vĩnh Phúc</option>
                    <option value="29">Phú Thọ</option>
                    <option value="30">Tuyên Quang</option>
                    <option value="31">Hà Giang</option>
                    <option value="32">Yên Bái</option>
                    <option value="33">Lào Cai</option>
                    <option value="35">Hoà Bình</option>
                    <option value="36">Sơn La</option>
                    <option value="38">Điện Biên</option>
                    <option value="39">Lai Châu</option>
                    <option value="40">Hà Nam</option>
                    <option value="41">Thái Bình</option>
                    <option value="42">Nam Định</option>
                    <option value="43">Ninh Bình</option>
                    <option value="44">Thanh Hoá</option>
                    <option value="46">Nghệ An</option>
                    <option value="48">Hà Tĩnh</option>
                    <option value="51">Quảng Bình</option>
                    <option value="52">Quảng Trị</option>
                    <option value="53">Thừa Thiên Huế</option>
                    <option value="55">TP Đà Nẵng</option>
                    <option value="56">Quảng Nam</option>
                    <option value="57">Quảng Ngãi</option>
                </select>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">Quận: </label>
                <select class="form-select" id="districtSelect" name="quan">
                    <option value="">--Chọn Quận/huyện--</option>
                    <option value="1">Quận 1</option>
                    <option value="2">Quận 2</option>
                    <option value="3">Quận 3</option>
                    <option value="4">Quận 4</option>
                    <option value="5">Quận 5</option>
                    <option value="6">Quận 6</option>
                    <option value="7">Quận 7</option>
                    <option value="8">Quận 8</option>
                    <option value="9">Quận 9</option>
                    <option value="10">Quận 10</option>
                </select>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">Phường: </label>
                <select class="form-select" id="ward" name="phuong">
                    <option value="">--Chọn Phường--</option>
                    <option value="1">phường 1</option>
                    <option value="2">phường 2</option>
                    <option value="3">phường 3</option>
                    <option value="4">phường 4</option>
                    <option value="5">phường 5</option>
                    <option value="6">phường 6</option>
                    <option value="7">phường 7</option>
                    <option value="8">phường 8</option>
                    <option value="9">phường 9</option>
                    <option value="10">phường 10</option>
                </select>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label"> danh sách người dùng : </label>
                <select class="form-select" id="ward" name="user_id">
                    <?php 
                    $query = mysqli_query($conn,'SELECT * FROM users');
                    if(mysqli_num_rows($query)>0){
                        while($data  = mysqli_fetch_assoc($query)){
                                ?>
                    <option value="<?= $data['id']  ?>">
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
                <button class="btn btn-primary" name="addUser" type="submit">Thêm Mới</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>