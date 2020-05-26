<?php

    $longueur = isset($_GET['longueur']) ? $_GET['longueur'] : '200';
    $hauteur = isset($_GET['hauteur']) ? $_GET['hauteur'] : '200';

function chargerClasses($classe) {
    include 'classes/' . $classe . '.php';
}

spl_autoload_register('chargerClasses');

function lancerDessin(Forme $forme) {
    $forme->dessiner();
}

if($_GET['type'] == 'Rectangle') {
    $rectGD = new Rectangle($longueur, $hauteur);
   lancerDessin($rectGD);
} 
    elseif ($_GET['type'] == 'Cercle') {

    $cercle = new Cercle($longueur);
    lancerDessin($cercle);
} 
elseif ($_GET['type'] == 'Triangle') {

    $triangle= new Triangle($longueur, $hauteur);
    lancerDessin($triangle);
}
elseif ($_GET['type'] == 'Carre') {

    $carre= new Carre($longueur);
    lancerDessin($carre);
}