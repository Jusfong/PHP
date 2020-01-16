<?php
include "shepherd.php";
$mydog = new shepherd("豆豆","棕白色","吉娃娃",12);
echo "小狗狗叫".$mydog->name."<br />";
echo "毛色為".$mydog->color."<br />";
echo "種類為".$mydog->style."<br />";
echo "年齡為".$mydog->age."<br />";
echo $mydog->dowork()."<br />";
echo $mydog->dogrun()."<br />";
?>

