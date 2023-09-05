<?php ob_start() ?>
<?php 
   if(isset($_POST["addUser"])){
        $name = $_POST["uname"] ;
        $pswd = $_POST["pswd"] ;
        $userEmail = $_POST["userEmail"] ;
        if(!empty($name) && !empty($pswd)  && !empty($userEmail)){
            $sql = "INSERT INTO user_admin(username,password,email ) VALUES 
            ('$name', '$pswd','$userEmail')";
            echo $sql;
          
            if(mysqli_query($conn,$sql)){
                Header('Location: /index.php?pages=user_admin&action=list');
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
                <label for="uname">user Name:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required />
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="pwd">password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"
                    required />
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email" class="form-control" id="userEmail" placeholder="Enter password" name="userEmail"
                    required />
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
<?php ob_end_flush(); ?>