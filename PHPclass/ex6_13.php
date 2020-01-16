<?php
print "<table border=1>";
print "<tr>";
for($i=2;$i<=9;$i++){
   
    print "<th>".$i."倍數</th>";
    
}print "</tr>";



for($i=1;$i<=9;$i++){
    print "<tr>";
    for($j=2;$j<=9;$j++){
        print "<td>";
        printf("%d*%d=%d  ",$j,$i,($i*$j));
        print "</td>";
    }
    print "</tr>"; 
}
print "</table>";
?>