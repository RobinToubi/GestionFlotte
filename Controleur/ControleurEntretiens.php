<?php

require_once 'Modele/Vehicule.php';
require_once 'Modele/Entretien.php';
require_once 'Vue/Vue.php';

class ControleurEntretiens
{
	private $vehicule;
	private $entretien;

	public function __construct()
	{
		$this->vehicule = new Vehicule();
		$this->entretien = new Entretien();
	}

	// Affiche la liste de tous les véhicules de la société
	public function entretiens($immatriculation)
	{
		$vehicule = $this->vehicule->getVehicule($immatriculation);
		$entretiens = $this->entretien->getEntretiens($immatriculation);
		$vue = new Vue("Entretiens");
		$vue->generer(array('vehicule' => $vehicule, 'entretiens' => $entretiens));
	}
}