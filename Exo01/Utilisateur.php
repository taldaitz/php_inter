<?php
class Utilisateur {

    public $nom;
    private $email;
    private $motDePasse;

    public function isEmailCorrect($email) {
        if(strpos($email, '@'))
            return true;

        return false;
    }

    public function isMotDePasseCorrect($mdp) {
        return strlen($mdp) >= 6; 
    }

    /* Encapsulation moderne
    
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }
    */

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


$user = new Utilisateur();
$user->nom = "Thomas Aldaitz";

$user->email = "taldaitz@dawan.fr";
$user->motDePasse = "toto1234";


echo 'Nom : ' . $user->nom;
echo '<br/>Email : ' . $user->email;
echo '<br/>Mdp : ' . $user->motDePasse;

echo $user;




