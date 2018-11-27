<?php

$this->titre = "Technicien | Ajouter";
$this->banniere = "Ajouter un Technicien";

?>

<form method="POST" action="index.php?action=sendTech">
    <input type="text" placeholder="Nom" name="nom">
    <input type="text" placeholder="Prenom" name="prenom">
    <input type="submit" value="Ajouter">
</form>
