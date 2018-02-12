<?php 
$url = "pagination2.php";
//$url = $url."?page=";
include("db-pagination.php");
// Nombre d'article au total dans le tableau
$nbrArticleTotal = count($contenu);
// Vérification et récupération du nombre d'article par page
if ( (isset($_GET["nbrart"])) && (ctype_digit($_GET["nbrart"])) ){
  $nbrArticleParPage = $_GET["nbrart"];
}
else{
  $nbrArticleParPage = 4; // Nombre d'article par page
}
// Nombre de page au total
$nbrDePage = ceil($nbrArticleTotal / $nbrArticleParPage);
// Vérification et récupération du numéro de la page
if ( (isset($_GET["page"])) && (ctype_digit($_GET["page"])) && ($_GET["page"] <= $nbrDePage) ){
  $numPage = $_GET["page"];
}
else{
  $numPage = 1;
}
// FONCTION PAGINATION
function pagination(){
  global $url, $numPage, $nbrDePage, $nbrArticleParPage;
  // Bouton retour première page désactivé
  if ($numPage == 1){
    echo '<div class="pagination active"> << </div>';
  }
  // Bouton lien retour première page
  else{
    echo '<div class="pagination unactive"><a href="'.$url.'?page=1&nbrart='.$nbrArticleParPage.'" class="unactive"> << </a></div>';  
  }
  for ($i=1; $i <= $nbrDePage; $i++){
    if ($numPage == $i){
      // Bouton de la page courante
      echo '<div class="pagination active">'.$i.'</div>';
    }
    else{  
      // Bouton lien vers les autres pages
      echo '<div class="pagination unactive"><a href="'.$url.'?page='.$i.'&nbrart='.$nbrArticleParPage.'" class="unactive">'.$i.'</a></div>';    
    }
  }
  // Bouton aller dernière page désactivé
  if ($numPage == $nbrDePage){
    echo '<div class="pagination active"> >> </div>';
  }
  // Bouton lien aller dernière page
  else{
    echo '<div class="pagination unactive"><a href="'.$url.'?page='.$nbrDePage.'&nbrart='.$nbrArticleParPage.'" class="unactive"> >> </a></div>';  
  }
}
// FONCTION ARTICLES
function articles(){
  global $nbrArticleParPage, $contenu, $numPage, $nbrArticleTotal, $nbrDePage;

  for ($i = $numPage*$nbrArticleParPage-$nbrArticleParPage+1; $i <= $numPage*$nbrArticleParPage; $i++){
    if ($i <= $nbrArticleTotal){
      echo '<div class="col_50">
    <div class="titre-article"><h3>'.$contenu[$i]["titre"].'</h3></div>
    <div class="texte-article">'.$contenu[$i]["letexte"].'</div>
    <div class="date-article">'.$contenu[$i]["ladate"].'</div>
    </div>';

    }
  }
}
// var_dump($contenu);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Pagination</title>
  </head>
  <body>
    <header>
      <h2>Création fonction pagination();</h2>
    </header>
    <div class="row">&nbsp;
    </div>
    <div class="row">
      <div class="col_fin centre">
        <!-- EMPLACEMENT DE LA PAGINATION -->
        <?php echo pagination(); ?>
      </div>
      <div class="col_25 centre">
        <!-- EMPLACEMENT DU FILTRE NOMBRE D'ARTICLES PAR PAGE -->
        <?php //echo filtreNbrArticleParPage(); ?>
      </div>
    </div>
    <div class="row">
      <!-- EMPLACEMENT DES ARTICLES -->
      <?php echo articles(); ?>
    </div>
    <div class="row">
      <div class="col_fin centre">
        <!-- EMPLACEMENT DE LA PAGINATION -->
        <?php echo pagination(); ?>
      </div>
      <div class="col_25 centre">
        <!-- EMPLACEMENT DU FILTRE NOMBRE D'ARTICLES PAR PAGE -->
        <?php //echo filtreNbrArticleParPage(); ?>
        filtre
      </div>
    </div>
    <div class="row">&nbsp;
    </div>
    <footer>
      <h2>Jean Luc :D, BeCode.org</h2>
    </footer>
  </body>
</html>