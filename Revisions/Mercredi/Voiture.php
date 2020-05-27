<?php

class Voiture extends Vehicule implements IKlaxonneur {


    public function accelerer() {
        $this->vitesse += 5;
    }

    public function freiner() {
        $this->vitesse -= 5;
    }

    public function klaxonner()
    {
        return "pouet Pouet";
    }


    public function getCouleur() {
        return $this->couleur;
    }

}