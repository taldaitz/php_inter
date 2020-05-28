<?php

function chargerClasses($classe) {
    include   $classe . '.php';
}

spl_autoload_register('chargerClasses');

use back\Utilisateur;
use back\UtilisateurManager;

$login = $_GET['login'];
$pwd = $_GET['password'];
$email = $_GET['email'];

$user = new Utilisateur();
$user->setLogin($login)
     ->setPassword($pwd)
     ->setEmail($email);

UtilisateurManager::saveUtilisateur($user);