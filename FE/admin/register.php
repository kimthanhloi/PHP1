<?php 
   if(isset($_POST["addUser"])){
        $name = $_POST["uname"] ;
        $pswd = $_POST["pswd"] ;
        $userEmail = $_POST["userEmail"] ;
        if(!empty($name) && !empty($pswd)  && !empty($userEmail)){
            $sql = "INSERT INTO user_admin(username,password,email ) VALUES 
            ('$name', '$pswd','$userEmail')";
            if(mysqli_query($conn,$sql)){
                // Header('Location: /index.php?pages=user_admin&action=list');
                $messagesuccess= 'Thành Công' ;
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }else{
            $message = 'đăng ký thất bại';
        }
    }
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">
        <h1 class="title">Đăng Ký</h1>
        <div class="card">
            <form method="post">
                <input type="text" name="uname" placeholder="Username" >
                <input type="email" name="userEmail" placeholder="Email" >
                <input type="password" name="pswd" placeholder="Password" >
                <?php echo $messagesuccess ?? ""?>
                <?php echo $message ?? ""?>
                <div class="buttons">
                    <a href="/index.php?pages=login" class="register-link">Đăng Nhập</a>
                    <button type="submit" name="addUser" class="login-button">Xác Nhận</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>