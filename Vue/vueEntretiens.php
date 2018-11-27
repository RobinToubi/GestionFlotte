<?php $this->titre = "Entretiens ".$vehicule['Vimmat']; ?>

<?php $this->banniere = 'Carnet d\'entretien'; ?>

<article>
  <header>
    <h1><?= $vehicule['Vimmat'] ?></h1>
  </header>
  Date d'achat : <time><?= $vehicule['VdateAchat'] ?></time>
  <br />
  Modèle : <?= $vehicule['Vmodele'] ?>
  <br />
  Energie : <?= $vehicule['Venergie'] ?>
  <hr />
  <h1>Liste des entretiens :</h1>
  <ul>
  <?php foreach ($entretiens as $entretien): ?>
  <li>Entretien n°<?= $entretien['Eid'] ?> du <time><?= $entretien['Edate'] ?></time></li>
  <p><?= $entretien['Edescriptif'] ?> (<?= $entretien['Etechnicien'] ?>)</p>
  <?php endforeach; ?>
  </ul>
</article>