<!DOCTYPE html>
<html>
    <head>
        <title>titre</title>
        <meta charset="utf-8" />
    </head>
    <form action="delete.php" method="POST">
            <input name="e-mail">
            <button type="submit">inscription</button>
        </form>
    <body>
        <p>
        Cette page sert a les désincription du site.
        <br/>
        <br/> 
        <p>
            <?php
               $db = new PDO("mysql:host=localhost;dbname=tpfinal",'root','');
               if (isset($_POST['email'])){
                        $email=$_POST['e-mail'];
                            
                        $requete='DELETE FROM users WHERE e-mail = :e-mail ';
                        $exec=$db->prepare($requete2);
                        $exec->execute(["e-mail"=>$email]) ;
                        
                        }

            ?>
    <form>
      <button type="submit" id="bouton1"><a href="film.php" >film</button>
        <br>
      <button type="submit" id="bouton2"><a href="panier.php">panier</button>
        <br>
      <button type="submit" id="bouton3"><a href="souscription.php">souscription</button>
        <br>
      <button type="submit" id="bouton4"><a href="Accueil.html">Accueil</button>
    </form>
  </body>
</html>