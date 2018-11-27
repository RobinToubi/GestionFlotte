<?php

require_once 'Modele/Vehicule.php';
require_once 'Vue/Vue.php';

class ControleurVehicule
{
	private $vehicule;

	public function __construct()
	{
		$this->vehicule = new Vehicule();
	}

	// Affiche les d�tails d'un v�hicule
	public function vehicule($immatriculation)
	{
		$vehicule = $this->vehicule->getVehicule($immatriculation);
		$vue = new Vue("Vehicule");
		$vue->generer(array('vehicule' => $vehicule));
	}
}