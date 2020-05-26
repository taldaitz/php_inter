<?php

function chargerClasses($classe) {
    include $classe . '.php';
}

spl_autoload_register('chargerClasses');

use classes\Page;
use classes\Utilisateur;
use classes\Admin;


$user = new Utilisateur("Thomas Aldaitz", "taldaitz-dawan.fr", "toto1234");


$user->pageAcceuil = new Page();
$user->pageAcceuil->nom = "Acceuil";
$user->pageAcceuil->url = "/home";


echo 'Nom : ' . $user->nom;
echo '<br/>Email : ' . $user->email;
echo '<br/>Mdp : ' . $user->motDePasse;

echo $user;



$admin = new Admin("Administrateur", "admin-dawan.fr", "admin12345");

echo '<br/><br/>' . $admin;