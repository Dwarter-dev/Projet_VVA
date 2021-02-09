<?php
include("connexion.php");
if(isset($_POST['envoyeredit']))
{
  $ID = $_POST['NOACT'];
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

  $sql = "UPDATE activite
  SET CODEANIM = '$CODEANIM', CODEETATACT = '$CODEETATACT', DATEACT = '$DATEACT', PRIXACT = '$PRIXACT', HRRDVACT = '$HRRDVACT',
  HRDEBUTACT = '$HRDEBUTACT', HRFINACT = '$HRFINACT',DATEANNULEACT = '$DATEANNULEACT', NOMRESP = '$NOMRESP', PRENOMRESP = '$PRENOMRESP'
  WHERE NOACT = $ID";
  if (mysqli_query($conn, $sql)) {
        echo "Modification de l'activité dans la base de donnée";
  }
  else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
header('Location: http://vva/index.php?page=consulterActivite');
