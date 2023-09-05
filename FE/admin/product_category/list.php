<?php ob_start() ?>

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
    <!-- <link rel="stylesheet" href="../css/admin.css"> -->
  
</head>

<body>
   
    <div class="container main">

        <h3 style="display: inline-block;">

            Danh Sách Thể Loại Sản phẩm
        </h3>
        <div class="login_admin">
            <a href="/index.php?pages=product_category&action=add">
                <button type="button" class="btn btn-primary btn-login">Thêm +</button>
            </a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th>id</th>

                    <th>Tên Loại</th>
                    <th>Ghi Chú</th>
                  
                    
                    <th style="width: 20%;">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
            <?php
                        $select = mysqli_query($conn,'SELECT * FROM category') ;
                        // kiểm tra mảng lớn hơn 0
                        if(mysqli_num_rows($select)>0){
                      while( $data  = mysqli_fetch_assoc($select) ){
                                ?>
                                <tr>
                                    <td>
                                        <?=   $data['id'] ?>
                                    </td>
                                    <td>
                                        <?=   $data['name'] ?>
                                    </td>
                                    <td>
                                        <?=   $data['note'] ?>
                                    </td>                       
                                    <td class="d-flex justify-content-evenly">
                                        <a href="/index.php?pages=product_category&action=edit&id=<?php echo $data["id"]?>" class="btn btn-dark"  ><img
                                                src='./admin/img/edit-1-svgrepo-com.svg'></a>
                                        <a class="btn btn-danger" href="/index.php?pages=product_category&action=delete&id=<?php echo $data["id"]?>"
                                        ><img
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
<?php ob_end_flush(); ?>
