<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="tpfinal.css" />
  </head>
  <body>
    <p id="p1">
      Bonjour madame, monsieur ,<br />
      Bienvenu sur le panier, ici vous aller donner le chiffre du film et on affichera votre panier au fur et à mesure<br>
    </p>
    <p>
      <form action="panier.php" method="POST">
            <input name="id">
            <button type="submit" name="send">ajouter</button>
      </form>
    </p>
    <?php
      $db = new PDO("mysql:host=localhost;dbname=tpfinal",'root','');
      if (isset($_POST['send']))
           {
               
               $id=$_POST['id'];
                              
           
               $requete='SELECT * FROM panier';
               $exec=$db->prepare($requete);
               $exec->execute() ;
               $users= $exec ->fetchall();
               foreach ($id as $ids) {
                echo $user['id'];
                echo '<br>';
                echo $user['name'];
                echo '<br>';
                echo $user['type'];
                echo '<br>';
                echo $user['prix'];
                echo '<br>';
               }
           };
    ?>
    <form>
      <button type="submit" id="bouton1"><a href="film.php" >film</button>
        <br>
      <button type="submit" id="bouton2"><a href="Accueil.html">panier</button>
        <br>
      <button type="submit" id="bouton3"><a href="souscription.php">inscription</button>
        <br>
      <button type="submit" id="bouton4"><a href="desouscription.php">désinscription</button>
    </form>
  </body>
</html>