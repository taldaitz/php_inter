<?php
namespace travail;

abstract class Person {
    public $nom;
    public $prenom;
    public $dateNaissance;
    public $ville;

    abstract function sePresenter();
}