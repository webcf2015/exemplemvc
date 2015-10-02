<?php

/*
 * Gestion de management de l'objet CommentClass pour l'insertion et l'affiche ( Visiteur  sans les permissions de l'admin)
 */

/**
 * Description of CommentManagerClass
 *
 * @author webform
 */
class CommentManagerClass {
    // contiendra la connexion
    protected $db;
    
    public function __construct($dsn,$util,$pass,$erreur=false){
        // on se connecte en utilisant la méthode statique de ma MaPDO
        $this->db = MaPDO::getConnection($dsn,$util,$pass,$erreur);
    }
    
    // on récupère toutes les comment
    public function recupComment(){
        $query = $this->db->query("SELECT * FROM comment ORDER BY id DESC;");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    // on insère une instance créée depuis CommentClass
    public function insertComment(CommentClass $objet) {
        $query = $this->db->prepare("INSERT INTO comment VALUES (NULL,?,?,?);");
        $query->bindValue(1,$objet->getLenom(),PDO::PARAM_STR);
        $query->bindValue(2,$objet->getLetexte(),PDO::PARAM_STR);
        $query->bindValue(3,$objet->getLadate(),PDO::PARAM_STR);
        
        return $query->execute();
    }
    
}
