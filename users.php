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
        <br/> 
        <p>
            <?php
               $db = new PDO("mysql:host=localhost;dbname=data",'root','');

            //    $requete1="INSERT INTO users (pseudo,email) VALUE (:pseudo,:email)";
            //    $exec1=$db->prepare($requete1);
            //    $exec1->execute(["pseudo"=>"alpha", "email"=>"alpha@supinfo.fr"]) ;

               $requete='SELECT * FROM users';
               $exec=$db->prepare($requete);
               $exec->execute() ;
               $users= $exec ->fetchall();

               foreach ($users as $user) {
                    echo $user['id'];
                    echo '<br>';
                    echo $user['pseudo'];
                    echo '<br>';
                    echo $user['email'];
                    echo '<br>';
                    
               };
            ?>
        </p>
    </body>
</html>