<?php ob_start() ?>
<?php 
    if(!empty($_GET['id'])){
        $userid = $_GET['id'] ; 
        $spl = "SELECT * FROM users where id= '$userid' " ; 
        $result =  mysqli_query($conn, $spl) ;
         $row =  mysqli_fetch_assoc($result) ;
    }
?>
<?php 
    if(isset($_POST['updateUser'])){
        $userid = $_GET['id'] ;    
        $username = $_POST["usernmae"] ;
        $password = $_POST["userpassword"] ;
        $userEmail = $_POST["userEmail"]; 
        $role_id = $_POST["role_id"]; 
        $phone = $_POST["phone"]; 
        $date = date('Y-m-d H:i:s'); // lấy thời gian hiện tại 
        
        $spl = "UPDATE users SET username = '$username',password= $password, email = '$userEmail',
         updated_at='$date' , role_id='$role_id' , phone='$phone'  where id = '$userid'" ; 
       
        $result =  mysqli_query($conn, $spl) ;
       if($result){
        Header('Location: /index.php?pages=users&action=list');
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
    <!-- <link rel="stylesheet" href="../css/admin.css"> -->
</head>

<body>
   
    
  
    <div class="main_login ">
        <form class="row g-3 was-validated" method="post">
            <div class="col-md-12 col-m-12">
                <label for="validationServer01" class="form-label">Tên Đăng Nhập:</label>
                <input type="text" class="form-control is-valid" 
                value="<?php echo  $row["username"] ?>"
                name="usernmae" id="validationServer01" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>

            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">Mật Khẩu: </label>
                <input type="password" name="userpassword"
                value="<?php echo  $row["password"] ?>"               
                class="form-control is-valid" id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">Email: </label>
                <input type="email" name="userEmail" 
                value="<?php echo  $row["email"] ?>"
                class="form-control is-valid" id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-6">
                <label for="role_id" class="form-label">Phân quyền</label>
                <select class="form-select" name="role_id" required aria-label=".form-select-sm example">
                    <option value="1" <?php if ($row['role_id'] == 1) {
                        echo 'selected';
                    } ?>>Admin</option>
                    <option value="2" <?php if ($row['role_id'] == 2) {
                        echo 'selected';
                    } ?>>User</option>
                </select>
            </div>
            <div class="col-md-6 col-m-12">
                <label for="phone" class="form-label">Số Điện Thoại: </label>
                <input type="text" class="form-control is-valid"
                value="<?php echo  $row["phone"] ?>"         
                name="phone" id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="updateUser">Sửa</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>