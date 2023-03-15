<!DOCTYPE html>
<html>
  <head>
    <title>inscription</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="tpfinal.css" />
    <style type="text/css">
      #form1 {
        max-width: 500px;
        margin: 0 auto;
      }
      input[name="pseudo"],
      [name="mail"],
      [name="mdp"],
      [name="telephone"] {
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
        background-color: red;
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
  <body>
      <form action="souscription.php" method="POST" id="form1">
                <input name="pseudo" value="pseudo" id="f1">
                <input name="mail"   value="mail" id="f1">
                <input name="mdp" value="mdp" id="f1">
                <input name="telephone" value="telephone" id="f1">
                <button type="submit" name="send" id="b1">inscription</button>
        </form>
        <?php
             $db = new PDO("mysql:host=localhost;dbname=tpfinal",'root','');
               if (isset($_POST['send']))
                    {
                        $pseudo=$_POST['pseudo'];
                        $mail=$_POST['mail'];
                        $mdp=$_POST['mdp'];
                        $telephone=$_POST['telephone'];
                    
                    
                        $requete='SELECT pseudo FROM users where pseudo = :pseudo';
                        $exec=$db->prepare($requete);
                        $exec->execute(["pseudo" => $pseudo]) ;
                        $users= $exec ->fetchall();
                    if (count($users)>0){
                            echo "le pseudo existe déja";
                    }
                    else{
                            $mdp=password_hash($mdp,PASSWORD_BCRYPT);
                            $requete1="INSERT INTO users (pseudo,mail,mdp,telephone) VALUE (:pseudo,:mail,:mdp,:telephone)";
                            $exec1=$db->prepare($requete1);
                            $exec1->execute(["pseudo"=>$pseudo,"mail"=>$mail,"mdp"=>$mdp,"telephone"=>$telephone]) ;
                            echo 'tous le monde';
                            echo '<br>';
                            $requete2='SELECT * FROM users ';
                            $exec2=$db->prepare($requete2);
                            $exec2->execute() ;
                            $users2= $exec2 ->fetchall();
                            foreach ($users2 as $user2) {
                                echo $user2['pseudo'];
                                echo '<br>';
                                echo $user2['mail'];
                                echo '<br>';
                                echo $user2['mdp'];
                                echo '<br>';
                                echo $user2['telephone'];
                                echo '<br>';
                             }
                    
                        
                    }
        };
    
            ?>
        <p id="p1">
          Bonjour veuilleiez renseigner vous coorodonnées.
        </p>
        <div class="button.group">
          <button type="submit" id="b2"><a href="film.php" >film</button>
          <button type="submit" id="b2"><a href="panier.php">panier</button>
          <button type="submit" id="b2"><a href="Accueil.html">accueil</button>
          <button type="submit" id="b2"><a href="desouscription.php">désinscription</button>
        </div>
  </body>
</html>