<?php

require_once 'Modele/Vehicule.php';
require_once 'Modele/Entretien.php';
require_once 'Vue/Vue.php';

class ControleurEntretienDuSalarie
{
	private $salarie;
	private $entretien;

	public function __construct()
	{
		$this->salarie = new Salarie();
		$this->entretien = new Entretien();
	}

	public function entretien($Etechnicien)
	{
        
		$entretiens = $this->entretien->getEntretiens($Etechnicien);
		$vue = new Vue("SalarieEntretien");
		$vue->generer(array('entretiens' => $entretiens));
	}
}