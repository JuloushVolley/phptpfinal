<!DOCTYPE html>
<html>
  <head>
    <title>Paanier</title>
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
      Bienvene sur le panier, ici vous allez donner le chiffre du film et on affichera votre panier. <br>
      Lorsque que vous avez fini de rentrer les films et que vous voulez les ou le supprimer aller sur la page Suppression qui sera sur le page Panier.<br>
      On affichera vos films aux fur et à mesure que vous mettiez dans votre panier et on affiche le prix totale de tous vos films choisi.<br>
    </p>
    <p>
      <form action="panier.php" method="POST" id="form1">
            <input name="id" value="id" id="f1">
            <button type="submit" name="send" id="b3">ajouter</button>
      </form>
      <br>
      <form id="form1">
      <button type="submit" id="b4"><a href="suppression.php" >Suppression</a></button>
        <br>
    </form>
    </p>
    <?php
      $db = new PDO("mysql:host=localhost;dbname=tpfinal",'root','');
      if (isset($_POST['send']))
           {
               
               $id=$_POST['id'];
            if ($id==1){
              
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"John Wick 1","type"=>"action","prix"=>"5.99"]) ;

            }
            elseif($id==2){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"John Wick 2","type"=>"action","prix"=>"5.99"]) ;

            }
            elseif($id==3){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"John Wick 3","type"=>"action","prix"=>"5.99"]) ;
            }
            elseif($id==4){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Top Gun","type"=>"action","prix"=>"5.99"]) ;
            }
            elseif($id==5){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Top Gun: Maverick","type"=>"action","prix"=>"5.99"]) ;
            }
            elseif($id==6){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Mission impossible 3","type"=>"action","prix"=>"5.99"]) ;
            }
            elseif($id==7){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Mission impossible 4","type"=>"action","prix"=>"5.99"]) ;
            }
            elseif($id==8){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Mission impossible 5","type"=>"action","prix"=>"5.99"]) ;
            }
            elseif($id==9){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Mission impossible 6","type"=>"action","prix"=>"5.99"]) ;
            }
            elseif($id==10){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Mission impossible 2","type"=>"action","prix"=>"5.99"]) ;
            }
            elseif($id==11){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"The tunnels","type"=>"drama","prix"=>"5.99"]) ;
            }
            elseif($id==12){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Deepwater","type"=>"drama","prix"=>"5.99"]) ;
            }
            elseif($id==13){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Rage aux ventre","type"=>"drama","prix"=>"5.99"]) ;
            }
            elseif($id==14){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Sully","type"=>"drama","prix"=>"5.99"]) ;
            }
            elseif($id==15){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Creed","type"=>"drama","prix"=>"5.99"]) ;
            }
            elseif($id==16){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Elvis","type"=>"drama","prix"=>"5.99"]) ;
            }
            elseif($id==17){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Horse soldier","type"=>"drama","prix"=>"5.99"]) ;
            }
            elseif($id==18){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Novembre","type"=>"drama","prix"=>"5.99"]) ;
            }
            elseif($id==19){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"1917","type"=>"drama","prix"=>"5.99"]) ;
            }
            elseif($id==20){
              $requete1="INSERT INTO panier (id,name,type,prix) VALUE (:id,:name,:type,:prix)";
              $exec1=$db->prepare($requete1);
              $exec1->execute(["id"=>$id,"name"=>"Treize vies","type"=>"drama","prix"=>"5.99"]) ;
            }
            
              $nbr=0;
              $somme=0;
              $requete='SELECT * FROM panier';
              $exec=$db->prepare($requete);
              $exec->execute() ;
              $users= $exec ->fetchall();
              foreach ($users as $user) {
                echo $user['id'];
                echo '<br>';
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