<?php
include("connexion.php");
if(isset($_POST['envoyer']))
{
  $NOMANIM = $_POST['NOMANIM'];
  $CODEANIM = $_POST['CODEANIM'];
  $CODETYPEANIM = $_POST['CODETYPEANIM'];
  $DATECREATIONANIM = $_POST['DATECREATIONANIM'];
  $DATEVALIDITEANIM = $_POST['DATEVALIDITEANIM'];
  $DUREEANIM = $_POST['DUREEANIM'];
  $LIMITEAGE = $_POST['LIMITEAGE'];
  $TARIFANIM = $_POST['TARIFANIM'];
  $NBREPLACEANIM = $_POST['NBREPLACEANIM'];
  $DIFFICULTEANIM = $_POST['DIFFICULTEANIM'];
  $COMMENTANIM = $_POST['COMMENTANIM'];
  $DESCRIPTANIM = $_POST['DESCRIPTANIM'];

  $sql = "INSERT INTO animation (NOMANIM, CODEANIM, CODETYPEANIM, DATECREATIONANIM, DATEVALIDITEANIM, DUREEANIM, LIMITEAGE, TARIFANIM, NBREPLACEANIM, DIFFICULTEANIM, COMMENTANIM, DESCRIPTANIM)
  VALUES ('$NOMANIM','$CODEANIM','$CODETYPEANIM','$DATECREATIONANIM','$DATEVALIDITEANIM','$DUREEANIM','$LIMITEAGE','$TARIFANIM','$NBREPLACEANIM','$DIFFICULTEANIM','$COMMENTANIM','$DESCRIPTANIM')";
  if (mysqli_query($conn, $sql)) {
        echo "Création de l'animation dans la base de donnée";
  }
  else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
header('Location: http://vva/index.php?page=consulterAnimation');
