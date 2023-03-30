<?php
    session_start();
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

            <!-- ----------- LISTE FILMS ----------- -->

            <div class="favoris">
                <div class="titrefav">
                    <div><img src="/CINETHECK/asset/img/ajout.png" alt=""></div>
                    <div class="textblancfav">West Side Story</div>
                </div>
            </div>
            <div class="iframecontent">
                <iframe class="iframe" src="https://pod.ac-normandie.fr/video/34361-west-side-story/?is_iframe=true"
                    frameborder="0"></iframe>
            </div>
            <div class="btnview">
                <a class="btncyan" href="#">Regarder</a>
                <a class="btncyan" href="#">Télécharger</a>
            </div>
            <div class="syno">
                <br>
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown
                printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining
                essentially unchanged. It was popularised in the 1960s with
                the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus
                PageMaker including versions of Lorem Ipsum.
                <br>
            </div>

            <div class="avis">Avis du public</div>
            <div class="flexetoile">
                <div><img src="/CINETHECK/asset/img/etoilecyan.png" alt=""></div>
                <div><img src="/CINETHECK/asset/img/etoilecyan.png" alt=""></div>
                <div><img src="/CINETHECK/asset/img/etoilecyan.png" alt=""></div>
                <div><img src="/CINETHECK/asset/img/etoile.png" alt=""></div>
                <div><img src="/CINETHECK/asset/img/etoile.png" alt=""></div>
            </div>
            <div class="avis">Votre avis</div>
            <div class="flexetoile">
                <div><img src="/CINETHECK/asset/img/etoile.png" alt=""></div>
                <div><img src="/CINETHECK/asset/img/etoile.png" alt=""></div>
                <div><img src="/CINETHECK/asset/img/etoile.png" alt=""></div>
                <div><img src="/CINETHECK/asset/img/etoile.png" alt=""></div>
                <div><img src="/CINETHECK/asset/img/etoile.png" alt=""></div>
            </div>
            <div class="avis">Date de sortie</div>
            <div class="syno">8 Décembre 2021 (France)</div>

            <div class="avis">Réalisateur</div>
            <div class="syno">Steven Spielberg</div>

            <div class="avis">Acteurs principaux</div>

            <div class="syno">Natalie Wood</div>
            <div class="syno">Richard Beymer</div>
            <div class="syno">Russ Tamblyn</div>
            <div class="syno">Rita Moreno</div>
            <div class="syno">George Chakiris</div>

            <div class="favoris">
                <div class="titrefav">
                    <div><img src="/CINETHECK/asset/img/favoris.png" alt=""></div>
                    <div class="textblancfav">Vos favoris à regarder</div>
                </div>
            </div>
            <div class="favorisfilms">
                <img src="/CINETHECK/asset/img/phantom.jpg" alt="">
                <img src="/CINETHECK/asset/img/reefer.jpg" alt="">
                <img src="/CINETHECK/asset/img/chantons.jpg" alt="">                
            </div>

        <!-- ----------- FOOTER ----------- -->
        <?php include("_footer.php");?>

        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>