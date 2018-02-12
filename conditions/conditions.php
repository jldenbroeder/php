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
    <title>PHP/ Exercices dirigés: les conditions</title>
  </head>

  <body>
    <p>
      <h4>0. Représente en code le fait de devoir ranger sa chambre si elle est sale.</h4>
      <p>Astuce: Initialise une variable booléenne $chambre_est_sale puis teste là dans une condition. Si elle est vraie, affiche "Range ta chambre, on dirait la cage d'un bonobo!". Sinon, affiche "Ta chambre est trop propre, vis un peu!". Fait? Bravo. A
        présent, modifie ton script pour représenter plutôt comment tes parents s'exprimeraient. Ensuite, rendons le script un peu plus subtil en permettant une gradation. Ta chambre pourrait être soit "dégoutante", "sale", "en ordre", "immaculée", "maniaque".
        Utilise une structure if/ elseif / else pour cela. Invente les messages à afficher en fonction de chaque cas de figure. </p>
      <?php
    $chambre_est_sale = true;
    if ($chambre_est_sale == true){
      echo "Range ta chambre pour avoir ton dimanche";
    }
    else{
      echo "Ta chambre est propre, ta copine vient ce soir?";
    }
    echo "<br>";
    $chambre_est_sale = "dégoutante";
    if ($chambre_est_sale == "dégoutante"){
      echo "Ca pue, un vrai taudit";
    }
    elseif ($chambre_est_sale == "sale"){
      echo "Un petit coup de nettoyage s'impose";
    }
    elseif ($chambre_est_sale == "ordre"){
      echo "C'est bien";
    }
    elseif ($chambre_est_sale == "immaculée"){
      echo "Pfff, toujours propre";
    }
    else{
      echo "Trop propre, espèce de maniaque";
    }
    echo "<br>";
    ?>
        <h4>1. Affiche un message de salutation différent selon l'heure courante.</h4>
        <p> Si l'heure est entre 05h00 et 9h00 du matin, affiche "Bonjour!". Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!". Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!". Si l'heure est entre 16h01 et 21h00, affiche "Bonne
          soirée!". Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!". Astuce: Exploite le fait que l'on puisse combiner des conditions (via les opérateurs AND / OR).</p>
        <?php
    $heure = 5;
    if ($heure >= 5 AND $heure <= 9){
      $resultat = "Bonjour!";
    }
    elseif ($heure >9 && $heure <= 12){
      $resultat = "Bonne journée!";
    }
    elseif ($heure >12 && $heure <= 16){
      $resultat = "Bon après-midi!";
    }
    elseif ($heure >16 && $heure <= 21){
      $resultat = "Bonne soirée!";
    }
    else{
      $resultat = "Bonne nuit!";
    }
    echo $resultat."<br>";
    ?>
          <h4>2. Affiche une salutation différente selon l'âge de l'utilisateur.</h4>
          <p>Crée un petit formulaire contenant une seule question: "Quel est votre âge ?" (champ de type Number). Méthode: GET Affiche un message différent selon la réponse au formulaire. Si l'âge est inférieur à 12 ans, affiche "Salut petit!" Si l'âge
            est entre 12 et 18 ans, affiche "Salut l'ado!" Si l'âge est entre 18 et 115 ans, affiche "Salut l'adulte!" Si l'âge est supérieur à 115 ans, affiche "Wow! Toujours vivant?"
            <h4>3. Affiche une salutation différente selon l'âge et le genre de l'utilisateur.</h4>
            <p>Complète le formulaire de l'exercice précédent en ajoutant une deuxième question : "Homme ou Femme?" (champ de type Radio). Si le genre est féminin, adapte la réponse de l'âge correspondant au genre féminin. Par exemple, si l'âge est entre
              12 et 18 ans et le genre féminin, affiche "Salut l'adolescente!" sinon affiche "Salut l'adolescent!". Idem pour les autres tranches d'âge. Astuce: Exploite le fait que l'on puisse mettre des conditions dans des conditions.</p>
          </p><a name="age"></a>
          <form action="conditions.php" method="get">
            <h4>Quel est votre âge ?</h4> <input type="number" name="salutation" value="" required> <input type="radio" name="sexe" value="homme" required> Homme <input type="radio" name="sexe" value="femme" required> Femme <button type="submit" name="button" value="age">OK</button>            </form>
          <?php
if ( (isset($_GET['salutation'])) && (isset($_GET['sexe'])) ){
  $age = $_GET['salutation'];
  $genre = $_GET['sexe'];
  if ($age < 12){
    echo "Salut petit"; if ($genre == "femme"){ echo "e";} echo "!";
  }
  elseif ($age >= 12 && $age < 18){
    if ($genre == "femme"){
      echo "Salut l'adolescente!";
    }
    else{
      echo "Salut l'ado!";
    }
  }
  elseif ($age >= 18 && $age < 115){
    echo "Salut l'adulte!";
  }
  elseif ($age >= 115){
    echo "Wow! Toujours vivant"; if ($genre == "femme"){ echo "e";} echo "?";
  }
  else{
    echo "Etrange votre âge!";
  }
}
     ?>
            <h4>5. Retour à l'école de l'échec et du jugement</h4>
            <p> Crée un petit formulaire qui réagit à la note de l'étudiant. Si la note est égale à 1, 2 ou 3, affiche "Ce travail est nul." Si la note est égale à 6, 7, 8 ou 9, affiche "Ce travail n'est pas terrible." Si la note est égale à 10, affiche "Tout
              juste!" Si la note est égale à 11, 12, 13 ou 14, affiche "C'est pas mal." Si la note est 15, 16, 17, ou 18, affiche "Bravo!". Si la note est 19 ou 20, affiche "Police! Arrêtez ce tricheur!".</p>
            <?php

     ?>
              <h4>10. Exercice ternaire</h4>
              <p>Dans un script ternaire.php déclare à l'aide d'une expression ternaire, une variable $bonjour dont la valeur est un message de salutation selon qu'une autre variable $genre soit 'H' ou 'F'. Termine par afficher la valeur de $bonjour.</p>
              <?php
    $genre = "H";
    $bonjour = ($genre == "F") ? "Salut mec" : "Bonjour gente Dame";
    echo $bonjour."<br>";
    ?> </p>
  </body>

</html>
