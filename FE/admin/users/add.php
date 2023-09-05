
<?php 
   if(isset($_POST["addUser"])){
        $usernmae = $_POST["usernmae"] ;
        $userpassword = $_POST["userpassword"] ;
        $userEmail = $_POST["userEmail"] ;
        $role_id = $_POST["role_id"] ;
        $phone = $_POST["phone"] ;
       
        if(!empty($usernmae) && !empty($userpassword)  && !empty($userEmail)){
            $sql = "INSERT INTO users(username,password,email,role_id,phone ) VALUES 
            (' $usernmae', '$userpassword','$userEmail','$role_id','$phone')";
           
          
            if(mysqli_query($conn,$sql)){
                Header('Location: /index.php?pages=users&action=list');
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
                <label for="validationServer01" class="form-label">Tên Đăng Nhập:</label>
                <input type="text" class="form-control is-valid" name="usernmae" id="validationServer01" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>

            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">Mật Khẩu: </label>
                <input type="password" name="userpassword" class="form-control is-valid" id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-12 col-m-12">
                <label for="validationServer02" class="form-label">Email: </label>
                <input type="email" name="userEmail" class="form-control is-valid" id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-md-6">
                <label for="role_id" class="form-label">Phân quyền</label>
                <select class="form-select" name="role_id" required aria-label=".form-select-sm example">
                    <!-- <option>Vui lòng chọn loại người dùng</option> -->
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
            </div>
            <div class="col-md-6 col-m-12">
                <label for="phone" class="form-label">Số Điện Thoại: </label>
                <input type="text" class="form-control is-valid" name="phone" id="validationServer02" required>
                <div class="valid-feedback">
                    Xác Nhận
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="addUser">Thêm Mới</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>