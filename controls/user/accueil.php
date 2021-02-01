<?php
if(!empty($_SESSION['TYPEPROFIL'])) {
  require('vue/user/userAccueilAdmin.php');
} else {
  require('vue/user/formConnect.html');
}
