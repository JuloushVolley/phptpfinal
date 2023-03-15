<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="tpfinal.css" />
  </head>
  <body>
    <p id="p1">
      Bonjour madame, monsieur ,<br />
      Bienvenu sur le panier, ici vous aller donner le chiffre du film et on affichera votre panier <br>
    </p>
    <p>
      <form action="panier.php" method="POST">
            <input name="id">
            <button type="submit" name="send">ajouter</button>
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
    <form>
      <button type="submit" id="bouton1"><a href="film.php" >Film</button>
        <br>
      <button type="submit" id="bouton2"><a href="Accueil.html">Accueil</button>
        <br>
      <button type="submit" id="bouton3"><a href="souscription.php">Inscription</button>
        <br>
      <button type="submit" id="bouton4"><a href="desouscription.php">Désinscription</button>
    </form>
  </body>
</html>