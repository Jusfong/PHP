<?php 
$x=9;
function hello($x){
    print("a=b+c") ;
    $sum=$x*2;
    echo "函數執行結束<br />";
    return $sum ;
}
?>
<?php
$y=999;
function abc($y,$x){
    print "it's test<br />";
    $z=$x*$y;
    return $z;
}
?>
<?php
$sum=hello($x);
$zz=abc($y,$x);
echo "x=$x<br />";
echo "sum=$sum<br />";
echo "y=$y<br />";
echo "z=$zz<br />";
?>