<?php

session_start();

if (isset($_SESSION["dangky"])) {
  unset($_SESSION["dangky"]);
  Header('Location: /index.php?pages=product_detail&action=login');
  
}
?>
