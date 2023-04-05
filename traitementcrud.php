
<?php

// On inclut la connexion à la base
include('traitement.php');

// On écrit notre requête
$sql = 'SELECT * FROM films';

// On prépare la requête
$films = $conn->prepare($sql);

// On exécute la requête
$films->execute();

// On stocke le résultat dans un tableau associatif
$result = $films->fetchAll(PDO::FETCH_ASSOC);

// On écrit notre requête
$sqlPays = 'SELECT * FROM pays';

// On prépare la requête
$stmtPays = $conn->prepare($sqlPays);

// On exécute la requête
$stmtPays->execute();

// On stocke le résultat dans un tableau associatif
$pays = $stmtPays->fetchAll(PDO::FETCH_ASSOC);

include('traitementsuppr.php');
?>