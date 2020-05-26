<?php

$chiffre = 5;
$chiffreEnChaine = '5'; // utilisé '' plutôt que "" quand aucune insertion n'est prévu

$chaine = 'Bonjour';
$date = date('j, n, Y');

$concatenation = $chaine . ' Tout le monde.';
$concatenation .= " Vous êtes $chiffre ajourd'hui.";

$addition = 2;
$addition += 2;


$result = $addition == 4 ? 'Tout va bien !' : 'Nous avons un sérieux problème ...';

 ?>
