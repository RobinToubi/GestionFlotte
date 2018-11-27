<?php

require_once 'Controleur/ControleurVehicules.php';
require_once 'Controleur/ControleurVehicule.php';
require_once 'Controleur/ControleurEntretiens.php';
require_once 'Controleur/ControleurSetTechnicien.php';
require_once 'Controleur/ControleurSetEntretien.php';
require_once 'Vue/Vue.php';

class Routeur
{
	private $ctrlVehicules;
	private $ctrlVehicule;
	private $ctrlEntretiens;
	private $ctrlSetTechnicien;
	private $ctrlSetEntretien;

	public function __construct()
	{
		$this->ctrlVehicules = new ControleurVehicules();
		$this->ctrlVehicule = new ControleurVehicule();
		$this->ctrlEntretiens = new ControleurEntretiens();
		$this->ctrlSetTechnicien = new ControleurSetTechnicien();
		$this->ctrlSetEntretien = new ControleurSetEntretien();
	}

	// Traite une requête entrante
	public function routerRequete()
	{
		try
		{
			if (isset($_GET['action']))
			{
				if ($_GET['action'] == 'vehicule')
				{
					if (isset($_GET['immat']))
					{
						$immatriculation = $_GET['immat'];
						$this->ctrlVehicule->vehicule($immatriculation);
					}
					else
						throw new Exception("Aucune immatriculation");
				}
				elseif ($_GET['action'] == 'entretiens')
				{
					if (isset($_GET['immat']))
					{
						$immatriculation = $_GET['immat'];
						$this->ctrlEntretiens->entretiens($immatriculation);
					}
					else
						throw new Exception("Aucune immatriculation");
				}
				elseif ($_GET['action'] == 'setTech') {
					$this->ctrlSetTechnicien->vueSetTechnicien();
				}
				elseif ($_GET['action'] == 'sendTech') {
					if (isset($_POST['nom']) && isset($_POST['prenom'])
							&& $_POST['nom'] != "" && $_POST['prenom'] != "")
					{
						try {
								$this->ctrlSetTechnicien->addTechnicien($_POST['nom'],$_POST['prenom']);
						} catch (SQLException $ex) {
							$this->erreur($ex->getMessage());
						}
						$this->ctrlSetTechnicien->vueSetTechnicien();
					}
				}
				elseif($_GET['action'] == 'vueSetEntretien') {
					$this->ctrlSetEntretien->addEntretienVue();
				}
				elseif ($_GET['action'] == 'sendEntretien') {
						if (($_POST['tech'] != 'bonjour') && (isset($_POST['immat'])) && (isset($_POST['description'])))
						{
							$this->ctrlSetEntretien->sendEntretien($_POST['tech'],$_POST['description'],$_POST['immat']);
						}
						else
						{
							$this->erreur("Toutes les données n'ont pas été renseignées");
						}
				}

				else
					throw new Exception("Action non proposée");
				}
			else
			{
				$this->ctrlVehicules->vehicules();  // action par défaut
			}
		}
		catch (Exception $e)
		{
			$this->erreur($e->getMessage());
		}
	}

	// Affiche une erreur
	private function erreur($msgErreur)
	{
		$vue = new Vue("Erreur");
		$vue->generer(array('msgErreur' => $msgErreur));
	}
}