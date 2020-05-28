<?php

class Personne implements ICrieur {
    public $nom;
    public $prenom;
    public $age;


    public function crier() : string
    {
        return "Bonjour !";
    }
}