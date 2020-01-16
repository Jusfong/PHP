<?php
class Shape{
    const PI=3.142;
    function __call($name,$arg){
        if($name=='area')
        switch(count($arg)){
            case 0 : return 0;
            case 1 : return self::PI*$arg[0];
            case 2 : return $arg[0]*$arg[1];
        }
    }function __callStatic($name,$arg){
        return array(999,888);
}
}
$a=new Shape();
echo $a->area(9)."</br>";
$b=new Shape();
echo $b->area(60,70)."</br>";
echo Shape::hello()[0]."</br>";
?>