<?php
require_once('lib.php');

/**
 * Récupère l'ensemble des animations
 * @return array le tableau de toutes les animations
 */
function getAnimations() {
    $con = mysqli_connect("localhost","root" ,"", "gacti"); // En faire une fonction à mettre dans un fichier lib.php et le require_once dans ton index

    $req =
    "
    SELECT *
    FROM animation
    ";

    $res = mysqli_query($con, $req);
    $animations = []; //Va regrouper toutes les animations

    while($ligne = mysqli_fetch_assoc($res)) 
      array_push($animations, $ligne);

    mysqli_close($con);
    return $animations;
}



  /*require_once('lib.php');
  UPDATE nomTable
  Set champ = valeur
  Where CODEANIM = valCodeAnim

  INSERT INTO nomTable
  Values
  (ch1,ch2,ch3...)*/

 ?>
