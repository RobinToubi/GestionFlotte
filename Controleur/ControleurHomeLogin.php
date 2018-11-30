<?php

require_once 'Modele/Salarie.php';
require_once 'Vue/Vue.php';

class ControleurHomeLogin
{
  private $salarie;

  public function __construct()
  {
    $this->salarie = new Salarie();
  }

  public function sendLogin($mail,$password)
  {
    return $this->salarie->login($mail,$password);
  }
}

?>
