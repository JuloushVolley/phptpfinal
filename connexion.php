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
            <input name="mpd">
            <button type="submit" name="send">connexion</button>
      </form>
    </p>
    <?php
            session_start();
            @$pseudo=$_POST["pseudo"];
            @$mpd=$_POST["mdp"];
            @$valider=$_POST["sen"];
            $erreur="";
            if(isset($valider)){
                include("connexion2.php");
                $sel=$pdo->prepare('SELECT * from users where pseudo=? and mpd=? limit 1');
                $sel->execute(array($pseudo,$mpd));
                $tab=$sel->fetchAll();
                if(count($tab)>0){
                    $_SESSION["pseudo"]=ucfirst(strtolower($tab[0]["pseudo"])).
                    " ".strtoupper($tab[0]["pseudo"]);
                    $_SESSION["pseudo"]="oui";
                    header('location:panier.php');
                    echo ("bien jouer");
                }
                else
                    $erreur="Mauvais login ou mot de passe!";
            }
            ?>
    </body>
</html>