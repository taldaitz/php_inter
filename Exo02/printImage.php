<?php

function chargerClasses($classe) {
    include $classe . '.php';
}

spl_autoload_register('chargerClasses');

$rectGD = new Rectangle(10, 5);
$rectGD->dessinerWithGd();