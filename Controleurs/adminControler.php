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
if(!isset($_SESSION['maclef'])||$_SESSION['maclef']!=session_id()){
    // destruction de la session
    UserManagerClass::decoUser();
    header("Location: ./");
}

$moi = new CommentAdminManagerClass(DB_DSN, DB_LOGIN, DB_PASS, true);
var_dump($moi);

