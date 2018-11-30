<?php

require_once 'Modele/Salarie.php';
require_once 'Vue/Vue.php';

class ControleurHomeSignUp
{
  private $salarie;

  public function __construct()
  {
    $this->salarie = new Salarie();
  }

  public function sendSalarie($surname,$name,$mail,$password)
  {
    return $this->salarie->addSalarie($surname,$name,$mail,$password);
  }
}


?>
