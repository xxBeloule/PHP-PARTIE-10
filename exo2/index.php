<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body class="back">
    <?php
    $nameRegex='/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{3,60}$/';
    $ageRegex='/[0-9]{2,3}$/';
    ?>
    <div class="backgroundDiv">
      <p>Faire une page permettant de saisir les informations suivantes :</p>
      <ul>
        <li>Civilité (liste déroulante)</li>
        <li>Nom</li>
        <li>Prénom</li>
        <li>Age</li>
        <li>Société</li>
      </ul>
      <p>A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.</p>
    </div>
    <div class="background2">
      <form class="form" action="index.php" method="post">
        <select class="" name="sexe">
          <option value="" selected="selected">Sexe</option>
          <option value="1" <?php if (isset($_POST['sexe']) && $_POST['sexe'] == 1) echo 'selected' ?>>Homme</option>
          <option value="2" <?php if (isset($_POST['sexe']) && $_POST['sexe'] == 2) echo 'selected' ?>>Femme</option>
          </select>
          <label for="name">Nom :</label>
          <input type="text" name="name" placeholder="Thomine" value="<?= $_POST['name'] ?>">
          <label for="firstname">Prénom :</label>
          <input type="text" name="firstname" placeholder="Romain" value="<?= $_POST['firstname'] ?>">
          <label for="age"> Age :</label>
          <input type="number" name="age" placeholder="18" max="100" min="10" value="<?= $_POST['age'] ?>">
          <label for="soc">Société :</label>
          <input type="text" name="soc" value="<?= $_POST['soc'] ?>">
          <input type="submit" class="submit" value="Valider">
      </form>
      <div class="diplayData">
        <p class="data">Sexe :</p>
        <p><?php if($_POST['sexe'] == 1) echo "Homme"; if ($_POST['sexe'] == 2) echo "Femme"; ?></p>
        <p class="data">Nom :</p>
        <p><?= $_POST['name'] ?></p>
        <p class="data">Prénom : </p>
        <p><?= $_POST['firstname'] ?></p>
        <p class="data">Age :</p>
        <p><?= $_POST['age'] ?></p>
        <p class="data">Société :</p>
        <p><?= $_POST['soc'] ?></p>

      </div>
    </div>
  </body>
</html>
