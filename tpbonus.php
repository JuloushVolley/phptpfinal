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
                $tab=[4,3,1,2,5];
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
                $test_array = array(3, 0, 2, 5, -1, 4, 1);
              
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