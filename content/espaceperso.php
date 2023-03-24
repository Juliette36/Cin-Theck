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
        <a href="/CINETHECK/index.php"><img src="/CINETHECK/asset/img/logo.png" class="logonavbar"
                alt="CinéTheck Logo" /></a>
        <div class="bienvenue">Bienvenue Antoine</div>
        <img class="profil" src="../asset/img/profil96.png" alt="Photo">
        <div
            style="background-image: linear-gradient(to right top, #000000, #000000, #000000, #000000, #000000); font-size:36px; text-align: center; font-family: 'Raleway', Arial, sans-serif">


            <!-- ----------- ESPACE PERSO ----------- -->

            <section class="modif">
                <div class="">
                    <div class="titre">E-mail</div>
                    <div class="textblanc">test@live.fr</div>
                </div>
                <div>
                    <form action="" method="GET">
                        <input type="text" placeholder="Adresse e-mail">
                    </form>
                    <a class="textcyan clic" href="#">Modifier</a>
                </div>
            </section>
            <section class="modif">
                <div class="">
                    <div class="titre">Mot de passe</div>
                    <div class="textblanc">*********</div>
                </div>
                <div>
                    <form action="" method="GET">
                        <input type="text" placeholder="Mot de passe">
                    </form>
                    <a class="textcyan clic" href="#">Modifier</a>
                </div>
            </section>
            <section class="modif">
                <div class="">
                    <div class="titre">Pseudo</div>
                    <div class="textblanc">test36</div>
                </div>
                <div>
                    <form action="" method="GET">
                        <input type="text" placeholder="Pseudo">
                    </form>
                    <a class="textcyan clic" href="#">Modifier</a>
                </div>
            </section>
            <section class="modif">
                <div class="">
                    <div class="titre">Photo de profil</div>
                </div>
                <div>
                    <div class="imgprofil">
                        <a class="textcyan clic" href="#"><img src="/CINETHECK/asset/img/profil96p.png" alt=""></a>
                        <a class="textcyan clic" href="#"><img src="/CINETHECK/asset/img/profil96v.png" alt=""></a>
                        <a class="textcyan clic" href="#"><img src="/CINETHECK/asset/img/profil96y.png" alt=""></a>
                    </div>
                    <a class="textcyan clic" href="#">Modifier</a>
                </div>
            </section>

            <a href="/CINETHECK/content/crud.php"><button class="btncyan">Je suis administrateur/trice</button></a>

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