<?php
  // INCLUDES
  include('../../inc/config.inc.php');
  include('../../inc/connect.inc.php');
?>

<?php
  if(isset($_POST['submit'])){

    /*
    The Above code can be in a different file, then you can place include'filename.php'; instead.
    */

    //Lets search the databse for the user name and password
    //Choose some sort of password encryption, I choose sha256
    //Password function (Not In all versions of MySQL).
    $usr = mysql_real_escape_string($_POST['username']);
    $pas = hash('sha256', mysql_real_escape_string($_POST['password']));
    $sql = mysql_query("SELECT * FROM user
      WHERE username='$usr' AND
      password='$pas'
      LIMIT 1");

    if(mysql_num_rows($sql) == 1){
      $row = mysql_fetch_array($sql);
      session_start();
      $_SESSION['error'] = '';
      $_SESSION['username'] = $row['username'];
      $_SESSION['logged'] = TRUE;
      header("Location: index.php"); // Modify to go to the page you would like
      exit;
    }
    else{
      session_start();
      $_SESSION['error'] = 'Erreur de connexion !';
      header("Location: index.php");
      exit;
    }
  }
  else{    //If the form button wasn't submitted go to the index page, or login page
    header("Location: index.php");
    exit;
  }
?>