<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Recherche par mot clé </title>
  </head>

  <body>
<p> Tapez ici votre mot clé pour rechercher dans notre base de donnée ! </p>

<?php
  if (isset($_POST['motcle']) && !empty($_POST['motcle'])) {
      $motcle = htmlspecialchars($_POST['motcle']);
      echo "<br>Voici le mot clé que vous avez recherché ! ". $motcle . "<p>";
  }
?>

<form action="" method="POST">

    <label>Mot clé <input type ="text" name ="motcle" size="100" /></label><p>

    <input type="submit" value="SEARCH" />

 <p>
</form>

 </body>
</html>