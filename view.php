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
        <form action="view.php" method="POST">
            <input name="pseudo">
            <button type="submit" name="send">inscription</button>
        </form>
        <br>
      
        <br/>

        <p>
            <?php
               $db = new PDO("mysql:host=localhost;dbname=data",'root','');
               if (isset($_POST['send']))
                    {
                        
                        $pseudo=$_POST['pseudo'];
                                       
                    
                        $requete='SELECT pseudo FROM exercice1 where pseudo = :pseudo';
                        $exec=$db->prepare($requete);
                        $exec->execute(["pseudo" => $pseudo]) ;
                        $users= $exec ->fetchall();
                    if (count($users)>0){
                            echo "le pseudo existe déja";
                            echo '<br>';
                            $requete2='SELECT * FROM exercice1 ';
                            $exec2=$db->prepare($requete2);
                            $exec2->execute() ;
                            $users2= $exec2 ->fetchall();
                            foreach ($users2 as $user2) {
                                echo $user2['pseudo'];
                                echo '<br>';
                             }
                    }
                    else{
                         echo 'il n\'existe pas  '; 
                    
                        
                    }
        };
    
            ?>
        </p>
        <p>
        <form>
            <button type="submit" id="bouton"><a href="delete.php">annuler info+</button>
            <br>
            <button type="submit" id="bouton"><a href="jour4tp.php" >info+</button>
        </form>
        </p>
    </body>
</html>