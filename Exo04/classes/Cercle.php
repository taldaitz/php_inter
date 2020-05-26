<?php

class Cercle extends Forme {

    public function __construct($diametre)
    {
        parent::__construct($diametre, $diametre);
    }

    public function generateForm($canvas, $color) {
        imagefilledellipse($canvas, $this->longueur / 2, $this->hauteur / 2, 
                $this->longueur, $this->hauteur, $color);
    }


}