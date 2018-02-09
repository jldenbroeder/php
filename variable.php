<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    p { color: rgb(67, 69, 101); } h4 { color: rgb(171, 92, 0); }
  </style>
  <title>PHP: Variable</title>
</head>
<body>
  <p>
    <h4>Exercice 1</h4>
    <p>Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher son contenu.</p>
    <?php
    $nom = "Jean Luc";
    echo "Mon nom est ".$nom."<br>";
    ?>
    <h4>Exercice 2</h4>
    <p>Créer trois variables nom, prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu.</p>
    <?php
    $nom = "Denbroeder";
    $prenom = "Jean Luc";
    $age = 52;
    echo "Mon nom est ".$nom." ".$prenom." et j'ai ".$age." ans<br>";
    ?>
    <h4>Exercice 3</h4>
    <p> Créer une variable km. L'initialiser à 1. Afficher son contenu. Changer sa valeur par 3. Afficher son contenu. Changer sa valeur par 125. Afficher son contenu.</p>
    <?php
    $km = 1;
    echo $km." km à pied, ça use...";
    $km = 3;
    echo $km." km à pied, ça use...";
    $km = 125;
    echo $km." km à pied, ça use plus...";
     ?>
    <h4>Exercice 4</h4>
    <p> Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix. Les afficher.</p>
    <?php
    $mystring = "Ceci est une chaîne de charactères";
    $myint = 25;
    $myfloat = 12.9999;
    $myboolean = true;
    echo $mystring." : ".$myint." : ".$myfloat." : ".$myboolean."<br>";
    ?>
    <h4>Exercice 5</h4>
    <p> Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur. Donner une valeur à cette variable et l'afficher.</p>
    <?php
    $vide = null;
    echo $vide;
    echo " : ";
    $vide = 25;
    echo $vide."<br>";
     ?>
    <h4>Exercice 6</h4>
    <p> Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher : "Bonjour" + nom + ", comment vas tu ?".</p>
    <?php
    $nom = "Jean Luc";
    echo "Bonjour ".$nom.", comment vas-tu?<br>";
    ?>
    <h4>Exercice 7</h4>
    <p> Créer trois variables nom, prenom et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher : "Bonjour" + nom + prenom + ", tu as" + age + "ans".</p>
    <?php
    $nom = "Denbroeder";
    $prenom = "Jean Luc";
    $age = 52;
    echo "Bonjour ".$nom." ".$prenom." tu as ".$age." ans.<br>";
    ?>
    <h4>Exercice 8</h4>
    <p> Créer 3 variables. Dans la première mettre le résultat de l'opération 3 + 4. Dans la deuxième mettre le résultat de l'opération 5 * 20. Dans la troisième mettre le résultat de l'opération 45 / 5. Afficher le contenu des variables.</p>
    <?php
    $premier = 3 + 4;
    $second = 5 * 20;
    $trois = 45/ 5;
    echo "3 + 4 = ".$premier.", 5 * 20 = ".$second." et 45 / 5 = ".$trois."<br>";
     ?>
  </p>
</body>
</html>
