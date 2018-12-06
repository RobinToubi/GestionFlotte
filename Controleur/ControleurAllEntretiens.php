<?php

require_once 'Modele/Entretien.php';
require_once 'Modele/Technicien.php';
require_once 'Vue/Vue.php';

class ControleurAllEntretiens
{
  private $entretien;

  public function __construct()
  {
    $this->entretien = new Entretien();
  }


  public function afficheEntretiens()
  {
    $entretiens = $this->entretien->getAllEntretiens();
    $vue = new Vue("AllEntretien");
    $vue->generer(array('entretiens' => $entretiens));
  }
}
?>
