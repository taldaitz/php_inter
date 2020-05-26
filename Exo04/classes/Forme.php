<?php

abstract class Forme {
    public $longueur;
    public $hauteur;

    public function __construct($longueur, $hauteur)
    {
        $this->longueur = $longueur;
        $this->hauteur = $hauteur;
    }



    abstract function generateForm($canvas, $color);

    public function dessiner() {
        $im = imagecreatetruecolor($this->longueur + 5, $this->hauteur + 5);
        $white = imagecolorallocate($im, 255, 255, 255);

        $this->generateForm($im, $white);

        header('Content-Type: image/png');
        imagepng($im);
        imagedestroy($im);
    }
}