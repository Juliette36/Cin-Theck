<?php
    session_start();
    include('traitementcrud.php');
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
    <?php include("content/_navbar.php");?>
    <!-- ----------- PARALLAXE ----------- -->
    <div class="parallax-effect"></div>
    <main class="with-parallax">
        <a class="textcyan clic" href="/CINETHECK/index.php"><img src="/CINETHECK/asset/img/logo.png" class="logonavbar"
                alt="CinéTheck Logo" /></a>
        <div
            style="background-image: linear-gradient(to right top, #000000, #000000, #000000, #000000, #000000); font-size:36px; text-align: center; font-family: 'Raleway', Arial, sans-serif">


            <!-- ----------- AJOUTER UN FILM ----------- -->

            <form action="/cinetheck/traitementadd.php" enctype="multipart/form-data" method="POST">
                <label for="nom"></label>
                <input placeholder="Nom" type="text" name="nom" id="nom">
                <label for="date"></label>
                <input id="date" type="text" name="date" value="yyyy-mm-dd">
                <label for="synopsis"></label>
                <input placeholder="Synopsis" type="text" name="synopsis" id="synopsis">
                <label for="affiche"></label>
                <input class="input" placeholder="Affiche" type="file" name="affiche" id="affiche">
                <label for="ba"></label>
                <input placeholder="Bande annonce" type="text" name="ba" id="ba">
                <label for="duree"></label>
                <input placeholder="Durée" type="text" name="duree" id="duree">
                <select name="note" id="note">
                    <option value="">--Sélectionnez une note--</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                <label for="pays"></label>

                <select name="pays" id="pays">
                    <option value="">--Choisissez un pays--</option>
                    <?php foreach($pays as $p)
                    { ?>
                    <option value="<?= $p['id_pays'] ?>"><?= $p['nom_pays'] ?></option>
                    <?php } ?>
                </select>

                <button name="submit" type="submit" class="btnaubergine">Enregistrer</button>
            </form>
            <!-- ----------- FOOTER ----------- -->
            <?php include("content/_footer.php");?>

        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>