<?php
     $dbhost ="localhost";
     $dbname ="logan";
     $user ="root";
     $pass ="";

     try{
          $db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $user,$pass );
     } catch (PDOException $e) {
          echo $e -> getMessage();
     }    
?>