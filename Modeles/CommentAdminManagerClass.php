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
        $idsup = (int) $idsup;

        return $this->db->exec("DELETE FROM comment WHERE id=$idsup;");
    }

    // on récupère le comment à modifer 

    public function recupLeComment($idmodif) {
        // protection en cas d'attaque
        $idmodif = (int) $idmodif;

        $recupUn = $this->db->query("SELECT * FROM comment WHERE id =$idmodif ;");
        return $recupUn->fetch(PDO::FETCH_OBJ);
    }

    // on modifie un comment
    public function modifComment(CommentClass $objet, $idmodif) {
        // protection en cas d'attaque
        $idmodif = (int) $idmodif;

        $prepare = $this->db->prepare("UPDATE comment SET lenom=?, letexte=?, ladate=? WHERE id = $idmodif;");
        $prepare->bindValue(1, $objet->getLenom(), PDO::PARAM_STR);
        $prepare->bindValue(2, $objet->getLetexte(), PDO::PARAM_STR);
        $prepare->bindValue(3, $objet->getLadate(), PDO::PARAM_STR);
        
        return $prepare->execute();
    }

}
