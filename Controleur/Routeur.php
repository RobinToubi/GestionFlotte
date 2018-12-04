<?php

foreach (glob("Controleur/*.php") as $filename)
{
	if ($filename != "Controleur/Routeur.php") { include $filename;}
}

/*
require_once 'Controleur/ControleurVehicules.php';
require_once 'Controleur/ControleurVehicule.php';
require_once 'Controleur/ControleurEntretiens.php';
require_once 'Controleur/ControleurSetTechnicien.php';
require_once 'Controleur/ControleurSetEntretien.php';
require_once 'Controleur/ControleurHome.php';
require_once 'Controleur/'
*/

require_once 'Vue/Vue.php';

class Routeur
{
	private $ctrlVehicules;
	private $ctrlVehicule;
	private $ctrlEntretiens;
	private $ctrlSetTechnicien;
	private $ctrlSetEntretien;
	private $ctrlHome;
	private $ctrlHomeSignUp;
	private $ctrlAllSalarie;
	private $ctrlAllEntretiens;

	public function __construct()
	{
		$this->ctrlVehicules = new ControleurVehicules();
		$this->ctrlVehicule = new ControleurVehicule();
		$this->ctrlEntretiens = new ControleurEntretiens();
		$this->ctrlSetTechnicien = new ControleurSetTechnicien();
		$this->ctrlSetEntretien = new ControleurSetEntretien();
		$this->ctrlHome = new ControleurHome();
		$this->ctrlHomeSignUp = new ControleurHomeSignUp();
		$this->ctrlAllSalarie = new ControleurAllSalarie();
		$this->ctrlAllEntretiens= new ControleurAllEntretiens();
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
				elseif($_GET['action'] == 'sendAdmin') {
					try {
					$this->ctrlAllSalarie->afficheSalarie();
				} catch (SQLException $ex) {
					$this->erreur($ex->getMessage());
				}
			}
				elseif($_GET['action'] == 'sendAdminEntretien') {
					try {
					$this->ctrlAllEntretiens->afficheEntretien();
				} catch (SQLException $ex) {
					$this->erreur($ex->getMessage());
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
			elseif (isset($_GET['home']))
			{
				if ($_GET['home'] == 'loginPage')
				{
					$this->ctrlHome->getLoginPage();
				}
				elseif ($_GET['home'] == 'sendLogin')
				{
					$this->ctrlHome->sendLogin();
				}
				elseif ($_GET['home'] == 'registerPage')
				{
					$this->ctrlHome->getSignUpPage();
				}
				elseif ($_GET['home'] == 'sendRegistration')
				{
					if ((isset($_POST['surname'])) && (isset($_POST['name']))
							&& (isset($_POST['password'])) && (isset($_POST['mail'])))
					{
							$this->ctrlHomeSignUp->sendSalarie($_POST['surname'],$_POST['name'],$_POST['password'],$_POST['mail']);
					}
					else
					{
							$this->erreur("Toutes les données n'ont pas été renseignées");
					}
				}
			}
			else
			{
				$this->ctrlHome->getHomePage();  // action par défaut
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
