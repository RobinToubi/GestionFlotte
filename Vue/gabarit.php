<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link href="css/style-Next.css" rel="stylesheet">
    <title><?=$titre ?></title>
  </head>
  <body>
    <div id="global">
      <header>
        <a href="index.php"><h1>Application de gestion de la flotte</h1></a>
        <p><?=$banniere ?></p>
        <nav class='navbar'>
          <a class='add' href="index.php?action=setTech">Ajouter un technicien</a>
          <a class='add' href='index.php?action=vueSetEntretien'>Ajouter un entretien</a>
          <a class='add' href='index.php?action=getHomePage'>GSB sans trop tôt</a>

        </nav>
      </header>
      <section>
        <?=$contenu ?>
      </section>
      <footer>
        Groupe GSB
      </footer>
    </div>
  </body>
</html>
