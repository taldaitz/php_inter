<?php

class Batmobile extends Voiture {

    public function __construct($modele)
    {
        $marque = "Batman";
        $couleur = "Noir";

        

        parent::__construct($marque, $modele, $couleur);    
    }

    public function accelerer()
    {
        $this->vitesse += 20;
    }

}