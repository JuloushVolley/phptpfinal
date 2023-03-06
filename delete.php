<!DOCTYPE html>
<html>
    <head>
        <title>titre</title>
        <meta charset="utf-8" />
    </head>
    <form action="delete.php" method="POST">
            <input name="pseudo">
            <button type="submit">inscription</button>
        </form>
    <body>
        <p>
        Cette page contient du code HTML avec des balises PHP.
        <br/>
        <br/> 
        <p>
            <?php
               $db = new PDO("mysql:host=localhost;dbname=data",'root','');
               if (isset($_POST['pseudo'])){
                        $user=$_POST['pseudo'];
                            
                        $requete2='DELETE FROM exercice1 WHERE pseudo = :pseudo ';
                        $exec2=$db->prepare($requete2);
                        $exec2->execute(["pseudo"=>$user]) ;
                        
                        }

            ?>
            <button type="submit" id="bouton"><a href="jour4tp.php" >info+</button>
            <br>
      <button type="submit" id="bouton"><a href="view.php">voir les connexion</button>
        </p>
    </body>
</html>