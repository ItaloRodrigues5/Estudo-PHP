<?php
$a = array(1, 4, 5, 2, 8, 9);
$b = array(7, 4, 3, 2, 6, 9);
$vc = array();

for ($i=0; $i < 6; $i++) { 
    if ($a[$i] == $b[$i]) {
        $vc[$i] = $a[$i];
    }
    else {
        $vc[$i] = -1;
    }
    foreach($vc as $c){
        echo $c . " | ";
    }
}
?>