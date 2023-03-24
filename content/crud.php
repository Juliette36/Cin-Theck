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
            <section class="formulaire">
                <div class="titre">Un probléme? Une question? Une suggestion de vos
                    <br>
                    comédies préféres? Ecrivez-nous !
                </div>
                <form class="formcontent" action="" method="GET">
                    <div><input type="text" placeholder="Adresse e-mail"></div>
                    <div><textarea class="textarea" name="" id="" cols="30" rows="10"></textarea></div>
                    <div><a href="#"><button class="btnaubergine">Envoyer</button></a></div>
                </form>
                <p class="textcyan">Merci pour votre participation à rendre
                    <br> notre CinéTheck toujours plus compléte</p>
            </section>
            <!-- ----------- FOOTER ----------- -->
            <?php include("_footer.php");?>

        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>