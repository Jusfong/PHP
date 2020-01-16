<?php
include "dog.php";
$mydog=new dog("豆豆","棕白色","吉娃娃");
$mydog->dogbark();
$mydog->dogrun();
$mydog->dogbark();
$mydog->dogrun();
echo "<br />";
echo $mydog->name."<br />";
echo $mydog->color."<br />";
echo $mydog->style."<br />";
?>
