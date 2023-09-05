<html>
<head>
<style>
.popup {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: #8BC6EC;
background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);

  z-index: 9999;
}
.popup-inner {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  padding: 40px;
  box-shadow: 0px 0px 20px #000000;
}
.popup-inner h1 {
    font-size:36px;
    color:#FFF;
    margin-top:0px;
}
.popup-inner p {
    font-size:18px;
    color:#FFF;
}
</style>
</head>
<body>


<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.popup');
    var instances = M.Modal.init(elems);
});
</script>

</body>
</html>

<?php 
     session_start();
    //    $data =  $_SESSION['cart'];
    //     print_r($data) ;

       


        
     if(isset($_POST['buy'])){

        $name = $_POST['username_info_customer_buy'];
        $address = $_POST['Addressinfo_customer_buy'];
        $phone = $_POST['phone_info_customer_buy'];
        $city = $_POST['provinceOptionsinfo_customer_buy'];
        $quan = $_POST['districtSelect_info_customer_buy'];
        $phuong = $_POST['ward_info_customer_buy'];
        $total_bill = $_POST['total_bill'];
       
        if(!empty($name) && !empty($address)  && !empty($phone)&&
        !empty($city) && !empty($quan)  && !empty($phuong) ){
            $id_user =   $_SESSION["dangky"]["id"];
            $sql = "INSERT INTO user_order(username,phone,address,tinh,quan,phuong,total,user_id  ) VALUES 
            ('$name', '$phone','$address','$city','$quan','$phuong','$total_bill','$id_user')";
           
           $result = mysqli_query($conn,$sql) ;
            if($result){
                // lấy id vừa insert vào ;
                $last_id = mysqli_insert_id($conn) ;
              
                order_detail($last_id,$conn );
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }else{
          
            echo '<div class="popup">
            <div class="popup-inner">
                <h1>Bạn Xác Nhận Thông Tin Không Thành Công</h1>
                <p >
                <a  style="margin: 0 20px;
                padding: 0 10px;"
                href="index.php?pages=product_detail&action=giohang">quay Lại Trang Giỏ Hàng
                </a>
                .</p>
            </div>
        </div>';
        }
    
    }
   function order_detail($last_id,$conn ){
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $productId) {
            $name =  $productId["name"] ; 
            $id =  $productId["id"] ; 
            $money =  $productId["money"] ;
            $qty = $productId["qty"] ;
            $sql = "INSERT INTO user_order_detail(order_id ,product_id,qty,price ) VALUES 
            ('$last_id', '$id','$qty','$money')";
             if(mysqli_query($conn,$sql)){
                        Header('Location: /index.php?pages=product_detail&action=home');
                    }else{
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
        }
    }
   }
?>
