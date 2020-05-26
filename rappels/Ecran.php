<?php
class Ecran
{
  public $numero;
  public $modele;
  public $prix;
  public $estAllume;

  public static $nbTotalEcrans;

  function __construct()
  {
    $this::$nbTotalEcrans++;
  }
}

$ecranUn = new Ecran();
$ecranDeux = new Ecran();

$ecranUn::$nbTotalEcrans = 8;

echo Ecran::$nbTotalEcrans;

?>
