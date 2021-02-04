<?php
if (isset($_SESSION['TYPEPROFIL']))
{
  if ($_SESSION['TYPEPROFIL'] === 'EN')
  {
    require('vue/user/userAccueilAdmin.php');
  }
  if ($_SESSION['TYPEPROFIL'] === 'VA')
  {
    require('vue/user/userAccueilUser.php');
  }
}
else
{
  require('vue/user/formConnect.html');
}
