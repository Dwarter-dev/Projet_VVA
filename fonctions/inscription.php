<?php
require_once('lib.php');

/**
 * Récupère l'ensemble des animations
 * @return array le tableau de toutes les animations
 */
function getInscription() {
    $con = mysqli_connect("localhost","root" ,"", "gacti"); // En faire une fonction à mettre dans un fichier lib.php et le require_once dans ton index

    $req =
    "
    SELECT *
    FROM inscription
    ";

    $res = mysqli_query($con, $req);
    $inscription = []; //Va regrouper toutes les animations

    while($ligne = mysqli_fetch_assoc($res))
      array_push($inscription, $ligne);

    mysqli_close($con);
    return $inscription;
}
