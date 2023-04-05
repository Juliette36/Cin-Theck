<?php
require_once('traitement.php');

if(isset($_GET['id_film']) && !empty($_GET['id_film'])){
    $id = strip_tags($_GET['id_film']);
    $sql = "DELETE FROM 'films' WHERE 'id_films'=:id";

    $query = $db->prepare($sql);

    $query->bindValue(':id_film', $id, PDO::PARAM_INT);
    $query->execute();

    header('Location: index.php');
}
?>