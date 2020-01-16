
<?php

include "dog.php";
class shepherd extends dog {
    public $age;
    public function __construct($name,$color,$style,$age){
        parent::__construct($name,$color,$style);
        $this->age = $age;
    }
    public function dowork(){
        echo "小狗狗快趕羚羊唷"."<br />";
    }
    public function __destruct(){
        echo "趕羚羊回家啦";
    }
}
  
?>
