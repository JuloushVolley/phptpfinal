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
        <form action="jour3tp.php" method="POST">
            <input name="debut">
            <input name="fin">
            <button type="submit">Send</button>
        </form>
        <br>
        <form action="jour3tp.php" method="POST">
            <input name="nbr1">
            <input name="type">
            <input name="nbr2">
            <button type="submit">Result</button>
        </form>
        <br>
        <form action="jour3tp.php" method="POST">
            <input name="code">
        </form>
        <br>
        <form action="jour3tp.php" method="POST">
            <input name="name">
            <input name="email">
            <input name="adresse">
            <input name="telephone">
            <button type="submit">send</button>
        </form>

        <?php
            //exercice 1 2 3
            echo '<br>exercice 1 <br>';
            for ($i = $_POST['debut']; $i <= $_POST['fin']; $i++)
            {
                if ($i%3==0){
                    
                    echo 'fizz';
                    echo'<br>';
                }
                elseif($i%5==0){
                    
                    echo 'Buzz';
                    echo'<br>';
                }
                elseif($i%3==0 && $i%5==0){
                    
                    echo 'FizzBuzz';
                    echo'<br>';
                }
                else{
                    echo $i;
                    echo'<br>';
                }
            }
            echo '<br><br>exercice 2 <br>';
            
            if ($_POST['type']=='+'){
                echo $_POST['nbr1']+$_POST['nbr2'];
            }
            elseif($_POST['type']=='*'){
                echo $_POST['nbr1']*$_POST['nbr2'];
            }
            elseif($_POST['type']=='-'){
                echo $_POST['nbr1']-$_POST['nbr2'];
            }
            elseif($_POST['type']=='/'){
                echo $_POST['nbr1']/$_POST['nbr2'];
            };
            echo '<br><br>exercice 3 <br>';
            function Cesar($chaine,$choix,$pos,$mode){
                global $chaine;
                $test="abcdefghijklmnopqrstuvwxyz";
                    if($mode!="0"){$pos=-$pos;}
                    for($i=0;$i<strlen($chaine);$i++){
                        if(strpos($test, $chaine[$i]) !== false){
                        $j=strpos($test,substr($chaine,$i,1));

                            if($pos=="-1"){
                            $j -= $choix;
                            while($j<0){$j +=strlen($test);}
                            }

                            else{ 
                            $j += $choix;
                            while($j+1>strlen($test)){$j -=strlen($test);}
                            }
                    
                        $chaine[$i]=$test[$j];
                        }
                    
                    }
                    echo $chaine;
                }
                // $chaine = $_POST['code'];
                // $choix1 = /*nombre de décalage de lettres*/ 3 ;
                // $pos1 = /*sens de décallage*/ "-1" /*vers la gauche
                //              "1"  vers la droite*/ ;
                // $mode1 = "0" /*cryptage
                //     "1" decryptage*/;
                // Cesar($chaine,$choix1,$pos1,$mode1);
                /*ceci est décryptage du cryptage juste au dessus*/
                $chaine = $_POST['code'];
                $choix2 = /*nombre de décalage de lettres*/ 3 ;
                $pos2 = /*sens de décallage*/ "-1" /*vers la gauche
                             "1"  vers la droite*/ ;
                $mode2 = "1" /*cryptage
                    "1" decryptage*/;
                Cesar($chaine,$choix2,$pos2,$mode2);

            echo '<br><br>exercice 4  <br>';
            $email=$_POST['email'];
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                if (!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['adresse']) && !isset($_POST['telephone']))
                    {
                        echo 'les donnée ne sont pas bonnes <br>'; 
                    }
                    else{
                        echo 'les donnée sont bonnes <br>'; 
                    }
                echo "L'adresse e-mail est valide";
              }else{
                echo "L'adresse e-mail n'est pas valide";
              }
           
        ?>
        </p>
    </body>
</html>