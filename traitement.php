<?php
//<!-- //ONLINE

// $host = 'access830092383.webspace-data.io'; 
//  $db   = 'cinetheck';
 //$user = 'u1556434197';
// $pass = '8B8ftg2C';
// $port = "3306";
// $charset = 'utf8mb4'; -->
try {
        $host = "localhost";
        $username = "root"; 
        $password = "root";
        $db = 'cinethek';
   
        $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $conn;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
}
?>