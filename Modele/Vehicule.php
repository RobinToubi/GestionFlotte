<?php

require_once 'Modele/Modele.php';

class Vehicule extends Modele
{
	//Renvoie la liste de tous les véhicules de la société
	public function getVehicules()
	{
		$requete = 'select Vimmat as immat, VdateAchat as date, Vmodele as modele, Venergie as energie from VEHICULE order by VdateAchat';
		$resultats = $this->executerRequete($requete);						
		return $resultats;
	}
	
	//Renvoie le détail d'un véhicule
	public function getVehicule($immat)
	{
		$requete = 'SELECT * FROM Vehicule WHERE Vimmat=?';
		$vehicule = $this->executerRequete($requete,array($immat));
		if ($vehicule->rowCount() == 1)
			return $vehicule->fetch();  // Retourne la première ligne de résultat
		else
			throw new Exception("Aucun véhicule ne correspond à l'immatriculation '$immat'");
	}
}