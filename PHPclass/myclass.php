<?php
class myclass{
    public $x=123;
    protected $y=456;
    private $z=789;

    public function getpara(){
        echo "inclass->x:".$this->x."<br />";
        echo "inclass->y:".$this->y."<br />";
        echo "inclass->z:".$this->z."<br />";
    }
}
$test=new myclass();
//$test->getpara();
echo "test->x:".$test->x."<br />";
echo "test->y:".$test->y."<br />";
echo "test->z:".$test->z."<br />";
?>
