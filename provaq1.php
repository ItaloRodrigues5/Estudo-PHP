<?php

$x = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$y = [];

for($i = 0; $i < 10; $i++){
        if($x[$i]%2 == 0){
            $y[] = $x[$i] * 5;
        }
        else{
           $y[] =  ($x[$i] + 1) * 2;
        }
}

print_r($x) . " | ";
echo "<br>";
print_r($y) . " | ";
echo "<br>";

?>