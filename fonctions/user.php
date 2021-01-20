<?php
require_once('lib.php');

function getUser($user, $mdp) {
    $con = mysqli_connect("localhost","root" ,"", "gacti"); // En faire une fonction à mettre dans un fichier lib.php et le require_once dans ton index

    $req =
    "
    SELECT *
    FROM compte
    WHERE USER = '$user'
    AND MDP = '$mdp'
    ";

    $res = mysqli_query($con, $req);

    if($ligne = mysqli_fetch_array($res)) {
        startSession(); // c'est comme si on déplacer la page
        $_SESSION['USER'] = $ligne['USER'];
        $_SESSION['NOMCOMPTE'] = $ligne['NOMCOMPTE'];
        $_SESSION['PRENOMCOMPTE'] = $ligne['PRENOMCOMPTE'];
        $_SESSION['DATEINSCRIP'] = $ligne['DATEINSCRIP'];
        $_SESSION['TYPEPROFIL'] = $ligne['TYPEPROFIL'];
        $_SESSION['DATEDEBSEJOUR'] = $ligne['DATEDEBSEJOUR'];
        $_SESSION['DATEFINSEJOUR'] = $ligne['DATEFINSEJOUR'];
        $_SESSION['DATENAISCOMPTE'] = $ligne['DATENAISCOMPTE'];
        $_SESSION['ADRMAILCOMPTE'] = $ligne['ADRMAILCOMPTE'];
        $_SESSION['NOTELCOMPTE'] = $ligne['NOTELCOMPTE'];
        mysqli_close($con);
        return true;
    } else {
        echo "Erreur "; // On peut appeler une vue ou un compsant bootstrap qui va renvoyer une erreur plus précise
    }

    mysqli_close($con);
    return false;
}
