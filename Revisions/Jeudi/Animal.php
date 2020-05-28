<?php

abstract class Animal implements ICrieur {
    public $nom;
    public $couleur;
    public $poids;
    public $age;

    public function __construct($nom, $couleur, $poids, $age)
    {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->poids = $poids;
        $this->age = $age;
    }

    abstract public function crier() : string;
}