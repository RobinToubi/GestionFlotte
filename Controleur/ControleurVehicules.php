<?php

require_once 'Modele/Vehicule.php';
require_once 'Vue/Vue.php';

class ControleurVehicules
{
	private $vehicule;

	public function __construct()
	{
		$this->vehicule = new Vehicule();
	}

	// Affiche la liste de tous les v�hicules de la soci�t�
	public function vehicules()
	{
		$vehicules = $this->vehicule->getVehicules();
		$vue = new Vue("Vehicules");
		$vue->generer(array('vehicules' => $vehicules));
	}
}