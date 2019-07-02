<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>TP 1</title>
<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-mtS696VnV9qeIoC8w/PrPoRzJ5gwydRVn0oQ9b+RJOPxE1Z1jXuuJcyeNxvNZhdx" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <h1>TP 1</h1>
  <div class="background">
    <p>Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :</p>
    <ul>
      <li>Nom</li>
      <li>Prénom</li>
      <li>Date de naissance</li>
      <li>Pays de naissance</li>
      <li>Nationalité</li>
      <li>Adresse</li>
      <li>Email</li>
      <li>Téléphone</li>
      <li>Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)</li>
      <li>Numéro pôle emploi</li>
      <li>Nombre de badge</li>
      <li>Liens codecademy</li>
      <li>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</li>
      <li>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</li>
      <li>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</li>
    </ul>
  </div>
  <div class="background2">

    <?php
    if ( empty($_POST['adress']) && empty($_POST['name']) && empty($_POST['firstname']) && empty($_POST['born']) && empty($_POST['country']) && empty($_POST['email']) && empty($_POST['nationality']) && empty($_POST['call'])
    && empty($_POST['exp']) && empty($_POST['emploi']) && empty($_POST['lien']) && empty($_POST['question']) && empty($_POST['yesno'])) {?>
      <form class="" action="index.php" method="post">
        <label for="name">Nom : </label>
        <input type="text" name="name" value="<?= $_POST['name'] ?? '' ?>" placeholder="Romain" required>
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" placeholder="Thomine" value="<?= $_POST['firstname'] ?? '' ?>" required>
        <label for="born">Date de naissance</label>
        <input type="date" name="born" required="" value="<?= $_POST['born'] ?? '' ?>">
        <label for="country">Pays de naissance : </label>
        <select name="country" required>
          <option value="France" selected="selected">France </option>
          <option value="Afghanistan">Afghanistan </option>
          <option value="Afrique Centrale">Afrique Centrale </option>
          <option value="Afrique du sud">Afrique du Sud </option>
          <option value="Albanie">Albanie </option>
          <option value="Algerie">Algerie </option>
          <option value="Allemagne">Allemagne </option>
          <option value="Andorre">Andorre </option>
          <option value="Angola">Angola </option>
          <option value="Anguilla">Anguilla </option>
          <option value="Arabie Saoudite">Arabie Saoudite </option>
          <option value="Argentine">Argentine </option>
          <option value="Armenie">Armenie </option>
          <option value="Australie">Australie </option>
          <option value="Autriche">Autriche </option>
          <option value="Azerbaidjan">Azerbaidjan </option>
          <option value="Bahamas">Bahamas </option>
          <option value="Bangladesh">Bangladesh </option>
          <option value="Barbade">Barbade </option>
          <option value="Bahrein">Bahrein </option>
          <option value="Belgique">Belgique </option>
          <option value="Belize">Belize </option>
          <option value="Benin">Benin </option>
          <option value="Bermudes">Bermudes </option>
          <option value="Bielorussie">Bielorussie </option>
          <option value="Bolivie">Bolivie </option>
          <option value="Botswana">Botswana </option>
          <option value="Bhoutan">Bhoutan </option>
          <option value="Boznie Herzegovine">Boznie Herzegovine </option>
          <option value="Bresil">Bresil </option>
          <option value="Brunei">Brunei </option>
          <option value="Bulgarie">Bulgarie </option>
          <option value="Burkina Faso">Burkina Faso </option>
          <option value="Burundi">Burundi </option>
          <option value="Caiman">Caiman </option>
          <option value="Cambodge">Cambodge </option>
          <option value="Cameroun">Cameroun </option>
          <option value="Canada">Canada </option>
          <option value="Canaries">Canaries </option>
          <option value="Cap vert">Cap Vert </option>
          <option value="Chili">Chili </option>
          <option value="Chine">Chine </option>
          <option value="Chypre">Chypre </option>
          <option value="Colombie">Colombie </option>
          <option value="Comores">Colombie </option>
          <option value="Congo">Congo </option>
          <option value="Congo democratique">Congo democratique </option>
          <option value="Cook">Cook </option>
          <option value="Coree du Nord">Coree du Nord </option>
          <option value="Coree du Sud">Coree du Sud </option>
          <option value="Costa Rica">Costa Rica </option>
          <option value="Cote d Ivoire">Côte d Ivoire </option>
          <option value="Croatie">Croatie </option>
          <option value="Cuba">Cuba </option>
          <option value="Danemark">Danemark </option>
          <option value="Djibouti">Djibouti </option>
          <option value="Dominique">Dominique </option>
          <option value="Egypte">Egypte </option>
          <option value="Emirats Arabes Unis">Emirats Arabes Unis </option>
          <option value="Equateur">Equateur </option>
          <option value="Erythree">Erythree </option>
          <option value="Espagne">Espagne </option>
          <option value="Estonie">Estonie </option>
          <option value="Etats Unis">Etats Unis </option>
          <option value="Ethiopie">Ethiopie </option>
          <option value="Falkland">Falkland </option>
          <option value="Feroe">Feroe </option>
          <option value="Fidji">Fidji </option>
          <option value="Finlande">Finlande </option>
          <option value="France">France </option>
          <option value="Gabon">Gabon </option>
          <option value="Gambie">Gambie </option>
          <option value="Georgie">Georgie </option>
          <option value="Ghana">Ghana </option>
          <option value="Gibraltar">Gibraltar </option>
          <option value="Grece">Grece </option>
          <option value="Grenade">Grenade </option>
          <option value="Groenland">Groenland </option>
          <option value="Guadeloupe">Guadeloupe </option>
          <option value="Guam">Guam </option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guernesey">Guernesey </option>
          <option value="Guinee">Guinee </option>
          <option value="Guinee Bissau">Guinee Bissau </option>
          <option value="Guinee equatoriale">Guinee Equatoriale </option>
          <option value="Guyana">Guyana </option>
          <option value="Guyane Francaise ">Guyane Francaise </option>
          <option value="Haiti">Haiti </option>
          <option value="Hawaii">Hawaii </option>
          <option value="Honduras">Honduras </option>
          <option value="Hong Kong">Hong Kong </option>
          <option value="Hongrie">Hongrie </option>
          <option value="Inde">Inde </option>
          <option value="Indonesie">Indonesie </option>
          <option value="Iran">Iran </option>
          <option value="Iraq">Iraq </option>
          <option value="Irlande">Irlande </option>
          <option value="Islande">Islande </option>
          <option value="Israel">Israel </option>
          <option value="Italie">italie </option>
          <option value="Jamaique">Jamaique </option>
          <option value="Jan Mayen">Jan Mayen </option>
          <option value="Japon">Japon </option>
          <option value="Jersey">Jersey </option>
          <option value="Jordanie">Jordanie </option>
          <option value="Kazakhstan">Kazakhstan </option>
          <option value="Kenya">Kenya </option>
          <option value="Kirghizstan">Kirghizistan </option>
          <option value="Kiribati">Kiribati </option>
          <option value="Koweit">Koweit </option>
          <option value="Laos">Laos </option>
          <option value="Lesotho">Lesotho </option>
          <option value="Lettonie">Lettonie </option>
          <option value="Liban">Liban </option>
          <option value="Liberia">Liberia </option>
          <option value="Liechtenstein">Liechtenstein </option>
          <option value="Lituanie">Lituanie </option>
          <option value="Luxembourg">Luxembourg </option>
          <option value="Lybie">Lybie </option>
          <option value="Macao">Macao </option>
          <option value="Macedoine">Macedoine </option>
          <option value="Madagascar">Madagascar </option>
          <option value="Madère">Madère </option>
          <option value="Malaisie">Malaisie </option>
          <option value="Malawi">Malawi </option>
          <option value="Maldives">Maldives </option>
          <option value="Mali">Mali </option>
          <option value="Malte">Malte </option>
          <option value="Man">Man </option>
          <option value="Mariannes du Nord">Mariannes du Nord </option>
          <option value="Maroc">Maroc </option>
          <option value="Marshall">Marshall </option>
          <option value="Martinique">Martinique </option>
          <option value="Maurice">Maurice </option>
          <option value="Mauritanie">Mauritanie </option>
          <option value="Mayotte">Mayotte </option>
          <option value="Mexique">Mexique </option>
          <option value="Micronesie">Micronesie </option>
          <option value="Midway">Midway </option>
          <option value="Moldavie">Moldavie </option>
          <option value="Monaco">Monaco </option>
          <option value="Mongolie">Mongolie </option>
          <option value="Montserrat">Montserrat </option>
          <option value="Mozambique">Mozambique </option>
          <option value="Namibie">Namibie </option>
          <option value="Nauru">Nauru </option>
          <option value="Nepal">Nepal </option>
          <option value="Nicaragua">Nicaragua </option>
          <option value="Niger">Niger </option>
          <option value="Nigeria">Nigeria </option>
          <option value="Niue">Niue </option>
          <option value="Norfolk">Norfolk </option>
          <option value="Norvege">Norvege </option>
          <option value="Nouvelle Caledonie">Nouvelle Caledonie </option>
          <option value="Nouvelle Zelande">Nouvelle Zelande </option>
          <option value="Oman">Oman </option>
          <option value="Ouganda">Ouganda </option>
          <option value="Ouzbekistan">Ouzbekistan </option>
          <option value="Pakistan">Pakistan </option>
          <option value="Palau">Palau </option>
          <option value="Palestine">Palestine </option>
          <option value="Panama">Panama </option>
          <option value="Papouasie Nouvelle Guinee">Papouasie Nouvelle Guinee </option>
          <option value="Paraguay">Paraguay </option>
          <option value="Pays Bas">Pays Bas </option>
          <option value="Perou">Perou </option>
          <option value="Philippines">Philippines </option>
          <option value="Pologne">Pologne </option>
          <option value="Polynesie">Polynesie </option>
          <option value="Porto Rico">Porto Rico </option>
          <option value="Portugal">Portugal </option>
          <option value="Qatar">Qatar </option>
          <option value="Republique Dominicaine">Republique Dominicaine </option>
          <option value="Republique Tcheque">Republique Tcheque </option>
          <option value="Reunion">Reunion </option>
          <option value="Roumanie">Roumanie </option>
          <option value="Royaume Uni">Royaume Uni </option>
          <option value="Russie">Russie </option>
          <option value="Rwanda">Rwanda </option>
          <option value="Sahara Occidental">Sahara Occidental </option>
          <option value="Sainte Lucie">Sainte Lucie </option>
          <option value="Saint Marin">Saint Marin </option>
          <option value="Salomon">Salomon </option>
          <option value="Salvador">Salvador </option>
          <option value="Samoa Occidentales">Samoa Occidentales</option>
          <option value="Samoa Americaine">Samoa Americaine </option>
          <option value="Sao Tome et Principe">Sao Tome et Principe </option>
          <option value="Senegal">Senegal </option>
          <option value="Seychelles">Seychelles </option>
          <option value="Sierra Leone">Sierra Leone </option>
          <option value="Singapour">Singapour </option>
          <option value="Slovaquie">Slovaquie </option>
          <option value="Slovenie">Slovenie</option>
          <option value="Somalie">Somalie </option>
          <option value="Soudan">Soudan </option>
          <option value="Sri Lanka">Sri Lanka </option>
          <option value="Suede">Suede </option>
          <option value="Suisse">Suisse </option>
          <option value="Surinam">Surinam </option>
          <option value="Swaziland">Swaziland </option>
          <option value="Syrie">Syrie </option>
          <option value="Tadjikistan">Tadjikistan </option>
          <option value="Taiwan">Taiwan </option>
          <option value="Tonga">Tonga </option>
          <option value="Tanzanie">Tanzanie </option>
          <option value="Tchad">Tchad </option>
          <option value="Thailande">Thailande </option>
          <option value="Tibet">Tibet </option>
          <option value="Timor Oriental">Timor Oriental </option>
          <option value="Togo">Togo </option>
          <option value="Trinite et Tobago">Trinite et Tobago </option>
          <option value="Tristan da cunha">Tristan de cuncha </option>
          <option value="Tunisie">Tunisie </option>
          <option value="Turkmenistan">Turmenistan </option>
          <option value="Turquie">Turquie </option>
          <option value="Ukraine">Ukraine </option>
          <option value="Uruguay">Uruguay </option>
          <option value="Vanuatu">Vanuatu </option>
          <option value="Vatican">Vatican </option>
          <option value="Venezuela">Venezuela </option>
          <option value="Vierges Americaines">Vierges Americaines </option>
          <option value="Vierges Britanniques">Vierges Britanniques </option>
          <option value="Vietnam">Vietnam </option>
          <option value="Wake">Wake </option>
          <option value="Wallis et Futuma">Wallis et Futuma </option>
          <option value="Yemen">Yemen </option>
          <option value="Yougoslavie">Yougoslavie </option>
          <option value="Zambie">Zambie </option>
          <option value="Zimbabwe">Zimbabwe </option>
        </select>
        <label for="nationality">Nationalité</label>
        <input type="text" name="nationality" placeholder="Française" required="" value="<?= $_POST['nationality'] ?? '' ?>">
        <label for="adress">Adresse :</label>
        <input type="text" name="adress" placeholder="12 rue de la paix 75000 Paris" required>
        <label for="email">Email :</label>
        <input type="email" name="email" placeholder="marie@paris.fr" required>
        <label for="call">Numéro de téléphone :</label>
        <input type="number" name="call" required>
        <label for="exp">Diplôme :</label>
        <select class="" name="exp" required>
          <option value="Sans diplôme">Sans diplôme :</option>
          <option value="Bac">Bac</option>
          <option value="Bac +2">Bac +2</option>
          <option value="Bac +3">Bac +3</option>
          <option value="Supérieur">Supérieur</option>
        </select>
        <label for="emploi">Numéro pole emploi :</label>
        <input type="text" name="emploi" required>
        <label for="lien">Liens codecademy :</label>
        <input type="url" name="lien" value="" required>
        <label for="question">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
        <textarea name="question" rows="5" cols="55" required></textarea>
        <label for="question2">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
        <textarea name="question2" rows="5" cols="55" required></textarea>
        <label for="yesno">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
        <select class="" name="yesno" required>
          <option value="Yes">Oui</option>
          <option value="No">Non</option>
        </select>
        <input class="submit" type="submit" name="sumbit" value="Valider">
      </form>
    <?php } else {
      $nameRegex='/^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]{5,60}$/';
      $mailRegex='/^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/';
      $dateRegex='/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/';
      $codecademyRegex='/^(https:\/\/www\.codecademy\.com\/).{3,}/';
      $poleEmploiRegex='/^[0-9]{7}[A-Z]$/';
      $phoneRegex='/^[0][0-9]{9}$/';
      if (preg_match($nameRegex,$_POST['name']) && preg_match($mailRegex, $_POST['email']) && preg_match($nameRegex, $_POST['firstname']) && preg_match($nameRegex, $_POST['nationality']) && preg_match($dateRegex, $_POST['born']) ) {
        echo "Bonjour";
        ?>
        <p>Nom : <?= strip_tags($_POST['name']); ?></p>
        <p>Prénom : <?= strip_tags($_POST['firstname']); ?></p>
        <p>Date de naissance : <?= strip_tags($_POST['born']); ?></p>
        <p>Pays de naissance : <?= strip_tags($_POST['country']); ?></p>
        <p>Adresse mail : <?= strip_tags($_POST['email']); ?></p>
        <p>Nationalité : <?= strip_tags($_POST['nationality']); ?></p>
        <p>Numéro de téléphone : <?= strip_tags($_POST['call']); ?></p>
        <p>Diplôme : <?= strip_tags($_POST['exp']); ?></p>
        <p>Numéro pole emploi : <?= $_POST['emploi']; ?></p>
        <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? : <?= strip_tags($_POST['question']); ?></p>
        <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique : <?= $_POST['question2']?></p>
        <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? : <?= $_POST['yesno']; ?></p>
      <?php  } else {
        echo "Error";
      }}
      ?>

    </div>
  </body>
  </html>
