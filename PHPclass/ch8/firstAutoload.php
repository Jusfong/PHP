<?php
function firstAutoload($className){
  $filename = __DIR__ . "/First/" . $className . ".php";
  if (is_readable($filename)){
    require $filename;
  }
}
spl_autoload_register('firstAutoload');
?>