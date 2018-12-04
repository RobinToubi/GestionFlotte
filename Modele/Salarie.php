<?php

require_once 'Modele/Modele.php';

class Salarie extends Modele
{
  public function addSalarie($surname,$name,$mail,$password)
  {
    try
    {
      $requete = 'INSERT INTO salarie(Snom,Sprenom,Smail,Spassword) VALUES (?,?,?,?)';
      $salarie = $this->executerRequete($requete,array($nom,$prenom,$mail,$password));
    }
    catch (SQLException $ex)
    {
      $resultat = $ex->getMessage();
    }
  }

  public function login($mail,$password)
  {
    $resultat = "";
    try
    {
      $requete = 'SELECT Smail,Spassword FROM salarie WHERE Smail =?';
      $salarie = $this->executerRequete($requete,array($mail,$password));
      if ($salarie->rowCount() == 1)
      {
        $resultat = $_SESSION[$mail];
      }
    }
    catch (SQLException $ex)
    {
      $resultat = $ex->getMessage();
    }

    return $resultat;
  }
  public function getSalaries()
  {
    $requete = "SELECT * FROM salarie";
    $resultats = $this->executerRequete($requete);
    return $resultats;

  }

  }

?>
