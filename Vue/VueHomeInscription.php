<?php $this->titre = "Home | Registration"; ?>

<form method="POST" action="index.php?home=sendRegistration">
  <label for="name">Nom :</label>
  <input type="text" id="name" name="user_name"  placeholder="Name" />

  <label for="name">Prénom :</label>
  <input type="text"  name="user_firstName"  placeholder="FirstName" />

  <label for="mail">Mot de passe :</label>
  <input type="password" name="passLogin" placeholder="Password"/>

    <label for="mail">e-mail :</label>
    <input type="email"  name="user_mail"  placeholder="E-mail"/>

    <input type="submit" value="S'inscrire">
</form>
