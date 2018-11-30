<?php

abstract class Modele
{
	//Attribut de la classe PDO d'acc�s � la base
	private $bdd;

	//Ex�cute une requ�te SQL �ventuellement param�tr�e
	protected function executerRequete($sql, $params = null)
	{
		if ($params == null)
		{
			$resultat = $this->getConnexionBdd()->query($sql);    //Ex�cution directe
		}
		else
		{
			$resultat = $this->getConnexionBdd()->prepare($sql);  //Requ�te pr�par�e
			$resultat->execute($params);
		}
		return $resultat;
	}

	//Renvoie un objet de connexion � la BD en initialisant la connexion au besoin
	private function getConnexionBdd()
	{
		if ($this->bdd == null)
		{
			$this->bdd = new PDO('mysql:host=localhost;dbname=GSB_GestionFlotte;charset=utf8','root', '');
		}
		return $this->bdd;
	}
}
