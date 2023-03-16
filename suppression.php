<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
    <meta charset="utf-8" />
    <style>
      #form1 {
        max-width: 500px;
        margin: 0 auto;
      }
      input[name="id"]{
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
          background-color: #66B2FF;
          color: white;
          cursor: pointer;
          font-size: 16px;
          font-weight: bold;
          margin-right: 10px;
      }
      .button-group {
        display: flex; 
      }
      #b3 {
          width: 20%;
          padding: 10px;
          border: none;
          border-radius: 4px;
          background-color:green;
          color: white;
          cursor: pointer;
          font-size: 16px;
          font-weight: bold;
          margin-right: 10px;
      }

      #b4 {
          width: 25%;
          padding: 10px;
          border: none;
          border-radius: 4px;
          background-color:green;
          color: white;
          cursor: pointer;
          font-size: 16px;
          font-weight: bold;
          margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <p id="p1">
      Bonjour madame, monsieur ,<br />
      Bienvene sur la page Suppression, ici vous allez donner le chiffre du film et on le supprimera de votre panier. <br>
      Pour voir vos films il faut que vous complétez avec le mot <b>afficher</b> dans la zone de texte.<br>
    </p>
    <p>
      <form action="suppression.php" method="POST" id="form1">
            <input name="id" value="id" id="f1">
            <button type="submit" id="b4">Suppression</button>
        <br>
      </form>
      <br>
      <form id="form1">
      <button type="submit" id="b3"><a href="panier.php" >Panier</a></button>
        <br>
    </form>

    </p>
    <?php
      $db = new PDO("mysql:host=localhost;dbname=tpfinal",'root','');
      if (isset($_POST['send']))
           {
               
            $id=$_POST['id'];

            if($id>=1 && $id<=20){
              
              $requete2='DELETE FROM panier WHERE id = :id ';
              $exec2=$db->prepare($requete2);
              $exec2->execute(["id"=>$id]) ;

            }
            
            
            elseif($id == 'afficher'){
              $nbr=0;
              $somme=0;
              $requete='SELECT * FROM panier';
              $exec=$db->prepare($requete);
              $exec->execute() ;
              $users= $exec ->fetchall();
              foreach ($users as $user) {
                echo $user['name'];
                echo '<br>';
                echo $user['type'];
                echo '<br>';
                echo $user['prix'];
                echo '<br>';
                echo '<br>';
                $nbr=$nbr+1;

              }
              $somme=$nbr*5.99;
              echo "Ca vous fera ";
              echo $somme;
          }


               
           };
    ?>
    <div class="button.group">
      <button type="submit" id="b2"><a href="film.php" >Film</button>
      <button type="submit" id="b2"><a href="Accueil.html">Accueil</button>
      <button type="submit" id="b2"><a href="souscription.php">Inscription</button>
      <button type="submit" id="b2"><a href="desouscription.php">Désinscription</button>
          </div>
  </body>
</html>