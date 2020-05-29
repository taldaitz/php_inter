<?php

session_start();

use classes\Combat;
use classes\CombattantFactory;

function chargerClasses($classe) {
    include   $classe . '.php';
}

spl_autoload_register('chargerClasses');

$typeCombatUn = $_POST['typeCombattantUn'];
$nomCombatUn = $_POST['nomCombattantUn'];
$typeCombatDeux = $_POST['typeCombattantDeux'];
$nomCombatDeux = $_POST['nomCombattantDeux'];


$combat = new Combat(
    CombattantFactory::createInstance($typeCombatUn, $nomCombatUn), 
    CombattantFactory::createInstance($typeCombatDeux, $nomCombatDeux)
);


$_SESSION['combat'] = serialize($combat);

header('Location: combatInterractif.html');