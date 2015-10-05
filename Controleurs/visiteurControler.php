<?php

/* 
 * Appel des dépendances
 */

// pour la connexion PDO
require 'Modeles/maPDOClass.php';
// appel de la classe CommentClass
require 'Modeles/CommentClass.php';
// appel de la classe CommentManagerClass
require 'Modeles/CommentManagerClass.php';


// création du manager de comment qui nous connecte à la DB (avec affichage erreur)
$manager = new CommentManagerClass(DB_DSN, DB_LOGIN, DB_PASS, true);


// si il n'y a pas de variable POST, on est sur l'accueil et non connecté (voir index.php)
if(empty($_POST)){
    
    // date du jour pour le formulaire:
    $ladate = date("Y-m-d");
    
    // on récupère tous les comment
    $recup_tous = $manager->recupComment();

    
}

// si l'utilisateur a envoyé le formulaire
if(isset($_POST['tab'])){
    // création de l'instance avec vérification des champs
    $new_comment = new CommentClass($_POST['tab']);
    
    // si insertion grâce au manager de la classe qui récupère l'objet nommé CommentClass en paramètre
    if($manager->insertComment($new_comment)){
        // redirection
        header("Location: ./");
    }
    
}
 
    // on appel la vue pour les afficher
    include 'Vues/utilisateurVue.php';

