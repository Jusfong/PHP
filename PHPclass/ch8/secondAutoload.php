<?php
function secondAutoload($className){
  $filename = __DIR__ . "/Second/" . $className . ".php";
  if (is_readable($filename)){
    require $filename;
  }
}
spl_autoload_register('secondAutoload');
?>