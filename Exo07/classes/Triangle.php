<?php

class Triangle extends Forme {

    public function generateForm($canvas, $color) {
        imagefilledpolygon($canvas, 
                            $this->computePoints(), 
                            3, 
                            $color
                        );
    }

    public function computePoints() {
        return [
            0, $this->hauteur,
            $this->longueur / 2, 0,
            $this->longueur, $this->hauteur
        ];
    }
}