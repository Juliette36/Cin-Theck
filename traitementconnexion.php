
<?php
session_start();
include 'traitement.php';
    //Lorsqu'on clique sur sur "Se connecter", ça execute l'envoie du formulaire
    if(isset($_POST['submit'])){
        var_dump($_POST);
        // Si les champs NE SONT PAS vides (!empty), on execute le code
        if(!empty($_POST['email']) && !empty($_POST['mdp'])){
            $email = htmlspecialchars(trim($_POST['email']));
            $mdp = htmlspecialchars(trim($_POST['mdp']));

            $stmt = $conn->prepare('SELECT * FROM users WHERE email_user = ?');
            $stmt->execute([$email]);
            $users = $stmt->fetch();
            $id_user = $users['id_user'];
            $id_role = $users['id_role'];

            if(password_verify($mdp, $users['motdepasse_user'])){
                $rolestmt = $conn->prepare('SELECT * FROM users WHERE id_user = ?');
                $rolestmt->execute([$id_user]);
                $role = $rolestmt->fetchAll();
                
                if($id_role == 1){
                    $_SESSION['id_roleadmin'] = $id_role;
                    $_SESSION['pseudo_user'] = $users['pseudo_user'];
                    $_SESSION['motdepasse_user'] = $_POST['mdp'];
                    $_SESSION['nom_user'] = $users['nom_user'];
                    $_SESSION['prenom_user'] = $users['prenom_user'];
                    $_SESSION['email_user'] = $_POST['email'];
                    $_SESSION['id_user'] = $users['id_user'];
                    header("Location: index.php");
                }
                elseif($id_role == 2){
                    $_SESSION['id_roleutil'] = $id_role;
                    $_SESSION['pseudo_user'] = $users['pseudo_user'];
                    $_SESSION['motdepasse_user'] = $_POST['mdp'];
                    $_SESSION['nom_user'] = $users['nom_user'];
                    $_SESSION['prenom_user'] = $users['prenom_user'];
                    $_SESSION['email_user'] = $_POST['email'];
                    $_SESSION['id_user'] = $users['id_user'];
                    header("Location: content/produits.php");
                }
            }elseif($users['email_user'] == $email && $users['motdepasse_user'] != $mdp){
                $_SESSION['message'] = 'Mot de passe incorrect';
                header("Location: content/connexion.php");
                exit();
            }else{
                $_SESSION['message'] = "Le pseudo n'existe pas ou vous n'êtes pas inscrit !";
                header("Location: content/connexion.php");
                exit();
            }
        }else{
            die("erreur");
        }
    }else{
        $_SESSION['message'] = 'Veuillez remplir tout les champs';
        header("Location: content/connexion.php");
        exit();
    }
?>