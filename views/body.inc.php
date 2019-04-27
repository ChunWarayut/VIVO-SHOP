<?php
// ประเภทสินค้า
 if($content=="product_type"){
    require_once("views/product_type/index.inc.php"); 
}
// หน้าหลัก
else if($content=="home"){
    require_once("views/home/index.inc.php"); 
}
?>