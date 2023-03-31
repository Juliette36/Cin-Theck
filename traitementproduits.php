<?php
include('traitement.php');

$films = $conn->prepare('SELECT img_affiche_film FROM films');

$films->execute();

$filmsAll = $films->fetchAll();  // Si fetchAll on ne met pas de WHERE, si on met un WHERE juste utiliser fetch

?>