<?php

class Book {

    //attributs - Etat
    public $titre;
    public $nbPage;
    public $resume;
    /**
     * @var Author
     */
    public $auteur;

    private $pageEnCours = 0;

    public static $nbLivreLus = 0;


    public function __construct()
    {
        $this->auteur = new Author();
    }


    //méthodes - comportement
    public function lire() {
        if($this->pageEnCours < $this->nbPage) {
            $this->pageEnCours++;

            if($this->pageEnCours == $this->nbPage)
                Book::$nbLivreLus++;
        }
    }

    public function __toString()
    {
        return " écrit par ". $this->auteur->nom .", parle de : $this->resume.";
    }

}

class Author {
    public $nom;
    public $prenom;
    public $nationalite;
} 


$livre = new Book();
$livre->titre = 'Livre de test';
$livre->nbPage = 5;
$livre->resume = "Livre contenant des test à foison.";

$livre->auteur->nom = "Test";
$livre->auteur->prenom = "Jean";
$livre->auteur->nationalite = "Anglais";


$livre2 = new Book();
$livre2->titre = "Livre de suite";
$livre2->nbPage = 7;
$livre2->resume = "Livre contenant des tests, mais c'est la suite.";

$livre2->auteur->nom = "Test";
$livre2->auteur->prenom = "Jean";
$livre2->auteur->nationalite = "Anglais";

$livre->lire();
$livre->lire();
$livre->lire();
$livre->lire();
$livre->lire();

$livre2->lire();
$livre2->lire();
$livre2->lire();
$livre2->lire();
$livre2->lire();
$livre2->lire();
$livre2->lire();

echo "Nombre de livres terminés :" . Book::$nbLivreLus;

echo "<br/> Livre un : $livre";
echo "<br/> Livre deux : $livre2";