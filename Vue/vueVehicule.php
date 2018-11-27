<?php $this->titre = "Véhicule ".$vehicule['Vimmat']; ?>

<?php $this->banniere = 'Détails du véhicule'; ?>

<article>
  <header>
    <h1><?= $vehicule['Vimmat'] ?></h1>
  </header>
  Date d'achat : <time><?= $vehicule['VdateAchat'] ?></time>
  <br />
  Modèle : <?= $vehicule['Vmodele'] ?>
  <br />
  Energie : <?= $vehicule['Venergie'] ?>
  <br />
  <a href="<?= "index.php?action=entretiens&immat=" . $vehicule['Vimmat'] ?>">
	<h1>Carnet d'entretien</h1>
  </a>
</article>
<hr />