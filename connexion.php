<?php
   function pdo_connect_mysql() {
      $servername = "localhost";
      $username = "root";
      $password = "";
      
      try {
        $conn = new PDO("mysql:host=$servername;dbname=connect", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        return $conn;
      } 
      
      catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
      }
   }

?>
