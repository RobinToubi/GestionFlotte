<?php

require_once 'Modele/Modele.php';

class Technicien extends Modele
{
    // Cette requête va ajouter un technicien à la BDD
    public function setTechnicien($nom,$prenom)
    {
        $requete = 'INSERT INTO technicien(nom,prenom) VALUES (?,?)';
        $technicien = $this->executerRequete($requete,array($nom,$prenom));
    }

    public function getTechniciens() {
        $requete = 'SELECT * FROM technicien';
        $technicien = $this->executerRequete($requete);
        if ($technicien->rowCount() != 0)
        {
          return $technicien;
        }
        else
          throw new Exception("Il n'y a pas de Techniciens !");
    }
}

?>
