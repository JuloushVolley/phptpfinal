<!DOCTYPE html>
<html>
    <head>
        <title>titre</title>
        <meta charset="utf-8" />
        <style>
        #form1 {
        max-width: 500px;
        margin: 0 auto;
        }
        input[name="pseudo"] {
          display: block;
          width: 100%;
          padding: 10px;
          margin-bottom: 20px;
          border: none;
          border-radius: 4px;
          background-color: #f3f3f3;
        }
        #b1 {
          display: block;
          width: 100%;
          padding: 10px;
          border: none;
          border-radius: 4px;
          background-color: #4caf50;
          color: white;
          cursor: pointer;
          font-size: 16px;
          font-weight: bold;
        }
        #b2 {
          width: 20%;
          padding: 10px;
          border: none;
          border-radius: 4px;
          background-color: #66B2FF;
          color: white;
          cursor: pointer;
          font-size: 16px;
          font-weight: bold;
          margin-right: 10px;
        }
        .button-group {
          display: flex; 
        }
      </style>
    </head>
    <form action="desouscription.php" method="POST" id="form1">
            <input name="pseudo" value="pseudo"  id="f1">
            <button type="submit" id="b1">Désinscription</button>
        </form>
    <body>
        <p>
        Cette page sert à la désinscription du site.
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
    <div class="button.group">
      <button type="submit" id="b2"><a href="film.php" >Film</button>
      <button type="submit" id="b2"><a href="connexion.php">Panier</button>
      <button type="submit" id="b2"><a href="souscription.php">Souscription</button>
      <button type="submit" id="b2"><a href="Accueil.html">Accueil</button>
     </div>                     
  </body>
</html>