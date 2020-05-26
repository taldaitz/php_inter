<?php

class Rectangle extends Forme {

    public function generateForm($canvas, $color) {
        imagefilledrectangle($canvas, 2, 2, $this->longueur + 2, $this->hauteur + 2, $color);
    }
}