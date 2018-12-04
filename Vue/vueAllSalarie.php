<?php

$this->titre = "PanelAdmin | Modifier";
$this->banniere = "Afficher les Salarie";

?>

<form method="POST" action="index.php?action=getAllSalaries">

  <?php foreach ($salaries as $salarie): ?>
      <article>

  				<p>Nom:<?= $salarie['Snom'] ?></p>
  			</a>

          <p>Prenom:<?= $salarie['Sprenom'] ?></p>

          <p>Mail:<?= $salarie['Smail'] ?></p>
        </a>

          <p>Password:<?= $salarie['Spassword'] ?></p>
      </article>
      <hr />
  <?php endforeach; ?>
