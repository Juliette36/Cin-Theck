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
    <link rel="icon" type="image/png" sizes="32x32" href="asset/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>CinéTheck</title>
</head>

<body>

    <!-- ----------- NAVBAR ----------- -->
    <?php include('content/_navbar.php') ?>

    <!-- ----------- NAVBAR ----------- -->

    <div class="parallax-effect"></div>
    <main class="with-parallax">
        <img src="/CINETHECK/asset/img/logo.png" class="logonavbar" alt="CinéTheck Logo" />
        <div
            style="background-image: linear-gradient(to right top, #000000, #000000, #000000, #000000, #000000); font-size:36px; text-align: center; font-family: 'Raleway', Arial, sans-serif">

            <!-- ----------- INSCRIPTION ----------- -->
            <!-- ----------- CONTENU ----------- -->

            <!-- ----------- INSCRIPTION ----------- -->

            <section class="sect1">
                <div class="titre">Vos soirées comédies musicales en quelques clics</div>
                <p class="textcyan">Entrez votre adresse mail pour utiliser CinéTheck
                    <br>plus rapidement la prochaine fois</p>
                <form action="" method="GET">
                    <input type="text" placeholder="Adresse e-mail">
                    <a href="content/inscription.php"><button class="btnaubergine">Continuer</button></a>
                </form>
                <p class="textblanc">Profitez de 1 mois offert en vous inscrivant aujourd'hui !</p>
            </section>

            <!-- ----------- CONTENU ----------- -->

            <section>
                <div class="titre">Uniquement sur <strong>CinéTheck</strong></div>
                <p class="textblanc">De nouvelles comédies musicales dumonde
                    entier sont disponibles ici et nul part
                    ailleurs, retrouvez les tout de suite</p>
                <img class="imgacc" src="asset/img/accueil1.png" alt="Affiches">
            </section>

            <section>
                <div class="titre">Regardez selon vos préférences</div>
                <p class="textblanc">Toutes vos comédies musicales préférées
                    <br>pour vos soirées cinéma à la maison</p>
                <img class="imgacc" src="asset/img/accueil2.png" alt="Affiches">
            </section>

            <!-- ----------- POINTS FORTS ----------- -->

            <section class="pointsforts">
                <section class="pf">
                    <img class="imgaccueil" src="asset/img/camera.png" alt="Camera">
                    <div class="titre2">Les comédies musicales les plus rares</div>
                    <p class="textblancpf">Des films du monde entiers depuis les années 1930</p>
                </section>

                <section class="pf">
                    <img class="imgaccueil" src="asset/img/tablette.png" alt="Tablettes">
                    <div class="titre2">Regardez sur tout vos appareils</div>
                    <p class="textblancpf">Tablettes, téléphones et ordinateurs</p>
                </section>

                <section class="pf">
                    <img class="imgaccueil" src="asset/img/parents.png" alt="Contrôle parentale">
                    <div class="titre2">Regardez sur tout vos appareils</div>
                    <p class="textblancpf">Tablettes, téléphones et ordinateurs</p>
                </section>
            </section>
            <!-- ----------- FOOTER ----------- -->
            <?php
 include("content/_footer.php");
?>

        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="/asset/js/test.js"></script>

</body>

</html>