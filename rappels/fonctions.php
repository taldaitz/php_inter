<?php

function addition($numA, $numB) {
  return $numA + $numB;
}


function puissance($val, $puissance) {
  if($puissance == 1)
    return $val;
  return $val * puissance($val, $puissance - 1);
}


 ?>
