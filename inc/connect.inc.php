<?php
  // CONNECT BDD
  $sql_connect = mysql_connect($config['sql']['host'], $config['sql']['user'], $config['sql']['password']) or die("Error connecting to database.");
  mysql_select_db($config['sql']['database'], $sql_connect) or die("Couldn't select the database.");
?>