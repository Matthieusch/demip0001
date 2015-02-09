<?php
  session_start();

  // INCLUDES
  include('../../inc/config.inc.php');
  include('../../inc/connect.inc.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Administration</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />

  <style type="text/css">
    .container {
      padding-top: 30px;
    }
    p {
      padding: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <?php if(!$_SESSION['logged']) : ?>
        <div class="col-sm-6 col-sm-offset-3 col-xs-12">
          <a href="http://cestquandlesdemipixels.fr" class="btn btn-warning">Retour sur le site</a>
        </div>
        <div class="col-sm-6 col-sm-offset-3 col-xs-12">
          <h1>C'est quand les demi-pixels ?</h1>
        </div>
        <div class="col-sm-6 col-sm-offset-3 col-xs-12">
          <form action="check.php" method="post">
            <div class="form-group">
              <label for="username">Identifiant :</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="L'identifiant" />
            </div>
            <div class="form-group">
              <label for="password">Mot de passe :</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Le mot de passe">
            </div>
            <?php
              if(isset($_SESSION['error'])) :
                print '<p class="bg-danger">'.$_SESSION['error'].'</p>';
                unset($_SESSION['error']);
              endif;
            ?>
            <button class="btn btn-primary" name="submit" type="submit">S'identifier</button>
          </form>
        </div>
      <?php else : ?>
        <div class="col-xs-12">
          <a href="http://cestquandlesdemipixels.fr" class="btn btn-warning">Retour sur le site</a>
          <a href="logout.php" class="btn btn-danger">Déconnecte moi !</a>
        </div>
        <div class="col-xs-12">
          <h1>C'est quand les demi-pixels ?</h1>
        </div>
        <div class="col-sm-6 col-xs-12">
          <h2 class="form-signin-heading">Brest</h2>
          <form action="update.php" method="post">
            <?php
              $query = "SELECT *  FROM `informations` WHERE `id` = 'brest' LIMIT 1";
              $result = mysql_query($query);
              $row = mysql_fetch_row ($result);
            ?>
            <div class="form-group">
              <label for="brestDate">Date :</label>
              <input type="text" class="form-control" id="brestDate" name="date" value="<?php print $row[1]; ?>" />
              <span id="helpBlock" class="help-block">Aucun caractère accentué toléré.</span>
            </div>
            <div class="form-group">
              <label for="brestHours">Heure de début :</label>
              <input type="text" class="form-control" id="brestHours" name="hours" value="<?php print $row[2]; ?>"/>
              <span id="helpBlock" class="help-block">Laisser vide pour ne pas afficher l'heure.</span>
            </div>
            <div class="form-group">
              <label for="brestLocation">Nom du bar :</label>
              <input type="text" class="form-control" id="brestLocation" name="location" value="<?php print $row[3]; ?>"/>
              <span id="helpBlock" class="help-block">Ici non plus, pas de caractère accentué.</span>
            </div>
            <div class="form-group">
              <label for="brestLatLng">Lien GoogleMap :</label>
              <input type="text" class="form-control" id="brestLatLng" name="googlemap" value="<?php print $row[4]; ?>"/>
              <span id="helpBlock" class="help-block">Laisser vide pour ne pas afficher l'icone.</span>
            </div>
            <div class="form-group">
              <label for="brestNewsletter">Lien Newsletter :</label>
              <input type="text" class="form-control" id="brestNewsletter" name="newsletter" value="<?php print $row[5]; ?>"/>
              <span id="helpBlock" class="help-block">Laisser vide pour ne pas afficher l'icone.</span>
            </div>
            <input type="hidden" name="id" value="brest" />
            <?php
              if(isset($_SESSION['brest_form'])) :
                print '<p class="bg-success">' . $_SESSION['brest_form'] . '</p>';
                unset($_SESSION['brest_form']);
                unset($_POST);
              endif;
            ?>
            <button class="btn btn-primary" name="submit" type="submit">Mettre à jour Brest !</button>
          </form>
        </div>
        <div class="col-sm-6 col-xs-12">
          <h2 class="form-signin-heading">Rennes</h2>
          <form action="update.php" method="post">
          <?php
            $query = "SELECT *  FROM `informations` WHERE `id` = 'rennes' LIMIT 1";
            $result = mysql_query($query);
            $row = mysql_fetch_row ($result);
            mysql_close();
          ?>
            <div class="form-group">
              <label for="rennesDate">Date :</label>
              <input type="text" class="form-control" id="rennesDate" name="date" value="<?php print $row[1]; ?>" />
              <span id="helpBlock" class="help-block">Toujours pas pour les caractères accentués.</span>
            </div>
            <div class="form-group">
              <label for="rennesHours">Heure de début :</label>
              <input type="text" class="form-control" id="rennesHours" name="hours" value="<?php print $row[2]; ?>"/>
              <span id="helpBlock" class="help-block">Laisser vide pour ne pas afficher l'heure.</span>
            </div>
            <div class="form-group">
              <label for="rennesLocation">Nom du bar :</label>
              <input type="text" class="form-control" id="rennesLocation" name="location" value="<?php print $row[3]; ?>" />
              <span id="helpBlock" class="help-block">On se refait pas, les caractères accentués non plus !</span>
            </div>
            <div class="form-group">
              <label for="rennesLatLng">Lien GoogleMap :</label>
              <input type="text" class="form-control" id="rennesLatLng" name="googlemap" value="<?php print $row[4]; ?>" />
              <span id="helpBlock" class="help-block">Laisser vide pour ne pas afficher l'icone.</span>
            </div>
            <div class="form-group">
              <label for="rennesNewsletter">Lien Newsletter :</label>
              <input type="text" class="form-control" id="rennesNewsletter" name="newsletter" value="<?php print $row[5]; ?>" />
              <span id="helpBlock" class="help-block">Laisser vide pour ne pas afficher l'icone.</span>
            </div>
            <input type="hidden" name="id" value="rennes" />
            <?php
              if(isset($_SESSION['rennes_form'])) :
                print '<p class="bg-success">' . $_SESSION['rennes_form'] . '</p>';
                unset($_SESSION['rennes_form']);
                unset($_POST);
              endif;
            ?>
            <button class="btn btn-primary" name="submit" type="submit">Mettre à jour Rennes !</button>
          </form>
        </div>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>