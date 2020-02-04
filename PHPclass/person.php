<?php
class Person{
    public function __set($name,$value){
        if (isset($this->$name)){
            return $this->$name=$value;
        } else {
            return null ;
        }
    }

public function __get($name){
    return $name;
}
public function __isset($name){
    return $name;
}
public function __unset($name){
    return $name;
}
}
$person=new Person();
$person->name='Justice';
echo $person->name."</br>"; //印出第一行
echo $person->sex."</br>"; //第二行
echo isset($person->address); //第三行
unset($person->name);
?>