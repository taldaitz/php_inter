<?php

class Rectangle {
    public $longueur;
    public $hauteur;

    public function __construct($longueur, $hauteur)
    {
        $this->longueur = $longueur;
        $this->hauteur = $hauteur;
    }

    public function dessiner() {
        $dessin = '';

        for($j = 0; $j < $this->hauteur; $j++) {

            for($i = 0; $i < $this->longueur; $i++) {
                if($j == 0 || $j == $this->hauteur - 1) {
                    $dessin .= '* ';
                } else if($i == 0 || $i == $this->longueur - 1) {
                    $dessin .= '* ';
                } else {
                    $dessin .= '&nbsp;&nbsp;&nbsp;';
                }
            }

            $dessin .= '<br/>';
        }

        return $dessin;
    }

    public function dessinerWithGd() {

        $longueurGD = $this->longueur * 10;
        $hauteurGD = $this->hauteur * 10;

        $im = imagecreatetruecolor($longueurGD + 5, $hauteurGD + 5);
        $white = imagecolorallocate($im, 255, 255, 255);

        imagefilledrectangle($im, 2, 2, $longueurGD + 2, $hauteurGD + 2, $white);

        header('Content-Type: image/png');
        imagepng($im);
        imagedestroy($im);
    }
}