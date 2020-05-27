<?php

include 'IKlaxonneur.php';
include 'Vehicule.php';
include 'Voiture.php';
include 'Batmobile.php';
include 'Moto.php';
include 'Avion.php';
include 'Supporter.php';

function alerter(IKlaxonneur $vehicule) {
    return $vehicule->klaxonner();
}


$car = new Voiture("Renault", "Clio", "Rouge");
$batmobile = new Batmobile("Batchar");
$moto = new Moto("Honda", "CBR-500", "Jaune");
$avion = new Avion("Airbus", "A300", "Blanc");
$supp = new Supporter();



$batmobile->accelerer();

echo $batmobile->getCouleur();

echo '<br/>' . alerter($car);
echo '<br/>' . alerter($batmobile);
echo '<br/>' . alerter($moto);
echo '<br/>' . alerter($supp);

