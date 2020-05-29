<?php

session_start();

use classes\Combat;
use classes\CombattantFactory;

function chargerClasses($classe) {
        include   $classe . '.php';
    }

    spl_autoload_register('chargerClasses');

    $combat;
    if(!isset($_SESSION['combat'])) {

        $typeCombatUn = $_POST['typeCombattantUn'];
        $nomCombatUn = $_POST['nomCombattantUn'];
        $typeCombatDeux = $_POST['typeCombattantDeux'];
        $nomCombatDeux = $_POST['nomCombattantDeux'];


        $combat = new Combat(
            CombattantFactory::createInstance($typeCombatUn, $nomCombatUn), 
            CombattantFactory::createInstance($typeCombatDeux, $nomCombatDeux)
        );
    } else {
        $combat = unserialize($_SESSION['combat']);
    }

    $combat->tourSuivant();

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

                <?php echo $combat->combattantUn->afficherDetails(); ?>

            </ul>
        </div>
        <div class="RecapPerso" id="menuPersoB">
            <ul>
                <?php echo $combat->combattantDeux->afficherDetails(); ?>
            </ul>
        </div>

        <div id="logCombat">
            <?php  echo Combat::$logCombat;?>
        </div>

        <form>
            <input type="submit" value="Suivant"/>
        </form>
    </main>
</body>

<?php $_SESSION['combat'] = serialize($combat);   ?>
</html>