<?php
  // INCLUDES
  include('../inc/config.inc.php');
  include('../inc/connect.inc.php');
?>
<!DOCTYPE html>
<!--[if lt IE 9]>
    <script>
        document.createElement('video');
    </script>
<![endif]-->
<html>
  <head>
<!--
 _____       _                                             _     _
|  _  |     (_)                                           | |   (_)
| | | |_   _ _      ___  _ __     ___ _ __     __ _    ___| |__  _  ___   _ __   ___  _   _ _ __
| | | | | | | |    / _ \| '_ \   / _ \ '_ \   / _` |  / __| '_ \| |/ _ \ | '_ \ / _ \| | | | '__|
\ \_/ / |_| | |_  | (_) | | | | |  __/ | | | | (_| | | (__| | | | |  __/ | |_) | (_) | |_| | |
 \___/ \__,_|_( )  \___/|_| |_|  \___|_| |_|  \__,_|  \___|_| |_|_|\___| | .__/ \___/ \__,_|_|
              |/                                                         | |
                                                                         |_|
 _                                             _   _         _     _
| |                                           | | | |       (_)   | |
| |_ _ __ ___  _   ___   _____ _ __    ___ ___| |_| |_ ___   _  __| | ___  ___      ___  _ __
| __| '__/ _ \| | | \ \ / / _ \ '__|  / __/ _ \ __| __/ _ \ | |/ _` |/ _ \/ _ \    / _ \| '_ \
| |_| | | (_) | |_| |\ V /  __/ |    | (_|  __/ |_| ||  __/ | | (_| |  __/  __/_  | (_) | | | |
 \__|_|  \___/ \__,_| \_/ \___|_|     \___\___|\__|\__\___| |_|\__,_|\___|\___( )  \___/|_| |_|
                                                                              |/

              _              _                         _   _
             | |            | |                       | | | |
  __ _    ___| |_ ___    ___| |__   __ _ _ __ _ __ ___| |_| |_ ___
 / _` |  / _ \ __/ _ \  / __| '_ \ / _` | '__| '__/ _ \ __| __/ _ \
| (_| | |  __/ ||  __/ | (__| | | | (_| | |  | | |  __/ |_| ||  __/_
 \__,_|  \___|\__\___|  \___|_| |_|\__,_|_|  |_|  \___|\__|\__\___(_)

-->
    <title>C'est quand les demi-pixels ?</title>

    <base href="http://cestquandlesdemipixels.fr/">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Apple mobile status bar -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="C'est quand les demi-pixels ?">

    <!-- SEO -->
    <meta name="description" content="Les demi-pixels sont des afterworks pixelisés sur Brest et Rennes, rassemblant les amoureux des pixels une fois par mois juste avant la nidification des pixels.">
    <link rel="canonical" href="http://cestquandlesdemipixels.fr/">
    <link rel="shortlink" href="http://cestquandlesdemipixels.fr/">

    <!-- Humans -->
    <link type="text/plain" rel="author" href="http://cestquandlesdemipixels.fr/humans.txt">

    <!-- Facebook -->
    <meta property="og:site_name" content="C'est quand les demi-pixels ?">
    <meta property="og:image" content="http://cestquandlesdemipixels.fr/assets/img/favicons/favicon-196x196.png">
    <meta property="og:url" content="http://cestquandlesdemipixels.fr">
    <meta property="og:type" content="website">
    <meta property="og:title" content="C'est quand les demi-pixels ?">

    <link type="text/css" rel="stylesheet" href="dist/css/screen.css" media="screen">
    <link type="text/css" rel="stylesheet" href="dist/css/print.css" media="print">
    <script type="text/javascript" src="dist/js/lib.min.js"></script>
    <script type="text/javascript" src="dist/js/app.min.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-144x144.png">

  </head>
  <body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-54782290-1', 'auto');
      ga('send', 'pageview');

    </script>
    <div id="wrapper">
        <video id="mega-video" preload autoplay loop poster="assets/img/background.jpg">
          <source src="assets/videos/beer.mp4" type="video/mp4">
          <source src="assets/videos/beer.webm" type="video/webm">
          <source src="assets/videos/beer.ogv" type="video/ogg">
        </video>
        <div id="content">
            <div id="center">
                <img id="bottle" src="assets/img/bottle.png" width="29%" height="100%" alt="C'est quand les demi-pixels ?" />
                <div class="mobile-txt">descend cette biere pour voir les infos</div>
                <button id="what">mais c’est quoi,<br/>les demi-pixels?</button>
            </div>
            <div id="left" class="col">
              <?php
                $query = "SELECT *  FROM `informations` WHERE `id` = 'brest' LIMIT 1";
                $result = mysql_query($query);
                $row = mysql_fetch_row($result);
                $city = $row[0];
                $date = $row[1];
                $hours = $row[2];
                $place = $row[3];
                $location = $row[4];
                $newsletter_brest = $row[5];
              ?>
              <h1><?php print $city; ?></h1>
              <h3><?php print $date; ?></h3>
              <?php
                if(!empty($hours)) {
                  print '<h4>'.$hours.'</h4>';
                }
              ?>
              <h2><?php print $place; ?></h2>
              <?php
                if(!empty($location)) {
                  print '<a class="icon ico-marker" title="T\'sais pas où c\'est ?" href="'.$location.'" target="_blank"></a>';
                }
                if(!empty($newsletter_brest)) {
                  print '<a class="icon ico-calendar" title="V\'là pour te souvenir de la date !" href="'.$newsletter_brest.'"></a>';
                }
              ?>
              <a class="icon ico-twitter" title="T'veux nous suivre ?" href="https://twitter.com/demipixelsbrest" target="_blank"></a>
            </div>
            <div id="right" class="col">
              <?php
                $query = "SELECT *  FROM `informations` WHERE `id` = 'rennes' LIMIT 1";
                $result = mysql_query($query);
                $row = mysql_fetch_row($result);
                $city = $row[0];
                $date = $row[1];
                $hours = $row[2];
                $place = $row[3];
                $location = $row[4];
                $newsletter_rennes = $row[5];
                mysql_close();
              ?>
              <h1><?php print $city; ?></h1>
              <h3><?php print $date; ?></h3>
              <?php
                if(!empty($hours)) {
                  print '<h4>'.$hours.'</h4>';
                }
              ?>
              <h2><?php print $place; ?></h2>
              <?php
                if(!empty($location)) {
                  print '<a class="icon ico-marker" title="T\'sais pas où c\'est ?" href="'.$location.'" target="_blank"></a>';
                }
                if(!empty($newsletter_rennes)) {
                  print '<a class="icon ico-calendar" title="V\'là pour te souvenir de la date !" href="'.$newsletter_rennes.'"></a>';
                }
              ?>
              <a class="icon ico-twitter" title="T'veux nous suivre ?" href="https://twitter.com/lesdemipixels" target="_blank"></a>
            </div>
        </div>
        <div id="lightbox-bg"></div>
        <article>
          <h1>mais c’est quoi, les demi-pixels ?</h1>
          <p>
            C’est un rassemblement sous forme d’afterworks,<br />
            de passionné•e•s du web, du graphisme<br />
            et du digital en général
          </p>
          <p>
            Le concept est simple : se retrouver chaque mois après le travail pour parler du web autour d’un verre
          </p>
          <p>
            Nous sommes présents sur Rennes depuis 2012<br />
            et sur Brest depuis 2014
          </p>
          <p>
            N’hésitez pas à suivre nos comptes Twitter pour plus d’informations :<br />
            <a title="T'veux nous suivre ?" href="https://twitter.com/lesdemipixels" target="_blank">@lesdemipixels</a> (Rennes) et <a title="T'veux nous suivre ?" href="https://twitter.com/demipixelsbrest" target="_blank">@demipixelsbrest</a> (Brest)
          </p>
          <?php
            if(!empty($newsletter_rennes) && !empty($newsletter_brest)) {
              print '<p>Inscrivez-vous à notre newsletter pour connaître la date et le lieu du prochain rendez-vous :<br />';
              print '<a title="V\'là pour te souvenir de la date !" href="'.$newsletter_rennes.'">newsletter de Rennes</a>, <a title="V\'là pour te souvenir de la date !" href="'.$newsletter_brest.'">newsletter de Brest</a>';
            }
          ?>
          <p>
            <strong>Et surtout, ne soyez pas timide, venez nous voir !</strong>
          </p>
          <button id="close-what">ok j'ai compris</button>
        </article>
    </div>
  </body>
</html>