<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Xóa</h5>
      </div>
      <div class="modal-body">
        <p>Bạn Có Muốn Xóa không.</p>
      </div>
      <div class="modal-footer">
        <form  method="post">
        <button  class="btn btn-secondary" data-bs-dismiss="modal">
            <a style="text-decoration: none ;color: aliceblue;" href="/index.php?pages=user_admin&action=list">Không</a>
        </button>
        <button  class="btn btn-primary" name="delete">Xóa</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    
</body>
</html>
<?php 
if(isset($_POST['delete'])){
    $userid = $_GET['id'] ;
    $spl = "DELETE FROM user_admin where id = '$userid' ";
    $result = mysqli_query($conn , $spl); 
    if($result){
        Header('Location: /index.php?pages=user_admin&action=list');
    }
}

?>