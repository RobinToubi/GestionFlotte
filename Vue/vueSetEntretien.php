<?php

$this->titre = "Entretien | Ajouter";
$this->banniere = "Ajouter un Entretien";

?>

<form method="POST" action="index.php?action=sendEntretien">
    <select name="tech">
        <option value='bonjour'>Selectionner un technicien</option>
        <?php foreach ($techniciens as $technicien): ?>
            <option value=<?php $technicien['Sid']; ?>><?php echo $technicien['Snom'] . ' ' . $technicien['Sprenom']; ?></option>
        <?php endforeach; ?>
    </select>
    <textarea type="text" placeholder="Description" name="desc"></textarea>
    <input type="text" placeholder="Immatriculation" name="immat">
    <input type="submit" value="Ajouter">
</form>
