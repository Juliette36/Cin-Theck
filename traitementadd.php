<?php include
    ("traitement.php");
    session_start();
// Requête pour ajouter mon film dans ma BDD -->
var_dump($_POST);
var_dump($_FILES);
    // On se place sur le bon formulaire grâce au "name" de la balise "input"
  if(isset($_POST['submit'])){
        $nom = ($_POST['nom']); // On récupère le nom
        $date = ($_POST['date']); // on récupère la date
        $synopsis = ($_POST['synopsis']); // on récupère le syno
        $affiche = ($_FILES['affiche']); // on récupère l'affiche
        $ba = ($_POST['ba']); // On récupère la ba
        $duree = $_POST['duree']; // On récupère le mot de passe 
        $note = $_POST['note']; // On récupère la note 
        $pays = $_POST['pays']; // On récupère le pays

        //  Vérification du nom
        if(empty($nom)){
            echo "Le nom ne peut pas être vide";
            $_SESSION['nomvide']= "Le nom ne peut pas être vide";;
            header('location: content/crud.php'); // Envoie le message sur la page desirée
        } 

        //  Vérification du prénom
        if(empty($date)){
            echo "La date ne peut pas être vide";
            $_SESSION['datevide']= "La date ne peut pas être vide";
            header('location: content/crud.php'); // Envoie le message sur la page desirée
        }

        if(empty($synopsis)){
            echo "Le synopsis ne peut pas être vide";
            $_SESSION['synopsisvide']= "Le synopsis ne peut pas être vide";
            header('location: content/crud.php'); // Envoie le message sur la page desirée
        }

        if(empty($affiche)){
            echo "L'affiche' ne peut pas être vide";
            $_SESSION['affichevide']= "L'affiche' ne peut pas être vide";
        }else{
            // Vérification et traitement de l'affiche
            $extension_upload = strtolower(substr(strrchr($affiche['name'], '.'), 1));
            $extensions_valides = ['jpg', 'jpeg', 'png'];
            $taille_max = 5000000; // Taille maximale (5Mo)
            $chemin_temporaire = $affiche['tmp_name'];
        
            // Vérification de l'upload du fichier
            if($affiche['error'] == UPLOAD_ERR_OK){
                // Vérification du type du fichier
                if(in_array($extension_upload, $extensions_valides)){
                    // Vérification de la taille du fichier
                    if($affiche['size'] <= $taille_max){
                        // L'upload du fichier est OK
                        $nom_nouveau_fichier = uniqid() . '.' . $extension_upload;
                        $chemin_nouveau_fichier = 'asset/img/upload/' . $nom_nouveau_fichier;
                        move_uploaded_file($chemin_temporaire, $chemin_nouveau_fichier);
        
                        // Enregistrement de l'affiche dans la base de données
                        // $req_ins = $connex->prepare('UPDATE films (img_affiche_film) VALUES (?)');
                        // $req_ins->execute([$chemin_nouveau_fichier]);
                    }else{
                        // Le fichier est trop grand
                        $erreur_fichier = "Le fichier est trop grand (taille maximale : 5Mo)";
                    }
                }else{
                    // L'extension du fichier n'est pas valide
                    $erreur_fichier = "L'extension du fichier n'est pas valide (extensions autorisées : jpg, jpeg, png)";
                }
            }else{
                // L'upload à échoué
                $erreur_fichier = "Une erreur est survenue lors du téléchargement de l'affiche";
                header('location: content/crud.php'); // Envoie le message sur la page desirée
            }
        }

        var_dump($affiche);

        if(empty($ba)){
            echo "La bande annonce ne peut pas être vide";
            $_SESSION['synopsisvide']= "La bande annonce ne peut pas être vide";
            header('location: content/crud.php'); // Envoie le message sur la page desirée
        }

        if(empty($duree)){
            echo "La durée ne peut pas être vide";
            $_SESSION['synopsisvide']= "La durée ne peut pas être vide";
            header('location: content/crud.php'); // Envoie le message sur la page desirée
        }
        if(empty($note)){
            echo "La note ne peut pas être vide";
            $_SESSION['synopsisvide']= "La note ne peut pas être vide";
            header('location: content/crud.php'); // Envoie le message sur la page desirée
        }    
    
        if(empty($pays)){
            echo "Le pays ne peut pas être vide";
            $_SESSION['synopsisvide']= "Le pays ne peut pas être vide";
           // die('location: content/crud.php'); // Envoie le message sur la page desirée
        
    }else{
            var_dump($nom);
            //On vérifie que le film est disponible
            $req_nomfilm = $conn->prepare("SELECT nom_film FROM films WHERE nom_film = :nom");
            $req_nomfilm->execute(['nom' => $nom]);
            $filmFind = $req_nomfilm->fetch();
            var_dump($filmFind);
        }

        if ($filmFind == true){
            echo "Ce film existe déjà";
            $_SESSION['filmexiste']= "Ce film existe déjà";
            header('location: content/crud.php'); // Envoie le message sur la page desirée
    
        }
      $enr = $conn->prepare("INSERT INTO films SET nom_film = ?, date_film = ?, synopsis_film = ?, img_affiche_film = ?, url_ba_film = ?, duree_film = ?, note_film = ?, id_pays = ?");
      $enr->execute([$nom, $date, $synopsis, $nom_nouveau_fichier, $ba, $duree, $note, $pays]);

        header('location: content/crud.php');
        exit;
       }