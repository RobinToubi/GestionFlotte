<?php

require_once 'Modele/Modele.php';

class Entretien extends Modele
{
	// Renvoie la liste des entretiens associ�s � un v�hicule
	public function getEntretiens($immat)
	{
		$requete = 'SELECT * FROM Entretien WHERE Eimmat=?';
		$entretiens = $this->executerRequete($requete,array($immat));
		return $entretiens;
	}

	public function setEntretien($idTech,$description,$immat)
	{
		$requete = 'INSERT INTO Entretien VALUES '
	}
}
