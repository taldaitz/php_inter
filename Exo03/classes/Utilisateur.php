<?php

namespace classes;

class Utilisateur {

    public $nom;
    private $email;
    private $motDePasse;

    public $pageAcceuil;

    public function __construct($nom, $email, $mdp) 
    {
        $this->nom = $nom;
        $this->__set('email', $email);
        $this->__set('motDePasse', $mdp);
    }

    public function isEmailCorrect($email) {
        if(strpos($email, '@'))
            return true;

        return false;
    }

    public function isMotDePasseCorrect($mdp) {
        return strlen($mdp) >= 6; 
    }

    public function __set($name, $value)
    {
        if($name == 'email') {
            if($this->isEmailCorrect($value)) {
                //$this->email = $value; identique
                $this->$name = $value;
            }
        } else if($name == 'motDePasse') {
            if($this->isMotDePasseCorrect($value))
                $this->motDePasse = $value;
        }
    }

    public function __get($name)
    {
        if($name == 'email') 
            return $this->email;
    }

    public function __toString()
    {
        return "<br/> Bonjour, je m'appelle $this->nom, mon email est $this->email et 
        mon mot de passe est $this->motDePasse.";
    }

}



