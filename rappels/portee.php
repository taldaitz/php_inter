<?php

if(1 == 1) {
   $a = "A existe <br/>";
}

echo $a;

$i = 0;
while($i == 0) {
  $b = 'B existe <br/>';
  $i++;
}

echo $b;

showABTogether($a, $b);

function showABTogether($c, $d) {
  echo "$c et $d";
}

?>
