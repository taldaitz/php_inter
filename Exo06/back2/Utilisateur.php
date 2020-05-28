<?php

namespace back2;

class Utilisateur {
    public $id;
    public $login;
    public $password;
    public $email;

    public function getLogin() { return $this->login;}
    public function setLogin($login) { $this->login = $login; return $this;}

    public function getPassword() { return $this->password;}
    public function setPassword($password) { $this->password = $password; return $this;}

    public function getEmail() { return $this->email;}
    public function setEmail($email) { $this->email = $email; return $this;}
}