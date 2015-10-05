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
    
 // pas besoin de constructeur, connexion héritée

    

// on supprime un comment
   public function supComment($idsup) {
       // protection en cas d'attaque
       $idsup = (int)$idsup;
       
        return $this->db->exec("DELETE FROM comment WHERE id=$idsup;");
        
    }
    
    
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
