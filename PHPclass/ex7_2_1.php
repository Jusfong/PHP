<?php
function qq($i=2,$j=1){
    if($j>9){
        $i++;
        $j=1;
        print "</br>";
    }
    if($i<=9){
        printf("%d*%d=%d \t",$i,$j,($i*$j));
        $j++;
        qq($i,$j);
      }  
    }
    echo qq();
    ?>
