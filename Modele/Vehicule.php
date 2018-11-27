<?php

require_once 'Modele/Modele.php';

class Vehicule extends Modele
{
	//Renvoie la liste de tous les v�hicules de la soci�t�
	public function getVehicules()
	{
		$requete = 'select Vimmat as immat, VdateAchat as date, Vmodele as modele, Venergie as energie from VEHICULE order by VdateAchat';
		$resultats = $this->executerRequete($requete);						
		return $resultats;
	}
	
	//Renvoie le d�tail d'un v�hicule
	public function getVehicule($immat)
	{
		$requete = 'SELECT * FROM Vehicule WHERE Vimmat=?';
		$vehicule = $this->executerRequete($requete,array($immat));
		if ($vehicule->rowCount() == 1)
			return $vehicule->fetch();  // Retourne la premi�re ligne de r�sultat
		else
			throw new Exception("Aucun v�hicule ne correspond � l'immatriculation '$immat'");
	}
}