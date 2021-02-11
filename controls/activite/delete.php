<?php
include("connexion.php");
if(isset($_POST['envoyerdelete']))
{
  $ID = intval($_GET['id']);

  $sql = "DELETE FROM activite
          WHERE NOACT = $ID";
  if (mysqli_query($conn, $sql)) {
        echo "Suppression de l'activité dans la base de donnée";
  }
  else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
header('Location: http://vva/index.php?page=consulterActivite');
/*  $ID = intval($_GET['id']);
  $DATEANNULEACT = ($_GET['DATEANNULEACT']);

  $sql = "UPDATE activite
          SET DATEANNULEACT = '$DATEANNULEACT'
          WHERE NOACT = $ID";*/
