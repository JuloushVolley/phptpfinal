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
                //exercice 4 5 6 fonction
                echo'exercice 4 <br><br>';
               $testuppercase1='bonjour monsieur, je m\'appelle julien schoeffre et je suis etudiant a supinfo.';
               function add($test){
                    $TestUpperCase1=ucwords($test);
                    echo $TestUpperCase1;

               };
               add($testuppercase1);
               echo '<br><br> exercice 5 <br><br>';
               $text='bonjour monsieur';
               function add1($text){
                 $text1=substr_count($text,'o');
                 echo $text1;
               };
               add1($text);
               

               echo'<br><br> exercice 6 <br><br>';



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
                $chaine = 'bonjour monsieur';
                $choix1 = /*nombre de décalage de lettres*/ 3 ;
                $pos1 = /*sens de décallage*/ "-1" /*vers la gauche
                             "1"  vers la droite*/ ;
                $mode1 = "0" /*cryptage
                    "1" decryptage*/;
                Cesar($chaine,$choix1,$pos1,$mode1);
                /*ceci est décryptage du cryptage juste au dessus*/
                // $chaine = 'ylkglro jlkpfbro';
                // $choix2 = /*nombre de décalage de lettres*/ 3 ;
                // $pos2 = /*sens de décallage*/ "-1" /*vers la gauche
                //              "1"  vers la droite*/ ;
                // $mode2 = "1" /*cryptage
                //     "1" decryptage*/;
                // Cesar($chaine,$choix2,$pos2,$mode2); 
            ?>
        </p>
    </body>
</html>