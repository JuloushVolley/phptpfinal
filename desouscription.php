<!DOCTYPE html>
<html>
    <head>
        <title>titre</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="tpfinal.css" />
    </head>
    <form action="desouscription.php" method="POST">
            <input name="pseudo">
            <button type="submit">désinscription</button>
        </form>
    <body>
        <p>
        Cette page sert a les désincription du site.
        <br/>
        <br/> 
        <p>
            <?php
                   $db = new PDO("mysql:host=localhost;dbname=tpfinal",'root','');
                   if (isset($_POST['pseudo'])){
                            $user=$_POST['pseudo'];
                                
                            $requete2='DELETE FROM users WHERE pseudo = :pseudo ';
                            $exec2=$db->prepare($requete2);
                            $exec2->execute(["pseudo"=>$user]) ;
                            
                            }

            ?>
    <form>
      <button type="submit" id="bouton1"><a href="film.php" >film</button>
        <br>
      <button type="submit" id="bouton2"><a href="connexion.php">panier</button>
        <br>
      <button type="submit" id="bouton3"><a href="souscription.php">souscription</button>
        <br>
      <button type="submit" id="bouton4"><a href="Accueil.html">Accueil</button>
    </form>
  </body>
</html>