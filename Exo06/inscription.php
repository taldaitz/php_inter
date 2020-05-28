<?php

function chargerClasses($classe) {
    include   $classe . '.php';
}

spl_autoload_register('chargerClasses');

use back2\Utilisateur;
use back2\UtilisateurManager;

$login = $_GET['login'];
$pwd = $_GET['password'];
$email = $_GET['email'];

$user = new Utilisateur();
$user->setLogin($login)
     ->setPassword($pwd)
     ->setEmail($email);

UtilisateurManager::saveUtilisateur($user);