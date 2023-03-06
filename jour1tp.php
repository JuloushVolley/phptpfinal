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
        <?php
       setcookie("prenom","jérôme",time()+365*24*3600, null, null, false, true);
       ?>
        <?php
            // exercice 1 2 3
            echo "exercice 1 2 3 ";
            echo"<br>";
            $firstname= ' Julien ';
            $lastname= ' Schoeffre';
            $age=18;
            $size= 1.97;
            $zipcode= 91330;
            echo "je m'appele".$firstname, $lastname." et j'ai ".$age. " ans et je mesure " .$size. " et j'habite dans la zip qui a pour code ".$zipcode.".";
            echo"<br>";
            echo"<br>";
            $booleen=-25;
            $int=12.25;
            $int2="hello 123";
            $str=123;
            $booleen1=(bool)$booleen;
            echo $booleen1;
            echo"<br>";
            $int1=(int)$int;
            echo $int1;
            echo"<br>";
            $int21=(int)$int2;
            echo $int21;
            echo"<br>";
            $str1=(string)$str;
            echo $str1;
        ?>
        </p>
        <p>
            <?php
                echo "exercice 4 5 6 ";
                echo"<br>";
                $age1=18;
                if ($age1>= 18){
                    echo "Bonjour bienvenue";
                }
                elseif ($age1 <18){
                    echo "vous ne pouver pas rentré cordialement";
                }
                echo "<br>";
                $note=15;
                switch ($note){
                    case 0: 
                        echo"0";
                    break;
                    case 1: 
                        echo"1";
                    break;
                    case 2: 
                        echo"2";
                    break;
                    case 3: 
                        echo"3";
                    break;
                    case 4: 
                        echo"4";
                    break;
                    case 5: 
                        echo"5";
                    break;
                    case 6: 
                        echo"6";
                    break;
                    case 7: 
                        echo"7";
                    break;
                    case 8: 
                        echo"8";
                    break;
                    case 9:
                        echo "9";
                    break;
                    case 10:
                        echo "10";
                    break;
                    case 11:
                        echo "11";
                    break;
                    case 12:
                        echo "12";
                    break;
                    case 13:
                        echo "13";
                    break;
                    case 14:
                        echo "14";
                    break;
                    case 15:
                        echo "15";
                    break;
                    case 16:
                        echo "16";
                    break;
                    case 17:
                        echo "17";
                    break;
                    case 18:
                        echo "18";
                    break;
                    case 19:
                        echo "19";
                    break;
                    case 20:
                        echo "20";
                    break;
                }
                echo "<br>";
                $age2=10;
                $mention=false;
                $mentionhonor=true;
                if ($age2 >= 50 && $mentionhonor==true){
                    echo "Mylord";
                }
                elseif($age2 >= 30 && $mention==true){
                    echo "Sir";
                }
                elseif($age2 < 18 && $mention==true){
                    echo "congrats";
                }
                elseif($age2 < 18 && $mention==false){
                    echo "time to work";
                }
            ?>
        </p>
        <p>
            <?php
            // exercice 7 8 9
                echo 'exercice 7 8 9 <br>';
                $use =[
                    'firstname'=> 'Julien Schoeffre',
                    'age'=>18,
                    'City'=> 'Yerres, 91330',
                ];
                echo $use['age'];
            ?>
        </p> 
        <p>
            <?php
            //exercice 10 11 12
                echo 'exercice 10 11 12 <br>';
                for ($i = 0; $i <= 20; $i++)
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
                echo '<br>';
                echo 'exercice 11';
                echo '<br>';
                $tab=[5,4,1,3,2];
                $long=count($tab);
                for($i=0; $i<$long-1; $i++) {
                    for($j=0; $j<($long-1-$i); $j++) {
                        if ($tab[$j] > $tab[$j+1] ) {
                            $temp = $tab[$j+1];
                            $tab[$j+1] = $tab[$j];
                            $tab[$j] = $temp;
                         }
                        echo var_dump($tab);
                     }
                    
                }
                echo '<br>';
                echo 'exercice 12';
                echo '<br>';
                $test_array = array(3, 0, 2, 5, -1,-58, 4, 1);
              
                for($b=0;$b<count($test_array);$b++){
                        $val = $test_array[$b];
                        $c = $b-1;
                        while($c>=0 && $test_array[$c] > $val){
                            $test_array[$c+1] = $test_array[$c];
                            $c--;
                        }
                        $test_array[$c+1] = $val;
                        echo var_dump($test_array);
                    }
                    
                
                
                

                
            ?>
        </p>
    </body>
</html>