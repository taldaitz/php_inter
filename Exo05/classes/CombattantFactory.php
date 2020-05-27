<?php

namespace classes;

class CombattantFactory {

    public static function createInstance(string $classe, string $nom) : Personnage {
        switch($classe) {
            case 'Guerrier' : 
                return new Guerrier($nom);
    
            case 'Magicien' : 
                return new Magicien($nom);
        }
    }

}