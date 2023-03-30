<?php include
    ("traitement.php");
    session_start();
?>

<?php
if($_POST) {
    $email = ($_POST['email']); //Récuperer l'info du POST

    if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "L'email n'est pas valide";
        $_SESSION['Email non conforme']= "L'email n'est pas valide";
        header('location: index.php'); // Envoie le message sur la page desirée

        //ajouter session pour afficher le message sur la page
        }else{
            //On vérifie que le mail est disponible
            $req_email = $conn->prepare("SELECT email_user FROM users WHERE email_user = ?");
            $req_email->execute(array($email));
            $xemail = $req_email->fetch();
            header('location: content/inscription.php');
        }
        
    if ($xemail == true){
        echo "Cet email existe déjà";
        $_SESSION['Message email']= 'Vous avez déjà un compte, mot de passe oublié?';
        header('location: index.php'); // Afficher le message sur la page desirée et ajouter $_SESSION['Message email'] sur la page à l'emplacement choisi.
    }
}

?>