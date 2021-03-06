<?php

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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baston !</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <h1>Combat !!</h1>
        <div class="RecapPerso" id="menuPersoA">
            <ul>

                <?php echo $combat->combattants[0]->afficherDetails(); ?>

            </ul>
        </div>
        <div class="RecapPerso" id="menuPersoB">
            <ul>
                <?php echo $combat->combattants[1]->afficherDetails(); ?>
            </ul>
        </div>

        <div id="logCombat">
            <?php $combat->demarrerCombat(); echo Combat::$logCombat;?>
        </div>
    </main>
</body>

</html>