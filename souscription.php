<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="tpfinal.css" />
  </head>
  <body>
      <form action="souscription.php" method="POST">
                <input name="pseudo">
                <input name="mail">
                <input name="mdp">
                <input name="telephone">
                <button type="submit" name="send">inscription</button>
        </form>
        <?php
             $db = new PDO("mysql:host=localhost;dbname=tpfinal",'root','');
               if (isset($_POST['send']))
                    {
                        $pseudo=$_POST['pseudo'];
                        $mail=$_POST['mail'];
                        $mdp=password_hash($_POST['mdp'],PASSWORD_DEFAULT);
                        $telephone=$_POST['telephone'];
                    
                    
                        $requete='SELECT pseudo FROM users where pseudo = :pseudo';
                        $exec=$db->prepare($requete);
                        $exec->execute(["pseudo" => $pseudo]) ;
                        $users= $exec ->fetchall();
                    if (count($users)>0){
                            echo "le pseudo existe déja";
                    }
                    else{
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
        <form>
          <button type="submit" id="bouton1"><a href="film.php" >film</button>
            <br>
          <button type="submit" id="bouton2"><a href="panier.php">panier</button>
            <br>
          <button type="submit" id="bouton3"><a href="Accueil.html">accueil</button>
            <br>
          <button type="submit" id="bouton4"><a href="desouscription.php">desouscription</button>
    </form>
  </body>
</html>