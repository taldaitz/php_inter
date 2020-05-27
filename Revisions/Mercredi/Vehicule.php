<?php

abstract class Vehicule {

    public $marque;
    public $modele;

    private $couleur;
    protected $vitesse = 0;

    public function __construct($marque, $modele, $couleur)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
    }


    abstract function accelerer();

    abstract function freiner();

    public function arreter() {
        $this->vitesse = 0;
    }

    public function getVitesse() {
        return $this->vitesse;
    }
}