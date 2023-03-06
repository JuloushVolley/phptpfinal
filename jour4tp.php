<!DOCTYPE html>
<html>
    <head>
        <title>titre</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <p>
        Cette page contient du code HTML avec des balises PHP.
        <br/>
        <form action="jour4tp.php" method="POST">
            <input name="email">
            <input name="pseudo">
            <input name="mdp">
            <input name="description">
            <button type="submit" name="send">inscription</button>
        </form>
        <br>
      
        <br/>

        <p>
            <?php
               $db = new PDO("mysql:host=localhost;dbname=data",'root','');
               if (isset($_POST['send']))
                    {
                        $email=$_POST['email'];
                        $pseudo=$_POST['pseudo'];
                        $mdp=password_hash($_POST['mdp'],PASSWORD_DEFAULT);
                        $description=$_POST['description'];
                    
                    
                        $requete='SELECT pseudo FROM exercice1 where pseudo = :pseudo';
                        $exec=$db->prepare($requete);
                        $exec->execute(["pseudo" => $pseudo]) ;
                        $users= $exec ->fetchall();
                    if (count($users)>0){
                            echo "le pseudo existe déja";
                    }
                    else{
                            $requete1="INSERT INTO exercice1 (email,pseudo,mdp,description) VALUE (:email,:pseudo,:mdp,:description)";
                            $exec1=$db->prepare($requete1);
                            $exec1->execute(["email"=>$email, "pseudo"=>$pseudo,"mdp"=>$mdp,"description"=>$description]) ;
                            echo 'email';
                            echo '<br>';
                            $requete2='SELECT * FROM exercice1 ';
                            $exec2=$db->prepare($requete2);
                            $exec2->execute() ;
                            $users2= $exec2 ->fetchall();
                            foreach ($users2 as $user2) {
                                echo $user2['email'];
                                echo '<br>';
                                echo $user2['pseudo'];
                                echo '<br>';
                                echo $user2['mdp'];
                                echo '<br>';
                                echo $user2['description'];
                                echo '<br>';
                             }
                    
                        
                    }
        };
    
            ?>
        </p>
        <p>
        <form>
            <button type="submit" id="bouton"><a href="delete.php">annuler info+</button>
            <br>
      <button type="submit" id="bouton"><a href="view.php">voir les connexion</button>
        </form>
        </p>
    </body>
</html>