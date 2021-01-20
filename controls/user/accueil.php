<?php
if(!empty($_SESSION['TYPEPROFIL'])) {
  require('vue/user/userAccueil.php');
} else {
  require('vue/user/formConnect.html');
}
