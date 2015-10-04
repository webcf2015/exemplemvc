<?php

// pour la connexion PDO
require 'Modeles/maPDOClass.php';
// appel de la classe CommentClass
require 'Modeles/CommentClass.php';
// appel de la classe CommentManagerClass
require 'Modeles/CommentManagerClass.php';
// appel de la classe UserManagerClass
require 'Modeles/UserManagerClass.php';
// appel de la classe CommentAdminManagerClass
require 'Modeles/CommentAdminManagerClass.php';

// Vérification de validité de la session
if (!isset($_SESSION['maclef']) || $_SESSION['maclef'] != session_id()) {
    // destruction de la session
    UserManagerClass::decoUser();
    header("Location: ./");
}

$manager = new CommentAdminManagerClass(DB_DSN, DB_LOGIN, DB_PASS, true);
/*var_dump($manager);*/


// on affiche tous les commentaires 
if (empty($_GET) && empty($_POST)) {

    // date du jour pour le formulaire:
    $ladate = date("Y-m-d");

    // on récupère tous les comment
    $recup_tous = $manager->recupComment();
}



// si l'admin a envoyé le formulaire
if (isset($_POST['tab'])) {
    // création de l'instance avec vérification des champs
    $new_comment = new CommentClass($_POST['tab']);

    // si insertion grâce au manager de la classe qui récupère l'objet nommé CommentClass en paramètre
    if ($manager->insertComment($new_comment)) {
        // redirection
        header("Location: ./");
    }
}


// on appel la vue pour les afficher
include 'Vues/adminVue.php';


