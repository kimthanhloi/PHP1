<?php 
   
   session_start();
 
  
   if(isset($_POST["addUser"])){
        $usernmae = $_POST["username"] ;
        $userpassword = $_POST["userpassword"] ;
        $userEmail = $_POST["userEmail"] ;
       
        $phone = $_POST["userPhone"] ;
       
        if(!empty($usernmae) && !empty($userpassword)  && !empty($userEmail)){
            $sql = "INSERT INTO users(username,password,email,phone,role_id ) VALUES 
            ('$usernmae', '$userpassword','$userEmail','$phone',1)";
           
          
            if(mysqli_query($conn,$sql)){
                // thêm id mới nhất vào cuối mảng  
                $message = "Đăng Kí Thành Công" ;
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }else{
             $message_error ='đăng ký thất bại';
        }
    }
    // đăng nhập
    if(isset($_POST['loginuser'])){
        $name = $_POST["user_name"] ?? "" ;
        $password = $_POST["user_password"] ?? "";
    
        if (!isset($_SESSION['dangky'])) {
            $_SESSION['dangky'] = [];
            }
          
           
        if(!empty($name) && !empty($password)){
            $query = "SELECT * FROM users WHERE username = '$name' and password = '$password'"; 
            $result = mysqli_query($conn,$query) ;
            if($result){          
                if(mysqli_num_rows($result)===1){
                    $user_data = mysqli_fetch_assoc($result) ; 
                     // echo $id ;
                array_push($_SESSION['dangky'],$user_data['id']);
                $array = [
                    "id" => $user_data['id'] ?? "", 
                    "name" => $name ??""  
                ];
                $_SESSION["dangky"] = $array ; 
                   if($password === $user_data["password"]){
              
                    
                    Header('Location: /index.php?pages=product_detail&action=giohang');
                    }else{
                        $message_login ="Đăng Nhập không đúng tài khoản" ;
            
                        }
                }
            }else{
            $message_login ="Đăng Nhập Không Thành Công" ;

            }
            
        } else{
            $message_login ="Đăng Nhập Không Thành Công" ;
        }
    }
  
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
        <!-- header -->

        <!-- login -->
        <section class="login_page">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-6 m-6 c-12">
                        <div class="container_login">

                            <form action="" method="post">
                                <div class="form_ground_login">
                                    <label for="" class="login_title">
                                        ĐĂNG NHẬP
                                    </label>
                                </div>
                                <div class="form_ground_login">
                                    <label for="user_name">Tên Đăng Nhập <span>*</span> </label>
                                    <input type="text" name="user_name" class="user_name">
                                    <span class="mess-login"></span>
                                </div>
                                <div class="form_ground_login">
                                    <label for="">Mật Khẩu <span>*</span></label>
                                    <input type="password" name="user_password" class="user_password">
                                    <span class="mess-login-password"></span>
                                    <br>
                                    <?= $message_login ?? "" ?>
                                </div>
                                <div class="form_ground_login">
                                    <button type="submit" name="loginuser" class="submid_login">Đăng Nhập</button>
                                </div>
                            </form>
                            <div class="container_login_note">
                                <p>Nếu Quý khách có vấn đề gì thắc mắc hoặc cần hỗ trợ gì thêm có thể liên hệ:</p>
                                <p>Hotline: 0967 027 393</p>
                                <p>
                                    Hoặc Inbox Facebook

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-6 m-6 c-12">
                        <div class="containee_register">
                            <form method="post">
                                <div class="form_ground_register">
                                    <div class="register_title">
                                        ĐĂNG KÝ
                                    </div>
                                </div>
                                <div class="form_ground_register">
                                    <label for="username">Tên Đăng Nhập <span>*</span></label>
                                    <input  type="text" name="username" id="username">
                                    <span class="mess-username"></span>
                                </div>
                                <div class="form_ground_register">
                                    <label for="userpassword">Mật Khẩu<span>*</span></label>
                                    <input  type="password" name="userpassword" id="userpassword">
                                    <i class="fa-solid fa-eye show_eye"></i>
                                    <i class="fa-solid fa-eye-slash hidden_eye"></i>
                                    <span class="mess-userpassword"></span>

                                </div>
                                <div class="form_ground_register">
                                    <label for="userEmail">Email<span>*</span></label>
                                    <input  type="text" name="userEmail" id="userEmail">
                                    <span class="mess-userEmail"></span>

                                </div>
                                <div class="form_ground_register">
                                    <label for="userPhone">Số Điện Thoại<span>*</span></label>
                                    <input  type="number" name="userPhone" id="userPhone">
                                    <span class="mess-userPhone"></span>
                                    <?= $message ??'' ?>
                                  <?= $message_error ?? ""?>
                                </div>
                                <div class="form_ground_register">
                                    <button type="submit" name="addUser">Đăng Ký</button>
                                </div>
                            </form>
                            <p>Thông tin cá nhân của bạn sẽ được dùng để điền vào hóa đơn, giúp bạn thanh toán nhanh
                                chóng và dễ dàng</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


    <!-- mobi nav -->

</body>

</html>