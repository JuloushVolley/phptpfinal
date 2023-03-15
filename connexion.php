<!DOCTYPE html>
<html>
  <head>
    <title>connexion</title>
    <meta charset="utf-8" />
   </head>
  </head>
  <body>
    <p>
      <form action="connexion.php" method="POST">
            <input name="pseudo" required>
            <input name="mdp" required>
            <button type="submit" name="send">connexion</button>
      </form>
    </p>
    <?php
            if (isset($_POST["pseudo"]) && isset($_POST["mdp"])){
               session_start();
               $pseudo=$_POST["pseudo"];
               $mdp=$_POST["mdp"];
               $erreur="";
               if (isset($_POST['send']))
               {
                  if (empty($pseudo)) {
                     $erreur = "Veuillez renter votre pseudo";
                     echo $erreur;
                  }
                  elseif(empty($mdp)) {
                     $erreur = "veuillez renter votre mot de passe";
                     echo $erreur;
                  }

                  $db=new PDO("mysql:host=localhost;dbname=tpfinal","root","");
                  $sql= $db->prepare("SELECT pseudo,mdp FROM users WHERE pseudo = ?");
                  $sql->execute([$pseudo]);
                  $hash = $sql->fetch();
                  echo $hash['mdp'];
                 
                  
                  if ($hash != 0){
                     echo "bonjour";
                     echo $mdp;
                     echo var_dump(password_verify($mdp,$hash['mdp']));
                     if (password_verify($mdp,$hash['mdp']))
                     {
                        $_SESSION["pseudo"]=$pseudo;
                        $_SESSION["mdp"]=$mdp;
                        echo $_SESSION["pseudo"];
                        echo $_SESSION["mdp"];
                        echo "conecté";
                        header("location:panier.php");
                     
                     }
                     // else{
                     //    $erreur="Mauvais pseudo ou mot de passe";
                     //    echo $erreur;
                     // }
                  }


               
             
            }
         }
            ?>
    </body>
</html>