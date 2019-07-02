<?php
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>TP 3</title>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/sketchy/bootstrap.min.css" rel="stylesheet" integrity="sha384-N8DsABZCqc1XWbg/bAlIDk7AS/yNzT5fcKzg/TwfmTuUqZhGquVmpb5VvfmLcMzp" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-dark">
  <div class="container-fluid">
    <div class="bg-white border border-dark m-2 text-center p-5 rounded">
      <h1>Faire une fonction qui permet d'afficher les données des tableaux suivants :</h1>
      <pre>
        $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
        $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
        $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
        $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
      </pre>
      <p>Les afficher tous sur une même page.</p>
      </div>
      <div class="row">
              <?php  function displayData($portrait) {?>
      <div class="d-flex card col-12 col-sm-6 col-md-3 m-5">
        <p class="text-center"><?= $portrait['name'] . ' '.$portrait['firstname']; ?></p>
        <img class="card-img-top" src="<?= $portrait['portrait']?>" alt="Image de <?= $portrait['name'] . ' '.$portrait['firstname']; ?>"></img>
      </div>
    <?php }
    displayData($portrait1);
    displayData($portrait2);
    displayData($portrait4);
    displayData($portrait3);
    ?>
    </div>
    </div>
  </body>
  </html>
