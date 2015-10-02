<?php
/* 
 * Appel des dépendances
 */

// pour la connexion PDO
require 'Modeles/maPDOClass.php';
// appel de la classe UserManagerClass
require 'Modeles/UserManagerClass.php';


// si il on essaye de se déconnecter
if(isset($_GET['deconnect'])){
    // appel de la fonction static
    UserManagerClass::decoUser();
    header("Location: ./");
}


// si il a cliqué sur s'identifier
if(isset($_POST['lelogin'])){
    // création du manager de comment qui nous connecte à la DB (avec affichage erreur)
    $manager = new UserManagerClass(DB_DSN, DB_LOGIN, DB_PASS, true);
    
    $recup = $manager->verifUser($_POST['lelogin'], $_POST['lepass']);
    
    // si on trouve l'admin (un utilisateur en tout cas)
    if($recup){
        // on met ses champs en session
        $_SESSION = $recup;
        $_SESSION['maclef']=session_id(); // validité de session
        // redirection
        header("Location: ./");
    }else{ // sinon
        $erreur = "Login et/ou mot de passe incorrectes";
    }
}

// si il on essaye de se connecter
if(isset($_GET['connect'])){
    // appel de la vue
    include("Vues/connexionVue.php");
}
