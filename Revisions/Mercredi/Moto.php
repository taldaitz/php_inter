<?php

class Moto extends Vehicule implements IKlaxonneur {
    
    public function accelerer() {
        $this->vitesse += 10;
    }

    public function freiner() {
        $this->vitesse -= 10;
    }

    public function klaxonner()
    {
        return "Bip BIP";
    }
}