<?php
require_once('traitement.php');

if(isset($_POST)){
    if(isset($_POST['id']) && !empty($_POST['id'])
        && isset($_POST['nom']) && !empty($_POST['nom'])
        && isset($_POST['date']) && !empty($_POST['date'])
        && isset($_POST['synopsis']) && !empty($_POST['synopsis'])
        && isset($_POST['affiche']) && !empty($_POST['affiche'])
        && isset($_POST['ba']) && !empty($_POST['ba'])
        && isset($_POST['duree']) && !empty($_POST['duree'])
        && isset($_POST['note']) && !empty($_POST['note'])
        && isset($_POST['id_pays']) && !empty($_POST['id_pays'])){
        $id = strip_tags($_GET['id_film']);
        $nom = strip_tags($_POST['nom']);
        $date = strip_tags($_POST['date']);
        $synopsis = strip_tags($_POST['synopsis']);
        $affiche = strip_tags($_GET['affiche']);
        $ba = strip_tags($_POST['ba']);
        $duree = strip_tags($_POST['duree']);
        $note = strip_tags($_POST['note']);
        $pays = strip_tags($_POST['pays']);

        $sql = "UPDATE 'films' SET 'nom'=:nom_film, 'date'=:date_film, 'synopsis'=:synopsis_film, 'affiche'=:img_affiche_film, 'ba'=:url_ba_film, 'duree'=:duree_film, 'note'=:note_film, 'pays'=:id_pays  WHERE 'id'=:id_film;";

        $query = $db->prepare($sql);

        $query->bindValue(':nom_film', $nom, PDO::PARAM_STR);
        $query->bindValue(':date_film', $date, PDO::PARAM_STR);
        $query->bindValue(':synopsis_film', $synopsis, PDO::PARAM_INT);
        $query->bindValue(':affiche_film', $affiche, PDO::PARAM_INT);
        $query->bindValue(':url_ba_film', $ba, PDO::PARAM_INT);
        $query->bindValue(':duree_film', $duree, PDO::PARAM_INT);
        $query->bindValue(':note_film', $note, PDO::PARAM_INT);
        $query->bindValue(':pays_film', $pays, PDO::PARAM_INT);
        $query->bindValue(':id_film', $id, PDO::PARAM_INT);

        $query->execute();

        header('Location: index.php');
    }
}

if(isset($_GET['id_film']) && !empty($_GET['id_film'])){
    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM 'films' WHERE 'id_film'=:id_film;";

    $query = $db->prepare($sql);

    $query->bindValue(':id_film', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des films</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Modifier un film</h1>
    <form method="post">
        <p>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?= $result['nom'] ?>">
        </p>
        <p>
            <label for="date">Date</label>
            <input type="text" name="date" id="date" value="<?= $result['date_film'] ?>">
        </p>
        <p>
            <label for="synopsis">Synopsis</label>
            <input type="text" name="synopsis" id="synopsis" value="<?= $result['synopsis_film'] ?>">
        </p>
        <p>
            <label for="affiche">Affiche</label>
            <input type="text" name="affiche" id="affiche" value="<?= $result['img_affiche_film'] ?>">
        </p>
        <p>
            <label for="ba">Bande annonce</label>
            <input type="text" name="ba" id="ba" value="<?= $result['url_ba_film'] ?>">
        </p>
        <p>
            <label for="duree">Durée</label>
            <input type="text" name="duree" id="duree" value="<?= $result['duree_film'] ?>">
        </p>
        <p>
            <label for="note">Note</label>
            <input type="text" name="note" id="note" value="<?= $result['note_film'] ?>">
        </p>
        <p>
            <label for="pays">Pays</label>
            <input type="text" name="pays" id="pays" value="<?= $result['id_pays'] ?>">
        </p>
        <p>
            <button name="submit" type="submit">Enregistrer</button>
        </p>
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
    </form>
</body>
</html>