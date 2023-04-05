<?php
    session_start();
    include('../traitementcrud.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CINETHECK/asset/css/style.css">
    <link rel="stylesheet" href="/CINETHECK/asset/css/navbar.css">
    <link rel="stylesheet" href="/CINETHECK/asset/css/footer.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/CINETHECK/asset/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/CINETHECK/asset/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>CinéTheck</title>
</head>

<body>

    <!-- ------------- NAVBAR ------------ -->
    <?php include("_navbar.php");?>
    <!-- ----------- PARALLAXE ----------- -->
    <div class="parallax-effect"></div>
    <main class="with-parallax">
        <a class="textcyan clic" href="/CINETHECK/index.php"><img src="/CINETHECK/asset/img/logo.png" class="logonavbar"
                alt="CinéTheck Logo" /></a>
        <div
            style="background-image: linear-gradient(to right top, #000000, #000000, #000000, #000000, #000000); font-size:36px; text-align: center; font-family: 'Raleway', Arial, sans-serif">

            <!-- ----------- CONNEXION ----------- -->

            <h1 class="textblanc">Tout nos films</h1>
            <div style="overflow: auto;">
                <table class="textblanccrud">
                    <thead>
                        <tr>
                            <th class="intcrud">Nom</th>
                            <th class="intcrud">Date</th>
                            <th class="intcrud">Synopsis</th>
                            <th class="intcrud">Affiche</th>
                            <th class="intcrud">Bande annonce</th>
                            <th class="intcrud">Durée</th>
                            <th class="intcrud">Note</th>
                            <th class="intcrud">Pays</th>
                            <th class="intcrud">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
            foreach($result as $produit){
        ?>
                        <tr class="textblanccrud">
                            <td> <?= $produit['nom_film'] ?></td>
                            <td> <?= $produit['date_film'] ?></td>
                            <td> <?= $produit['synopsis_film'] ?></td>
                            <td> <?= $produit['img_affiche_film'] ?></td>
                            <td class="url"><?= $produit['url_ba_film'] ?></td>
                            <td> <?= $produit['duree_film'] ?></td>
                            <td> <?= $produit['note_film'] ?></td>
                            <td> <?= $produit['id_pays'] ?></td>
                            <td>
                                <a class="btncyancrud" href="../edits.php?id= <?= $produit['id_film'] ?>">Modifier</a> 
                                <a class="btncyancrud" href="../delete.php?id= <?= $produit['id_film'] ?>">Supprimer</a>
                            </td>
                        </tr>
                        <?php
            }
        ?>
                    </tbody>
                </table>
            </div>

            <!-- ----------- AJOUTER UN FILM ----------- -->
            <a class="btncyan" href="../add.php?id= <?= $produit['id_film'] ?>">Ajouter</a> 
            <!-- ----------- FOOTER ----------- -->
            <?php include("_footer.php");?>

        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>