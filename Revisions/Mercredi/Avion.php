<?php

class Avion extends Vehicule {

    public function accelerer() {
        $this->vitesse += 50;
    }

    public function freiner() {
        $this->vitesse -= 50;
    }

    public function decoller() {

    }

}