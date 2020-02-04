<?php
include "dog.php";

class Poodle extends dog{
  protected $size;

  public function __construct($name,$color,$style,$size){
    parent::__construct($name,$color,$style);
    $this->size = $size;
  }
  
  public function Bark(){
    echo "狗叫...但小聲....";
    
    
  }
}
?>
