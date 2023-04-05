<?php
    session_start();
    include('../traitementproduits.php');
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
        <div class="bienvenue">Bienvenue 
            <?php 
                echo $_SESSION['pseudo_user'];
            ?>
        </div>
            <nav>
                <ul>
                    <div class="flexmenu">
                        <div>
                            <li class="deroulant"><a class="btncyan" href="#">Catégories &ensp;</a>
                                <ul class="sous">
                                    <li><a href="#">Allemande</a></li>
                                    <li><a href="#">Française</a></li>
                                    <li><a href="#">Canadienne</a></li>
                                </ul>
                            </li>
                        </div>
                        <div>
                            <li class="deroulant"><a class="btncyan" href="#"> Classer &ensp;</a>
                                <ul class="sous">
                                    <li><a href="#">De_A_à_Z</a></li>
                                    <li><a href="#">Du_récent_à_l'ancien</a></li>
                                    <li><a href="#">De_l'ancien_au_récent</a></li>
                                </ul>
                            </li>
                        </div>
                    </div>
                </ul>
            </nav>

        </div>
        </div>
        <div class="textblanc favorisfilms">
        <ul>
            <?php 
                foreach($filmsAll as $film){  
            ?>
                <li>   
                <img src="/CINETHECK/asset/img/upload/<?=$film['img_affiche_film'];?>"> <br> </img>
                </li>
            <?php 
                } 
            ?>
        </ul>
        </div>
            
        <!-- ----------- FOOTER ----------- -->
        <?php include("_footer.php");?>

        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>