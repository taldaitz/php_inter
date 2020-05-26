<?php

function chargerClasses($classe) {
    include $classe . '.php';
}

spl_autoload_register('chargerClasses');


$rect = new Rectangle(18, 7);
$rect2 = new Rectangle(10, 5);
$rect3 = new Rectangle(6, 17);

echo $rect->dessiner();
echo $rect2->dessiner();
echo $rect3->dessiner();


?>

<br/>

<img src="printImage.php"/>
