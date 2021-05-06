<?php
require_once('lib.php');

/**
 * Récupère l'ensemble des animations
 * @return array le tableau de toutes les animations
 */
function getInscription() {
    $con = mysqli_connect("localhost","root" ,"", "gacti"); // En faire une fonction à mettre dans un fichier lib.php et le require_once dans ton index
    $ID = intval($_GET['id']);
    $req =
    '
    SELECT i.NOINSCRIP,i.USER,i.NOACT,i.DATEINSCRIP,i.DATEANNULE
    FROM inscription i, activite
    WHERE i.DATEANNULE = "0000-00-00"
    AND i.NOACT = activite.NOACT
    AND activite.DATEANNULEACT = "0000-00-00"
    AND i.NOACT = "'.$ID.'"';
    /*AND i.NOACT = activite.NOACT → on compare si l'activité et l'inscription ont le même code
      AND i.NOACT = "'.$ID.'"' → On compare le numéro de l'activité en fonction de la valeur récupérer*/
    $res = mysqli_query($con, $req);
    $inscription = []; //Va regrouper toutes les inscriptions

    while($ligne = mysqli_fetch_assoc($res))
      array_push($inscription, $ligne);

    mysqli_close($con);
    return $inscription;
}
