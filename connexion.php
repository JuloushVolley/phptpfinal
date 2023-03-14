<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
    <meta charset="utf-8" />
    
    <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .erreur{
            color:#CC0000;
            margin-bottom:10px;
         }
         a{
            font-size:12pt;
            color:#EE6600;
            text-decoration:none;
            font-weight:normal;
         }
         a:hover{
            text-decoration:underline;
         }
      </style>
   </head>
  </head>
  <body>
    <p>
      <form action="connexion.php" method="POST">
            <input name="pseudo">
            <input name="mdp">
            <button type="submit" name="send">connexion</button>
      </form>
    </p>
    <?php
            session_start();
            $pseudo=$_POST["pseudo"];
            $mdp=$_POST["mdp"];
            $erreur="";
            if (isset($_POST['send']))
            {
               if (empty($pseudo)) $erreur = "Veuillez renter votre pseudo";
               elseif(empty($mdp)) $erreur = "veuillez renter votre mot de passe";

               include("connexion2.php");
               $sql= $db->prepare("SELECT * FROM users WHERE pseudo = ? limit 1");
               $sql->execute([$_POST["pseudo"]]);
               $hash = $sql->fetch();

               if ($hash && password_verify($_POST["mdp"],$hash["mdp"]))
               {
                  $_SESSION["pseudo"]=$_POST["pseudo"];

                  header("location:panier.php");
                  echo "bonjour";
               }
               else{
                  $erreur="Mauvais pseudo ou mot de passe";
               }
            }
            ?>
    </body>
</html>