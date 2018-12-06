<?php

$this->titre = "PanelAdmin | Modifier";
$this->banniere = "Afficher les Entretiens";

?>

<form method="POST" action="index.php?action=sendAdminEntretien">

  <?php foreach ($entretiens as $entretien): ?>
      <article>

  				<p>Id:<?= $entretien['Eid'] ?></p>
  			</a>

          <p>Technicien:<?= $entretien['Etechnicien'] ?></p>

          <p>Date:<?= $entretien['Edate'] ?></p>
        </a>

          <p>Immatriculation véhicule:<?= $entretien['Evehicule'] ?></p>

          <p>Descriptif:<?= $entretien['Edescriptif'] ?></p>

          <p>Etat:<?= $entretien['Eetat'] ?></p>
      </article>
      <hr />
  <?php endforeach; ?>
