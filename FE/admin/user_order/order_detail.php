<?php 
    if(!empty($_GET['id'])){
        $userid = $_GET['id'] ; 
        $spl = "SELECT
        o.username as username , 
        p.name as name , 
        p.money as money,
        od.qty as qty 
        from user_order o, products p , user_order_detail od
        where od.order_id = o.id AND  od.product_id = p.id and o.id= '$userid'" ; 
        $result =  mysqli_query($conn, $spl) ;
         ;
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
    <div class="container main">

        <h3 style="text-align: center;">

            Hóa Đơn Chi Tiết
        </h3>
        <div class="login_admin">
            <a href="/index.php?pages=user_order&action=list">
                <button type="button" class="btn btn-primary btn-login">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-backspace-fill" viewBox="0 0 16 16">
                        <path
                            d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z" />
                    </svg>
                    Trở Về
                </button>
            </a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Tên Khách Hàng</th>
                    <th>Tên Sản Phẩm </th>
                    <th>Số Lượng</th>
                    <th> Giá </th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php if(mysqli_num_rows($result)>0){                                    
                            while($data =  mysqli_fetch_assoc($result)  ){
                                ?>

                    <td>

                        <?=   $data['username']??"" ?>
                    </td>
                    <td>
                        <?=   $data['name'] ??"" ?>
                    </td>
                    <td>
                        <?=   $data['qty']??""  ?>
                    </td>
                    <td>
                        
                        <?=  
                         number_format($data['money'] ??"", 0, ",", ".")
                        
                         ?>
                    </td>

                </tr>
                <?php } }?>



            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>