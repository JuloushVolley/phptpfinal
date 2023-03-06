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
                //exercice 2 3
                echo 'exercice 2';
                echo '<br>';
                
            function fact($n){ 
                $f = 1; 
                for ($i = 1; $i <= $n; $i++){ 
                $f = $f * $i; 
                } 
                return $f; 
            } 
                
            $n = rand(0,10); 
            $f = fact($n); 
            echo "La factorielle de $n est $f"; 
            
            echo '<br>exercice 3<br>';
           
            $user1=[
                    ['schoeffre','morin','laurent','valery'],
                    ['julien','antoine','erine','valeria'],
                    ];
            function ad($user1){
                for ($i = 0; $i<count($user1[1]);$i++){
                    for ($j = 0; $j< count(($user1[0]));$j++){
                        if ($i == $j){
                            echo $user1[1][$i] , $user1[0][$j];
                            echo '<br>';
                            
                        };
                    };
                };
            };
            ad($user1);
            ?>
        </p>
    </body>
</html>