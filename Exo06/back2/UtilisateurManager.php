<?php

namespace back2;

use PDO;

class UtilisateurManager {

    public static function saveUtilisateur(Utilisateur $user) {
        
        $db = new PDO('mysql:host=localhost;dbname=authentification;charset=utf8', 'root', '');


        $sql = "INSERT INTO utilisateur (login, password, email) VALUES (:login, :pwd, :email);";

        $stmt = $db->prepare($sql);
        $stmt->bindValue(':login', $user->getLogin(), PDO::PARAM_STR);
        $stmt->bindValue(':pwd', $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt->execute();

    }

}