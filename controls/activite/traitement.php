<?php
include("connexion.php");
if(isset($_POST['envoyer']))
{
  $CODEANIM = $_POST['CODEANIM'];
  $CODEETATACT = $_POST['CODEETATACT'];
  $DATEACT = $_POST['DATEACT'];
  $PRIXACT = $_POST['PRIXACT'];
  $HRRDVACT = $_POST['HRRDVACT'];
  $HRDEBUTACT = $_POST['HRDEBUTACT'];
  $HRFINACT = $_POST['HRFINACT'];
  $DATEANNULEACT = $_POST['DATEANNULEACT'];
  $NOMRESP = $_POST['NOMRESP'];
  $PRENOMRESP = $_POST['PRENOMRESP'];

  $sql = "INSERT INTO activite (CODEANIM, CODEETATACT, DATEACT, PRIXACT, HRRDVACT, HRDEBUTACT, HRFINACT, DATEANNULEACT, NOMRESP, PRENOMRESP)
  VALUES ('$CODEANIM','$CODEETATACT','$DATEACT','$PRIXACT','$HRRDVACT','$HRDEBUTACT','$HRFINACT','$DATEANNULEACT','$NOMRESP','$PRENOMRESP')";
  if (mysqli_query($conn, $sql)) {
        echo "Création du profil dans la base de donnée";
  }
  else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
