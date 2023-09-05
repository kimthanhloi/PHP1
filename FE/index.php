<link rel="stylesheet" href="./admin/css/admin.css">

<!-- <link rel="stylesheet" href="./admin/css/login.css"> -->
<?php 
                    include './config/config.php' ; 
                    if(isset($_GET['pages'])){
                 switch ($_GET['pages']) {
                        case 'login':    
                                ?>
<link rel="stylesheet" href="./admin/css/login.css">
<?php 
                                include './admin/login.php' ;
                                break;
                                case 'register':  
                                    ?>
<link rel="stylesheet" href="./admin/css/login.css">
<?php 
                    include './admin/register.php' ;
                    break;
            case 'users':
                switch ($_GET['action']) {
                    case 'list':
                       include "./admin/includes/navbar.php"  ;
                        include './admin/users/list.php' ;
                         
                        break;
                    case 'add':
                        include './admin/users/add.php' ; 
                        break;
                    case 'edit':
                        include './admin/users/edit.php' ; 
                        
                        break;
                     case 'delete':
                       include './admin/users/delete.php' ; 
                         break;
                    default:
                    include './admin/users/list.php' ; 
                        break;
                }
                break;
                case 'product':
                    switch ($_GET['action']) {
                        case 'list':
                       include "./admin/includes/navbar.php"  ;
                            
                             include './admin/product/list.php' ; 
                            break;
                        case 'add':
                            include './admin/product/add.php' ; 
                            break;
                        case 'edit':
                            include './admin/product/edit.php' ; 
                            
                            break;
                         case 'delete':
                            include './admin/product/delete.php' ; 
                             break;
                        default:
                            include './admin/users/list.php' ; 
                            break;
                    }
                break;
                case 'user_admin':
                    switch ($_GET['action']) {
                        case 'list':
                            include './admin/user_admin/list.php' ; 
                       include "./admin/includes/navbar.php"  ;
                             
                            break;
                        case 'add':
                 

                            include './admin/user_admin/add.php' ; 
                            break;
                        case 'edit':
                    

                            include './admin/user_admin/edit.php' ; 
                            
                            break;
                         case 'delete':
                    

                            include './admin/user_admin/delete.php' ; 
                             break;
                        default:
                     
                            include './admin/user_admin/list.php' ; 
                            break;
                    }
                break;
                case 'user_order':
                    switch ($_GET['action']) {
                        case 'list':
                            include './admin/user_order/list.php' ; 
                       include "./admin/includes/navbar.php"  ;
                             
                            break;
                        case 'add':
                 
                            include './admin/user_order/add.php' ; 
                            break;
                        case 'edit':
                    

                            include './admin/user_order/edit.php' ; 
                            
                            break;
                         case 'delete':
                    

                            include './admin/user_order/delete.php' ; 
                             break;
                          case 'order_detail':
                    

                                include './admin/user_order/order_detail.php' ; 
                                 break;
                        default:
                     
                            include './admin/user_order/list.php' ; 
                            break;
                    }
                break;
            
                case 'product_category':
                    switch ($_GET['action']) {
                        case 'list':
                            include './admin/product_category/list.php' ; 
                       include "./admin/includes/navbar.php"  ;
                             
                            break;
                        case 'add':
                 
                            include './admin/product_category/add.php' ; 
                            break;
                        case 'edit':
                    

                            include './admin/product_category/edit.php' ; 
                            
                            break;
                         case 'delete':
                    

                            include './admin/product_category/delete.php' ; 
                             break;
                        default:
                     
                            include './admin/product_category/list.php' ; 
                            break;
                    }
                break;
                case 'product_detail':
                    switch ($_GET['action']) {
                        case 'home':
                            include './product/index.php' ; 
                           
                            include './product/includes/header.php' ;

                            include './product/includes/cart.php' ;
                            include './product/includes/paginnation.php' ;
                            ?>
                        <link rel="preconnect" href="https://fonts.googleapis.com" />
                        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
                        <link
                            href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,400;0,500;1,300&family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Roboto:wght@300&family=Wix+Madefor+Display:wght@400;500;600;700;800&display=swap"
                            rel="stylesheet" />
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
                            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
                            crossorigin="anonymous" referrerpolicy="no-referrer" />
                        <link rel="stylesheet" href="./product/css/responsive.css">
                        <link rel="stylesheet" href="./product/css/basic.css">
                        <link rel="stylesheet" href="./product/css/giaynam.css">
                        <link rel="stylesheet" href="./product/css/grid.css">
                        <link rel="stylesheet" href="./product/css/index.css">
                        <link rel="stylesheet" href="./product/css/login.css">
                        <script src="./product/js/index.js"></script>
                        <?php
                            include './product/includes/mobinav.php';
                            include './product/includes/footer.php' ;
                             
                            break;
                            case 'chitiet':
                            include './product/html/chitietsanpham.php' ; 
                           
                            include './product/includes/header.php' ;
                            include './product/includes/cart.php' ;
                            include './product/includes/paginnation.php' ;
                            
                            include './product/includes/mobinav.php';
                            include './product/includes/footer.php' ;
                         ?>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,400;0,500;1,300&family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Roboto:wght@300&family=Wix+Madefor+Display:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./product/css/responsive.css">
<link rel="stylesheet" href="./product/css/basic.css">
<link rel="stylesheet" href="./product/css/giaynam.css">
<link rel="stylesheet" href="./product/css/grid.css">
<link rel="stylesheet" href="./product/css/index.css">
<link rel="stylesheet" href="./product/css/login.css">
<script src="./product/js/chitietsanpham.js"></script>
<?php
                                
                            break;
                            case 'giohang':
                                include './product/html/giohang.php' ; 
                               
                                include './product/includes/header.php' ;
                                include './product/includes/cart.php' ;
                                include './product/includes/paginnation.php' ;
                                
                                include './product/includes/mobinav.php';
                                include './product/includes/footer.php' ;
                             ?>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,400;0,500;1,300&family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Roboto:wght@300&family=Wix+Madefor+Display:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./product/css/responsive.css">
<link rel="stylesheet" href="./product/css/basic.css">
<link rel="stylesheet" href="./product/css/giaynam.css">
<link rel="stylesheet" href="./product/css/grid.css">
<link rel="stylesheet" href="./product/css/index.css">
<link rel="stylesheet" href="./product/css/login.css">
<script src="./product/js/giohang.js"></script>
<?php
                                    
                                break;
                                case 'cart':
                                  include './product/handler/cart.php';
                                        
                                    break;
                            case 'buy':
                                

                              include './product/handler/buy.php';
                            break;
                            case 'login' :

                            include './product/html/login.php';
                         
                               
                            include './product/includes/header.php' ;
                            include './product/includes/cart.php' ;
                            include './product/includes/paginnation.php' ;
                            
                            include './product/includes/mobinav.php';
                            include './product/includes/footer.php' ;

                            ?>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,400;0,500;1,300&family=Montserrat:wght@200;300;400;500;600;700;800;900&family=Roboto:wght@300&family=Wix+Madefor+Display:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./product/css/responsive.css">

<link rel="stylesheet" href="./product/css/basic.css">
<link rel="stylesheet" href="./product/css/giaynam.css">
<link rel="stylesheet" href="./product/css/grid.css">
<link rel="stylesheet" href="./product/css/index.css">
<link rel="stylesheet" href="./product/css/login.css">
<script src="./product/js/login.js"></script>
<?php
                            break; 
                            case 'logout':
                                include './product/handler/logout.php';      

                                break;    
                        default:
                
                            break;
                    }
                break;
              
            default:
                # code...
                break;
        }
       
    }
?>