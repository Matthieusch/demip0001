<?php
  // CONNECT BDD
  $sql_connect = mysqli_connect($config['sql']['host'], $config['sql']['user'], $config['sql']['password']);

  // Vérification de la connexion
  if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
  }

  mysqli_select_db($sql_connect, $config['sql']['database']);
?>