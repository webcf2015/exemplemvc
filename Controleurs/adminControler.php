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

$moi = new CommentAdminManagerClass(DB_DSN, DB_LOGIN, DB_PASS, true);


// on affiche tous les commentaires 
if (empty($_GET) && empty($_POST)) {

    // on récupère tous les comment
    $recup_tous = $moi->recupComment();

    // on appel la vue pour les afficher
    include 'Vues/adminVue.php';
}


// on teste le $_GET récupérer (clic sur supprimer
if (isset($_GET['sup']) && ctype_digit($_GET(['sup']))) {
    $idcomment = (int) $_GET(['sup']);
    if ($moi->supComment($idcomment)) {
        header("Location: ./");
    }
}





