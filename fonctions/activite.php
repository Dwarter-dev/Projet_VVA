<?php
require_once('lib.php');

/**
 * Récupère l'ensemble des animations
 * @return array le tableau de toutes les animations
 */
function getActivites() {
    $con = mysqli_connect("localhost","root" ,"", "gacti"); // En faire une fonction à mettre dans un fichier lib.php et le require_once dans ton index

    $req =
    "
    SELECT *
    FROM activite
    WHERE activite.DATEANNULEACT = '0000-00-00'
    ";
    /*Condition qu'il n'y ai pas de date d'annulation sinon on masque la donnée*/
    $res = mysqli_query($con, $req);
    $activite = []; //Va regrouper toutes les animations

    while($ligne = mysqli_fetch_assoc($res))
      array_push($activite, $ligne);

    mysqli_close($con);
    return $activite;
}
