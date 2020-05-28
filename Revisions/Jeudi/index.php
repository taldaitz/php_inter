<?php

include "ICrieur.php";
include "Animal.php";
include "Chat.php";
include "Chien.php";
include "Tigre.php";
include "Personne.php";
include "Velo.php";


function faireCrierDesAnimaux(Animal $animal) {
    echo $animal->crier() . '<br/>';
}

function faireCrierQuiPeut(ICrieur $crieur) {
    echo $crieur->crier() . '<br/>';
}



$chat = new Chat('minou', 'blanc', 5, 8);
$chien = new Chien('rex', 'noir', 35, 12);
$tigre = new Tigre('tigrou', 'orange', 80, 14);

$personne = new Personne();

$bike = new Velo();


faireCrierDesAnimaux($chien);
faireCrierDesAnimaux($chat);
faireCrierDesAnimaux($tigre);

echo '<br/><br/>';

faireCrierQuiPeut($personne);
faireCrierQuiPeut($chat);
faireCrierQuiPeut($chien);
faireCrierQuiPeut($tigre);






