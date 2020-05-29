<?php

session_start();

use classes\Combat;

function chargerClasses($classe) {
    include   $classe . '.php';
}

spl_autoload_register('chargerClasses');


$combat = unserialize($_SESSION['combat']);


$combat->tourSuivant(); 
echo Combat::$logCombat;


$_SESSION['combat'] = serialize($combat);