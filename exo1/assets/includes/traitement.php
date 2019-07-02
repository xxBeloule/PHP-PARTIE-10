<?php
$arrayOfErrors = [];
$nameRegex='/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{5,60}$/';
$mailRegex='/^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/';
$dateRegex='/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/';
$codecademyRegex='/^(https:\/\/www\.codecademy\.com\/).{3,}/';
$poleEmploiRegex='/^[0-9]{7}[A-Z]$/';
$phoneRegex='/^[0][0-9]{9}$/';

if (preg_match($nameRegex,$_POST['name']) && preg_match($mailRegex, $_POST['email']) && preg_match($nameRegex, $_POST['firstname']) && preg_match($nameRegex, $_POST['nationality']) && preg_match($dateRegex, $_POST['born']) ) {

if (preg_match($nameRegex,$_POST['name'])) {
  $arrayOfErrors['name'] = 'Nom invalide';
}
if (preg_match($mailRegex,$_POST['email'])) {
  $arrayOfErrors['email'] = 'Email non valide';
}
if (preg_match($nameRegex,$_POST['firstname'])) {
  $arrayOfErrors['firstname'] = 'Prénom non valide';
}
if (preg_match($nameRegex,$_POST['nationality'])) {
  $arrayOfErrors['nationality'] = 'Nationalité non valide';
}
if (preg_match($dateRegex,$_POST['born'])) {
  $arrayOfErrors['born'] = 'Date de naissance non valide';
}
if (preg_match($phoneRegex,$_POST['call'])) {
  $arrayOfErrors['call'] = 'Téléphone invalide';
}
if (preg_match($phoneRegex,$_POST['adress'])) {
  $arrayOfErrors['adress'] = 'Adresse invalide';
}
