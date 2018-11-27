<?php

require_once 'Modele/Entretien.php';
require_once 'Modele/Technicien.php';
require_once 'Vue/Vue.php';

class ControleurSetEntretien
{
    private $technicien;
    private $entretien;

    public function __construct()
    {
        $this->technicien = new Technicien();
        $this->entretien = new Entretien();
    }

    public function addEntretienVue()
    {
        $techniciens = $this->technicien->getTechniciens();
        $vue = new Vue("SetEntretien");
        $vue->generer(array('techniciens' => $techniciens));
    }

    public function sendEntretien($idTech,$description,$immat)
    {
        $this->entretien->setEntretien($idTech,$description,$immat);
    }
}


?>
