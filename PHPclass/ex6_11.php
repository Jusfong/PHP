<?php
$i=11;
if($i>10){
    echo "你好阿肉腳<br />";
} else{
    echo "需要黃金<br />";
}

if($i==10) echo "我們的王是最偉大的!!<br />";
else $i+=999;
echo $i."<br />";
?>

<?php
$i=999;
if($i>=1000){
    echo "\$i大於1000唷";
}elseif($i>=500){
    echo "\$i小於1000，大於500";
}else{
    echo "\$i小於500";
}