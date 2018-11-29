<?php $this->titre = "Home | Registration"; ?>

<form method="POST" action="index.php?home=sendRegistration">
  <label for="name">Nom :</label>
  <input type="text" id="name" name="surname"  placeholder="Name" />

  <label for="name">Prénom :</label>
  <input type="text"  name="name" placeholder="FirstName" />

  <label for="mail">Mot de passe :</label>
  <input type="password" name="password" placeholder="Password"/>

    <label for="mail">e-mail :</label>
    <input type="email"  name="mail"  placeholder="E-mail"/>

    <input type="submit" value="S'inscrire">
</form>
