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

        <h3>

            Danh Sách Hóa Đơn
        </h3>
        <div class="login_admin">
            <a href="/index.php?pages=user_order&action=add">
                <button type="button" class="btn btn-primary btn-login">Thêm +</button>
            </a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Họ Tên </th>
                    <th>Tổng Tiền </th>
                    <th>SĐT</th>
                    <th>Địa Chỉ</th>
                    <th>Tỉnh</th>
                    <th>Quận</th>
                    <th>Phường</th>
                    <th>id_user</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $select = mysqli_query($conn,
                        'SELECT p.id as id ,
                        p.username as usernamep,
                        p.phone as phone,
                        p.address as address,
                        p.tinh as tinh,
                        c.username as username,
                        p.quan as quan,
                        p.phuong as phuong,
                        p.total as total
                        from user_order p, users c
                        where p.user_id = c.id'
                        ) ;
                        // kiểm tra mảng lớn hơn 0
                        if(mysqli_num_rows($select)>0){                                    
                            while( $data  = mysqli_fetch_assoc($select) ){
                                ?>
                <tr>


                    <td>
                        <?=   $data['usernamep'] ?>
                    </td>
                    <td>
                        <?=  
                         number_format($data['total'], 0, ",", ".")
                        ?>
                    </td>
                    <td>
                        <?=   $data['phone'] ?>
                    </td>
                    <td>
                        <?=   $data['address'] ?>
                    </td>

                    <td>
                    <?php if($data['tinh'] ==70) {
                        echo 'TP Hồ Chí Minh';
                    }else if($data['tinh'] ==90){
                        echo 'TP Cần Thơ';
                    }else if($data['tinh'] ==81){
                        echo 'Đồng Nai';
                    }else if($data['tinh'] ==82){
                        echo 'Bình Dương';
                    }else if($data['tinh'] ===83){
                        echo 'Bình Phước';
                    }else if($data['tinh'] ==84){
                        echo 'Tây Ninh';
                    }
                    else if($data['tinh'] ==85){
                        echo 'Long An';
                    }else if($data['tinh'] ==86){
                        echo 'Tiền Giang';
                    }else if($data['tinh'] ==79){
                        echo 'Bà Rịa Vũng Tàu';
                    }else if($data['tinh'] ==80){
                        echo 'Bình Thuận';
                    }else if($data['tinh'] ==88){
                        echo 'An Giang';
                    }
                    else if($data['tinh'] ==89){
                        echo 'Vĩnh Long';
                    }else if($data['tinh'] ==91){
                        echo 'Hậu Giang';
                    }else if($data['tinh'] ==92){
                        echo 'Kiên Giang';
                    }else if($data['tinh'] ==93){
                        echo 'Bến Tre';
                    }else if($data['tinh'] ==94){
                        echo 'Trà Vinh';
                    }else if($data['tinh'] ==95){
                        echo 'Sóc Trăng';
                    }else if($data['tinh'] ==96){
                        echo 'Bạc Liêu';
                    }else if($data['tinh'] ==97){
                        echo 'Cà Mau';
                    }else if($data['tinh'] ==67){
                        echo 'Lâm Đồng';
                    }else if($data['tinh'] ==65){
                        echo 'Khánh Hoà';
                    }else if($data['tinh'] ==64){
                        echo 'Đắk Nông';
                    }else if($data['tinh'] ==63){
                        echo 'Đắk Lăk';
                    }else if($data['tinh'] ==62){
                        echo 'Phú Yên';
                    }else if($data['tinh'] ==60){
                        echo 'Gia Lai';
                    }else if($data['tinh'] ==59){
                        echo 'Bình Định';
                    }else if($data['tinh'] ==58){
                        echo 'Kon Tum';
                    }else if($data['tinh'] ==10){
                        echo 'TP Hà Nội';
                    }
                    else if($data['tinh'] ==16){
                        echo 'Hưng Yên';
                    }else if($data['tinh'] ==17){
                        echo 'Hải Dương';
                    }else if($data['tinh'] ==18){
                        echo 'TP Hải Phòng';
                    }else if($data['tinh'] ==20){
                        echo 'Quảng Ninh';
                    }else if($data['tinh'] ==22){
                        echo 'Bắc Ninh';
                    }
                    else if($data['tinh'] ==23){
                        echo 'Bắc Giang';
                    }else if($data['tinh'] ==24){
                        echo 'Lạng Sơn';
                    }else if($data['tinh'] ==25){
                        echo 'Thái Nguyên';
                    }else if($data['tinh'] ==26){
                        echo 'Cao Bằng';
                    }else if($data['tinh'] ==28){
                        echo 'Vĩnh Phúc';
                    }
                    else if($data['tinh'] ==29){
                        echo 'Phú Thọ';
                    }else if($data['tinh'] ==30){
                        echo 'Tuyên Quang';
                    }else if($data['tinh'] ==31){
                        echo 'Hà Giang';
                    }else if($data['tinh'] ==32){
                        echo 'Yên Bái';
                    }else if($data['tinh'] ==33){
                        echo 'Lào Cai';
                    }
                    else if($data['tinh'] ==35){
                        echo 'Hoà Bình';
                    }else if($data['tinh'] ==36){
                        echo 'Sơn La';
                    }else if($data['tinh'] ==38){
                        echo 'Điện Biên';
                    }else if($data['tinh'] ==39){
                        echo 'Lai Châu';
                    }else if($data['tinh'] ==40){
                        echo '41';
                    }
                    else if($data['tinh'] ==41){
                        echo 'Thái Bình';
                    }else if($data['tinh'] ==42){
                        echo 'Nam Định';
                    }else if($data['tinh'] ==43){
                        echo 'Ninh Bình';
                    }else if($data['tinh'] ==44){
                        echo 'Thanh Hoá';
                    }else if($data['tinh'] ==46){
                        echo 'Nghệ An';
                    }
                    else if($data['tinh'] ==48){
                        echo 'Hà Tĩnh';
                    }else if($data['tinh'] ==51){
                        echo 'Quảng Bình';
                    }else if($data['tinh'] ==52){
                        echo 'Quảng Trị';
                    }else if($data['tinh'] ==53){
                        echo 'Thừa Thiên Huế';
                    }else if($data['tinh'] ==54){
                        echo 'TP Đà Nẵng';
                    }
                    else if($data['tinh'] ==56){
                        echo 'Quảng Nam';
                    }else if($data['tinh'] ==57){
                        echo 'Quảng Ngãi';
                    }

                    ?>
                    </td>
                    <td>
                        <?=   $data['quan'] ?>
                    </td>
                    <td>
                        <?=   $data['phuong'] ?>
                    </td>
                    <td>
                        <?=   $data['username'] ?>
                    </td>
                    <td>
                        <a href="/index.php?pages=user_order&action=order_detail&id=<?php echo $data["id"]?>" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-seam" viewBox="0 0 16 16">
                                <path
                                    d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                            </svg>
                        </a>
                        <a href="/index.php?pages=user_order&action=edit&id=<?php echo $data["id"]?>"
                            class="btn btn-dark"><img src='./admin/img/edit-1-svgrepo-com.svg'></a>
                        <a class="btn btn-danger"
                            href="/index.php?pages=user_order&action=delete&id=<?php echo $data["id"]?>"><img
                                src='./admin/img/delete-2-svgrepo-com.svg'></a>
                    </td>
                </tr>
                <?php
                            }
                        }
                        ?>



            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>