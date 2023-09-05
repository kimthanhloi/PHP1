<?php 
   
    // include '../config/config.php' ;
    // session_start() ; 
    if(isset($_POST["login-button"])){
    $name = $_POST["username"] ?? ""  ;
    $password = $_POST["userpassword"] ?? "" ;
   
    if(!empty($name) && !empty($password)){
        $query = "SELECT * FROM user_admin WHERE username = '$name' and password = '$password'"; 
        $result = mysqli_query($conn,$query) ;
        if($result){
           

            if(mysqli_num_rows($result)===1){
                $user_data = mysqli_fetch_assoc($result) ; 
               if($password === $user_data["password"] &&$name === $user_data["username"]){
                Header('Location: /index.php?pages=user_admin&action=list');
                }else {
                    $message_error ="tài khoản ko chính xác" ;
               }
            }
        }else{
            $message ="Đăng Nhập Không Thành Công" ;
       }
        
    } else{
        $message ="Đăng Nhập Không Thành Công" ;
   }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
<div class="container" >
    <h1 class="title">Đăng Nhập</h1>
    <div class="card">
        <form method="post" >
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="userpassword" placeholder="Password">
            <?php echo  $message ?? "" ?>
            <?php echo   $message_error ?? "" ?>

           
            <div class="buttons">
              <a href="/index.php?pages=register" class="register-link">Đăng Kí</a>
                <button type="submit" name="login-button" class="login-button">Xác Nhận</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
