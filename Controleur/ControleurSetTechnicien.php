<?php

require_once 'Modele/Technicien.php';
require_once 'Vue/Vue.php';

class ControleurSetTechnicien
{
    private $technicien;

    public function __construct()
    {
      $this->technicien = new Technicien();
    }

    public function vueSetTechnicien()
    {
      $vue = new Vue("SetTechnicien");
      $vue->generer(array());
    }

    public function addTechnicien($nom,$prenom)
    {
      $this->technicien->setTechnicien($nom,$prenom);
    }

}
