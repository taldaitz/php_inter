<?php

namespace classes;

use classes\Personnage;

class Combat {

    public $combattantUn;
    public $combattantDeux;
    public $nbTour;

    public static $logCombat;

    public function __construct($combattant1, $combattant2)
    {
        $this->combattantUn = $combattant1;
        $this->combattantDeux = $combattant2;
        $this->nbTour = 0;
    }

    public function tourSuivant() {
        if($this->checkCombattantMort())
            return false;

        if($this->nbTour % 2 == 0) 
            $this->lancerAttaque($this->combattantUn, $this->combattantDeux); 
        else       
            $this->lancerAttaque($this->combattantDeux, $this->combattantUn);  
            
        $this->nbTour++;
    }

    public function checkCombattantMort() {
        if($this->combattantUn->estMort()) {
            Combat::AddLog($this->combattantUn . ' est mort !!!');
            return true;
        }

        if($this->combattantDeux->estMort()) {
            Combat::AddLog($this->combattantDeux . ' est mort !!!');
            return true;
        }

        return false;
    }


    public function lancerAttaque(Personnage $attaquant, Personnage $cible) {
        $attaquant->attaquer($cible);
    }

    public static function AddLog(string $log) {
        Combat::$logCombat .= $log . '<br/>';
    }

}