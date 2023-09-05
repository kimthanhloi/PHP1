<?php ob_start() ?>
<?php 
    if(!empty($_GET['id'])){
        $userid = $_GET['id'] ; 
        $spl = "SELECT * FROM category where id= '$userid' " ; 
        $result =  mysqli_query($conn, $spl) ;
         
         $row =  mysqli_fetch_assoc($result) ;
        
    }


?>
<?php 
    if(isset($_POST['updateUser'])){
        $userid = $_GET['id'] ;    
        $username = $_POST["uname"] ;
        $note = $_POST["note"] ;
       

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $update_at = date('Y-m-d H:i:s');

        //  $date = date('Y-m-d H:i:s'); // lấy thời gian hiện tại 
        
        $spl = "UPDATE category SET name = '$username',note= '$note',
         update_at='$update_at'  where id = '$userid'" ; 
       
        $result =  mysqli_query($conn, $spl) ;
       if($result){
        Header('Location: /index.php?pages=product_category&action=list');
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

            <div class="form-group">
                <label for="uname">Tên Loại:</label>
                <input type="text" class="form-control" id="uname" 
                value="<?php echo  $row["name"] ?>"
                placeholder="Enter Loại" name="uname" required />
                <div class="valid-feedback">Hợp Lệ.</div>
                <div class="invalid-feedback">Vui Lòng Nhập.</div>
            </div>
            <div class="form-group">
                <label for="note">Ghi Chú:</label>
                <input type="text"
                value="<?php echo  $row["note"] ?>"
                class="form-control" id="note" placeholder="Enter ghi chú" name="note"
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
            <button type="submit" class="btn btn-primary" name="updateUser">Thêm Sản Phẩm</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>
<?php ob_end_flush(); ?>