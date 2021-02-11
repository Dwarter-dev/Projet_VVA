<?php
include("connexion.php");

if(isset($_POST['envoyerdelete']))
{
  $ID = intval($_GET['id']);
  $DATEANNULEACT = new DateTime();

  $sql = "UPDATE activite
          SET DATEANNULEACT = '" . $DATEANNULEACT->format('Y-m-d') . "'
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
