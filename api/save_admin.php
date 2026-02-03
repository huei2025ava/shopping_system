<?php 
include_once "db.php";
$_POST['pr']=serialize($_POST['pr']); // 陣列轉可儲存或可傳輸的字串
$Admin->save($_POST);
to("../admin.php?do=admin");
?>