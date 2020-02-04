<?php
abstract class Sport{
    public function competition(){
        echo '競技比賽類型'."</br>";
    }
}
class Baseball extends Sport{
    public function move(){
        echo '打擊手就位，投手準備投球'."</br>";
    }
}
class Basketball extends Sport{
    public function move(){
        echo '投籃! 進! 空心三分球!!'."</br>";
    }
}
class Action{
    public function actionmove(Sport $gogo){
        $gogo->move();
    }
}
$baseball=new Baseball();
$basketball=new Basketball();
$action=new Action();
$action->actionmove($baseball);
$action->actionmove($basketball);
?>