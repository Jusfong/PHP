<?php
interface Abc{
    public function aaa(string $msg);
}
class unname{
    private $abc;
    public function getAbc():Abc{
        return $this->abc;
    }
    public function setAbc(Abc $abc){
        $this->abc=$abc;
    }
}
$bb=new unname;
$bb->setAbc(new class implements Abc {
    public function aaa(string $msg){
        print($msg);
    }
});
$bb->getAbc()->aaa("這是台灣郎做的歌~~yoyo~~這系裝咖苓仔做ㄟ歌~~")
?>