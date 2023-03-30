<?php include("traitement.php");?>

<?php
session_start();
echo $_POST['nom'];
// S'il y a une session alors on ne retourne plus sur cette page//
    if (isset($_SESSION['id'])){
        header('Location: index.php');
    exit;
    }
 
    // On se place sur le bon formulaire grâce au "name" de la balise "input"
  
        $nom = htmlentities(trim($_POST['nom'])); // On récupère le nom
        $prenom = htmlentities(trim($_POST['prenom'])); // on récupère le prénom
        $age = htmlentities(trim($_POST['ages'])); // on récupère l'age'
        $pseudo = htmlentities(trim($_POST['pseudo'])); // on récupère le pseudo
        $email = htmlentities(strtolower(trim($_POST['email']))); // On récupère l'email
        $mdp = trim($_POST['mdp']); // On récupère le mot de passe 
        echo('2');
        //  Vérification du nom
        if(empty($nom)){
            echo "Le nom de l'utilisateur ne peut pas être vide";
            $_SESSION['nomvide']= "Le nom de l'utilisateur ne peut pas être vide";
            header('location: content/inscription.php'); // Envoie le message sur la page desirée
        } 

        //  Vérification du prénom
        if(empty($prenom)){
            echo "Le prénom de l'utilisateur ne peut pas être vide";
            $_SESSION['prenomvide']= "Le prénom de l'utilisateur ne peut pas être vide";
            header('location: content/inscription.php'); // Envoie le message sur la page desirée
        }

        if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "L'email n'est pas valide";
            $_SESSION['emailinvalide']= "L'email n'est pas valide";
            header('location: content/inscription.php'); // Envoie le message sur la page desirée

        }else{
            var_dump($email);
            //On vérifie que le mail est disponible
            $req_email = $conn->prepare("SELECT email_user FROM users WHERE email_user = :email");
            $req_email->execute(['email' => $email]);
            $emailFind = $req_email->fetch();
            var_dump($emailFind);
        }

        if ($emailFind == true){
            echo "Cet email existe déjà";
            $_SESSION['emailexiste']= "Cet email existe déjà";
            header('location: content/inscription.php'); // Envoie le message sur la page desirée
        }
        
        if (empty($mdp)){
            echo"Le mot de passe ne peut pas être vide"; 
            $_SESSION['mdp vide']= "Le mot de passe ne peut pas être vide";
            header('location: content/inscription.php'); // Envoie le message sur la page desirée
            echo('3');
        }else{
        $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
        }
        echo('4');
    //On insert nos données dans la table utilisateur
    $id_role = 2;
    

      $enr = $conn->prepare("INSERT INTO users SET nom_user = ?, prenom_user = ?, age_user = ?, pseudo_user = ?, email_user = ?, motdepasse_user = ?, id_role = ?");
      $enr->execute([$nom, $prenom, $age, $pseudo, $email, $mdphash, $id_role]);

        header('location: index.php');
        exit;
       

?>