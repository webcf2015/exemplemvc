<?php

/* 
 * Contrôleur Frontal
 */

// on prend notre fichier de config (dépendance)
require 'config/config.php';

// pour nos sessions
session_start();

/*
 * Routage vers les principaux contrôleurs
 */

// si on est simple utilisateur (pas de variable de session 'lelogin' ET qu'on essaye pas de se connecter (lien dans l'url ?connect)
if(!isset($_SESSION['lelogin'])&&!isset($_GET['connect'])){
    // appel du contrôleur spécifique
    require 'Controleurs/visiteurControler.php';
}


// si on essaye de se connecter ou que l'on se déconnecte
if(isset($_GET['connect'])||isset($_GET['deconnect'])){
    // appel du contrôleur de connexion
    require 'Controleurs/connexionControler.php';
}


// si on est connecté
if(isset($_SESSION['lelogin'])){
    // appel du contrôleur d'administration
    require 'Controleurs/adminControler.php';
}