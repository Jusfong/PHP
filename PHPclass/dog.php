<?php
include "Bark.php";
abstract class dog implements Bark {
    public $name;
    public $color;
    public $style;
    public function __construct($name,$color,$style){
       $this->name=$name;
       $this->color=$color;
       $this->style=$style; 
    }
    public function dogrun(){
        echo "狗狗跑步中...";
    }
    public function dogbark(){
        
    }
    public function __destruct(){
        echo "狗狗回家囉...";
    }
}
?>