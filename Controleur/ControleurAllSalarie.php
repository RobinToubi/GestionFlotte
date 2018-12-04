<?php

require_once 'Modele/Salarie.php';
require_once 'Vue/Vue.php';

class ControleurAllSalarie
{
  private $salarie;

  public function __construct()
  {
    $this->salarie = new Salarie();
  }


  public function afficheSalaries()
  {
    $salaries = $this->salarie->getSalaries();
    $vue = new Vue("AllSalarie");
    $vue->generer(array('salaries' => $salaries));
  }
}
?>
