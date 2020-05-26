<?php

function monAutoload($class) {
    include $class . '.php';
}

spl_autoload_register("monAutoload");

use \travail\Person as PersonTravail;
use \travail\Customer;
use \travail\Product;

$personne = new PersonTravail();
$personne->nom = "Aldaitz";
$personne->prenom = "Thomas";
$personne->dateNaissance = "01/01/2000";
$personne->ville = "Lyon";

$product = new Product();


$client = new Customer();
$client->nom = "toto";
$client->prenom = "toto";
$client->dateNaissance = "toto";