<?php 
//function fichierExist(){
//  // SI FICHIER EXISTE
//  $fichier1="fichier1.txt"; 
//  if (file_exists("$fichier1")) { 
//    echo "Le fichier ".$fichier1." existe ...<br />"; } 
//  else { 
//    echo "Le fichier ".$fichier1." n'existe pas !<br />"; 
//  }
//}

function liste(){ 
// OUVERTURE DU DOSSIER
$dossier = opendir(".");
// BOUCLE DE LECTURE
while ( $fichier = readdir($dossier) ) {
// VERIFICATION DE L'EXTENSION
  if ( strrchr($fichier, '.') == ".php" ) {
    echo $fichier."<br />";
  }
}
// FERMETURE DU DOSSIER
closedir($dossier);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Manipulation de fichiers</title>
  </head>
  <body>
    <header>
      <h2>Manipulation de fichiers</h2>
    </header>
    <div class="row">&nbsp;
    </div>
        <div class="row">
           <div class="col_fin">
        <!-- AJOUT D'UN NOUVEAU FICHIER -->
        <form name="form" method="post" action="">
          <input type="text" name="new" placeholder="Nom du fichier" > .txt <br />
          <textarea name="content" id="content" cols="30" rows="5"></textarea><br />
          <input type="submit" name="submit" value="Ajouter"/>
        </form>

      </div>   
    </div>
    <div class="row">
      <div class="col_fin">
        <!-- EMPLACEMENT DE LA LISTE DES FICHIERS -->
        <?php echo liste(); ?>
      </div>
    </div>

    <div class="row">&nbsp;
    </div>
    <footer>
      <h2>Jean Luc :D, BeCode.org</h2>
    </footer>
  </body>
</html>