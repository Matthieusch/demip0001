<?php
  // CONNECT PORTAL BDD
  // $sql_connect_portal = mysql_connect($config['sql']['portal']['host'], $config['sql']['portal']['user'], $config['sql']['portal']['password']) or mysql_error();
  // mysql_select_db($config['sql']['portal']['database'], $sql_connect_portal);
  // CONNECT CUSTOM BDD
  $sql_connect_custom = mysql_connect($config['sql']['custom']['host'], $config['sql']['custom']['user'], $config['sql']['custom']['password']) or mysql_error();
  mysql_select_db($config['sql']['custom']['database'], $sql_connect_custom);
?>