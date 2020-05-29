<?php

session_start();

use classes\Combat;

function chargerClasses($classe) {
    include   $classe . '.php';
}

spl_autoload_register('chargerClasses');


$combat = unserialize($_SESSION['combat']);

echo $combat->combattantDeux->afficherDetails();