<?php

namespace classes;

class Admin extends Utilisateur {

    public function __construct($nom, $email, $mdp)
    {
        parent::__construct($nom, $email, $mdp);
    }

    public function isMotDePasseCorrect($mdp)
    {
        return strlen($mdp) >= 10; 
    }


}