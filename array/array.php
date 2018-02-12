<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
      p {
        color: rgb(67, 69, 101);
      }

      h4 {
        color: rgb(171, 92, 0);
      }
    </style>
    <title>PHP / Les tableaux</title>
  </head>

  <body>
    <p><a href="http://php.net/manual/fr/ref.array.php" target="_blank">Manuel de php.net</a> </p>
      <h4>Tableau associatif</h4>
      <p>On va mettre l'étiquette (la clef) devant chaque information</p>
      <?php
      // array ()
      $utilisateur = array (
          'prenom' => 'Juan',
          'nom' => 'Pablo',
          'adresse' => '3 Rue du Paradis',
          'ville' => 'Bruxelles'
          );
          // print_r pour débuger
          echo '<pre>';
          print_r($utilisateur);
          echo '</pre>';
          echo "<hr>";
      echo $utilisateur['ville']."<br />";
      // array []
      $utilisateur = [
          'prenom' => 'Juan',
          'nom' => 'Pablo',
          'adresse' => '3 Rue du Paradis',
          'ville' => 'Bruxelles'
          ];
      echo $utilisateur['adresse']."<br />";
      echo "<hr>";
      // array
      $utilisateur['prenom'] = 'Juan';
      $utilisateur['nom'] = 'Pablo';
      $utilisateur['adresse'] = '3 Rue du Paradis';
      $utilisateur['ville'] = 'Bruxelles';
      // foreach
      foreach($utilisateur as $element)
      {
          echo $element."<br />";
      }
      echo "<hr>";
      // foreach avec clé
      foreach($utilisateur as $cle => $element)
      {
    echo "La clé: [".$cle."] vaut ".$element."<br />";
      }
      echo "<hr>";
      ?>
      <h4>Rechercher</h4>
      <?php
      $coordonnees = array (
          'prenom' => 'François',
          'nom' => 'Dupont',
          'adresse' => '3 Rue du Paradis',
          'ville' => 'Marseille');
          // print_r pour débuger
          echo '<pre>';
          print_r($coordonnees);
          echo '</pre>';
      ?>
      <p>array_key_exists : pour vérifier si une clé existe dans l'array</p>
      <?php
      if (array_key_exists('nom', $coordonnees)){
          echo 'La clé "nom" se trouve dans les coordonnées !'."<br />";
      }
      if (array_key_exists('pays', $coordonnees)){
          echo 'La clé "pays" se trouve dans les coordonnées !'."<br />";
      }
      else {
          echo 'La clé "pays" ne se trouve pas dans les coordonnées !'."<br />";
      }
      ?>
      <p>in_array : pour vérifier si une valeur existe dans l'array</p>
      <?php
      if (in_array('François', $coordonnees)){
          echo '"François" se trouve dans les coordonnées!'."<br />";
      }
      if (in_array('Marcel', $coordonnees)){
          echo '"Marcel" se trouve dans les coordonnées!'."<br />";
      }
      else{
          echo '"Marcel" ne se trouve pas dans les coordonnées!'."<br />";
      }
      ?>
  </body>
</html>
