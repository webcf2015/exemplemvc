<?php

/*
 * Extension pour l'admin de CommentManagerClass
 */

/**
 * Description of CommentAdminManagerClass
 *
 * @author webform
 */
class CommentAdminManagerClass extends CommentManagerClass {
    
   // contiendra la connexion ?
  /*  protected $db;
    
    public function __construct($dsn,$util,$pass,$erreur=false){
        // on se connecte en utilisant la méthode statique de ma MaPDO
        $this->db = MaPDO::getConnection($dsn,$util,$pass,$erreur);
    }*/

    

// on supprime un comment
   /* public function supComment($idsup) {
        $query = $this->db->query("DELETE FROM comment WHERE id=$idsup;");
        return $query->fetch(PDO::FETCH_OBJ);
    }*/
    
    
   // on récupère le comment à modifer 
        // on récupère toutes les comment
   /* public function recupLeComment($idmodif){
        $query = $this->db->query("SELECT * FROM comment WHERE id =$idmodif ;");
        return $query->fetch(PDO::FETCH_OBJ);
    }*/
    
    // on modifie un comment
   /* public function modifComment(CommentClass $objet, $idmodif) {
        $query = $this->db->prepare("UPDATE comment SET lenom=?, letexte=?, ladate=? WHERE id = $idmodif;");
        $query->bindValue(1, $objet->getLenom(), PDO::PARAM_STR);
        $query->bindValue(2, $objet->getLetexte(), PDO::PARAM_STR);
        $query->bindValue(3, $objet->getLadate(), PDO::PARAM_STR);
        $query->bindValue(4, $objet->getId(), PDO::PARAM_INT);
        return $query->execute();
    }*/

    
}
