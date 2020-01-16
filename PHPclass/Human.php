<?php
include "Bark.php";
include "Swim.php";
class Human implements Bark,Swim{
    public function bark(){
        echo "哩系哩大聲瞎啦幹!!!!!!!!";
    }
    public function swim(){
        echo "如果我跟你媽掉進水裡，你會先救誰? 給老娘好好回答!!";
    }
}
?>