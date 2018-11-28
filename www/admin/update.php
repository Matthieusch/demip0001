<?php
  session_start();

  // INCLUDES
  include('../../inc/config.inc.php');
  include('../../inc/connect.inc.php');

  $id = isset($_POST['id']) ? $_POST['id'] : '';
  $date = isset($_POST['date']) ? $_POST['date'] : '';
  $hours = isset($_POST['hours']) ? $_POST['hours'] : '';
  $location = isset($_POST['location']) ? $_POST['location'] : '';
  $googlemap = isset($_POST['googlemap']) ? $_POST['googlemap'] : '';
  $newsletter = isset($_POST['newsletter']) ? $_POST['newsletter'] : '';

  $query = 'UPDATE informations SET date = "'.$date.'", hours = "'.$hours.'", location = "'.$location.'", googlemap = "'.$googlemap.'", newsletter = "'.$newsletter.'" WHERE id = "'.$id.'"';
  mysqli_query($sql_connect, $query) or die(mysql_error());
  $_SESSION[$id.'_form'] = 'Yeah bitch !';
  header("Location: index.php");
  exit;
?>