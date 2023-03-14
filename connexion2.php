<?php
   try{
      $db=new PDO("mysql:host=localhost;dbname=tpfinal","root","");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>