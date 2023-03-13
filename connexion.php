<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="tpfinal.css" />
  </head>
  <body>
    <p>
      <form action="connexion.php" method="POST">
            <input name="pseudo">
            <input name="mpd">
            <button type="submit" name="send">connexion</button>
      </form>
    </p>
    <?php
        session_start();
        include("db.php")           
    ?>
    </body>
</html>