<?php
function sum(...$num){
    $tol=0;
    foreach($num as $i){
        $tol+=$i;
    }
    return $tol;
}
echo "總共是:".sum(1,5,9,13,17,21);
?>