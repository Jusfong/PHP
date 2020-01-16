<?php
trait Hello {
    public function sayHello() {
        echo 'Hello你好嘛';
    }
}
trait World {
    public function sayWorld() {
        echo 'World冠軍';
    }
}
class MyHelloWorld {
    use Hello,World;
    public function sayExclamationMark() {
        echo '!!!!';
    }
}
$o=new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
$o->sayExclamationMark();
?>