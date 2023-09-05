<?php 
  $host = 'localhost';
  $username = 'root';
  $password = 'mysql';
  $database = 'loiktpc05314';
  
  // Kết nối đến cơ sở dữ liệu
  $conn = mysqli_connect($host, $username, $password, $database);

  // Kiểm tra kết nối
    if (!$conn) {
    die('Không thể kết nối đến cơ sở dữ liệu: ' . mysqli_connect_error());
    }

?>